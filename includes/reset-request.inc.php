<?

$errors = array(); 

if (isset($_POST['reset-req-submit'])) {
    require 'dbh.inc.php';

    $email = $_POST['email'];
    $sql = "SELECT Email FROM users WHERE Email=?";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        array_push($errors, "Connection failed.");
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck == 0) {
            array_push($errors, "Invalid Email Address.");
        } else {
            $selector = bin2hex(random_bytes(8));
            $token = random_bytes(32);

            $url = "www.polaris-store.epizy.com/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);
            $expires = date("U") + 1800;

            $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
            $stmt = mysqli_stmt_init($db);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                array_push($errors, "Connection failed.");
            } else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    array_push($errors, "Connection failed.");
                } else {
                    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedToken, $expires);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    mysqli_close($db);


                    $to = $email;
                    $subject = "Password Reset Instructions For Polaris Account";

                    $message = "<h5 style='text-align: center'>Password Reset Instructions</h5><br><p>Hi there.<br>Polaris received a password reset request. The link to reset your password</p>";
                    $message .= "<p>Password reset link: <br>";
                    $message .= '<a href="'. $url . '">' .$url . '</a></p>';

                    $headers = "From: Polaris <scarletstreak@polaris-store.epizy.com>\r\n";
                    $headers .= "Reply-To: scarletstreak@polaris-store.epizy.com\r\n";
                    $headers .= "Content-type: text/html\r\n";

                    mail($to, $subject, $message, $headers);
                    header("Location: ../reset-submit.php");
                }
            }
        }
    }
}
<?php 
    session_start(); 
    require '../includes/logout.inc.php';
    require '../includes/dbh.inc.php';

    $acc_id = $_SESSION['user_id'];
    $item_id = $_SESSION['item_id'];
    $query = "SELECT * FROM products WHERE id=$item_id";
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_array($results);
    $title = $row['title'];
    $image = $row['image'];
    $price = $row['price'];
    $image = str_replace("product/", "", $image);
    $image = str_replace(".", "-V.", $image);
?>
<!DOCTYPE Html>
<Html>
    <head>
        <?php require '../includes/meta.inc.php' ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel='shortcut icon' type='image/png' href='../img/favicon.png'/>
        <title><?php echo "$title" ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href='purchase.css'/>
    </head>
    <body>
        <?php
            if (isset($_SESSION['disname'])) : 
                $username = $_SESSION['disname'];
            else:
                $username = 'SIGN IN';
            endif
        ?>    
        <?php require 'header.php' ?>
        <div id="payment-box" class="product">
            <img class="img-responsive center-block" src="<?php echo "$image" ?>">
            <div class="container">
                <br><p class='title'><?php echo "$title" ?><br><br></p>
                <p style="color: #484848;" class="title alignleft">Price</p><p class="title alignright">INR ₹<?php echo "$price" ?></p> 
            </div>
            <hr>
            <div class="container">
                <p style="font-weight: bold" class="title alignleft">Your Pay</p><p class="title alignright">INR ₹<?php echo "$price" ?></p> 
            </div>
            <hr>
            <!-- PAYMENT -->
            <?php
                require '../includes/paypal.inc.php';

                if($_SESSION['paypal'] == 1) { 
            ?>
                    <script src="https://www.paypal.com/sdk/js?client-id=AYgtDHJahFfDw62unHVRFuuw8z7Qi6insOufvYH8lPqRyRffMPD3nqkpO-DybuaHfgtoC9nrWqItE0Qq&currency=INR">
                    </script>
                    <div id="paypal-button-container"></div>
                    <script>
                        paypal.Buttons({
                            createOrder: function(data, actions) {
                            return actions.order.create({
                                purchase_units: [{
                                amount: {
                                    value: '<?php echo $price ?>'
                                }
                                }]
                            });
                            },
                            onApprove: function(data, actions) {
                            return actions.order.capture().then(function(details) {
                                window.location.href = "note.php";
                            });
                            }
                        }).render('#paypal-button-container');
                    </script>
            <?php 
                } else { 
            ?>
                    <div class="product">
                        <form action="note.php" method="post" target="_self">
                            <input class="btn btn-primary btn-lg" type="submit" name="pay_now" id="pay_now" Value="CHECKOUT">
                        </form>
                    </div>
            <?php 
            }
            ?>
        </div>
    </body>
</Html>
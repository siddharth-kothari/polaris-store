<nav class="navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">POLARIS</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">STORE</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <?php if (isset($_SESSION['disname'])) : ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo strtoupper($username)." " ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="library.php">LIBRARY</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php?logout='1'">SIGN OUT</a></li>
                        </ul>
                    <?php
                        else: ?>
                            <a href="login.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;SIGN IN</a>
                    <?php endif ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
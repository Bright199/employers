<!DOCTYPE html>
<html lang="en">
<title>EMPLOYERS LOGIN</title>
<?php require_once 'header.php'; ?>

<body>

    <!-- LOGIN FORM -->
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 p-3">
                <h2>Sign up </h3>
                    <form action="functions/loginFunctions.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your name" >
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Your password">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="passwordrepeat" class="form-control" placeholder="Repeat password">
                        </div>
                        <div class="mb-3 d-grid">
                            <input type="submit" value="submit" class="sign-up-btn" name="submit"/>
                        </div>
                            <div class="container p-4">
                                <?php
                                if(isset($_GET['error'])){
                                   echo $_GET['error'];
                                }
                                ?>
                            </div>
                    </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <!--  -->





</body>

</html>
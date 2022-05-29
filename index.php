<!DOCTYPE html>
<html lang="en">
<title>EMPLOYERS | JOBS</title>
<?php require_once 'includes/header.php'?>

<body>
<nav class="small-screen-nav">
    <ul>
        <li>
            <a href="/phpvacancy/index.php" class='logo'>employer<span class='logo-s'><span>S</span></span></a>
        </li>
        <li>
            <a href="#"><span><i class="fa-solid fa-bars"></i></span></a>
        </li>
    </ul>
</nav>
<nav class="left-nav">
    <span class="close-left-nav"><i class="fa-solid fa-xmark"></i></span>
    <ul>
        <li>
            <a href="pages/login.php"><i class="fa-solid fa-address-card"></i>&nbsp;REGISTER</a>
        </li>
        <li>
            <a href="pages/register.php"><i class="fa-solid fa-user"></i>&nbsp;LOGIN</a>
        </li>
    </ul>
</nav>
<nav class="large-screen-nav">
    <a href="/phpvacancy/index.php" class='logo'>employer<span class='logo-s'><span>S</span></span></a>
    <ul>
        <li>
        <a href="pages/login.php"><i class="fa-solid fa-user"></i>&nbsp;LOGIN</a>
        </li>
        <li>
        <a href="pages/register.php"><i class="fa-solid fa-address-card"></i>&nbsp;REGISTER</a>
        </li>
    </ul>
</nav>

<!-- home and photo details -->
<section>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5 p-4 d-flex flex-column justify-content-center">
            <h1>Welcome aboard</h1>
            <p>Hire and be hired.</p>
            <div class="container find-links">
            <a href="pages/dashboard/employers/employer.php">Meet your boss &nbsp;<span><i class="fa-solid fa-angles-right"></i></span></a>
            <a href="pages/dashboard/workers/worker.php">Meet your employees &nbsp;<span><i class="fa-solid fa-angles-right"></i></span></a>
            </div>
        </div>
        <div class="col-md-5 imgContainer pt-3">
            <div class="conainter d-flex justify-content-start landing-page-image">
                <img src="assets/images/handshake.png" alt="">
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</section>
<!--  -->

<!-- <section>
    <div class="container mt-3 bg-white">
        <div class="row">
            <div class="col-md-5">
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5"></div>
        </div>
    </div>
</section> -->

<?php include_once 'pages/footer.php';?>



</body>

</html>
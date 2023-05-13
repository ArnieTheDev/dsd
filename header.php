<?php
  session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark">   
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="nav-logo" src="img/east.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="rules.php">Regler</a></li>
                <li class="nav-item"><a href="applications.php">Ansøgninger</a></li>
                <li class="nav-item"><a href="staffs.php">Staff-Team</a></li>
                <li class="nav-item"><a href="">Discord</a></li>
            </ul>
            <ul class="navbar-nav">
              <?php
                if (isset($_SESSION["username"])) {
                  ?>
                    <a href='#'><button class='signup-btn'> <?php echo $_SESSION["username"]; ?> </button></a>
                    <a href='includes/logout.inc.php'><button class='login-btn'>Log ud</button></a>
                  <?php
                } else {
                    echo "<a href='login.php'><button class='login-btn'>Login</button></a>";
                    echo "<a href='signup.php'><button class='signup-btn'>Sign Up</button></a>";
                }
              ?>
            </ul>
        </div>
    </div>
</nav>
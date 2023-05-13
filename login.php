<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b1a23e688b.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./img/east.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>East Roleplay</title>
</head>
<body>
    
    <section class="hero">

        <?php
          require_once 'header.php';
        ?>

        <h1 class="rules-h1">Login</h1>

    </section>

    <section class="login">

        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Udfyld alle felterne!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            else if ($_GET['error'] == "wronglogin") {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Ugyldigt login!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
          }
        ?>

        <form action="includes/login.inc.php" method="POST" class="signup-form">
          
            <label for="username">Email</label>
            <input type="email" name="email">

            <br>

            <label for="password">Adgangskode</label>
            <input type="password" name="password">

            <br>

            <button type="submit" name="submit">Opret Konto</button>
        </form>

    </section>

    <?php
      require_once 'footer.php';
    ?>


    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
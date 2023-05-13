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

        <h1 class="rules-h1">Ansøgninger</h1>

    </section>

    <section class="applications">

        <h1 class="application-h1" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-sine">Ingame Ansøgninger</h1>
        <div class="line"></div>

        <div class="flex-applications">

            <div class="application">
                <img src="img/politi.png" alt="Logo">
                <h1>Politi</h1>
                <button>Ansøg Nu</button>
            </div>

            <div class="application">
                <img src="img/ems.png" alt="Logo">
                <h1>Læge</h1>
                <button>Ansøg Nu</button>
            </div>

            <div class="application">
                <img src="img/mechanic.png" alt="Logo">
                <h1>Mekaniker</h1>
                <button>Ansøg Nu</button>
            </div>

            <div class="application">
                <img src="img/lawyer.png" alt="Logo">
                <h1>Advokat</h1>
                <button>Ansøg Nu</button>
            </div>

        </div>


        <h1 class="application-h1" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-sine">Outgame Ansøgninger</h1>
        <div class="line"></div>

        <div class="flex-applications">

            <div class="application">
                <img src="img/allowlist.png" alt="Logo">
                <h1>Allowlist Modtager</h1>
                <button>Ansøg Nu</button>
            </div>

            <div class="application">
                <img src="img/staff.png" alt="Logo">
                <h1>Staff</h1>
                <button>Ansøg Nu</button>
            </div>

            <div class="application">
                <img src="img/ckpk.png" alt="Logo">
                <h1>CK/PK</h1>
                <button>Ansøg Nu</button>
            </div>

            <div class="application">
                <img src="img/event.png" alt="Logo">
                <h1>Event Manager</h1>
                <button>Ansøg Nu</button>
            </div>

        </div>

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
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

        <div class="hero-text" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-sine">
            <h1>East Roleplay</h1>
            <h2>RP For dig</h2>
            <div class="little-info" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
                <p>Join East Roleplay i dag, Content RP og Amerikansk Tema</p>
            </div>
        </div>

    </section>

    <section class="info-boxes">
        <div class="boxes">
            <div class="box" data-aos="fade-up" data-aos-duration="200" data-aos-easing="ease-in-sine">
                <i class="fa-solid fa-code"></i>
                <h1>Aktiv Udvikling</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis accusamus culpa a. Commodi itaque repellendus dignissimos rerum assumenda obcaecati praesentium nostrum nihil aliquam. Atque quod assumenda quis tempora modi magni.</p>
            </div>
            <div class="box" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine">
                <i class="fa-solid fa-people-group"></i>
                <h1>Erfarne Staff</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis accusamus culpa a. Commodi itaque repellendus dignissimos rerum assumenda obcaecati praesentium nostrum nihil aliquam. Atque quod assumenda quis tempora modi magni.</p>
            </div>
            <div class="box" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
                <i class="fa-solid fa-phone-volume"></i>
                <h1>Hurtig Support</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis accusamus culpa a. Commodi itaque repellendus dignissimos rerum assumenda obcaecati praesentium nostrum nihil aliquam. Atque quod assumenda quis tempora modi magni.</p>
            </div>
            <div class="box" data-aos="fade-up" data-aos-duration="1100" data-aos-easing="ease-in-sine">
                <i class="fa-solid fa-bullhorn"></i>
                <h1>Godt Community</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis accusamus culpa a. Commodi itaque repellendus dignissimos rerum assumenda obcaecati praesentium nostrum nihil aliquam. Atque quod assumenda quis tempora modi magni.</p>
            </div>
        </div>
    </section>

    <section class="whitelist-info">
        <img src="img/sejmand.png" alt="Logo" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
        <div class="whitelist-box" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-sine">
            <h1>Få Whitelist i dag</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt veritatis maiores culpa repudiandae, unde expedita facere laboriosam quibusdam explicabo facilis!</p>
            <button>Ansøg om Whitelist</button>
        </div>
    </section>

    <section class="contact-section">

        <div class="contact-info" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-sine">
            <h1>Brug for hjælp?</h1>
            <h2>Skriv til os</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum itaque soluta dolorem dolor consequuntur suscipit? Fugit quaerat quae omnis ipsum.</p>
        </div>

        <form action="" class="contact-form">
            <label for="name">Navn</label>
            <input type="text" name="name">

            <br>

            <label for="email">Email</label>
            <input type="email" name="email">

            <br>

            <label for="discordtag">Discord Tag</label>
            <input type="text" name="discordtag">
            
            <br>

            <label for="message">Besked</label>
            <textarea name="message"></textarea>

            <br>

            <button type="submit">Send Besked</button>
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
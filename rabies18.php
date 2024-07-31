<?php
session_start();

?>

<!DOCTYPE html>
    <head>
        
        <link rel="stylesheet" href="CSS/rezerwacja.css">

        <?php
        include_once('head.php');
        ?>

    </head>
    <body>
        <header class="menu_bg">

        <?php
        include_once('header.php');
        ?>
    
        </header>
        <hr>
        <main>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <form action = "includes/booking.inc.php?jachtName=abies18" method="post">     <!-- action  -->
        <section class="rezerwacja">
            <h1>Rezerwacja</h1>
            <section class="nazwy">
                <a>Produkt</a>
                <a>Termin</a>
                <a>Cena</a>
            </section>
            <section class="dane">
                <a> ABIES 18</a>
                <?php
                include_once('calendar.php');       // Input bookingStart & bookingEnd - > it's working
                ?>
                <a> 440zł</a>
            </section>
            <section class="zaplac">             
                <button type="submit" name="submitbooking" class = "reserve">Zarezerwuj</button>   <!--   submit   -->
                <button type="button"class = "back" onclick="location.href='flota.php'">Wróć do floty</button>
            </section>
        </section>
    </form>
    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        </main>
        <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
    </body>
    
</html>
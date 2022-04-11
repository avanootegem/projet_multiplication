<?php
$titre = "Index";
require_once("header.php");
?>

<section id="index" class="vh100">
    <div class="w60 wh100">
        <p>
            Ceci est un site pour reviser vos tables de multiplication, puis tester vos connaissances.
        </p>
    </div>

    <div class="w40">
    <?php 
        table_aleatoire();
    ?>
    </div>

</section>



<?php require_once("footer.php") ?>
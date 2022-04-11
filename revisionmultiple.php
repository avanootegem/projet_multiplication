<?php
$titre = "Revision Multiple";
require_once("header.php");
?>

<section id="mulitple" class="vh100">
    <div id="block_form_multiple" class="w100">
        <form action="" method="post">
            <div>
                <?php checkbox(10) ?>
            </div>
            <input type="submit" name="form_submit" value="Valider" id="buttonmultiple">
        </form>
    </div>

    <div class="d-flex" id="groupe_tables">
    <?php 
        for($i=1; $i <= 10; $i++) {
            if(isset($_POST["table$i"])) {
                table($i); 
            }
        }
    ?>
    </div>
</section>

<?php require_once("footer.php") ?>
<?php
$titre = "Revision Simple";
require_once("header.php");
?>

<section id="simple" class="vh100">
    <form action="" method="post">
        <div id="block_form_simple" class="w20">
            <label for="selecteur">Choisissez une table :</label> <br>
            <select name="tables" id="selecteur">
                <option value="">--Selectionnez une table--</option>
                <?php option(10); ?>
            </select> <br>
            <input type="submit" name="form_submit" value="Valider" id="buttonsimple">
        </div>
    </form>

    <?php 
        if(isset($_POST['tables']) and $_POST['tables']) {
            table($_POST['tables']);
        }
    ?>
</section>

<?php require_once("footer.php") ?>
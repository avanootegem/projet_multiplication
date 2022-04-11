<?php
$titre = "Test";
require_once("header.php");
$nbr = 5;
$bonrep = 0;
?>

<section id="test" class="vh100 d-flex">
    <div id="block_test" class="d-flex">
        <div id="block_form">
            <form action="" method="post" class="all_calcul">
                <?php if (!isset($_POST['form_submit'])) {
                    creation_calcul($nbr);
                } else {
                    for ($i = 1; $i <= $nbr; $i++) {
                        $result = $_POST["result$i"];
                        $nbr1 = $_POST["nbr1calcul$i"];
                        $nbr2 = $_POST["nbr2calcul$i"];
                        echo "Le calcul était $nbr1 x $nbr2 <br>";
                        if($result != "") {
                            echo "Vous avez répondu $result <br>";
                        } else {
                            echo "Vous n'avez rien répondu <br>";
                        }

                        if ($result == $nbr1 * $nbr2) {
                            echo "Bonne réponse ;-) <br> <br>";
                            $bonrep++;

                            echo "<input type='hidden' name='result$i' id='calcul$i' value='$result'>
                        <input type='hidden' name='nbr1calcul$i' id='nbr1calcul$i' value='$nbr1'>
                        <input type='hidden' name='nbr2calcul$i' id='nbr2calcul$i' value='$nbr2'>";
                        } else {
                            echo "Mauvaise réponse.
                        Réessayez : 
                        
                        <div> <label for='calcul$i'>" . $nbr1 . " x " . $nbr2 . "</label>
                        <input type='number' name='result$i' id='calcul$i' class='all_calcul'>
                        <input type='hidden' name='nbr1calcul$i' id='nbr1calcul$i' value='$nbr1'>
                        <input type='hidden' name='nbr2calcul$i' id='nbr2calcul$i' value='$nbr2'> <br>";
                        }
                    }

                    if ($bonrep == $nbr) {
                        echo "Félicitation, vous avez eu tous juste. <br>";
                    }
                }
                if ($bonrep != $nbr) {
                    echo "<br> <input type='submit' name='form_submit' value='Valider' class='button'>
                <input type='reset' value='Vider les cellules' class='button'>";
                }
                ?>
            </form>

            <form action="test.php">
                <input type="submit" value="Reset" class="button">
            </form>
        </div>
    </div>
</section>

<?php require_once("footer.php") ?>
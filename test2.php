<?php
$titre = "Test 2";
require_once("header.php");
?>

<section id="test2" class="vh100 d-flex">
    <div class="block_form">
        <form action="" method="post" class="d-flex">
            <?php if (!isset($_POST['table']) || $_POST['table'] == "") : ?>
                <label for="table">Sélectionnez une table :<br> <span>(De 1 à 10)</span></label>
                <select name="table" id="selecteur">
                <option value="">--Selectionnez une table--</option>
                <?php option(10); ?>
            </select>
                <input type="submit" value="Valider">
            <?php elseif (!isset($_POST['reponse'])) :
                $multi = rand(1,10);
                $resultat = $multi*$_POST['table'];
                echo "<input type=hidden name=table value=$_POST[table]>
                <input type=hidden name=resultat value=$resultat>
                <label for=reponse>$_POST[table] x $multi</label>";
                ?>
                <input type=number name=reponse id=reponse>
                <input type="submit" value="Valider">
            <?php else :
                $multi = $_POST['resultat'] / $_POST['table'];
                echo "Vous avez repondu $_POST[reponse] <br>";
                if ($_POST['reponse'] == $_POST['resultat']) {
                    echo "C'est la bonne réponse. Bravo !!";
                }
                else {
                    echo "C'est la mauvaise réponse. Réessayer : <br>
                    <input type=hidden name=table value=$_POST[table]>
                    <input type=hidden name=resultat value=$_POST[resultat]>
                    <label for=reponse>$_POST[table] x $multi</label>
                    <input type=number name=reponse id=reponse>
                    <input type='submit' value='Valider'>"; 
                }    
            endif; ?>
        </form>
        <form action="test2.php">
                <input type="submit" value="Reset">
            </form>
    </div>
</section>

<?php require_once("footer.php") ?>
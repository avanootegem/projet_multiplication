<?php 

function table_aleatoire () {
    echo "<div id='block_table' class='w10 vh100'> <div id='table' class='w11'>";
    $nbr = rand(1,10);
    global $tab;

    echo "<span id='titre_table' class='w10'> Table du $nbr </span> <br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<span id='multiplication' class='w10'> <span id ='calcul' class ='w6'> $nbr x $i </span> <span id='result' class='w3'> " . $tab[$nbr][$i]  . "</span> </span> <br>";
    }

    echo "</div> </div>";
}


function table($nbr) {
    global $tab;
    echo "<div id='block_table' class='w10'> <div id='table' class='w11'>
    <span id='titre_table' class='w10'> Table du $nbr </span> <br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<span id='multiplication' class='w10'> <span id ='calcul' class ='w6'> $nbr x $i </span> <span id='result' class='w3'> " . $tab[$nbr][$i]  . "</span> </span> <br>";
    }

    echo "</div> </div>";
}

function option($nbr) {
    for($i=1; $i <= $nbr; $i++) {
        echo "<option value='$i'>Table du $i</option>";
    }
}

function checkbox($nbr) {
    for ($i = 1; $i <= $nbr; $i++) {
        if(isset($_POST["table$i"])) {
            echo "<label for='tables$i'>$i</label>
            <input type='checkbox' name='table$i' id='table$i' class='tables' value='$i' checked>";
        }
        else {
            echo "<label for='tables$i'>$i</label>
            <input type='checkbox' name='table$i' id='table$i' class='tables' value='$i'>";
        }
    }
}

function creation_calcul($nbr) {
    global $calcul, $result;
    $calcul = [[0,0]];
    $result = [0];
    for($i = 1; $i <= $nbr; $i++) {
        $a = rand(1,10);
        $b = rand(1,10);
        $c = $a*$b;
        array_push($result, $c);
        array_push($calcul, [$a, $b]);

        echo "<div> <label for='calcul$i' class='all_calcul'>". $calcul[$i][0] ." x " . $calcul[$i][1] . " = </label>
        <input type='number' name='result$i' id='calcul$i' class='all_calcul'>
        <input type='hidden' name='nbr1calcul$i' id='nbr1calcul$i' value='$a'>
        <input type='hidden' name='nbr2calcul$i' id='nbr2calcul$i' value='$b'> </div>";
    }
}
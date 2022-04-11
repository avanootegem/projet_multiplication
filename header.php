<?php
include("fonction.php");
include("tables.php");
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $titre ?> </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/head_foot.css">
    <link rel="stylesheet" href="assets/css/style_sheet.css">
    <link rel="stylesheet" href="assets/css/tables.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/revisionsimple.css">
    <link rel="stylesheet" href="assets/css/revisionmultiple.css">
    <link rel="stylesheet" href="assets/css/test.css">
    <link rel="stylesheet" href="assets/css/test2.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <script src="https://kit.fontawesome.com/00ba05901f.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="entete">
        <nav class="w100">
            <div class="w55">
                <span> Revision des multiplications </span>
            </div>
            <ul class="w45">
                <li> <a href="index.php">Index</a> </li>
                <li> <a href="revisionsimple.php">Révision Simple</a> </li>
                <li> <a href="revisionmultiple.php">Révision Multiple</a> </li>
                <li> <a href="test.php">Test</a> </li>
                <li> <a href="test2.php">Test 2</a> </li>
            </ul>
        </nav>
    </header>
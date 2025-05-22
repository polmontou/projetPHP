<?php 
    include('session-n-link.php');
    if (!isset($_SESSION['session_started']) && !$_SESSION['session_started']) {
        initCart($products);
    $_SESSION['session_started'] = true;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Marché de Kérubim </title>
    <link rel="icon" href="image/icondofus.svg">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img src="image/menuicon.png" alt="Menu Dropdown" id="header__menuLogo">
        <img src="image/icondofus.svg" alt="Logo page" id="header__pageLogo">
        <div id="header__title">Marché de Kérubim</div>
    </header>

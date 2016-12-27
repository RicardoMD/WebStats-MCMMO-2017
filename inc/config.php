<?php
// Your DB settings
$ip="localhost";
$user="root";
$pw="";
$db="serv01db";

// Don´t Change this values
$link=mysqli_connect($ip, $user, $pw, $db);


// Titles
$page_title="WebStats MCMMO"; //
$page_h1="WebStats MCMMO";
$legend_title="Check Players Statistics";
$back_title="Back";


// Skills
$total_skills="Total Skills";
$mining="Mining";
$fishing="Fishing";
$acrobatics="Acrobatics";
$woodcutting="Woodcutting";
$repair="Repair";
$unarmed="Unarmed";
$herbalism="Herbalism";
$excavation="Excavation";
$archery="Archery";
$swords="Swords";
$axes="Axes";
$alchemy="Alchemy";
$taming="Taming";


// Columns table subtitles
$col_th1="Name";
$col_th2="Level";


// Name of your logo archive
$img_logo_src="yourlogo.png";


// Don´t change this values
if (!$link) {
    echo "Conection Error" . mysqli_errno($link);
    exit();
}


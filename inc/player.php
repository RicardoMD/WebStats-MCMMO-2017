<?php
include "tables.php";
include "config.php";
echo "<html lang=\"en\">";
echo "<head>";
echo "<title>$page_title</title>";
echo "<link href='../css/bootstrap.css' rel='stylesheet'>";
echo "<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'>";
echo "<link href='../css/style.css' rel='stylesheet'>";
echo "<link href='https://fonts.googleapis.com/css?family=Lakki+Reddy' rel='stylesheet'>";
echo "</head>";
echo "<body>";
echo "<div class='logotipo' align='center'><img style='text-align: center' src='../images/".$img_logo_src."'></div>";
echo "<br/>";



header("Content-Type: text/html; charset=UTF-8", true);

if (isset($_GET['verificar'])=='verificar') {
    $player = $_GET['player'];

    if (empty($player)) {
        echo "Digite um Nick na caixa de texto.";
    } else {
        $query = "SELECT nick FROM ast_auth WHERE nick='$player'";
        $result = mysqli_query($link, $query);
        $busca = mysqli_num_rows($result);

        if ($busca > 0) {

            $tabela1 = new tabela();
            $tabela2 = new tabela();
            $tabela3 = new tabela();
            $tabela4 = new tabela();
            $tabela5 = new tabela();
            $tabela6 = new tabela();
            $tabela7 = new tabela();
            $tabela8 = new tabela();
            $tabela9 = new tabela();
            $tabela10 = new tabela();
            $tabela11 = new tabela();
            $tabela12 = new tabela();
            $tabela13 = new tabela();
            $tabela14 = new tabela();
            $tabela15 = new tabela();
            $tabela16 = new tabela();
            $tabela17 = new tabela();


            echo "<div align='center'>";
            echo "<div>";
            echo "";
            echo "</div>";
            echo "<table border='2' class='table-responsive' id='tableplayer'><thead></thead><tbody>";
            echo "<tr>";
            echo "<td rowspan='15' ><p class='nick'>Nick : $player</p><img style='padding-left: 50px; padding-top: 30px; margin-right: -120px;' src='http://www.minecraft-skin-viewer.net/3d.php?layers=true&aa=false&a=0&w=0&wt=10&abg=330&abd=40&ajg=340&ajd=20&ratio=13&format=png&login=$player&headOnly=false&displayHairs=true&randomness=309'></td>";

            $tabela2->gerarPlayerTab($taming, "SELECT mcmmo_users.user,mcmmo_skills.taming FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela3->gerarPlayerTab($mining, "SELECT mcmmo_users.user,mcmmo_skills.mining FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela4->gerarPlayerTab($woodcutting, "SELECT mcmmo_users.user,mcmmo_skills.woodcutting FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela5->gerarPlayerTab($repair, "SELECT mcmmo_users.user,mcmmo_skills.repair FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela6->gerarPlayerTab($unarmed, "SELECT mcmmo_users.user,mcmmo_skills.unarmed FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela7->gerarPlayerTab($herbalism, "SELECT mcmmo_users.user,mcmmo_skills.herbalism FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela8->gerarPlayerTab($excavation, "SELECT mcmmo_users.user,mcmmo_skills.excavation FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela9->gerarPlayerTab($archery, "SELECT mcmmo_users.user,mcmmo_skills.archery FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela10->gerarPlayerTab($swords, "SELECT mcmmo_users.user,mcmmo_skills.swords FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela11->gerarPlayerTab($axes, "SELECT mcmmo_users.user,mcmmo_skills.axes FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela12->gerarPlayerTab($acrobatics, "SELECT mcmmo_users.user,mcmmo_skills.acrobatics FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela13->gerarPlayerTab($fishing, "SELECT mcmmo_users.user,mcmmo_skills.fishing FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela14->gerarPlayerTab($alchemy, "SELECT mcmmo_users.user,mcmmo_skills.alchemy FROM mcmmo_users INNER JOIN mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "<tr>";
            $tabela15->gerarPlayerTab($total_skills, "SELECT mcmmo_users.user,( mcmmo_skills.taming + mcmmo_skills.mining
         + mcmmo_skills.woodcutting
         + mcmmo_skills.repair + mcmmo_skills.unarmed
         + mcmmo_skills.alchemy
         + mcmmo_skills.herbalism
         + mcmmo_skills.excavation
         + mcmmo_skills.archery + mcmmo_skills.swords
         + mcmmo_skills.axes + mcmmo_skills.acrobatics
         + mcmmo_skills.fishing ) AS power_total FROM mcmmo_users INNER JOIN  mcmmo_skills ON mcmmo_users.id = mcmmo_skills.user_id WHERE mcmmo_users.user='$player'");
            echo "</tbody></table>";
            echo "</div>";
            echo "</tr></table>";

        }else{
            echo "<h3> Player $player doesn´t have a registered account in this server</h3>";
        }
    }


}
echo "<br/><br/>";
echo "<div align='center'> <a class='voltar' href='../index.php'>$back_title</a></div>";
include "_footer.inc.php";
?>

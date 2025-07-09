<!-- <link rel="stylesheet" href="./php.css">
<div class="mere">
    <?php
        include 'entete.php';
    ?>
    <p>
        <?php
        $nom_site = "max";
        echo $nom_site;
        ?>
    </p>
</div> -->
<?php
$nom_site = 'les peri je vous fume';
include 'entete.php';
echo $nom_site;
//ensuite je peux ajoute mon autre fichier genre le bas koi au lieu de includ je peux utilise required ce qui me permet de stope le scripte lorsque ya une erreur 
//$sam = "le big aka 4 aka keh";//si je veux que cette valeur soit respecte je dois supprime la valeur sam qui est dans le fichier footer  
include 'footer.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contenitore">
        
    <?php
        $marca=$_POST["m"];
        $modello=$_POST["modello"];
        $stato=$_POST["stato"];
        $cilindrata=$_POST["cc"];
        $cavalli=$_POST["cavalli"];
        $anno=$_POST["anno"];
        $targa=$_POST["targa"];
        $prezzo=$_POST["prezzo"];
        $descrizione=$_POST["descrizione"];
        $ac=$_POST["ac"];
        $vm=$_POST["vm"];
        $tetto=$_POST["tetto"];
        $imp=$_POST["imp"];
    ?>
    <table>
        <tr>
            <td>
                Marca: 
            </td>

            <td>
                <?php
                echo $marca;
                echo "\n";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Modello: 
            </td>
            
            <td>
                <?php
                echo $modello ;
                echo "\n";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Stato: 
            </td>
            <td>
                <?php
                echo $stato;
                echo "\n";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Anno Costruzione: 
            </td>
            <td>
                <?php
                echo $anno;
                echo "\n";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Cilindrata: 
            </td>
            <td>
                <?php
                echo $cilindrata;
                echo "\n";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Cavalli:  
            </td>
            <td>
                <?php
                echo $cavalli;
                echo "\n";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Prezzo:  
            </td>
            <td>
                <?php
                echo $prezzo;
                echo "\n";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Targa:  
            </td>
            <td>
                <?php
                echo $targa;
                echo "\n";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Accessori: 
            </td>
            <td>
                <?php
                echo $ac;
                echo $vm;
                echo $imp;
                echo $tetto;
                echo "\n";
                ?>
            </td>
        </tr>
</table>
    <?php

    $fn = "F_AUTO.DAT";
    $file = fopen($fn, "a");



    $record = "";
    $record .= $marca;
    $record .= ";";
    $record .= $modello;
    $record .= ";";
    $record .= $stato;
    $record .= ";";
    $record .= $anno;
    $record .= ";";
    $record .= $cilindrata;
    $record .= ";";
    $record .= $cavalli;
    $record .= ";";
    $record .= $prezzo;
    $record .= ";";
    $record .= $targa;
    $record .= ";";
    $record .= $imp;
    $record .= ";";
    $record .= $vm;
    $record .= ";";
    $record .= $tetto;
    $record .= ";";
    $record .= $ac;
    $record .= ";";








    fwrite($file,$record);

    fclose($file);

    ?>
        
</body>
</html>
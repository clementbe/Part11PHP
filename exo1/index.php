<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculatrice</title>
    </head>
    <body>
        <h1>Une calculatrice en PHP</h1>
        <form action="index.php" method="post">
            <input type="text" name="chiffre1" value="0"/>
            <input type="text" name="chiffre2" value="0"/>
            <input type="submit" name="addition" value="+"/>
            <input type="submit" name="soustraction" value="-"/>
            <input type="submit" name="multiplication" value="*"/>
            <input type="submit" name="division" value="/"/>
        </form>
        <?php
        //si c'est une adition on prend les 2 chiffres et on les aditionnes.
        if (isset($_POST['addition']) && isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
            $resultat = $_POST['chiffre1'] + $_POST['chiffre2'];
        } else {
            echo 'Entrez deux nombres:';
        }
        //si c'est une soustraction on prend les 2 chiffres et on les soustrai.
        if (isset($_POST['soustraction']) && isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
            $resultat = $_POST['chiffre1'] - $_POST['chiffre2'];
        } else {
            echo 'Entrez deux nombres:';
        }
        //si c'est une multiplication on prend les 2 chiffres et on les multiplie .
        if (isset($_POST['multiplication']) && isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
            $resultat = $_POST['chiffre1'] * $_POST['chiffre2'];
        } else {
            echo 'Entrez deux nombres:';
        }
        //si c'est une division on prend les 2 chiffres et on les divise.
        if (isset($_POST['division']) && isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
            $resultat = $_POST['chiffre1'] / $_POST['chiffre2'];
        } else {
            echo 'Entrez deux nombres:';
        }
        ?>
        <p>Résultat : <?php echo $resultat; ?></p>
    </body>
</html>

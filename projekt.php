<!DOCTYPE html>
<html>
    
<head>
    <title>Novosti</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <header>
        <div class="container1">
            <h1>Novosti</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <?php
                $xml=simplexml_load_file("objave.xml");
                foreach ($xml->objava as $objava1) {
                    $imeAutora = $objava1->ime;
                    $prezimeAutora = $objava1->prezime;
                    $datum=$objava1->datum;
                    $naslov=$objava1->naslov;
                    $sadrzaj=$objava1->sadrzaj;
                    echo "<div class='objava'>";
                    echo "<h3>$naslov</h3>";
                    echo "$sadrzaj", "<br>";
                    echo "- Autor: $imeAutora $prezimeAutora", "<br>";
                    echo "- Datum objave: $datum", "<br>";
                    echo '</div>';
                }
            ?>
        </div>
    </main>
    <footer>
        <div class="container1">
            <p>XML Projekt</p>
            <p>Tehničko Veleučilište u Zagrebu</p>
        </div>
    </footer>
</body>

</html>

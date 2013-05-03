<?php

// Initialisierung der beiden Variablen als leere Strings,
// um eine Fehlermeldung in Zeile ## zu vermeiden.

$anzahl = '';
$wort   = '';

// Prüfung, ob die Indizes im GET-Array belegt sind. Wenn ja,
// werden deren Werte zugewiesen.
if ( isset($_GET['anzahl']) && isset($_GET['wort']) ) {
    $anzahl = $_GET['anzahl'];
    $wort   = $_GET['wort'];
}
?>
<!doctype html>
<html lang="de-DE">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        body {
            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h1>Tierheim</h1>

<?php

for ($i = 0; $i < $anzahl; $i++) {
    echo '<p>' . $wort . '</p>';
}

?>
<a href="parameter-per-url.php?anzahl=8&wort=Dackel">Achtmal Dackel, bitte!</a>

</body>
</html>
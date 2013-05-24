<?php

//    var_dump($_POST);

// Whitelist mit den erlaubten Werten für die Auswahl der Räume. Gute Sache,
// um jemandem das Rumspielen an der URL zu verleiden.
$rooms = array('l','k','b');

if ( isset($_POST['sendbutton']) ) {
    echo "<p>Formular wurde abgeschickt!</p>";

    // in_array() sucht die "Nadel" (1. Argument) im "Heuhaufen" (2. Argument).
    if ( !isset( $_POST['room'] ) || !in_array($_POST['room'], $rooms )) {
        echo "<p>Bitte Raum angeben!</p>";
    }

    $percentage = intval($_POST['percentage']);

    if ( empty($percentage) ||  $percentage < 0 || $percentage > 100 ) {
        echo "<p>Unzulässiger Bereich!</p>";
    }
}

?>
<!doctype html>
<html lang="de-DE">
<head>
    <meta charset="UTF-8">
    <title>Formularversand mit PHP</title>
    <style type="text/css">
        
        body {
            width: 940px;
            margin: 20px auto;
        }
        
    </style>
</head>
<body>
    <h1>Helli 2020 | Ambient Living vom Feinesten</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <fieldset>
        <legend>Helligkeit</legend>
            <p>
                <label for="percentage">Helligkeit (in Prozent)</label>
                <input type="text" name="percentage" id="percentage" />
            </p>

        </fieldset>

        <fieldset>
        <legend>Räume</legend>
            <p>
                <label for="livingroom">Wohnzimmer</label>
                <input type="radio" name="room" value="l" id="livingroom" />
            </p>

            <p>
                <label for="kitchen">Küche</label>
                <input type="radio" name="room" value="k" id="kitchen" />
            </p>

            <p>
                <label for="bedroom">Schlafzimmer</label>
                <input type="radio" name="room" value="b" id="bedroom" />
            </p>

        </fieldset>

        <input type="submit" name="send" value="Daten senden" />

    </form>
</body>
</html>
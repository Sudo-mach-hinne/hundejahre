<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Hundejahre Rechner</title>
</head>

<body>
    <h1>Hundejahre Rechner</h1>

    <!-- Formular ohne action: schickt die Daten an dieselbe Seite zurück -->
    <form method="get">
        <label>Alter des Hundes in Jahren:</label>
        <input type="number" name="alter" min="1" max="25">
        <button type="submit">Berechnen</button>
    </form>

    <?php
    // isset prüft, ob das Formular schon abgeschickt wurde,
    // sonst gäbe es beim ersten Aufruf eine Warnung, weil "alter" noch nicht existiert
    if (isset($_GET["alter"]) && $_GET["alter"] != "") {

        // Formulardaten kommen immer als String an, (int) wandelt in eine Ganzzahl um
        $alter = (int) $_GET["alter"];

        // Faustregel: 1. Jahr = 15, 2. Jahr = 24, danach ca. 5 Menschenjahre pro Hundejahr
        if ($alter == 1) {
            $menschenjahre = 15;
        } elseif ($alter == 2) {
            $menschenjahre = 24;
        } else {
            $menschenjahre = 24 + ($alter - 2) * 5;
        }

        echo "<p>Dein Hund ist " . $alter . " Jahre alt. Das sind etwa " . $menschenjahre . " Menschenjahre.</p>";

        // Lebensphase je nach Alter ausgeben
        if ($alter < 2) {
            echo "<p>Lebensphase: Junghund</p>";
        } elseif ($alter < 8) {
            echo "<p>Lebensphase: erwachsen</p>";
        } else {
            echo "<p>Lebensphase: Senior</p>";
        }
    }
    ?>
</body>

</html>
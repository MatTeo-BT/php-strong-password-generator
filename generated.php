<?php
require_once __DIR__ . '/utilities/functions.php';


if ($_GET['length'] && is_numeric($_GET['length'])) { ?>
<h1>
    La tua nuova password è:
</h1>
<pre>
        <?php
        $generatedPsw = createPassword(intval($_GET['length']), $_GET['repeatRadio'], generateCharsPool($_GET['chars'], 1, isset($_GET['numbers']), isset($_GET['symbols'])));

        echo $generatedPsw;
        ?>
    </pre>
<?php } else { ?>
<p>
    <strong>
        Parametro non valido... riprova!
    </strong>
</p>
<?php }
?>
<?php
$_SESSION['calculated'] = false;
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <fieldset>
            <label>Case Factor: </label>
            <input type="number" name="caseFactorLowerValue" id="case_factor_lower_value" placeholder="Higher Value">
            <input type="number" name="caseFactorHigherValue" id="case_factor_higher_value" placeholder="Lower Value">
            <br>
            <br>
            <label for="data_rate">Data Rate: </label>
            <input type="number" name="dataRate" id="date_rate">
            <label for="data_rate">bps</label>
            <br>
            <br>
            <label for="data_elements_per_signal_elements">Data elements per Signal element: </label>
            <input type="number" name="dataElementsPerSignalElement" id="data_elements_per_signal_elements">
            <br>
            <br>
            <input type="submit" name="convert" id="convert">
        </fieldset>
    </form>
    <?php
    session_start();
    echo 'Hello';
    if ($_SESSION['calculated'])
    {
        echo 'Signal Rate: '.$_SESSION['signalRate'];
    }
    ?>
</body>
</html>
<?php
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Signal Rate to Data Rate Converter</h1>
    <form action="dataRateCalculation.php" method="POST" style="display: inline-block;">
        <fieldset>
            <br>
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
            <br>
            <br>
        </fieldset>
    </form>
    <br>
    <?php
    session_start();
    if (isset($_SESSION['status']))
    {
        printf('Signal Rate: %s bps', $_SESSION['signalRate']);
    }
    ?>
    <br>
    <br>
    <a href="digital_rate_to_signal_rate_converter.php">Digital Rate to Signal Rate Converter</a>
</body>
</html>
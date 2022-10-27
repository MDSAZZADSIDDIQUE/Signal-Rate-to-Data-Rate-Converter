<?php
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Digital Rate to Signal Rate Converter</h1>
    <form action="signal_rate_calculation.php" method="POST" style="display: inline-block;">
        <fieldset>
            <br>
            <label>Case Factor: </label>
            <input type="number" name="caseFactorLowerValue" id="case_factor_lower_value" placeholder="Higher Value">
            <input type="number" name="caseFactorHigherValue" id="case_factor_higher_value" placeholder="Lower Value">
            <br>
            <br>
            <label for="signal_rate">Signal Rate: </label>
            <input type="number" name="signal_rate" id="signal_rate">
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
        printf('Data Rate: %s bps', $_SESSION['dataRate']);
    }
    ?>
    <br>
    <br>
    <a href="index.php">Signal Rate to Data Rate Converter</a>
</body>
</html>
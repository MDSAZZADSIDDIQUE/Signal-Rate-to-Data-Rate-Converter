<?php
session_start();
$caseFactorLowerValue = $_POST['caseFactorLowerValue'];
$caseFactorHigherValue = $_POST['caseFactorHigherValue'];
$signalRate = $_POST['signaRate'];
$dataElementsPerSignalElement = $_POST['dataElementsPerSignalElement'];
$caseFactor = ($caseFactorHigherValue - $caseFactorLowerValue) / 2;
$_SESSION['dataRate'] = (1 / $caseFactor) * $signalRate * $dataElementsPerSignalElement;
$_SESSION['status'] = true;
header('location: digital_rate_to_signal_rate_converter.php');
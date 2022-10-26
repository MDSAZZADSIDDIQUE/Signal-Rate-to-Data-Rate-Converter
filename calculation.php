<?php
$caseFactorLowerValue = $_POST['caseFactorLowerValue'];
$caseFactorHigherValue = $_POST['caseFactorHigherValue'];
$dataRate = $_POST['dataRate'];
$dataElementsPerSignalElement = $_POST['dataElementsPerSignalElement'];
$caseFactor = ($caseFactorHigherValue - $caseFactorLowerValue) / 2;
$SESSION['signalRate'] = $caseFactor * $dataRate * (1 / $dataElementsPerSignalElement);
session_start();
$_SESSION['calculated'] = true;
header('location: index.php');
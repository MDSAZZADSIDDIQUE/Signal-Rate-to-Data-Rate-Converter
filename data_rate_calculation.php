<?php
session_start();
$caseFactorLowerValue = $_POST['caseFactorLowerValue'];
$caseFactorHigherValue = $_POST['caseFactorHigherValue'];
$dataRate = $_POST['dataRate'];
$dataElementsPerSignalElement = $_POST['dataElementsPerSignalElement'];
$caseFactor = ($caseFactorHigherValue - $caseFactorLowerValue) / 2;
$_SESSION['signalRate'] = $caseFactor * $dataRate * (1 / $dataElementsPerSignalElement);
$_SESSION['status'] = true;
header('location: index.php');
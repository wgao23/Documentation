<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'TrueStrengthIndex';
$helperName = 'TSI';
$helperArguments = 'symbol, 25, 13, 7, MovingAverageType.Exponential';
$properties = array("Signal");
$pyProperties = array("signal");
$otherProperties = array();
$otherPyProperties = array();
$updateParameterType = 'time/number pair or an <code>IndicatorDataPoint</code>';
$constructorArguments = '25, 13, 7, MovingAverageType.Exponential';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'true-strength-index';
$isOptionIndicator = false;
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
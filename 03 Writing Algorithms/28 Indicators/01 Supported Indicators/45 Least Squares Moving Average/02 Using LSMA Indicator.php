<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'LeastSquaresMovingAverage';
$helperName = 'LSMA';
$helperArguments = 'symbol, 20';
$properties = array("intercept","slope","current","previous","window","item");
$otherProperties = array("warm_up_period","period","is_ready","name","samples");
$updateParameterType = 'time/number pair or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'least-squares-moving-average';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
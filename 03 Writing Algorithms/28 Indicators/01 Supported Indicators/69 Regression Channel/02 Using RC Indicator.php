<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'RegressionChannel';
$helperName = 'RC';
$helperArguments = 'symbol, 20, 2';
$properties = array("linear_regression","upper_channel","lower_channel","intercept","slope","current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","name","samples");
$updateParameterType = 'time/number pair or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20, 2';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'regression-channel';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
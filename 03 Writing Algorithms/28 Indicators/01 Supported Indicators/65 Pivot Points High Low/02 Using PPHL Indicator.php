<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'PivotPointsHighLow';
$helperName = 'PPHL';
$helperArguments = 'symbol, 10, 10, 100';
$properties = array("current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","name","samples");
$updateParameterType = 'time/number pair or an <code>IndicatorDataPoint</code>';
$constructorArguments = '10, 10, 100';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'pivot-points-high-low';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
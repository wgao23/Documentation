<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'FilteredIdentity';
$helperName = 'FilteredIdentity';
$helperArguments = 'symbol, filter = lambda x: x.Close > x.Open';
$properties = array();
$otherProperties = array();
$updateParameterType = 'time/number pair or an <code>IndicatorDataPoint</code>';
$constructorArguments = '"SPY", filter = lambda x: x.Close > x.Open';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'filtered-identity';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
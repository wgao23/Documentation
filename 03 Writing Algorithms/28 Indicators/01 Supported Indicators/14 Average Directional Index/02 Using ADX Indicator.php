<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'AverageDirectionalIndex';
$helperName = 'ADX';
$helperArguments = 'symbol, 20';
$properties = array("positive_directional_index","negative_directional_index","current","previous","window","item");
$otherProperties = array("is_ready","warm_up_period","name","samples");
$updateParameterType = 'a <code>TradeBar</code> or <code>QuoteBar</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'average-directional-index';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
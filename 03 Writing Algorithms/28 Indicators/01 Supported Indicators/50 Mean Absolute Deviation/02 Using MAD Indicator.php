<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$typeName = 'MeanAbsoluteDeviation';
$helperName = 'MAD';
$helperArguments = 'self.symbol, 20';
$properties = array("Mean");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'mean-absolute-deviation';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
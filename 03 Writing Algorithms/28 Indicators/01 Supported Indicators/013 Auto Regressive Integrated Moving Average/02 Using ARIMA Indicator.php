<!-- Code generated by indicator_reference_code_generator.py -->
<? 
$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'AutoRegressiveIntegratedMovingAverage';
$helperName = 'ARIMA';
$helperArguments = 'symbol, 1, 1, 1, 20';
$properties = array();
$pyProperties = array();
$otherProperties = array("ArResidualError","MaResidualError");
$otherPyProperties = array("ar_residual_error","ma_residual_error");
$updateParameterType = 'time/number pair or an <code>IndicatorDataPoint</code>';
$constructorArguments = '1, 1, 1, 20, True';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'auto-regressive-integrated-moving-average';
$isOptionIndicator = false;
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>
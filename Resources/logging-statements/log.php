<?php

$getLogText = function($isOnOurPlatform) {
    $result = "<p>Log statements are added to the log file while your algorithm continues executing. Logging dataset information is not permitted. Use <code>Log</code> statements to debug your backtests and live trading algorithms. ";
    if ($isOnOurPlatform) {
        $result .= "L";
    }
    else
    {
        $result .= "If you execute algorithm in QC Cloud, l" ;
    }
    $result .= "og length is <a href='/docs/v2/our-platform/organizations/resources#09-Log-Quotas'>capped by organization tier</a>. If your organization hits the daily limit, <a href=\"/contact\">contact us</a>. If you log the same content multiple times, only the first instance is added to the log file. To bypass this rate-limiting, add a timestamp to your log messages.</p>";
     
    $result .= "<div class='section-example-container'>
                    <pre class='csharp'>Log(\"My log message\");</pre>
                    <pre class='python'>self.Log(\"My log message\")</pre>
                </div>";
    echo $result;
}

?>






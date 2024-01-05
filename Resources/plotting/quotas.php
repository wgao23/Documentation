<p>Intensive charting requires hundreds of megabytes of data, which is too much to stream online or display in a web browser. The number of series and the number of data points per series you can plot depends on your <a href='/docs/v2/cloud-platform/organizations/tier-features'>organization tier</a>. The following table shows the quotas:</p>

<table class="qc-table table" id='plot-quota-table'>
   <thead>
      <tr>
         <th>Tier</th>
         <th>Max Series</th>
         <th>Max Data Points per Series</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>Free</td>
         <td>10</td>
         <td>4,000</td>
      </tr>
      <tr>
         <td>Quant Researcher</td>
         <td>10</td>
         <td>8,000</td>
      </tr>
      <tr>
         <td>Team</td>
         <td>25</td>
         <td>16,000</td>
      </tr>
      <tr>
         <td>Trading Firm</td>
         <td>25</td>
         <td>32,000</td>
      </tr>
      <tr>
         <td>Institution</td>
         <td>100</td>
         <td>96,000</td>
      </tr>
   </tbody>
</table>

<style>
#plot-quota-table td:nth-child(2), 
#plot-quota-table th:nth-child(2),
#plot-quota-table td:last-child, 
#plot-quota-table th:last-child {
    text-align: right;
}
</style>

<p>If you exceed the series quota, your algorithm stops executing and the following message displays:</p>
<p><span class='error-messages'>Exceeded maximum series count: Each backtest can have up to 10 series in total.</span></p>

<p>If you exceed the data points per series quota, the following message displays:</p>
<p><span class='error-messages'>Exceeded maximum points per chart, data skipped</span></p>

<? if (in_array("live-trading", $BREADCRUMBS)) { ?>
<p>In live trading, charts are sampled every one and ten minutes. If you create 1-minute resolution custom charts, the IDE charting will downgrade the granularity and display the 10-minutes sampling after a certain amount of samples.</p>
<? } ?>
                                
<? if ($localPlatform) { ?>
<p>To adjust the data point quota, open your <a href='/docs/v2/local-platform/development-environment/configuration#03-LEAN-Settings'>LEAN configuration file</a> and adjust the value of the <code>maximum-data-points-per-chart-series</code> key.</p>
<? } ?>

<p>If your plotting needs exceed the preceding quotas, <a href='/docs/v2/writing-algorithms/object-store#12-Example-for-Plotting'>create the plots in the Research Environment instead</a>.</p>
<p>You may not be able to trade all assets with <?=$brokerageName?>. For example, if you live in the EU, you can't trade US ETFs.<? if ($brokerageName == "IB") { ?> You can trade the <a href="/docs/v2/writing-algorithms/securities/asset-classes/cfd/requesting-data#03-Create-Interactive-Brokers-Subscriptions">CFD equivalent</a>.<? } ?> Check with your local regulators to know which assets you are allowed to trade. You may need to adjust settings in your brokerage account to live trade some assets.</p>
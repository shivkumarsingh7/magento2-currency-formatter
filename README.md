
## Magento2 Currency Formatter
By default, Magento 2 shows currency code symbol before amount like $45.00. But sometime we expect to show currency code symbol after the amount. like 45$

## Installation without composer
* Download zip file of this extension
* Place all the files of the extension in your Magento 2 installation in the folder app/code/ConversionBug/CurrencyFormat
* Upgrade db scheme: `php bin/magento setup:upgrade`
* Clear cache `php bin/magento cache:flush`

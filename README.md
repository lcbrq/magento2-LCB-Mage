# Magento 1 Mage class in Magento 2

The purpose of the plugin is to emulate Mage class allowing easier Magento 1 themes port into Magento 2.  

Such pattern is obviously wrong as well object manager usage, but well... customers and their budget. Good for some pages preview anyway.  

This module can be as well good opportunity for Magento 2 introduction for Magento 1 developers.  

Sample usage in any phtml:  

```
$product = Mage::getModel('catalog/product')->load(1);
echo $product->getName();
```

Remember, Magento is Satan! If you like the plugin concept you can buy me a beer through PayPal. 

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YTW5YA2CLQDY6)


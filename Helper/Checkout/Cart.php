<?php
/**
 * Magento 1 Mage class replacement
 *
 * @category   LCB
 * @package    LCB_Mage
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\Mage\Helper\Checkout;

use Magento\Store\Model\StoreManagerInterface;
use \Magento\Checkout\Helper\Cart as CartHelper;

class Cart
{

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    
    /**
     * @var CartHelper
     */
    protected $cartHelper;

    /**
     * @param StoreManagerInterface $storeManager
     * @param CartHelper $cartHelper
     */
    public function __construct(
            StoreManagerInterface $storeManager,
            CartHelper $cartHelper
        )
    {
        $this->storeManager = $storeManager;
        $this->cartHelper = $cartHelper;
    }
    
    /**
     * Get add to cart url
     * 
     * @param \Magento\Catalog\Model\Product $product
     * @return string
     */
    public function getAddUrl($product)
    {
        return $this->cartHelper->getAddUrl($product);
    }
    
}


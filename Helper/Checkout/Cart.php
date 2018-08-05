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
use Magento\Checkout\Helper\Cart as CartHelper;
use Magento\Framework\Data\Form\FormKey as FormKey;

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
     * FormKey
     */
    protected $formKey;

    /**
     * @param StoreManagerInterface $storeManager
     * @param CartHelper $cartHelper
     * @param FormKey $formKey
     */
    public function __construct(
            StoreManagerInterface $storeManager,
            CartHelper $cartHelper,
            FormKey $formKey
        )
    {
        $this->storeManager = $storeManager;
        $this->cartHelper = $cartHelper;
        $this->formKey = $formKey;
    }
    
    /**
     * Get add to cart url
     * 
     * @param \Magento\Catalog\Model\Product $product
     * @return string
     */
    public function getAddUrl($product)
    {
        return $this->cartHelper->getAddUrl($product) . 'form_key/' . $this->formKey->getFormKey();
    }
    
}


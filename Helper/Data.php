<?php

namespace Mahakal\ProductPreview\Helper;

use Magento\Framework\App\Helper\Context;

/**
 * Class Data
 * @package Mahakal\ProductPreview\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Data constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * @param null $moduleName
     * @return bool
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        return parent::isModuleOutputEnabled('Mahakal_ProductPreview');
    }

    /**
     * @return bool|mixed
     */
    public function isEnable(){
        if(!$this->isModuleOutputEnabled()){
            return false;
        }
        return $this->scopeConfig->getValue('product_preview/general/enable_module');
    }

    /**
     * @return bool|mixed
     */
    public function isPreviewInGrid(){
        if(!$this->isEnable()){
            return false;
        }
        return $this->scopeConfig->getValue('product_preview/general/preview_grid');
    }

    /**
     * @return bool|mixed
     */
    public function isPreviewInEdit(){
        if(!$this->isEnable()){
            return false;
        }
        return $this->scopeConfig->getValue('product_preview/general/preview_edit');
    }
}
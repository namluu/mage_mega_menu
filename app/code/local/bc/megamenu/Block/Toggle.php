<?php
class Bc_MegaMenu_Block_Toggle extends Mage_Core_Block_Template
{
    public function _prepareLayout()
    {
        if (!Mage::getStoreConfig('megamenu/general/enabled')) return;
        $layout = $this->getLayout();
        $topnav = $layout->getBlock('catalog.topnav');
        $head   = $layout->getBlock('head');
        if (is_object($topnav) && is_object($head)) {
            $topnav->setTemplate('bluecom/megamenu/top.phtml');
            $head->addItem('skin_css', 'bluecom/megamenu/css/megamenu.css');
            $head->addItem('skin_js', 'bluecom/megamenu/js/megamenu.js');

        }
    }
}
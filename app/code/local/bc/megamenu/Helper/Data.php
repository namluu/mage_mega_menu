<?php
class Bc_MegaMenu_Helper_Data extends Mage_Core_Helper_Abstract
{
    private $_menuData = null;

    public function getMenuContent()
    {
        if (!is_null($this->_menuData)) return $this->_menuData;
        $blockClassName = Mage::getConfig()->getBlockClassName('megamenu/navigation');
        $block = new $blockClassName();
        $categories = $block->getStoreCategories()->getNodes();
        foreach ($categories as $_category) {
            $block->drawMegamenuItem($_category);
        }
        
        $topMenuArray = $block->getTopMenuArray();
        
        // --- Result ---
        return $topMenuArray;
    }
}
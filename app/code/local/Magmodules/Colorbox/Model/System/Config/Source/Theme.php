<?php

/**
 * Magmodules (www.magmodules.eu)
 *
 * @author     MagModules
 * @package    Magmodules_Colorbox
 * @copyright  Copyright (c) 2013 Magmodules
 */

class Magmodules_Colorbox_Model_System_Config_Source_Theme
{

    public function toOptionArray() {
        return array(
            array('value' => 'theme1', 'label' => Mage::helper('colorbox')->__('Theme 1')),
            array('value' => 'theme2', 'label' => Mage::helper('colorbox')->__('Theme 2')),
            array('value' => 'theme3', 'label' => Mage::helper('colorbox')->__('Theme 3')),
            array('value' => 'theme4', 'label' => Mage::helper('colorbox')->__('Theme 4')),
            array('value' => 'theme5', 'label' => Mage::helper('colorbox')->__('Theme 5')),
        );
    }

}
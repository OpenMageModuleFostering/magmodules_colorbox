<?php
/**
 * Magmodules (www.magmodules.eu)
 *
 * @author     MagModules
 * @package    Magmodules_Colorbox
 * @copyright  Copyright (c) 2013 Magmodules
 */
class Magmodules_Colorbox_Model_System_Config_Source_Jquery
{

    public function toOptionArray() {
        return array(
            'none'     => Mage::helper('colorbox')->__('None'),
            'local'    => Mage::helper('colorbox')->__('Local (Version 1.7.1)'),
            'google'   => Mage::helper('colorbox')->__('Google CDN (Version 1.7.1)'),
        );
    }

}
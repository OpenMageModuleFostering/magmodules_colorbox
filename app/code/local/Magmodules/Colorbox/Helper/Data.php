<?php
/**
 * Magmodules (www.magmodules.eu)
 *
 * @author     MagModules
 * @package    Magmodules_Colorbox
 * @copyright  Copyright (c) 2013 Magmodules
 */
class Magmodules_Colorbox_Helper_Data extends Mage_Core_Helper_Abstract
{

	public function getMainSize()
	{
		$size = Mage::getStoreConfig('colorbox/settings/size_main'); 
	    if (strstr($size, '_')) {		
			$size = str_replace('_',',', $size); 
		} else {
			$size = '256,265';          			
		}
		return $size;
	}

	public function getPopupSize()
	{
		$size = Mage::getStoreConfig('colorbox/settings/size_popup'); 
	    if (strstr($size, '_')) {		
			$size = str_replace('_',',', $size); 
		} else {
			$size = '500,500';          			
		}
		return $size;
	}


	public function getThumbSize()
	{
		$size = Mage::getStoreConfig('colorbox/settings/size_thumb'); 
	    if (strstr($size, '_')) {		
			$size = str_replace('_',',', $size); 
		} else {
			$size = '60,60';          			
		}
		return $size;
	}
   
}

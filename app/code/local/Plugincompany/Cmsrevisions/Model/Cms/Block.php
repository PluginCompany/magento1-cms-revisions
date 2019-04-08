<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of CMS Revisions, released under the MIT License.
 * See the LICENSE file in the project root.
 */

class Plugincompany_Cmsrevisions_Model_Cms_Block extends Mage_Cms_Model_Block {

    protected function _beforeSave(){
        $needle = 'block_id="' . $this->getBlockId() . '"';
        if (false == strstr($this->getContent(), $needle)) {
            Mage::dispatchEvent('cms_block_save_before', $this->_getEventData());
            return Mage_Core_Model_Abstract::_beforeSave();
        }
        Mage::throwException(
            Mage::helper('cms')->__('The static block content cannot contain  directive with its self.')
        );
    }
}
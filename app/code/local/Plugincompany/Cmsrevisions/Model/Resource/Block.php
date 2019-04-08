<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of CMS Revisions, released under the MIT License.
 * See the LICENSE file in the project root.
 */

class Plugincompany_Cmsrevisions_Model_Resource_Block extends Mage_Core_Model_Mysql4_Abstract
{

    protected function _construct()
    {
        $this->_init('plugincompany_cmsrevisions/block', 'plugincompany_cms_block_id');
    }
}
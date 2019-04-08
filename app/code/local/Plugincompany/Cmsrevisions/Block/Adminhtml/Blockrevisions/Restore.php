<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of CMS Revisions, released under the MIT License.
 * See the LICENSE file in the project root.
 */


/**
 * Renderer class for block revision restore field
 *
 * Class Plugincompany_Cmsrevisions_Block_Adminhtml_Blockrevisions_Restore
 */
class Plugincompany_Cmsrevisions_Block_Adminhtml_Blockrevisions_Restore extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Renders the restore block column
     *
     * @param Varien_Object $row
     * @return string
     */
    public function render(Varien_Object $row)
    {
        $id = $row->getData($this->getColumn()->getIndex());
        $blockId = Mage::app()->getRequest()->getParam('block_id');
        $url = Mage::helper('adminhtml')->getUrl('adminhtml/revisions/restoreblock', array('block_id'=>$blockId,'revision_id' => $id));
        $return = '<button class="scalable back" style="cursor:pointer" onclick="window.location=\'' . $url . '\'" type="button">Restore</button>';
        return $return;
    }
}
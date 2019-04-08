<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of CMS Revisions, released under the MIT License.
 * See the LICENSE file in the project root.
 */

/**
 * Renderer for the delete block button in block revision grid
 *
 * Class Plugincompany_Cmsrevisions_Block_Adminhtml_Blockrevisions_Delete
 */
class Plugincompany_Cmsrevisions_Block_Adminhtml_Blockrevisions_Delete extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Renders the delete button
     *
     * @param Varien_Object $row
     * @return string
     */
    public function render(Varien_Object $row)
    {
        $return = '';
        $id = $row->getData($this->getColumn()->getIndex());
        $blockId = Mage::app()->getRequest()->getParam('block_id');
        $url = Mage::helper('adminhtml')->getUrl('adminhtml/revisions/deleteblock', array('block_id'=>$blockId,'revision_id' => $id));

        if (!$row->getData('is_current_revision')) {
            $return = '<button class="scalable delete" style="cursor:pointer" onclick="confirmDelete(\'' . $url . '\')" type="button">Delete</button>';
        }
        return $return;
    }
}
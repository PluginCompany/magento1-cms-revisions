<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of CMS Revisions, released under the MIT License.
 * See the LICENSE file in the project root.
 */

/**
 * Renderer for loading blockdata into block editor
 *
 * Class Plugincompany_Cmsrevisions_Block_Adminhtml_Blockrevisions_Popuplink
 */
class Plugincompany_Cmsrevisions_Block_Adminhtml_Blockrevisions_Popuplink extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Renders the load revision button
     *
     * @param Varien_Object $row
     * @return string
     */
    public function render(Varien_Object $row)
    {
        $id = $row->getData($this->getColumn()->getIndex());
        $url = Mage::helper('adminhtml')->getUrl('adminhtml/revisions/retrieveblockdata',array('block_revision_id' => $id));
        $return = '<button class="scalable back" onclick="loadRevisionBlockData(\'' . $url . '\')" type="button">Load in editor</button>';
        return $return;
    }

    /**
     * Returns the option HTML
     *
     * @param $values
     * @param $id
     * @return string
     */
    public function getChildValues($values,$id)
    {
        $return = '';
        foreach ($values as $value) {
            $storeId = $value['value'];
            $url = Mage::app()->getStore($storeId)->getBaseUrl(Mage_Core_Model_Store::URL_TYPE_LINK) . 'previewcms/render/block/id/' . $id . '?___store=' . Mage::app()->getStore($storeId)->getCode();
            $return .= '<option value="'. $url . '">' . $value['label'] . '</option>';
        }
        return $return;
    }
}
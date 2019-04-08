<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of CMS Revisions, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Cmsrevisions_Block_Adminhtml_Pagerevisions_Delete extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $id = $row->getData($this->getColumn()->getIndex());
        $pageId = $this->_getPageId();
        $url = Mage::helper('adminhtml')->getUrl('adminhtml/revisions/deletepage', array('page_id'=>$pageId,'revision_id' => $id));

        $return = '';
        if (!$row->getData('is_current_revision')) {
            $return = '<button class="scalable delete" style="cursor:pointer" onclick="confirmDelete(\'' . $url . '\')" type="button">Delete</button>';
        }
        return $return;
    }

    protected function _getPageId()
    {
        $req = Mage::app()->getRequest();
        return $req->getParam('page_id',
            $req->getParam('id')
        );
    }
}
<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of CMS Revisions, released under the MIT License.
 * See the LICENSE file in the project root.
 */


class Plugincompany_Cmsrevisions_Previewcms_RenderController extends Mage_Core_Controller_Front_Action
{
    /**
     * Renders preview based on revision ID
     */
    public function viewAction()
    {
        $revisionId = $this->getRequest()->getParam('id');
        if (!Mage::helper('plugincompany_cmsrevisions/render')->renderPreview($this, $revisionId)) {
            $this->_forward('noRoute');
        }
    }
}
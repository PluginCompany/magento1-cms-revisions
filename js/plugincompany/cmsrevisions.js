/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of CMS Revisions, released under the MIT License.
 * See the LICENSE file in the project root.
 */

/*
* Opens new window with chosen CMS Page revision
*
* */
function previewcms(button) {
    var buttonSiblings = button.siblings();
    var dropdown = buttonSiblings[0];
    window.open(dropdown.getValue());
}

/*
* Loads block data from chosen revision into editor
*
* */
function loadRevisionBlockData(blockDataURL) {
    new Ajax.Request(blockDataURL, {
        onSuccess: function(response) {
            var blockData = response.responseJSON;
            $('block_title').setValue(blockData.title);
            $('block_content').value = blockData.content;
            $('block_identifier').setValue(blockData.identifier);
            tinyMCE.activeEditor.setContent(blockData.content);
        },
        onFailure: function(){
            alert('failed to load block data')
        }
    });

}

function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete this revision?")) {
   document.location = delUrl;
  }
}
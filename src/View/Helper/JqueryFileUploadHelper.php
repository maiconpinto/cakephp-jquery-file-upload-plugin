<?php
namespace JqueryFileUpload\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * JqueryFileUpload helper
 */
class JqueryFileUploadHelper extends Helper
{
    public $helpers = ['Html'];

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function form($entity = null)
    {

        //$this->loadStyles();
        //$this->loadScripts();
    }

    public function loadStyles()
    {
        $styles = $this->getStyles();

        echo $this->Html->css($styles);

    }

    public function getStyles()
    {
        return [
            'JqueryFileUpload.bootstrap.min',
            'JqueryFileUpload.style',
            'JqueryFileUpload.blueimp-gallery.min',
            'JqueryFileUpload.jquery.fileupload',
            'JqueryFileUpload.jquery.fileupload-ui'
        ];
    }

    public function loadScripts()
    {
        $scripts = $this->getScripts();

        echo $this->Html->script($scripts);
    }

    public function getScripts()
    {
        return [
            'JqueryFileUpload.jquery.min',
            'JqueryFileUpload.jquery.ui.widget',
            'JqueryFileUpload.tmpl.min',
            'JqueryFileUpload.load-image.all.min',
            'JqueryFileUpload.canvas-to-blob.min',
            'JqueryFileUpload.bootstrap.min',
            'JqueryFileUpload.jquery.blueimp-gallery.min',
            'JqueryFileUpload.jquery.iframe-transport',
            'JqueryFileUpload.jquery.fileupload',
            'JqueryFileUpload.jquery.fileupload-process',
            'JqueryFileUpload.jquery.fileupload-image',
            'JqueryFileUpload.jquery.fileupload-audio',
            'JqueryFileUpload.jquery.fileupload-video',
            'JqueryFileUpload.jquery.fileupload-validate',
            'JqueryFileUpload.jquery.fileupload-ui',
            'JqueryFileUpload.main',
        ];
    }

}

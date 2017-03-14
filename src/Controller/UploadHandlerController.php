<?php
namespace JqueryFileUpload\Controller;

use JqueryFileUpload\Controller\AppController;
use Cake\Event\Event;

/*
 * jQuery File Upload Plugin PHP Class
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

class UploadHandlerController extends AppController
{

    protected $options;

    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->setLayout('JqueryFileUpload.none');
    }

    public function initialize() {
        $this->loadComponent('JqueryFileUpload.Upload');

        $this->options = $this->Upload->getOptions();
    }

    public function index() {
        switch ($this->Upload->get_server_var('REQUEST_METHOD')) {
            case 'OPTIONS':
            case 'HEAD':
                $this->Upload->head();
                break;
            case 'GET':
                $this->Upload->get($this->options['print_response']);
                break;
            case 'PATCH':
            case 'PUT':
            case 'POST':
                $this->Upload->post($this->options['print_response']);
                break;
            case 'DELETE':
                $this->Upload->delete($this->options['print_response']);
                break;
            default:
                $this->Upload->header('HTTP/1.1 405 Method Not Allowed');
        }
    }
}

<?php
namespace JqueryFileUpload\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use JqueryFileUpload\View\Helper\JqueryFileUploadHelper;

/**
 * JqueryFileUpload\View\Helper\JqueryFileUploadHelper Test Case
 */
class JqueryFileUploadHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \JqueryFileUpload\View\Helper\JqueryFileUploadHelper
     */
    public $JqueryFileUpload;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->JqueryFileUpload = new JqueryFileUploadHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JqueryFileUpload);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

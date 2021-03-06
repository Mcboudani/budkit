<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * extensions.php
 *
 * Requires PHP version 5.4
 *
 * LICENSE: This source file is subject to version 3.01 of the GNU/GPL License 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/licenses/gpl.txt  If you did not receive a copy of
 * the GPL License and are unable to obtain it through the web, please
 * send a note to support@stonyhillshq.com so we can mail you a copy immediately.
 * 
 */

namespace Application\System\Controllers;

/**
 * Admin action controller for managing system content 
 *
 * This class implements an the action methods for managing system extensions.. 
 *
 * @category  Application
 * @package   Action Controller
 * @license   http://www.gnu.org/licenses/gpl.txt.  GNU GPL License 3.01
 * @version   1.0.0
 * @since     Jan 14, 2012 4:54:37 PM
 * @author    Livingstone Fultang <livingstone.fultang@stonyhillshq.com>
 */
class Extension extends \Platform\Controller {

    /**
     * Extensions controller, fallback method
     * @Return void
     */
    public function index() {
        
        $view = $this->load->view('index');
        $this->output->setPageTitle(_("Application Repository"));

        $today = $this->output->layout("extensions");

        $this->output->addToPosition("dashboard", $today);
        $this->load->view("index")->display();
        //$this->output();
    }

    /**
     * Returns and instance of the extension class
     *
     * @staticvar object $instance
     * @return object Extensions 
     */
    public static function getInstance() {

        static $instance;
        //If the class was already instantiated, just return it
        if (isset($instance))
            return $instance;
        $instance = new self;
        return $instance;
    }

}


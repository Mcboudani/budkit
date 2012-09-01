<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * question.php
 *
 * Requires PHP version 5.3
 *
 * LICENSE: This source file is subject to version 3.01 of the GNU/GPL License 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/licenses/gpl.txt  If you did not receive a copy of
 * the GPL License and are unable to obtain it through the web, please
 * send a note to support@stonyhillshq.com so we can mail you a copy immediately.
 *
 * @category   View
 * @author     Livingstone Fultang <livingstone.fultang@stonyhillshq.com>
 * @copyright  1997-2012 Stonyhills HQ
 * @license    http://www.gnu.org/licenses/gpl.txt.  GNU GPL License 3.01
 * @version    Release: 1.0.0
 * @link       http://stonyhillshq/documents/index/carbon4/utilities/application
 * @since      Class available since Release 1.0.0 Jan 14, 2012 4:54:37 PM
 * 
 */
namespace Application\Content\Views;

use Platform;
use Library;

/**
 * What is the purpose of this class, in one sentence?
 *
 * How does this class achieve the desired purpose?
 *
 * @category   View
 * @author     Livingstone Fultang <livingstone.fultang@stonyhillshq.com>
 * @copyright  1997-2012 Stonyhills HQ
 * @license    http://www.gnu.org/licenses/gpl.txt.  GNU GPL License 3.01
 * @version    Release: 1.0.0
 * @link       http://stonyhillshq/documents/index/carbon4/utilities/application
 * @since      Class available since Release 1.0.0 Jan 14, 2012 4:54:37 PM
 */
final class Question extends \Platform\View {

    public function __construct() {

        //Construct the parent
        parent::__construct();

        $this->output->setPageTitle("Questions");
    }

    public function display() {
        
               
        //parse Layout Demo;
        //$sidebar      = $this->output->layout( "index_sidebar" );
        $dashboard      = $this->output->layout( "dashboard" , "system" );
        $sidebar        = $this->output->layout( "sidebar" , "system"  );
  
        $this->output->addToPosition("side",   $sidebar);
        $this->output->addToPosition("body",    $dashboard);
    }

    public function createform() {
                //Photo
         $this->output->setPageTitle("Questions | Get answers..");
                 
        //form
        $form  = $this->output->layout( "questions/form" );
        
        //The default installation box;
        //$this->output->addToPosition("left",    $sidebar);
        
        $this->output->addToPosition("dashboard",   $form);
        
        return $this->display();
    }

    public static function getInstance() {

        static $instance;

        //If the class was already instantiated, just return it
        if (isset($instance))
            return $instance;

        $instance = new self();

        return $instance;
    }

}


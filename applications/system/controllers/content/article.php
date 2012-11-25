<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * article.php
 *
 * Requires PHP version 5.3
 *
 * LICENSE: This source file is subject to version 3.01 of the GNU/GPL License 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/licenses/gpl.txt  If you did not receive a copy of
 * the GPL License and are unable to obtain it through the web, please
 * send a note to support@stonyhillshq.com so we can mail you a copy immediately.
 *
 * @category   Controller
 * @author     Livingstone Fultang <livingstone.fultang@stonyhillshq.com>
 * @copyright  1997-2012 Stonyhills HQ
 * @license    http://www.gnu.org/licenses/gpl.txt.  GNU GPL License 3.01
 * @version    Release: 1.0.0
 * @link       http://stonyhillshq/documents/index/carbon4/utilities/application
 * @since      Class available since Release 1.0.0 Jan 14, 2012 4:54:37 PM
 * 
 */
namespace Application\System\Controllers\Content;


use Application\System\Controllers as System;

/**
 * What is the purpose of this class, in one sentence?
 *
 * How does this class achieve the desired purpose?
 *
 * @category   Controller
 * @author     Livingstone Fultang <livingstone.fultang@stonyhillshq.com>
 * @copyright  1997-2012 Stonyhills HQ
 * @license    http://www.gnu.org/licenses/gpl.txt.  GNU GPL License 3.01
 * @version    Release: 1.0.0
 * @link       http://stonyhillshq/documents/index/carbon4/utilities/application
 * @since      Class available since Release 1.0.0 Jan 14, 2012 4:54:37 PM
 */
final class Article extends System\Content {

    public function index() {
        return $this->read();
    }

    public function create() {     
        
        
        $view = $this->load->view('article');
        
        //get passparams
        $params     = func_get_args();
        $fullscreen = false;
        
        //param1 = fullscreen 
        //param2 = autoplay
        if(isset($params) && is_array($params)){
            if(isset($params[0]) && strtolower($params[0])=="fullscreen"){
                $fullscreen = true;
            }
        }
 
        
        return $view->createForm( $fullscreen );
        
    }
    
    // domain.com/post/item/update/1902480-Born-in-the-USA/
    public function update() {}
    
    //domain.com/post/item/edit/1902480-Born-in-the-USA/
    public function edit(){
        
        echo "editing Applications";
        
    }

    // domain.com/post/item/1902480-Born-in-the-USA/
    public function read() {
         $view = $this->load->view('content\article');
    }

    // domain.com/post/item/delete/1902480-Born-in-the-USA/
    public function delete(){}
    
    
    /**
     * Get's an instance of the Content\Article controller
     * 
     * @staticvar self $instance
     * @return \Application\Content\Controllers\self 
     * 
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

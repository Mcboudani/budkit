<?php

namespace Application\Install\Models;

use Platform;
use Library;

class Requirements extends Platform\Model {

    //put your code here

    public function display() {
        
    }
    
    public function testFileUploads(){}
    
    public function testMemory(){}
    
    public function testFloat(){}

    /**
     * Checks required modules
     * 
     * @param type $name
     * @param type $directive
     * @return boolean 
     */
    public function testModule($name, $directive = array()) {

        $return = array(
            "title" => $directive['title'], "name" => $name, "current" => "", "test" => false
        );

        if (is_array($directive)) {
            //If the extension is loaded
            if (!extension_loaded($name)) {
                $return["current"] = _("Not Loaded");
                //If we require this module loaded, then fail
                if ($directive["loaded"]) {
                    $return["test"] = false;
                }
                //If we require this module to be installed
                if ($directive["installed"] && function_exists('dl')) {
                    if (!dl($name)) {
                        $return["test"] = false;
                        $return["current"] = _("Not Installed");
                    }
                }
            } else {
                $return["current"] = _("Installed and Loaded");
                if ($directive["loaded"]) {
                    $return["test"] = true;
                }
            }

            //@TODO If we have alternative modules
            if (!$return['test'] && isset($directive['alternate'])) {
                //$altName = 
            }
        }

        return $return;
    }

    public function testPermissions() {
        
        //Test install directory is writable, readable
        //Test we are not trying to overide an installation
        
        return false;
    }

    /**
     * Test PHP Directives before install
     * 
     * @param type $name
     * @param type $directive
     * @return type 
     */
    public function testDirective($name, $directive = array()) {

        $return = array(
            "title" => $name, "status" => (!$directive['status']) ? _('Off') : _('On'), "current" => "", "test" => true
        );

        //For now we can only check boolean variables
        if (isset($name) && !empty($name) && is_array($directive)) {

            $return['current'] = ini_get($name);
            $setting = ($return['current'] == 0 || strtolower($return['current']) === 'off' || empty($return['current']) || !$return['current']) ? false : true;

            //Test
            if ($directive['status'] <> $setting) {
                $return['test'] = false;
            }

            //Literalize
            $return['current'] = (!$setting) ? _('Off') : _('On');
        }

        return $return;
    }

    public function checkVersion($component) {

        return version_compare($component['current'], $component['version'], $component['minimal']);
    }

    public static function getInstance() {

        static $instance;
        //If the class was already instantiated, just return it
        if (isset($instance))
            return $instance;

        $instance = new self;
        return $instance;
    }
}

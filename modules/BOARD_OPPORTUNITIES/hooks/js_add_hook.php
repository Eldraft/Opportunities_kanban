<?php
require_once 'modules/BOARD_OPPORTUNITIES/BOARD_CONFIG.php';
class Js_Add_Hook {
    function after_ui_frame_method($event, $arguments)
    {
        $board_Config = new \SuiteCRM\Modules\BOARD_OPPORTUNITIES\BOARD_CONFIG();
        if(!empty($_REQUEST['module'])
            && in_array($_REQUEST['module'],$board_Config->getModulesList())
            && in_array($_REQUEST['action'],$board_Config->getActionFromAddJsMenu())
            && empty($_REQUEST['to_pdf'])){
            echo '<script src="modules/BOARD_OPPORTUNITIES/src/js/js_menu_add.js"></script>';
        }
    }
}
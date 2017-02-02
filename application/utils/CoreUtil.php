<?php
namespace application\utils;

class CoreUtil {
    public static function load404IfViewDoesNotExists($page){
        if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
        {
            show_404();
        }
    }
} 
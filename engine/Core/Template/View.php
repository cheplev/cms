<?php

namespace Engine\Core\Template;

class View
{
    public function __construct()
    {

    }
    
    /**
     * render
     *
     * @param  mixed $template
     * @param  mixed $vars
     * @return void
     */
    public function render($template, $vars = [])
    {
        $templatePath = ROOT_DIR . '/content/themes/default/' . $template . '.php';

        if(!is_file($templatePath))
        {
            throw new \InvalidArgumentException("Template {$template} not found in {$templatePath}");
        }
       
        extract($vars);
        ob_start();
        ob_implicit_flush(0);
       
        try{
            require $templatePath;   
        } catch(\Exception $e) {
            ob_end_clean();
            throw $e;
        }

        echo ob_get_clean();
    }
}
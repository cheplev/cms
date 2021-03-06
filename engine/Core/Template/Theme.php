<?php

namespace Engine\Core\Template;

use Exception;

class Theme 
{
    const RULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'sidebar' => 'sidebar-%s'
    ];

    public $url = '';
    
    protected $data = [];

    /**
     * header
     *
     * @param  mixed $name
     * @return void
     */
    public function header ($name = null)
    {
        $name = (string) $name;
        $file = 'header';

        if ($name !== '')
        {
           $file = sprintf(self::RULES_NAME_FILE['header'], $name);
        }

        $this->loadTemplateFile($file);
    }

    public function footer ($name = '')
    {
        $name = (string) $name;
        $file = 'footer';

        if ($name !== '')
        {
           $file = sprintf(self::RULES_NAME_FILE['footer'], $name);
        }

        $this->loadTemplateFile($file);
    }

    public function sidebar ($name = '')
    {
        $name = (string) $name;
        $file = 'sidebar';

        if ($name !== '')
        {
           $file = sprintf(self::RULES_NAME_FILE['sidebar'], $name);
        }

        $this->loadTemplateFile($file);
    }

    public function block ($name = '', $data = [])
    {
        $name = (string) $name;

        if ($name !== '')
        {
            $this->loadTemplateFile($name, $data); 
        }

      
    }
    
    /**
     * loadTemplateFile
     *
     * @param  mixed $nameFile
     * @param  mixed $data
     * @return void
     */
    private function loadTemplateFile ($nameFile, $data = [])
    {
        $templateFile = ROOT_DIR . '/content/themes/default/' . $nameFile . '.php';

        if (is_file($templateFile)) 
        {   
            extract($data);
            require_once $templateFile;
        }
        else
        {
            throw new \Exception("View file {$templateFile} does not exist!");
        }
    }

    public function setData ($data)
    {
        $this->data = $data;
    }

    public function getData ()
    {
        return $this->data;
    }

}

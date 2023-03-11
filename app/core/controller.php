<?php

class Controller
{
    public function view($view, $data = [])
    {   
        extract($data);
        $filename = "../app/views/" . $view . ".view.php";
        if (file_exists($filename)) {
            require $filename;
        } else {
            echo "Arquivo view não encontrado: " . $filename;
        }
    }
}

<?php

function __autoload($class)
{
    //echo $class.'<br>';
    if (file_exists(__DIR__ . $class . '.php')){
        require_once __DIR__ . $class . '.php';
    }
    elseif (file_exists(__DIR__.'/Settings/' . $class . '.php')){
        require_once __DIR__.'/Settings/' . $class . '.php';
    }
    elseif(file_exists(__DIR__.'/Models/' . $class . '.php')){
        require_once __DIR__.'/Models/' . $class . '.php';
    }
    elseif(file_exists(__DIR__.'/Views/' . $class . '.php')){
        //echo 'autoload /Views/: '.$class.'<br>';
        require_once __DIR__.'/Views/' . $class . '.php';
    }
    elseif(file_exists(__DIR__.'/Views/News/' . $class . '.php')){
        require_once __DIR__.'/Views/News/' . $class . '.php';
    }
    elseif(file_exists(__DIR__.'/Functions/' . $class . '.php')){
       require_once __DIR__.'/Functions/' . $class . '.php';
    }
    elseif(file_exists(__DIR__.'/Exceptions/' . $class . '.php')){
        require_once __DIR__.'/Exceptions/' . $class . '.php';
    }
    elseif(file_exists(__DIR__.'/Controllers/' . $class . '.php')){
        require_once __DIR__.'/Controllers/' . $class . '.php';
    }
    elseif(file_exists(__DIR__.'/Classes/' . $class . '.php')){
        require_once __DIR__.'/Classes/' . $class . '.php';
    }
    else{
        $pathParts = explode('\\', $class);
        $pathParts[0] = __DIR__; //echo '<br>';
       // echo $pathParts[1] = __DIR__; echo '<br>';
        //echo $pathParts[2] = __DIR__; echo '<br>';
        $path = implode(DIRECTORY_SEPARATOR, $pathParts).'.php';//echo '<br>';
        if(file_exists($path)){
            require_once $path;
            //echo $path.'<br>';
        }
        //echo $out.'<br>';
        //var_dump($path);
    }

}
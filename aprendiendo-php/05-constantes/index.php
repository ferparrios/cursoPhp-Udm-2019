<?php
//Constantes
//contenedor de informacion que no puede variar

define('nombre', 'Fernando Paredes Rios');
define('web', 'ferparedesrios.com');

echo nombre.'<br>';
echo web.'<br>';


//constantes predefinidas

echo 'El sistema operativo es: '.PHP_OS.'<br>';
echo 'La version de PHP es: '.PHP_VERSION.'<br>';
echo 'La ruta donde esta PHP es: '.PHP_EXTENSION_DIR.'<br>';
echo 'La linea en la que se ejecuta este comando es: '.__LINE__.'<br>';
echo 'La ubicacion de este archivo es: '.__FILE__.'<br>';

function holaMundo(){
  echo 'Esto muestra la funcion holaMundo: '.__FUNCTION__;
}

holaMundo();






?>
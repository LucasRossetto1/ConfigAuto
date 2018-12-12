<?php

$json = file_get_contents("config.json");
$parsed_json = json_decode($json, true);
$file = 'output.txt';

//Ce script doit figurer dans un dossier ou se situe les différents scripts
//shell/batch a exécuter.

if(file_exists('./config.json')) {

  $scripts = $parsed_json['scripts'];
  $path = $parsed_json['path'];
  $test = explode("\n", file_get_contents($file));

  //Si les scripts sont des scripts bash linux.

  if (DIRECTORY_SEPARATOR == '/') {

    if (count($scripts) > 0) {

      foreach ($scripts as $script) {

        if(!in_array($script['filename'] , $test)) {

          system($script['filename'] . ' ' . $script['params'], $retval);

          if( $retval == 0 ){

            file_put_contents($file, $script['filename'] . "\n", FILE_APPEND);

          } else {

            echo "====== Le script ne s'est pas terminé correctement. ======= \n";

            break;
          }
        }
      }
    }

    else {
      echo "Le fichier .sh est manquant ou n'a pas été trouvé.";
    }
  }

  //Si les scripts sont des scripts bat windows.

  if (DIRECTORY_SEPARATOR == '\\') {

    if (count($scripts) > 0) {

      foreach ($scripts as $script) {

        if(!in_array($script['filename'] , $test)) {

          system($script['filename'] . ' ' . $script['params'], $retval);

          if( $retval == 0 ){

            file_put_contents($file, $script['filename'] . "\n", FILE_APPEND);

          } else {

            echo "====== Le script ne s'est pas terminé correctement. ======= \n";
            break;

          }
        }
      }
    }

    else {
      echo "Le fichier .bat est manquant ou n'a pas été trouvé.";
    }
  }

}
else
{
  echo "Le ficher config.json est manquant ou n'a pas été trouvé.";
}
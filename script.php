<?php

//$path_parts_src = pathinfo('/src');
//
//$path_parts = pathinfo('./');

$json = file_get_contents("config.json");
$parsed_json = json_decode($json);
$filenamesh = '/var/www/html/drushInstall/*.sh';
$filenamebat = '/var/www/html/drushInstall/*.bat';

//Ce script doit figurer dans un dossier ou se situe les différents script shell/batch a exécuter.

if(file_exists('./config.json')) {

  foreach ($filenamesh as $filename) {
    $params = $parsed_json->alias->drush;

    if (DIRECTORY_SEPARATOR == '/') {

      if (count(glob($filenamesh)) > 0) {

        system($filenamesh . ' ' . $aliasdrush, $retval);
        echo $retval;

      }
      else {
        echo "Le fichier .sh est manquant ou n'a pas été trouvé.";
      }
    }
  }

  if (DIRECTORY_SEPARATOR == '\\') {

    if (count(glob($filenamebat)) > 0) {

      system($filenamebat, $retval);
      echo $retval;

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
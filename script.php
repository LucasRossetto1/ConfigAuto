<?php

//$path_parts_src = pathinfo('/src');
//
//$path_parts = pathinfo('./');
$filenamesh = '/var/www/html/drushInstall/*.sh';
$filenamebat = '/var/www/html/drushInstall/*.bat';

//Ce script doit figurer dans un dossier ou se situe les différents script shell/batch a exécuter.

if(file_exists('config.yml')){

  if(file_exists('backupscript.json')){

    if (DIRECTORY_SEPARATOR == '/') {

      if (count(glob($filenamesh)) > 0) {

        system( $filenamesh, $retval);
        echo $retval;

      }
      else
      {
        echo "Le fichier .sh est manquant ou n'a pas été trouvé.";
      }
    }

    if (DIRECTORY_SEPARATOR == '\\') {

      if (file_exists($filenamebat)){

        system($filenamebat, $retval);
        echo $retval;

      }
      else
      {
        echo "Le fichier .bat est manquant ou n'a pas été trouvé.";
      }
    }


  }
  else
  {
    echo "Le fichier backupscript.json est manquant ou n'a pas été trouvé.";
  }
}
else
{
  echo "Le ficher config.yml est manquant ou n'a pas été trouvé.";
}
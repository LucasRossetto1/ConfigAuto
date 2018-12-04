<?php

//$path_parts_src = pathinfo('/src');
//
//$path_parts = pathinfo('./');

if(file_exists('config.yml')){

  if(file_exists('backupscript.json')){

    if (DIRECTORY_SEPARATOR == '/') {

      if(file_exists('script.sh')){

        system('./script.sh 2>&1', $retval);
        echo $retval;

      }
      else
      {
        echo "Le fichier script.sh est manquant ou n'a pas été trouvé.";
      }
    }

    if (DIRECTORY_SEPARATOR == '\\') {
      if (file_exists('script.bat')){
        system('./script.bat 2>&1', $retval);
        echo $retval;
      }
      else
      {
        echo "Le fichier script.bat est manquant ou n'a pas été trouvé.";
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
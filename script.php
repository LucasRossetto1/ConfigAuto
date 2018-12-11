<?php

$json = file_get_contents("config.json");
$parsed_json = json_decode($json, true);

//Ce script doit figurer dans un dossier ou se situe les différents scripts
//shell/batch a exécuter.
//Les paramétres dans les scripts sh/bat doivent figurer comme-ci : $1 ,$2 ,$3 ,
//etc... en fonction de votre configuration json(nombres de paramètres).

if(file_exists('./config.json')) {

  $scripts = $parsed_json['scripts'];
  $path = $parsed_json['path'];

  if (DIRECTORY_SEPARATOR == '/') {

    if (count($scripts) > 0) {

      foreach ($scripts as $script) {
        system($script['filename'] . ' ' . $script['params'], $retval);
        echo $retval;
      }
    }

    else {
      echo "Le fichier .sh est manquant ou n'a pas été trouvé.";
    }
  }

  if (DIRECTORY_SEPARATOR == '\\') {

    if (count($scripts) > 0) {

      foreach ($scripts as $script) {
        system($script['filename'] . ' ' . $script['params'], $retval);
        echo $retval;
      }
    }

    else {
      echo "Le fichier .bat est manquant ou n'a pas été trouvé.";
    }
  }


  //Ecrit dans un nouveau fichier si non-défini dans le config json
  foreach ($scripts as $script) {
    file_put_contents( $path['pathTxt'], $script['filename']);
  }

  function files_are_equal($a, $b)
  {
    // Check if filesize is different
    //if(filesize($a) !== filesize($b))
    //return false;

    // Check if content is different
    $ah = fopen($a, 'rb');
    $bh = fopen($b, 'rb');

    $result = true;
    while(!feof($ah))
    {
      if(fread($ah, 8192) != fread($bh, 8192))
      {
        $result = false;
        break;
      }
    }

    fclose($ah);
    fclose($bh);

    return $result;
  }

  //Ecrire une fonction qui permet d'executer les commandes non executées dans
  //le script executé grâce à la comparaison avec le nouveau fichier d'export.

  $file = fopen('online.txt', 'w+');

  $sh=file_get_contents($scripts['filename'])
  or die("Error: Cannot create object");
  foreach($sh->children() as $screenname)
  {
    $nick =  $screenname->screenname;
    fwrite($file, $nick.PHP_EOL);
  }
  fclose($file);



}
else
{
  echo "Le ficher config.json est manquant ou n'a pas été trouvé.";
}


#CONFIG.JSON

Le fichier config.json est rempli en guise d'exemple , veuillez mettre le
chemin de votre script dans filename ainsi que la commande spécifique en
paramètre.

exemple : 

{
  "scripts": [{
    "params": "/var/www/html/drushInstall/vendor/bin/drush",
    "filename": "/var/www/html/drushInstall/script.sh"
  }]
}

si l'on ajoute un fichier avec un script supplémentaire : 

{
  "scripts": [{
    "params": "/var/www/html/drushInstall/vendor/bin/drush",
    "filename": "/var/www/html/drushInstall/script.sh"
  },{
    "params": "/var/www/html/drushInstall/vendor/bin/drush",
    "filename": "/var/www/html/drushInstall/cc.sh"
  }]
}


si l'on ajoute juste un paramètre (commande) supplémentaire pour le même fichier :

{
  "scripts": [{
    "params": "/var/www/html/drushInstall/vendor/bin/drush docker-compose",
    "filename": "/var/www/html/drushInstall/script.sh"
  }]
}



#Script.sh / Script.bat
Les paramétres dans les scripts sh/bat doivent figurer comme-ci : $1 ,$2 ,$3 ,
etc... en fonction de votre configuration json(nombres de paramètres ,filename
dans le tableau).

Exemple : 

   $1 make config/drush/skeleton.make /tmp/drupal-installer && cp -r /tmp/drupal-installer/* src &&
   rm -rf /tmp/drupal-installer &&

   cd ./src &&
   $1 -y en mde_fields &&

   $1 -y en hpw_estimate_fees_paragraph_feature &&

   $1 -y fr hpw_ckeditor_configuration_feature &&
   $1 -y fr hpw_directory_paragraph_feature &&
   $1 -y fr hpw_checklist_paragraph_feature &&
   $1 -y fr hpw_palmares_paragraph_feature

$2


#output.txt

Le fichier output permet de répertorier les différents scripts lancés et ainsi
d'afficher ceux qui ont fonctionner. Si vous voulez relancez les scripts déjà
lancés correctement , videz le fichier output.txt.
rem Ficher .bat pour windows

rem A modifier selon le projet !
rem Se mettre à la racine du projet !

DOSKEY drush = ".\vendor\bin\drush"

drush make config/drush/skeleton.make C:/Utilisateurs/<username>/AppData/Local/Temp/drupal-installer && cp -r C:/Utilisateurs/<username>/AppData/Local/Temp/drupal-installer/* src
   del /f /s /q C:/Utilisateurs/<username>/AppData/Local/Temp/drupal-installer

rem Executer la commande ci-dessous depuis le répertoire « src » dans console (Prerequis drush 8):
   cd ./src
   ../vendor/bin/drush -y en mde_fields

rem Activer le « feature » pour la partie « estimate_fees »
   ../vendor/bin/drush -y en hpw_estimate_fees_paragraph_feature

rem Mis à jour les « feature » manuellement
   ../vendor/bin/drush -y fr hpw_ckeditor_configuration_feature
   ../vendor/bin/drush -y fr hpw_directory_paragraph_feature
   ../vendor/bin/drush -y fr hpw_checklist_paragraph_feature
   ../vendor/bin/drush -y fr hpw_palmares_paragraph_feature
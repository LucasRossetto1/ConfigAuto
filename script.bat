rem Ficher bat pour windows

rem A modifier selon le projet !
rem Ce script est utilisé à terme d'exemple , veuillez remplacer le contenu par votre propre script.

rem ATTENTION ! Lancer ce script avec le git bash ! Ne fonctionne pas en powershell.
rem Ne pas oublier de déclarer les variables d'environnement sur windows si besoin est.

   drush make config/drush/skeleton.make C:/Utilisateurs/%USERNAME%/AppData/Local/Temp/drupal-installer && cp -r C:/Utilisateurs/%USERNAME%/AppData/Local/Temp/drupal-installer/* src
   rm -rf C:/Utilisateurs/%USERNAME%/AppData/Local/Temp/drupal-installer

   cd ./src
   ../vendor/bin/drush -y en mde_fields

   ../vendor/bin/drush -y en hpw_estimate_fees_paragraph_feature

   ../vendor/bin/drush -y fr hpw_ckeditor_configuration_feature
   ../vendor/bin/drush -y fr hpw_directory_paragraph_feature
   ../vendor/bin/drush -y fr hpw_checklist_paragraph_feature
   ../vendor/bin/drush -y fr hpw_palmares_paragraph_feature
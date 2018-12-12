#!/bin/bash

#A modifier selon le projet !
#Ce script est utilisé à terme d'exemple , veuillez remplacer le contenu par votre propre script.

   $1 make config/drush/skeleton.make /tmp/drupal-installer && cp -r /tmp/drupal-installer/* src &&
   rm -rf /tmp/drupal-installer &&

   cd ./src &&
   $1 -y en mde_fields &&

   $1 -y en hpw_estimate_fees_paragraph_feature &&

   $1 -y fr hpw_ckeditor_configuration_feature &&
   $1 -y fr hpw_directory_paragraph_feature &&
   $1 -y fr hpw_checklist_paragraph_feature &&
   $1 -y fr hpw_palmares_paragraph_feature
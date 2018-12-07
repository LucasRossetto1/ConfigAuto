#!/bin/bash

#A modifier selon le projet !
#Se mettre à la racine du projet !

drush make config/drush/skeleton.make /tmp/drupal-installer && cp -r /tmp/drupal-installer/* src
   rm -rf /tmp/drupal-installer

#Executer la commande ci-dessous depuis le répertoire « src » dans console (Prerequis drush 8):
   cd ./src
   ../drush -y en mde_fields

#Activer le « feature » pour la partie « estimate_fees »
   ../drush -y en hpw_estimate_fees_paragraph_feature

#Mis à jour les « feature » manuellement
   ../drush -y fr hpw_ckeditor_configuration_feature
   ../drush -y fr hpw_directory_paragraph_feature
   ../drush -y fr hpw_checklist_paragraph_feature
   ../drush -y fr hpw_palmares_paragraph_feature

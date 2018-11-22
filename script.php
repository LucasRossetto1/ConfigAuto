<?php

     if(file_exists('config.yml')){

        if(file_exists('backupscript.json')){

           if(file_exists('.sh')){
              
           }
           else
           {

           }

           if(file_exists('.sql')){

           }
           else
           {

           }

        }
        else
        {
          echo "Le fichier backupscript.json est manquant ou n'est pas trouvé";
        }
     }
     else
     {
       echo "Le ficher config.yml est manquant ou n'est pas trouvé.";
     }
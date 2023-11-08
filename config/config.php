<?php

// C'est le DSN : Data Source Name qui contient des informations sur la base de données
define('DSN', 'mysql:host=localhost;dbname=dwwm_rentmyride');
// Ne pas utiliser le login root. Il faut personnaliser les privilèges avec un nom d'utilisateur et un mot de passe spécifique
define('LOGIN', 'root');
define('PASSWORD', '');

define('COLUMNS', ['name', 'brand', 'model', 'mileage']);
define('FORMAT_IMAGE', ["image/jpeg"]);
define('MAX_FILESIZE', 5 * 1024 * 1024);
define('NB_RESULTS_PAGE', 10);

<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table('calificaciones')->where('idcalificacion',
 $_GET['id'])->delete();

echo "se actualizo la califiacion con el id: {$_GET['id']}
<a class= 'buttom' href='consultar.php'>volver</a>";
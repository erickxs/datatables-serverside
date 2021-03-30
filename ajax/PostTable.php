<?php

// Requerir el archivo config donde vienen las constantes
require('../app/config.php');
// Requerir el archivo ssp que es el encargado de hacer 
// las peticiones a la base de datos 
require('../vendor/ssp.class.php');

// Datos para la conexión SQL
$sql_details = array(
  'user' => DB_USER,
  'pass' => DB_PASS,
  'db'   => DB_NAME,
  'host' => DB_HOST
);

// Tabla a usar de la base de datos
$table = 'view_posts';

// PrimaryKey de la tabla
$primaryKey = 'id';

// Array de la base de datos que deben leerse y enviarse a DataTables.
// El parámetro db representa el nombre de la columna en la base de datos, mientras que
// parámetro dt representa el identificador de la columna de DataTables.
// parámetro índice que es donde va en la tabla en la vista ej 0, 1, 2, etc...
// formatter será usado para renderizar botones, imágenes, etc...
$columns = array(
  array('db' => 'id', 'dt' => 0),
  array('db' => 'name', 'dt' => 1),
  array('db' => 'slug', 'dt' => 2),
  array(
    'db' => 'status',
    'dt' => 3,
    'formatter' => function ($d, $row) {
      return '<button type="button" class="btn btn-block ' . ($d == 'PUBLISHED' ? 'btn-success' : 'btn-danger') . '" data-id="' . $row['id'] . '">' . ($d == 'PUBLISHED' ? 'PUBLICADO' : 'BORRADOR') . '</button>';
    }
  ),
  array(
    'db' => 'file',
    'dt' => 4,
    'formatter' => function ($d, $row) {
      return '<img src="' . $d . '" style="width:100px">';
    }
  ),
  array('db' => 'author', 'dt' => 5),
  array(
    'db' => 'id',
    'dt' => 6,
    'formatter' => function ($d, $row) {
      $buttons = '<div class="btn-group" role="group" aria-label="Action buttons">
        <button type="button" class="btn btn-primary editBtn" data-id="' . $row['id'] . '"><i class="far fa-edit text-white"></i></button>
        <button type="button" class="btn btn-danger deleteBtn" data-id="' . $row['id'] . '"><i class="fas fa-trash text-white"></i></button>
      </div>';
      return $buttons;
    }
  ),
);

// Ejecución del método
$response = SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns);

// Regresar la respuesta para que DataTables despligue la información
echo json_encode(
  $response
);

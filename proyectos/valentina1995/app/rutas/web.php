<?php

// Definición de rutas de la Aplicación Web

$app->get('/', ['App\Controladores\Iniciocontroladores','paginaInicio'])->setName('inicio');
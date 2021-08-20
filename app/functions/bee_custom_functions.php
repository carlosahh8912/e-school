<?php 

/**
 * La primera función de pruebas del curso de creando el framework MVC
 *
 * @return void
 */
function asset(string $resource) : string {
  return ASSETS.$resource;
}

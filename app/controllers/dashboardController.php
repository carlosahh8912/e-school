<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de dashboard
 */
class dashboardController extends Controller {
  function __construct()
  {
    // Validación de sesión de usuario, descomentar si requerida
    if (!Auth::validate()) {
      Flasher::new('Debes iniciar sesión primero para acceder a este recurso.', 'danger');
      Redirect::to('login');
    }
  }
  
  function index()
  {
    $data = 
    [
      'title' => 'Dashboard',
      'slug' => 'dashboard',
    ];
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }
}
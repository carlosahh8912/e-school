<?php

/**
 * Plantilla general de controladores
 * Versión 1.0.2
 *
 * Controlador de subjects
 */
class subjectsController extends Controller {
  function __construct()
  {
    // Validación de sesión de usuario, descomentar si requerida
    if (!Auth::validate()) {
      Flasher::new('Debes iniciar sesión primero.', 'danger');
      Redirect::to('login');
    }
  }
  
  function index()
  {
    $data = 
    [
      'title' => 'Materias',
      'slug'   => 'subjects',
      'button' => ['url' => 'subjects/create', 'text' => 'Nueva materia',],
      'subjects' => subjectModel::list(subjectModel::$t1)
    ];

    register_styles([asset('plugins/custom/datatables/datatables.bundle.css')], 'datatables CSS');
    register_scripts([asset('plugins/custom/datatables/datatables.bundle.js')], 'datatables JS');
    register_scripts([asset('js/subjects.js')], 'Subjects JS');
    
    // Descomentar vista si requerida
    View::render('index', $data);
  }

  function show($id)
  {
    View::render('show');
  }

  function create()
  {
    $data = 
    [
      'title' => 'Nueva Materia',
      'page' => 'Materias',
      'slug'   => 'subjects',    ];
    View::render('create', $data);
  }

  function store()
  {
    try {
      if(!check_posted_data(['csrf', 'name', 'description'], $_POST) && !Csrf::validate($_POST['csrf'])){
        throw new Exception('Faltan argumentos o los datos son incorrectos');
      }

      $name = clean($_POST['name']);
      $description = clean($_POST['description']);

      if (strlen($name) < 5) {
        throw new Exception('El nombre de la materia debe contener más de 5 caracteres.');
      }

      $data = [
        'name' => $name,
        'description' => $description
      ];

      if (!$id = subjectModel::add(subjectModel::$t1, $data)) {
        throw new Exception('Ocurrio un error en el registro, intentelo nuevamente');
      }

      Flasher::new(sprintf('La materia <b>%s</b> fue registrada exitosamente', $name), 'success');
      Redirect::back();

    } catch (Exception $e) {
      Flasher::new($e->getMessage(), 'danger');
      Redirect::back();
    } catch (PDOException $e) {
      Flasher::new($e->getMessage(), 'danger');
      Redirect::back();
    }
  }

  function edit($id)
  {
    View::render('edit');
  }

  function put()
  {

  }

  function destroy($id)
  {
    // Proceso de borrado
  }
}
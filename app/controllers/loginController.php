<?php 

class loginController extends Controller {
  function __construct()
  {
    if (Auth::validate()) {
      Flasher::new('Ya hay una sesión abierta.');
      Redirect::to('home/flash');
    }
  }

  function index()
  {
    $data =
    [
      'title'   => 'Login | E-School',
    ];
    View::render('index', $data);
  }

  function post_login()
  {
    if (!Csrf::validate($_POST['csrf']) || !check_posted_data(['email','csrf','password'], $_POST)) {
      Flasher::new('Acceso no autorizado.', 'danger');
      Redirect::back();
    }

    // Data pasada del formulario
    $email  = clean($_POST['email']);
    $password = clean($_POST['password']);

    // Información del usuario loggeado, simplemente se puede reemplazar aquí con un query a la base de datos
    // para cargar la información del usuario si es existente
    $user = 
    [
      'id'       => 123,
      'name'     => 'Bee Default',
      'email'    => 'carlos@gmail.com',
      'avatar'   => 'myavatar.jpg',
      'tel'      => '11223344',
      'color'    => '#112233',
      'user'     => 'bee',
      'password' => '$2y$12$FgwVsM/FL4OOZbaBp0fb1eTl8zDFXt4mVgAv/tjGYw1gFUf56ttTK'
    ];


    if ($email !== $user['email'] || !password_verify($password.AUTH_SALT, $user['password'])) {
      Flasher::new('Las credenciales no son correctas.', 'danger');
      Redirect::back();
    }

    // Loggear al usuario
    Auth::login($user['id'], $user);
    Redirect::to('home/flash');
  }
}
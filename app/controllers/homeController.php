<?php 

class homeController extends Controller {
  function __construct()
  {
  }

  function index()
  {
    $data =
    [
      'title' => 'Home',
      'bg'    => 'dark'
    ];

    register_to_bee_obj('bee_var', 'Súper Bee Var');

    View::render('bee', $data);
  }

  function pdf()
  {
    try {
      $content = '<!DOCTYPE html>
      <html>
      <head>
      <style>
      code {
        font-family: Consolas,"courier new";
        color: crimson;
        background-color: #f1f1f1;
        padding: 2px;
        font-size: 80%%;
        border-radius: 5px;
      }
      </style>
      </head>
      <body>
  
      <img src="%s" alt="%s" style="width: 100px;"><br>
  
      <h1>Bienvenido de nuevo a %s</h1>
      <p>Versión <b>%s</b></p>
      
      <code>
      // Método 1
      $content = "Contenido del documento PDF, puedes usar cualquier tipo de HTML e incluso la mayoría de estilos CSS3";
      $pdf     = new BeePdf($content); // Se muestra directo en navegador, para descargar pasar en parámetro 2 true y para guardar en parámetro 3 true
  
      // Método 2
      $pdf = new BeePdf();
      $pdf->create("bee_pdfs", $content);
      </code>
  
      </body>
      </html>';
      $content = sprintf($content, get_image('bee_logo.png'), get_bee_name(), get_bee_name(), get_bee_version());
  
      // Método 1
      $pdf = new BeePdf($content); // Se muestra directo en navegador, para descargar pasar en parámetro 2 true y para guardar en parámetro 3 true
  
      // Método 2
      //$pdf = new BeePdf();
      //$pdf->create('bee_pdfs', $content);

    } catch (Exception $e) {
      Flasher::new($e->getMessage(), 'danger');
      Redirect::to('home');
    }

  }

  function test()
  {
    $opciones = [
      'cost' => 12,
    ];
  echo password_hash("123456".AUTH_SALT, PASSWORD_BCRYPT, $opciones);
  }

  function email()
  {
    try {
      $email   = 'jslocal2@localhost.com';
      $subject = 'El asunto del correo';
      $body    = 'El cuerpo del mensaje, puede ser html o texto plano.';
      $alt     = 'El texto corto del correo, preview del contenido.';
      send_email(get_siteemail(), $email, $subject, $body, $alt);
      echo sprintf('Correo electrónico enviado con éxito a %s', $email);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  function flash()
  {
    parent::auth();

    View::render('flash', ['title' => 'Flash', 'user' => User::profile()]);
  }

  function gastos()
  {
    View::render('gastos');
  }

  function yumi()
  {
    View::render('yumi');
  }
}
<?php

namespace Project\Controllers;
use Core\Controller;
use Project\Models\Users;

class ErrorController extends Controller
{
  public function notFound()
  {


    $this->title = '404';
    return $this->render('notFound');
  }
}

?>

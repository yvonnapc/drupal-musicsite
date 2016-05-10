<?php

namespace Drupal\welcome\Controller;

class WelcomeController {
  public function welcome(){
      return array(
            '#title' => 'Welcome',
            '#markup' => 'Welcome to our page',
      );
  }
}

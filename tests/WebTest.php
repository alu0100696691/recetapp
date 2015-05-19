<?php
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/laravel/recetapp/public/');
    }

    //Test para el correcto funcionamiento de los enlaces del menu
    public function testMenu()
    {
        $this->url('http://localhost/laravel/recetapp/public/');
        $this->assertEquals('HOME', $this->title());
        $this->url('http://localhost/laravel/recetapp/public/about');
        $this->assertEquals('ABOUT', $this->title());
        $this->url('http://localhost/laravel/recetapp/public/recipes');
        $this->assertEquals('RECIPES', $this->title());
        $this->url('http://localhost/laravel/recetapp/public/calendar');
        $this->assertEquals('CALENDAR', $this->title());
        $this->url('http://localhost/laravel/recetapp/public/contact');
        $this->assertEquals('CONTACT', $this->title());
        $this->url('http://localhost/laravel/recetapp/public/login');
        $this->assertEquals('LOGIN', $this->title());
    }

    //Test pagina contacto
    public function testContact()
    {
      $this->url('http://localhost/laravel/recetapp/public/contact');

      // crear un objeto del formulario
      $form = $this->byId( 'contact' );

      $name = $this->byName( 'name' );
      $email = $this->byName( 'email' );
      $message = $this->byName( 'msg' );
      $submit = $this->byName( 'submit_button' );

      $this->assertEquals( '', $name->value() );
      $this->assertEquals( '', $email->value() );
      $this->assertEquals( '', $submit->value() );
      $this->assertEquals( '', $message->value() );

      // llenar los campos del formulario
      $this->byName( 'name' )->value( 'Kevin Waterson' );
      $this->byName( 'email' )->value( 'kevin@example.com' );
      $this->byName( 'msg' )->value( 'A new message' );

      // submit el formulario
      $form->submit();

      // check si el formulario fue enviado
      $success = $this->byCssSelector('p')->text();

      // check el valor del mensaje alerta
      $this->assertEquals( 'Mail sent to Recetapp!', $success );

    }

    //Test login de usuarios
    public function testLogin()
    {
        $this->url('http://localhost/laravel/recetapp/public/login');

        // crear un objeto del formulario
        $form = $this->byId( 'login' );

        // llenar los campos del formulario
        $this->byName( 'email' )->value( 'tony@gmail.com' );
        $this->byName( 'password' )->value( '123456' );

        // submit el formulario
        $form->submit();

        // check si el formulario fue enviado
        $success = $this->byCssSelector('p')->text();

        // check el valor del mensaje alerta
        $this->assertEquals( 'your login was successful!', $success );

    }

}
?>

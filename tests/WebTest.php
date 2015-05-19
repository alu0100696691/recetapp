<?php
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/laravel/recetapp/public/');
    }

    public function testTitle()
    {
        $this->url('http://localhost/laravel/recetapp/public/');
        $this->assertEquals('HOME', $this->title());
    }

}
?>

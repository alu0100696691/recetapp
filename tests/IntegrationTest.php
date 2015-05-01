<?php

require_once '/opt/lampp/htdocs/laravel/goutte.phar';
use Goutte\Client;

class paginaLogin extends TestCase
{	
    	public function testIndex() {
		$client = new Client();
    		$crawler = $client->request('GET', 'http://localhost/laravel/recetapp/public/home');
    		$this->assertEquals('Laravel', $crawler->filter('title')->text());
  	}
}


<?php 

use App\Http\Controllers\Controller;
use App\Models\Usuario;


class UsuariosTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		
		$response = $this->action('GET', 'HomeController@index');		
		$this->assertEquals(302, $response->getStatusCode());
					
	}

}

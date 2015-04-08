<?php

class UsuariosTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', 'login');        	
		$this->assertFalse($response->isOk());
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioReceta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarioReceta', function($table)	{

			$table->increments('id');

			$table->integer('users_id'); // the id of the bear
			$table->integer('receta_id'); // the id of the picnic that this bear is at

			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarioReceta');
	}

}

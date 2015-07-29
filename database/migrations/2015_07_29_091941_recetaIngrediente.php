<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecetaIngrediente extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recetaIngrediente', function($table)	{

			$table->increments('id');

			$table->integer('ingrediente_id');
			$table->integer('receta_id');
			$table->float('cantidad');

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
		Schema::drop('recetaIngrediente');
	}

}

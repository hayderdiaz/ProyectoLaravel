<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tab_usuarios', function(Blueprint $table)
		{
			$table->string('id_usuario', 10)->primary('tab_usuarios_pkey');
			$table->decimal('id_perfil', 5, 0);
			$table->string('nom_usuario', 20);
			$table->string('pwd_usuario');
			$table->boolean('ind_estado')->default(1);
			$table->string('usr_insert', 20);
			$table->dateTime('fec_insert')->default('now()');
			$table->string('usr_update', 20)->nullable();
			$table->dateTime('fec_update')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tab_usuarios');
	}

}

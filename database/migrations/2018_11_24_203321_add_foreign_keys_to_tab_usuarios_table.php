<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTabUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tab_usuarios', function(Blueprint $table)
		{
			$table->foreign('id_perfil', 'tab_usuarios_id_perfil_fkey')->references('id_perfil')->on('tab_perfiles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tab_usuarios', function(Blueprint $table)
		{
			$table->dropForeign('tab_usuarios_id_perfil_fkey');
		});
	}

}

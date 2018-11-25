<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabFacturasDetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tab_facturas_det', function(Blueprint $table)
		{
			$table->decimal('id_consec', 10, 0)->primary('tab_facturas_det_pkey');
			$table->decimal('id_c_factura', 10, 0);
			$table->decimal('id_insumo', 15, 0);
			$table->string('tip_insumo', 10);
			$table->decimal('id_almacen', 2, 0);
			$table->decimal('val_cantidad', 5, 0);
			$table->decimal('val_cant_act', 5, 0);
			$table->decimal('val_cant_dev', 5, 0)->default(0);
			$table->decimal('val_unidad', 10, 0);
			$table->decimal('val_bruto', 10, 0);
			$table->decimal('iva', 2, 0);
			$table->decimal('val_iva', 10, 0);
			$table->decimal('val_neto', 10, 0);
			$table->smallInteger('descuento');
			$table->decimal('v_descuento', 10, 0);
			$table->decimal('val_kardex', 10, 0);
			$table->boolean('ind_insumo');
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
		Schema::drop('tab_facturas_det');
	}

}

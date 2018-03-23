<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateConfiguracaosTable.
 */
class CreateConfiguracaosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configuracao', function(Blueprint $table) {
			$table->increments('id');
			$table->string('usuario_windows')->nullable();
			$table->string('senha_windows')->nullable();
			$table->string('usuario_linux')->nullable();
			$table->string('senha_linux')->nullable();
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
		Schema::drop('configuracaos');
	}
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateHostsTable.
 */
class CreateHostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hosts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('hostname')->nullable();
			$table->string('ip');
			$table->string('mac')->nullable();
			$table->string('so')->nullable();
			$table->string('setor')->nullable();
			$table->string('usuario')->nullable();
			$table->string('tipo')->nullable();
			$table->string('estado')->nullable();
			$table->string('hd')->nullable();
			$table->string('ram')->nullable();
			$table->string('placa_mae')->nullable();
			$table->string('modelo')->nullable();
			$table->string('marca')->nullable();
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
		Schema::drop('hosts');
	}
}

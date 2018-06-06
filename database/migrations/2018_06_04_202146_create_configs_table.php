<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateConfigsTable.
 */
class CreateConfigsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configs', function(Blueprint $table) {
            $table->increments('id');

			$table->string('rede')->nullable();
			$table->string('range')->nullable();
			$table->string('ignore')->nullable();

			$table->string('win_user');
			$table->string('win_pass');

			$table->string('lin_user');
			$table->string('lin_pass');

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
		Schema::drop('configs');
	}
}

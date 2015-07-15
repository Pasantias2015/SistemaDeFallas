<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFallasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fallas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion')->unique();
			
			$table->integer('id_categoriatipo')->unsigned(); 
			$table->foreign('id_categoriatipo')->references('id')->on('categoria_tipos');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fallas');
	}

} 

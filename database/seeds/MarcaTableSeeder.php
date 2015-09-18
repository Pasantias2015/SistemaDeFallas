<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class MarcaTableSeeder extends Seeder
{
	public function run()
	{
			\DB::table('marcas')->insert(array ('id'=>1, 'nombre'=>'Yutong'));
			\DB::table('marcas')->insert(array ('id'=>2,'nombre'=>'Neoplan'));
	}
}

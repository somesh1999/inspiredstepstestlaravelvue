<?php

use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
			["category_name"=>"Cinema / Film"],
			["category_name"=>"Music"],
			["category_name"=>"Dance"],
			["category_name"=>"Photography"],
			["category_name"=>"Fashion"],
			["category_name"=>"Advertising"],
			["category_name"=>"Acting"],
			["category_name"=>"Model"],
			["category_name"=>"Theater"],
			["category_name"=>"Design"],
			["category_name"=>"New Media"],
			["category_name"=>"Writers"],
			["category_name"=>"Performance"],
			["category_name"=>"Hair & makeUp"],
			["category_name"=>"Other"]
		]);
    }
}

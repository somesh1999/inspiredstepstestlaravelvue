<?php

use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
			["plan_name"=>"Basic", "plan_amount" => 0, "plan_symbol"=>'', "plan_color"=>'#3498DB'],
			["plan_name"=>"Premium", "plan_amount" => 495, "plan_symbol"=>'fa fa-diamond', "plan_color"=>'#28B463'],
		]);
    }
}

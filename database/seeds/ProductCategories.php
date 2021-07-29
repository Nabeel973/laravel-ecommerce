<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert(array(
            array('id' => 1, 'name' => 'Mobile'),
            array('id' => 2, 'name' => 'TV'),
            array('id' => 3, 'name' => 'Fridge'),
            array('id' => 4, 'name' => 'Laptop'),

        ));
    }
}

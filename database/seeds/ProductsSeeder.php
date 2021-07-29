<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   DB::table('products')->truncate();
        DB::table('products')->insert(array(
            array('id' => 1, 'name' => 'LG Mobile','category' => 1, 'description' =>'This is some new Mobile','image' => "https://www.lg.com/in/images/plp-b2c/New-2020-Mobiel-banner/category-wing-category-M-v2.jpg"),
            array('id' => 2, 'name' => 'LG TV', 'category' => 2, 'description' =>'This is some new TV','image' => "https://radiotvcentre.pk/wp-content/uploads/2020/03/65C9PUA-LG-LED-TV-min.jpg"),
            array('id' => 3, 'name' => 'LG Fridge','category' => 3, 'description' =>'This is some new Fridge','image' => "https://i.ytimg.com/vi/y-CHL1_HJIo/maxresdefault.jpg")
            )
        );


    }
}

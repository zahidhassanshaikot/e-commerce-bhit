<?php

use Illuminate\Database\Seeder;

class SubSubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $infos=[
            [
                'sub_sub_menu_name' => 'Dresses',
                'sub_menu_id' => '1',
                'status' => '1',
            ],
            [
                'sub_sub_menu_name' => 'Shoes',
                'sub_menu_id' => '1',
                'status' => '1',
            ],
            [
                'sub_sub_menu_name' => 'Sunglasses',
                'sub_menu_id' => '1',
                'status' => '1',
            ],
            [
                'sub_sub_menu_name' => 'Shirt',
                'sub_menu_id' => '1',
                'status' => '1',
            ],
            [
                'sub_sub_menu_name' => 'Shoes',
                'sub_menu_id' => '2',
                'status' => '0',
            ],
            [
                'sub_sub_menu_name' => 'Handbegs',
                'sub_menu_id' => '2',
                'status' => '1',
            ],
            [
                'sub_sub_menu_name' => 'Tops',
                'sub_menu_id' => '2',
                'status' => '1',
            ]
     

        ];
    
        DB::table('sub_sub_menus')->insert($infos);
    }
}

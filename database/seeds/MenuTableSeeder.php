<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
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
                'menu_name' => 'Cloth',
                'status' => '1',
            ],
            [
                'menu_name' => 'Sport',
                'status' => '1',
            ],
            [
                'menu_name' => 'Health & Beauty',
                'status' => '1',
            ],
            [
                'menu_name' => 'Kids & Babies',
                'status' => '1',
            ],
            [
                'menu_name' => 'Shoes',
                'status' => '1',
            ]
     

        ];
    
        DB::table('menus')->insert($infos);
    }
}

<?php

use Illuminate\Database\Seeder;

class SubMenuTableSeeder extends Seeder
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
                'sub_menu_name' => 'Men',
                'menu_id' => '1',
                'status' => '1',
            ],
            [
                'sub_menu_name' => 'Women',
                'menu_id' => '1',
                'status' => '1',
            ],
            [
                'sub_menu_name' => 'Boys',
                'menu_id' => '1',
                'status' => '1',
            ],
            [
                'sub_menu_name' => 'Grils',
                'menu_id' => '1',
                'status' => '1',
            ]
     

        ];
    
        DB::table('sub_menus')->insert($infos);
    }
}

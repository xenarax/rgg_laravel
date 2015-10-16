<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $items = [
            array(
                'title' => 'Default',
                'description' => 'Default',
                'status' => 0
            ),
            array(
                'title' => 'Default 2',
                'description' => 'Default 2',
                'status' => 1
            ),
        ];
        //
        DB::table('items')->insert($items);
    }
}

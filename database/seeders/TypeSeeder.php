<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'name' => '家事',
            ],
            [
                'name' => '勉強',
            ],
            [
                'name' => '運動',
            ],
            [
                'name' => '食事',
            ],
            [
                'name' => '移動',
            ],
        ]);
    }
}

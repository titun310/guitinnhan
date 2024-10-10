<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    public function run()
    {
        DB::table('groups')->insert([
            ['name' => 'Marketing'],
            ['name' => 'Sales'],
            ['name' => 'Development'],
            ['name' => 'Design'],
            ['name' => 'Customer Support'],
        ]);
    }
}
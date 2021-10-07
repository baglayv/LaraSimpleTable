<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Создаю 10 записей в таблице
        \App\Models\Table::factory()->count(10)->create();
    }
}

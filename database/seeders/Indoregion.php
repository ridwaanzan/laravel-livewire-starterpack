<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Indoregion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        exec("php artisan db:seed --class=IndoRegionSeeder");
    }
}

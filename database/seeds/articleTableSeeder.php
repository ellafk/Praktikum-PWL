<?php

use Illuminate\Database\Seeder;

class articleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\article::class, 5)->create();
    }
}

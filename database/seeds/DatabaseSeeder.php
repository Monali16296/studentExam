<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
         * we can also define classes here so can use command
         * php artisan db:seed
         */
         $this->call(UserTableSeeder::class);
    }
}

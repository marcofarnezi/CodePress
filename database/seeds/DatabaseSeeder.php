<?php

use Illuminate\Database\Seeder;
use CodePress\CodeCategory\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        factory(Category::class, 5)->create();
    }
}

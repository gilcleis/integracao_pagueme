<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        //\App\Product::factory()->count(20)->create(); 
        \App\Models\Product::factory(50)->create();
    }
}

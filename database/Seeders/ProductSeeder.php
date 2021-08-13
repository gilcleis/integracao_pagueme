<?php
namespace Database\Seeders;
use App\Product;
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
      
        \App\Product::factory()->count(20)->create(); 
    }
}

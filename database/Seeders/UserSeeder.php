<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        $dados = User::create([
            "id" => 1,
            "name" => "Administrador",
            "email" => "admin@admin.com",
            "cpf" => "04354813556",
            "rg" => "",
            "birth_date" => null,
            "genre" => "male",
            "phone" => "1687296246",
            "cell" => "77777777777",
            "cover" => null,
            "street" => "rua nova",
            "number" => "918",
            "complement" => "Quia harum officia p",
            "zip_code" => "42800921",
            "district" => "Teste",
            "city" => "Salvador",
            "state" => "BA",
            "country" => "Laborum Cum magni q",
            "password" => ('123456'),
            //"password" => '$2y$10$wAmA/JSgYUJjufYsYF3Z3eIN7dTBXOpeYOMurfEABBiE/0XyvX.Fi', // password
            "is_admin" => true,
            "remember_token" => null,
            "pagarme_id" => null

        ]);
        return $dados;
    }
}

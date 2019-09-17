<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $configs = [
            [
                'name' => 'Administrador Teste',
                'email' => "admin@admin.com",
                'password' => bcrypt('admin'),
                'departamento_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('users')->insert($configs);
    }
}

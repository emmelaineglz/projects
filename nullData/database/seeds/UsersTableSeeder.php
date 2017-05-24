<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'id' => (string)Uuid::uuid4(),
          'name' => 'Administrador',
          'email' => 'admin@nuldata.com.mx',
          'password' => bcrypt('Admin2017$'),
          'created_at' => \Carbon\Carbon::now(),
      ]);
    }
}

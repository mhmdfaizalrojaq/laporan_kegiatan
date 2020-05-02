<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'rnldiptra12@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('rinaldiputra'),
            ],
            [
                'name'=>'orangtua1',
                'email'=>'orangtua1@gmail.com',
                 'is_admin'=>'1',
                'password'=> bcrypt('orangtua1'),
             ],
            [
               'name'=>'siswa1',
               'email'=>'siswa1@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('siswa1'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
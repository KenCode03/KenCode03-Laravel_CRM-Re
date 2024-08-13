<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::でDBテーブルにアクセス可能
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.com',
            //パスワードは暗号化しないと登録ができない為、Hash::makeを使用
            'password' => Hash::make('password123'),
        ]);
    }
}
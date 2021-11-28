<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function genereteRandom($length = 17)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'user@ppob.com',
            'username' => 'user',
            'password' => Hash::make('user'),
            'balance' => '100000',
            'level' => 'Member',
            'status' => 'Active',
            'status_akun' => 'Sudah Verifikasi',
            'pin' => '1108200',
            'api_key' => $this->genereteRandom(),
            'kode_referral' => $this->genereteRandom(),
        ]);
    }
}

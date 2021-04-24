<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "[-] Menambahkan data seeder dummy user";

        $user = new User();

        $user->name = "prasetya";
        $user->username = "prasetya098";
        $user->email = "prasetya098@gmail.com";
        $user->password = "prasetya098";
        $user->avatar = "NO IMAGE";

        $user->save();

        echo "[+] Penambahan Data Sukses";
    }
}

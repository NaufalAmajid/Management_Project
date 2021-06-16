<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Kontak::insert([
            'kontak' => '089523041741',
            'jadwal' => '16.00',
            'lokasi' => 'makamhaji',
            'email' => 'kafe@ndeso',
        ]);
    }
}

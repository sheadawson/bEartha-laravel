<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Device;
use App\Models\User;
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
        $user = User::factory()->create([
            'name' => 'Shea',
            'email' => 'shea@communitycompost.co.nz',
        ]);

        $macey = new Device([
            'name' => 'Macey',
            'user_id' => $user->id
        ]);
        $macey->save();

        $goodall = new Device([
            'name' => 'Goodall',
            'user_id' => $user->id
        ]);

        $goodall->save();
    }
}

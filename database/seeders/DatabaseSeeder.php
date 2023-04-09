<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@bitboss.it',
            'is_admin'=>true,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => \Str::random(10),
        ]);

        User::factory(20)
            ->has(Application::factory()->count(1)->state(new Sequence(
                ['status' => Status::Accettato],
                ['status' => Status::Scartato]
            )))
            ->create();

        User::factory(5)
            ->has(Application::factory()->count(1)->state(new Sequence(
                ['status' => Status::Pendente]
            )))
            ->create();
    }
}

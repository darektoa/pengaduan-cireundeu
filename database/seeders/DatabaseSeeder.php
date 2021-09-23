<?php

namespace Database\Seeders;

use App\Models\{
    User,
    Admin,
    Reporter,
    Response,
    Complaint, 
    ComplaintImage,
};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() 
    {
        $this->call([
            UserSeeder::class,
            ComplaintStatusSeeder::class
        ]);


        // Fake Reporters
        $complaint = Complaint::factory()
            ->count(2);

        $reporter = Reporter::factory()
            ->count(1)
            ->has($complaint);

        User::factory()
            ->count(15)
            ->has($reporter)
            ->create();


        // Fake Admins
        $admin = Admin::factory()
            ->count(1)
            ->hasResponses(Complaint::count());

        User::factory()
            ->count(2)
            ->has($admin)
            ->create();

    }
}

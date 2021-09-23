<?php

namespace Database\Seeders;

use App\Models\ComplaintStatus;
use Illuminate\Database\Seeder;

class ComplaintStatusSeeder extends Seeder
{
    public function run()
    {
        ComplaintStatus::create(['name' => 'pending']);
        ComplaintStatus::create(['name' => 'responded']);
        ComplaintStatus::create(['name' => 'processed']);
        ComplaintStatus::create(['name' => 'finished']);
        ComplaintStatus::create(['name' => 'spam']);
    }
}

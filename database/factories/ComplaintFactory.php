<?php

namespace Database\Factories;

use App\Models\{Reporter, Complaint};
use Database\Seeders\ComplaintStatusSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    protected $model = Complaint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $reporters  = Reporter::all();
        $randIndex  = rand(0, $reporters->count()-1);
        $reporterId = $reporters[$randIndex]->id;

        return [
            'reporter_id'           => $reporterId,
            'complaint_status_id'   => 1,
            'complaint'             => $this->faker->text(300),
            'anonym'                => rand(0, 1),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\{
    Admin,
    Response,
    Complaint
};
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponseFactory extends Factory
{
    protected $model = Response::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $admin      = Admin::inRandomOrder()->first();
        $complaint  = Complaint::inRandomOrder()->first();

        return [
            'admin_id'      => $admin->id,
            'complaint_id'  => $complaint->id,
            'response'      => $this->faker->text(300)
        ];
    }
}

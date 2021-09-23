<?php

namespace Database\Factories;

use App\Models\{
    Complaint,
    ComplaintImage
};
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintImageFactory extends Factory
{
    protected $model = ComplaintImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $complaint = Complaint::inRandomOrder()->first();

        return [
            'complaint_id'  => $complaint->id,
            'image_id'      => 'https://source.unsplash.com/1080x720/?broke,building,broken'
        ];
    }
}

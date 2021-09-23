<?php

namespace Database\Factories;

use App\Models\{
    Response,
    ResponseImage
};
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponseImageFactory extends Factory
{
    protected $model = ResponseImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $response   = Response::inRandomOrder()->first();

        return [
            'response_id'   => $response->id,
            'url'           => 'https://source.unsplash.com/1080x720/?broke,building,broken'
        ];
    }
}

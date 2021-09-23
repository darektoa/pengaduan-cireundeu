<?php

namespace Database\Factories;

use App\Models\{User, Gender};
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genderId   = rand(1, 2);
        $gender     = Gender::find($genderId)->name;

        return [
                'photo_id'          => 1,
                'gender_id'         => $genderId,
                'first_name'        => $this->faker->firstName($gender),
                'last_name'         => $this->faker->lastName(),
                'username'          => $this->faker->userName(),
                'email'             => $this->faker->unique()->freeEmail(),
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'active'            => 1,
                'remember_token'    => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

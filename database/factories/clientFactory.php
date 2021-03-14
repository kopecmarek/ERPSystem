<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class clientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->company, //company name or name and surname
            'email' => $this->faker->companyEmail,
            'address' => [
                'town' => $this->faker->city,
                'street' => $this->faker->streetName,
                'house_number' => $this->faker->biasedNumberBetween(1,40),
                'apartment_number' => $this->faker->biasedNumberBetween(1,35),
                'zip_code' => $this->faker->postcode,
            ],
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Institutional;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstitutionalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Institutional::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'user_id'=> $this->faker->randomDigitNotNull,
            'phone' => $this->faker->word,
            'address' => $this->faker->word,
            'npwp' => $this->faker->word,
            'file' => $this->faker->word,
            'active' => $this->faker->word,
            'status' => $this->faker->randomDigitNotNull,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

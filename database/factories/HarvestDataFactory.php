<?php

namespace Database\Factories;

use App\Models\HarvestData;
use App\Models\Subdistrict;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HarvestData>
 */
class HarvestDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HarvestData::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'year' => $this->faker->year(),
            'land_area' => $this->faker->randomFloat(1, 100, 15000),
            'harvested_area' => $this->faker->randomFloat(1, 100, 15000),
            'productivity' => $this->faker->randomFloat(2, 40, 60),
            'yield' => $this->faker->randomFloat(4, 500, 600_000),
            'subdistrict_id' => Subdistrict::select('id')->get()->random()->id,
        ];
    }
}

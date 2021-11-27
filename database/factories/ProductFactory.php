<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imgPath = $this->faker->image(storage_path('app/public/uploads/products'), $width = 640, $height = 480, 'cats', false);
        return [
            "name" => $this->faker->name(),
            "cate_id" => Category::all()->random()->id,
            "brand_id" => Brand::all()->random()->id,
            "image" => "uploads/products/" . $imgPath,
            "price" => rand(1500, 2000),
            "quantity" => rand(1, 200),
            "view" => rand(1, 200),
            "sale" => rand(1, 50),
            "description" => $this->faker->text(),
            "status" => rand(0, 1)
        ];
    }
}

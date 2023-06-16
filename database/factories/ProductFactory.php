<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'imageUrl' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
            'description' => fake()->paragraph(1),
            'link' => 'https://shopee.co.id/Jual-Kipas-Angin-Berdiri-16-Stand-Fan-16-Inch-Sanex-Fs-884-Fs-899-Terlaris-!-Diskon-!-Terbaru-!-i.222581583.5584259433',
            'price' => rand(10000, 100000),
            'rating' => rand(1,5)
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Wishlist;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();

        if (empty($userIds) || empty($productIds)) {
            return;
        }

        for ($i = 0; $i < 3; $i++) {
            Wishlist::create([
                'user_id' => $userIds[array_rand($userIds)],
                'product_id' => $productIds[array_rand($productIds)],
            ]);
        }
    }
}

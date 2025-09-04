<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Post;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(ProductsTableSeeder::class);
        // Create users
        $users = \App\Models\User::factory()->count(100)->create();

        // Create posts for each user
        $users->each(function ($user) {
            \App\Models\Post::factory()->count(2)->create([
                'user_id' => $user->id
            ]);
        });

        // Add comments to random posts by random users
        $users->each(function ($user) use ($users) {
            \App\Models\Comment::factory()->count(7)->create([
                'user_id' => $user->id,
                'post_id' => \App\Models\Post::inRandomOrder()->first()->id
            ]);
        });

        // Create orders for each user
        $users->each(function ($user) {
            $orders = Order::factory()->count(3)->create([
                'user_id' => $user->id
            ]);
            // Create order items for each order
            $orders->each(function ($order) {
                OrderItem::factory()->count(4)->create([
                    'order_id' => $order->id
                ]);
            });
        });
    }
}

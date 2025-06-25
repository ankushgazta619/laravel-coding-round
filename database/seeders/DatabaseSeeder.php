<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductsTableSeeder::class);
        // User::factory(100)->create()->each(function ($user) {
        //     Order::factory(rand(5, 10))->create([
        //         'user_id' => $user->id,
        //     ])->each(function ($order) {
        //         $total = 0;
        //         $items = OrderItem::factory(rand(2, 5))->make(); // make, not create
        //         foreach ($items as $item) {
        //             $item->order_id = $order->id;
        //             $item->save(); // inserting into DB
        //             $total += $item->quantity * $item->unit_price;
        //         }
        //         $order->update(['total_amount' => $total]);
        //     });
        // });
    }
}

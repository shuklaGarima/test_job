<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Girls Top',
           'description' => 'Pink color top',
           'photo' => 'https://static.hopscotch.in/fstatic/product/202008/eb075803-f91e-4af1-916b-3d17e8298c2e_full.jpg?version=1596544591624&tr=w-720,c-at_max,n-normal',
           'price' => 499.00,
           'in_stock' => '1',
           'quantity' => '10',
           'color' => 'Pink',
           'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
 
        DB::table('products')->insert([
            'name' => 'T-shirt',
            'description' => 'Kids t-shirt',
            'photo' => 'https://static.hopscotch.in/fstatic/product/201906/9f7c13d7-8924-40a6-9edf-4cd9b9378af3_full.jpg?version=1560655998127&tr=w-720,c-at_max,n-normal',
            'price' => 544.00,
            'in_stock' => '1',
            'quantity' => '5',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
 
        DB::table('products')->insert([
            'name' => 'BABA suit',
            'description' => 'New collection',
            'photo' => 'https://ae01.alicdn.com/kf/HTB1aTHvNpzqK1RjSZFvq6AB7VXaT/Baby-Boy-Clothes-Boys-Clothing-Set-Shirt-Pants-Long-Sleeve-Shirt-Gentleman-Two-Suits-Bow-Tie.jpg_q50.jpg',
            'price' => 1400.00,
            'in_stock' => '1',
            'quantity' => '4',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
 
        DB::table('products')->insert([
            'name' => 'Blue dress',
            'description' => 'Blue color dress',
            'photo' => 'https://static.hopscotch.in/fstatic/product/201711/e5773f70-3e71-4c3d-962c-24b701ff7895_full.jpg?version=1511423839845&tr=w-720,c-at_max,n-normal',
            'price' => 1159.99,
            'in_stock' => '1',
            'quantity' => '8',
            'color' => 'Blue',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
 
        DB::table('products')->insert([
            'name' => 'Kids dress',
            'description' => 'kids dress',
            'photo' => 'https://static.hopscotch.in/fstatic/product/201811/f5891b88-2b12-4c1c-9b6a-dc8a629305d1_full.jpg?version=1541055393348&tr=w-720,c-at_max,n-normal',
            'price' => 968.00,
            'in_stock' => '1',
            'quantity' => '6',
            'color' => 'yellow',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
 
        DB::table('products')->insert([
            'name' => 'Doll Print Full Sleeves Top and Leggings Set - Yellow',
            'description' => 'Doll Print Full Sleeves Top and Leggings Set - Yellow',
            'photo' => 'https://static.hopscotch.in/fstatic/product/201908/ec3cf1ef-71fb-4907-801a-6c9af5b13f1a_full.jpg?version=1567160622312&tr=w-720,c-at_max,n-normal',
            'price' => 1229.99,
            'in_stock' => '1',
            'quantity' => '14',
            'color' => 'yellow',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Navy Cold Shoulder Applique Casual Dress',
            'description' => 'Navy Cold Shoulder Applique Casual Dress',
            'photo' => 'https://static.hopscotch.in/fstatic/product/202008/eb075803-f91e-4af1-916b-3d17e8298c2e_full.jpg?version=1596544591624&tr=w-720,c-at_max,n-normal',
            'price' => 1529.99,
            'in_stock' => '1',
            'quantity' => '10',
            'color' => 'Blue',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'All Over Print Sleeveless Red Dress',
            'description' => 'All Over Print Sleeveless Red Dress',
            'photo' => 'https://static.hopscotch.in/fstatic/product/201905/a7bd07e6-6f04-47b5-a023-52f30aede0dd_full.jpg?version=1559128302352&tr=w-720,c-at_max,n-normal',
            'price' => 1229.99,
            'in_stock' => '1',
            'quantity' => '9',
            'color' => 'Red',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Baby boys outfit',
            'description' => 'Baby boys outfit',
            'photo' => 'https://m.media-amazon.com/images/I/81vHbQ-TjyL._AC_SR700,525_.jpg',
            'price' => 1229.99,
            'in_stock' => '1',
            'quantity' => '8',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Fuchsia Text Print Cold Shoulder Sleeves Top And Short Set',
            'description' => 'Fuchsia Text Print Cold Shoulder Sleeves Top And Short Set',
            'photo' => 'https://static.hopscotch.in/fstatic/product/201904/2690c339-6b9f-4542-a4b7-fd411edad921_full.jpg?version=1555504550098&tr=w-720,c-at_max,n-normal',
            'price' => 730.00,
            'in_stock' => '1',
            'quantity' => '6',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Polka Dots Half Sleeves White Top and Skirt Set',
            'description' => 'Polka Dots Half Sleeves White Top and Skirt Set',
            'photo' => 'https://static.hopscotch.in/fstatic/product/202003/e9d23ef8-4fb2-483c-9600-eb6fd58c00c0_full.jpg?version=1583499083272&tr=w-720,c-at_max,n-normal',
            'price' => 600,
            'in_stock' => '1',
            'quantity' => '15',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Black Full Sleeves Geometric Star Dress',
            'description' => 'Black Full Sleeves Geometric Star Dress',
            'photo' => 'https://static.hopscotch.in/fstatic/product/201910/72e3911e-f51d-4b3e-9519-c3a4395519c2_full.jpg?version=1571628230067&tr=w-720,c-at_max,n-medium',
            'price' => 1039.99,
            'in_stock' => '1',
            'quantity' => '20',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Carhartt Workwear Pocket S/S Tee K87',
            'description' => 'Carhartt Workwear Pocket S/S Tee K87',
            'photo' => 'https://m.media-amazon.com/images/I/81vHbQ-TjyL._AC_SR700,525_.jpg',
            'price' => 929.99,
            'in_stock' => '1',
            'quantity' => '14',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => '24/7 Solid Lunar Drop Shoulder Classic Tee',
            'description' => '24/7 Solid Lunar Drop Shoulder Classic Tee',
            'photo' => 'https://static.hopscotch.in/fstatic/product/201909/3417d040-496b-4d60-8fa2-fa1289e28051_full.jpg?version=1569561284492&tr=w-720,c-at_max,n-normal',
            'price' => 729.99,
            'in_stock' => '1',
            'quantity' => '20',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Kids Toddler Boy Fashion Winter Clothes Set Letter Print Long Sleeve Shirts Pants Outfit',
            'description' => 'Kids Toddler Boy Fashion Winter Clothes Set Letter Print Long Sleeve Shirts Pants Outfit',
            'photo' => 'https://m.media-amazon.com/images/I/81vHbQ-TjyL._AC_SR700,525_.jpg',
            'price' => 1279.99,
            'in_stock' => '1',
            'quantity' => '15',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Kids Petite | Baby, Toddler & Kids Clothing',
            'description' => 'Kids Petite | Baby, Toddler & Kids Clothing',
            'photo' => 'https://m.media-amazon.com/images/I/81vHbQ-TjyL._AC_SR700,525_.jpg',
            'price' => 999.99,
            'in_stock' => '1',
            'quantity' => '10',
            'color' => 'Black',
            'size' => 'S,M,L,XL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}

<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
          'name' => 'Gameboy Classic',
          'slug' => 'gameboy-classic',
          'details' => 'Released 1989',
          'price' => 12500,
          'description' => 'Everyone loves Game Boy. Packing a huge amount of power into a tiny package, this little console proved a revolution in videogaming when it launched in Japan in 1989. Since then, this pocket-sized system has sold over 100 million units, giving gamers all over the world the freedom to play their favourite games - including Tetris, Super Mario and Pokémon - no matter where they are.'
        ]);

        Product::create([
          'name' => 'Gameboy Color',
          'slug' => 'gameboy-color',
          'details' => 'Released 1998',
          'price' => 9800,
          'description' => 'Game Boy Color is part of the range of portable powerhouses that revolutionised the way the world plays games. Over thirteen years, Game Boy has become the planet\'s most loved handheld with over 100 million units sold. Game Boy Color brings a ravishing rainbow of over 32,000 possible colours to the bright 44 x 39mm screen, along with twice the processing power of its monochrome sibling.'
        ]);

        Product::create([
          'name' => 'Gameboy Advance SP',
          'slug' => 'gameboy-advance-sp',
          'details' => 'Released 2003',
          'price' => 12500,
          'description' => 'We\'ve taken everything you love about Game Boy Advance, dreamed up a set of irresistible new features - a built-in screen light, a flip-top screen, a rechargeable battery - and squeezed it all into one sleek handheld system. Now you can enjoy all Game Boy and Game Boy Advance games in real style.'
        ]);

        Product::create([
          'name' => 'Gameboy Micro',
          'slug' => 'gameboy-micro',
          'details' => 'Released 2005',
          'price' => 12000,
          'description' => 'We\'ve taken everything you love about Game Boy Advance and made it even smaller. With a crisp backlit screen, four stylish hardware designs and more than 500 games to choose from, Game Boy Micro puts power gaming in your pocket and makes it look better than ever.'
        ]);
    }
}

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
          'description' => 'Everyone loves Game Boy. Packing a huge amount of power into a tiny package, this little console proved a revolution in videogaming when it launched in Japan in 1989. Since then, this pocket-sized system has sold over 100 million units, giving gamers all over the world the freedom to play their favourite games - including Tetris, Super Mario and Pokémon - no matter where they are.',
          'cpu' => 'Custom 8-Bit CMOS, 2.2Mhz clock speed',
          'memory' => '64-Kbit static RAM',
          'screen' => 'STN type dot matrix LCD, 160 x 144 pixels, 4 shades of grey',
          'size' => '90mm x 148mm x 32mm',
          'weight' => 'Approx. 300g with batteries',
          'power' => '4 x AA batteries',
          'batterylife' => 'Approx. 15 hours',
          'history' => 'The Game Boy is an 8-bit handheld game console developed and manufactured by Nintendo. The first handheld in the Game Boy line, it was first released on April 21, 1989 in Japan, followed by North America three months later, and in Europe nearly a year after. Though it was less technically advanced than the Lynx and other competitors, the Game Boy\'s excellent battery life and rugged hardware and the popularity of the bundled Tetris and other games made it much more successful. In its first two weeks in Japan, from its release on April 21, 1989, the entire stock consisting of 300,000 units was sold; a few months later, the Game Boy\'s release in the United States on July 31, 1989, saw 40,000 units sold on its first day'
        ]);

        Product::create([
          'name' => 'Gameboy Color',
          'slug' => 'gameboy-color',
          'details' => 'Released 1998',
          'price' => 9800,
          'description' => 'Game Boy Color is part of the range of portable powerhouses that revolutionised the way the world plays games. Over thirteen years, Game Boy has become the planet\'s most loved handheld with over 100 million units sold. Game Boy Color brings a ravishing rainbow of over 32,000 possible colours to the bright 44 x 39mm screen, along with twice the processing power of its monochrome sibling.',
          'cpu' => '8-bit Z80',
          'memory' => '32 Kbyte + 96 Kbyte VRAM (in CPU), 256 Kbyte WRAM (external of CPU)',
          'screen' => 'Sharp colour LCD screen, 44 x 39mm size, 160x140 resolution, 32,768 possible colours, 56 simultaneous colours',
          'size' => 'Width 75mm, Depth 27mm, Height 133mm',
          'weight' => '138g',
          'power' => '2 AA batteries',
          'batterylife' => '10 hours',
          'history' => 'The Game Boy Color (GBC) is a handheld game console manufactured by Nintendo, which was released on October 21, 1998, in Japan, and later released in November of the same year to international markets. It is the successor of the Game Boy and continued in the Game Boy family. This was the first Nintendo product that has backward compatibility which became a major feature of the Game Boy line, since it allowed each new launch to begin with a significantly larger library than any of its competitors. On March 23, 2003, the Game Boy Color was discontinued'
        ]);

        Product::create([
          'name' => 'Gameboy Advance SP',
          'slug' => 'gameboy-advance-sp',
          'details' => 'Released 2003',
          'price' => 12500,
          'description' => 'We\'ve taken everything you love about Game Boy Advance, dreamed up a set of irresistible new features - a built-in screen light, a flip-top screen, a rechargeable battery - and squeezed it all into one sleek handheld system. Now you can enjoy all Game Boy and Game Boy Advance games in real style.',
          'cpu' => '32-Bit ARM with embedded memory',
          'memory' => '32 Kbyte + 96 Kbyte VRAM (in CPU), 256 Kbyte WRAM (external of CPU)',
          'screen' => '2.9" TFT screen w/ integrated screen light, 240x160 resolution, 40.8 x 61.2mm size, 32,768 possible colours, 511 simultaneous colours (char mode), 32,768 simultaneous colours (bitmap mode.)',
          'size' => 'Width 82mm / Depth 24.3mm / Height 84.6mm',
          'weight' => '143g',
          'power' => 'Built in rechargeable Lithium Ion battery.',
          'batterylife' => '10 hours continuous game play (18 hours with light off) with approximately 3 hours recharging time.',
          'history' => 'The Game Boy Advance SP, released in February 2003, is an upgraded version of Nintendo\'s Game Boy Advance, featuring the clamshell (flip-top screen) design that protects the screen from scratches and dusts. This is also the first product with backlit screen and rechargeable battery. The "SP" in the name stands for "Special". The SP is accompanied by the Nintendo DS (released in November 2004) and the Game Boy Micro (released in September 2005).'
        ]);

        Product::create([
          'name' => 'Gameboy Micro',
          'slug' => 'gameboy-micro',
          'details' => 'Released 2005',
          'price' => 12000,
          'description' => 'We\'ve taken everything you love about Game Boy Advance and made it even smaller. With a crisp backlit screen, four stylish hardware designs and more than 500 games to choose from, Game Boy Micro puts power gaming in your pocket and makes it look better than ever.',
          'cpu' => '32 bit RISC-CPU + 8 bit CISC-CPU',
          'memory' => '2 Kbyte WRAM + 96 Kbyte VRAM (internal) 256 Kbyte WRAM (external)',
          'screen' => 'Size: 2 inch (28.32 mm x 42.48 mm)/ Resolution: 240 x 160 Pixel/ Refresh Rate: 60Hz',
          'size' => '101 x 50 x 17.2 mm',
          'weight' => 'Approx. 80g (incl. battery)',
          'power' => '5.2 V / 320mA',
          'batterylife' => 'Approx. 6 - 10 hrs playtime / Approx. 2.5 hrs charging time',
          'history' => 'The Game Boy Micro (stylized as GAME BOY micro) is a handheld game console developed and manufactured by Nintendo. It was first released in September 2005 as a compact redesign of the Game Boy Advance. The system is the last console in the Game Boy line. Unlike its predecessor, the Game Boy Micro lacks backward compatibility for Game Boy or Game Boy Color games due to design changes. Although it still has the required Z80 processor and graphics hardware necessary to run games from older Game Boy systems, it lacks other internal hardware necessary for backward compatibility. Additionally, it has a backlit screen with the ability to adjust the brightness.'
        ]);
    }
}

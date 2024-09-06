<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'First Post by Admin',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum, nibh vel cursus commodo, nisl turpis lacinia mi, in gravida mauris ante rhoncus lorem. Vivamus pretium ornare nisl a posuere. Proin lectus nunc, eleifend id nunc et, euismod facilisis dui. Etiam interdum tincidunt luctus. Etiam vulputate efficitur iaculis. Morbi venenatis vel arcu maximus facilisis. Phasellus augue nunc, suscipit volutpat commodo convallis, fermentum lacinia odio. Etiam lorem nisl, efficitur vitae lacus vel, aliquam pretium massa. Donec euismod id nunc in varius. Nulla pretium risus quis diam aliquam, eget accumsan ex bibendum. Nulla eget mauris ut ex porta auctor a in massa. Sed sit amet tellus pharetra, eleifend urna a, accumsan massa. Fusce consectetur laoreet libero ac hendrerit. Integer semper, velit sed semper posuere, leo erat efficitur ligula, non ullamcorper arcu sapien id sapien. Sed vitae lobortis nisl, vel tincidunt eros. Maecenas vitae urna nec erat mattis ornare..',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Second Post by Admin',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum, nibh vel cursus commodo, nisl turpis lacinia mi, in gravida mauris ante rhoncus lorem. Vivamus pretium ornare nisl a posuere. Proin lectus nunc, eleifend id nunc et, euismod facilisis dui. Etiam interdum tincidunt luctus. Etiam vulputate efficitur iaculis. Morbi venenatis vel arcu maximus facilisis. Phasellus augue nunc, suscipit volutpat commodo convallis, fermentum lacinia odio. Etiam lorem nisl, efficitur vitae lacus vel, aliquam pretium massa. Donec euismod id nunc in varius. Nulla pretium risus quis diam aliquam, eget accumsan ex bibendum. Nulla eget mauris ut ex porta auctor a in massa. Sed sit amet tellus pharetra, eleifend urna a, accumsan massa. Fusce consectetur laoreet libero ac hendrerit. Integer semper, velit sed semper posuere, leo erat efficitur ligula, non ullamcorper arcu sapien id sapien. Sed vitae lobortis nisl, vel tincidunt eros. Maecenas vitae urna nec erat mattis ornare..',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Third Post by Admin',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum, nibh vel cursus commodo, nisl turpis lacinia mi, in gravida mauris ante rhoncus lorem. Vivamus pretium ornare nisl a posuere. Proin lectus nunc, eleifend id nunc et, euismod facilisis dui. Etiam interdum tincidunt luctus. Etiam vulputate efficitur iaculis. Morbi venenatis vel arcu maximus facilisis. Phasellus augue nunc, suscipit volutpat commodo convallis, fermentum lacinia odio. Etiam lorem nisl, efficitur vitae lacus vel, aliquam pretium massa. Donec euismod id nunc in varius. Nulla pretium risus quis diam aliquam, eget accumsan ex bibendum. Nulla eget mauris ut ex porta auctor a in massa. Sed sit amet tellus pharetra, eleifend urna a, accumsan massa. Fusce consectetur laoreet libero ac hendrerit. Integer semper, velit sed semper posuere, leo erat efficitur ligula, non ullamcorper arcu sapien id sapien. Sed vitae lobortis nisl, vel tincidunt eros. Maecenas vitae urna nec erat mattis ornare..',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Fourth Post by Admin',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum, nibh vel cursus commodo, nisl turpis lacinia mi, in gravida mauris ante rhoncus lorem. Vivamus pretium ornare nisl a posuere. Proin lectus nunc, eleifend id nunc et, euismod facilisis dui. Etiam interdum tincidunt luctus. Etiam vulputate efficitur iaculis. Morbi venenatis vel arcu maximus facilisis. Phasellus augue nunc, suscipit volutpat commodo convallis, fermentum lacinia odio. Etiam lorem nisl, efficitur vitae lacus vel, aliquam pretium massa. Donec euismod id nunc in varius. Nulla pretium risus quis diam aliquam, eget accumsan ex bibendum. Nulla eget mauris ut ex porta auctor a in massa. Sed sit amet tellus pharetra, eleifend urna a, accumsan massa. Fusce consectetur laoreet libero ac hendrerit. Integer semper, velit sed semper posuere, leo erat efficitur ligula, non ullamcorper arcu sapien id sapien. Sed vitae lobortis nisl, vel tincidunt eros. Maecenas vitae urna nec erat mattis ornare..',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Fifth Post by Admin',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum, nibh vel cursus commodo, nisl turpis lacinia mi, in gravida mauris ante rhoncus lorem. Vivamus pretium ornare nisl a posuere. Proin lectus nunc, eleifend id nunc et, euismod facilisis dui. Etiam interdum tincidunt luctus. Etiam vulputate efficitur iaculis. Morbi venenatis vel arcu maximus facilisis. Phasellus augue nunc, suscipit volutpat commodo convallis, fermentum lacinia odio. Etiam lorem nisl, efficitur vitae lacus vel, aliquam pretium massa. Donec euismod id nunc in varius. Nulla pretium risus quis diam aliquam, eget accumsan ex bibendum. Nulla eget mauris ut ex porta auctor a in massa. Sed sit amet tellus pharetra, eleifend urna a, accumsan massa. Fusce consectetur laoreet libero ac hendrerit. Integer semper, velit sed semper posuere, leo erat efficitur ligula, non ullamcorper arcu sapien id sapien. Sed vitae lobortis nisl, vel tincidunt eros. Maecenas vitae urna nec erat mattis ornare..',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

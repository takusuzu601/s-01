<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //コメントアウトを一つずつartisan db:seedすると
        //リレーションidを採番しやすいし多く一つのテーブルにDATAを入れることができる

         // \App\Models\User::factory(1000)->create();
         //\App\Models\Admin::factory(1000)->create();
       // \App\Models\Company::factory(1000)->create();
        // \App\Models\Cast::factory(20000)->create();
         \App\Models\Tag::factory(7)->create();
    }
}

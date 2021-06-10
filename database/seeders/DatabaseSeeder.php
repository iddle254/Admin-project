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
        // \DB::statement('SET_FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();
        \DB::table('posts')->truncate();
        // \DB::table('category')->truncate();
        \DB::table('photos')->truncate();
        \DB::table('comments')->truncate();
        \DB::table('comment_replies')->truncate();

        \App\Models\User::factory()->times(10)->hasPosts(1)->create();
        \App\Models\Role::factory()->times(10)->create();
        \App\Models\Category::factory()->times(10)->create();
        \App\Models\Comment::factory()->times(10)->hasReplies(1)->create();
        \App\Models\Photo::factory()->times(10)->create();

        
        // \App\Models\User::factory(10)->create([
        //     'role_id'=>2,
        //     'is_active'=>1
        // ]);

        // factory(App\Models\Post::class, 10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}

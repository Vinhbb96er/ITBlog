<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create()->each(function ($user) {
            factory(UserDetail::class, 1)->create([
                'user_id' => $user->id,
            ]);
        });

        factory(Category::class, 5)->create();

        factory(Post::class, 100)->create();

        factory(Comment::class, 200)->create();
    }
}

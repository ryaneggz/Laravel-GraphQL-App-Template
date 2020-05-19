<?php

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
        // $this->call(UserSeeder::class);

        $x = new App\Post;
        $x->author_id = 1;
        $x->title = "What Happened";
        $x->content = "This is what happend when we did this";
        $x->save();

        $x = new App\Post;
        $x->author_id = 2;
        $x->title = "Something Strang";
        $x->content = "Something strange happened can't explain it";
        $x->save();

        $x = new App\Comment;
        $x->post_id = 1;
        $x->reply = "Wow that's amazing!";
        $x->save();

        $x = new App\Comment;
        $x->post_id = 2;
        $x->reply = "They did what now?";
        $x->save();
    }
}

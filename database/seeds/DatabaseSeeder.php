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

        // php artisan tinker
        // factory('App\User', 10)->create();

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

        $x = new App\Category;
        $x->name = "Marketing";
        $x->save();

        $x = new App\Category;
        $x->name = "Business";
        $x->save();

        $x = new App\Category;
        $x->name = "Trading";
        $x->save();

        $x = new App\Category;
        $x->name = "Marketing";
        $x->save();

        $x = new App\Book;
        $x->category_id = 1;
        $x->title = "10X Factory";
        $x->author = "Grant Cardone";
        $x->description = "This is a book about growing business";
        $x->link = "https://cardonecapital.com/";
        $x->featured = true;
        $x->save();

        $x = new App\Book;
        $x->category_id = 1;
        $x->title = "STFU and do it";
        $x->author = "Gary V";
        $x->description = "I made this shit up";
        $x->link = "https://vaynermedia.com/";
        $x->featured = false;
        $x->save();
    }
}

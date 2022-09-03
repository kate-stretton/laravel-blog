<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
      // User::truncate();
      // Post::truncate();
      // Category::truncate();

      $user = User::factory()->create([ 
        'name' => 'John Doe'
      ]);

      Post::factory(5)->create([
        'user_id' => $user->id
      ]);

        // $user = \App\Models\User::factory()->create();

        // $personal = \App\Models\Category::create([
        //   'name' => 'Personal',
        //   'slug' => 'personal'
        // ]);

        // $family = \App\Models\Category::create([
        //   'name' => 'Family',
        //   'slug' => 'family'
        // ]);

        // $work = \App\Models\Category::create([
        //   'name' => 'Work',
        //   'slug' => 'work'
        // ]);

        // \App\Models\Post::create([
        //   'user_id' => $user->id,
        //   'category_id' => $family->id,
        //   'title' => 'My Family Post',
        //   'slug' => 'my-family-post',
        //   'excerpt' => 'Gumbo beet greens corn soko endive gumbo gourd.',
        //   'body' => '<p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>'
        // ]);

        // \App\Models\Post::create([
        //   'user_id' => $user->id,
        //   'category_id' => $personal->id,
        //   'title' => 'My Personal Post',
        //   'slug' => 'my-personal-post',
        //   'excerpt' => 'Gumbo beet greens corn soko endive gumbo gourd.',
        //   'body' => '<p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>'
        // ]);

        // \App\Models\Post::create([
        //   'user_id' => $user->id,
        //   'category_id' => $work->id,
        //   'title' => 'My Work Post',
        //   'slug' => 'my-work-post',
        //   'excerpt' => 'Gumbo beet greens corn soko endive gumbo gourd.',
        //   'body' => '<p>Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.</p>'
        // ]);

    }
}

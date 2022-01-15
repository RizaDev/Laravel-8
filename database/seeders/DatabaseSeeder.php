<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        User::create([
            "name" => "Riza Syaihikma R",
            "username" => "rizasr",
            "email" => "rifa71426@gmail.com",
            "password" => bcrypt('cinta')
        ]);
        // User::create([
        //     "name" => "Alvin Q F",
        //     "email" => "alvin@gmail.com",
        //     "password" => bcrypt('cinta')
        // ]);
        User::factory(3)->create();
        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);
        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);
        Post::factory(20)->create();

        // Post::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptatem saepe est ut ipsam",
        //     "body" => "<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptatem saepe est ut ipsam ipsum maxime sapiente repellat illo officia minus harum eligendi excepturi esse rem sunt facere tempore incidunt quis ex, tempora ullam corrupti? Soluta accusamus veniam corporis harum quae assumenda ducimus magnam reiciendis perspiciatis. Quod molestiae, enim earum quibusdam tenetur qui aspernatur obcaecati atque vel perferendis animi adipisci ab itaque unde.</p> <p> Quos reprehenderit blanditiis facere iusto veniam, aspernatur, autem qui hic culpa vitae, accusamus inventore excepturi delectus! Natus incidunt laudantium error consequuntur, perferendis ipsam reprehenderit eligendi repellendus earum dolor! Praesentium, ad itaque reiciendis quisquam nobis minus natus sed repudiandae deleniti earum rerum expedita minima quos autem ea ut sunt aspernatur velit deserunt quaerat adipisci ex? Obcaecati, soluta.</p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aliquam, autem in laborum amet quasi dignissimos excepturi illum illo eos!</p>",
        //     "kategory_id" => 1,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "title" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptatem saepe est ut ipsam",
        //     "body" => "<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptatem saepe est ut ipsam ipsum maxime sapiente repellat illo officia minus harum eligendi excepturi esse rem sunt facere tempore incidunt quis ex, tempora ullam corrupti? Soluta accusamus veniam corporis harum quae assumenda ducimus magnam reiciendis perspiciatis. Quod molestiae, enim earum quibusdam tenetur qui aspernatur obcaecati atque vel perferendis animi adipisci ab itaque unde.</p> <p> Quos reprehenderit blanditiis facere iusto veniam, aspernatur, autem qui hic culpa vitae, accusamus inventore excepturi delectus! Natus incidunt laudantium error consequuntur, perferendis ipsam reprehenderit eligendi repellendus earum dolor! Praesentium, ad itaque reiciendis quisquam nobis minus natus sed repudiandae deleniti earum rerum expedita minima quos autem ea ut sunt aspernatur velit deserunt quaerat adipisci ex? Obcaecati, soluta.</p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aliquam, autem in laborum amet quasi dignissimos excepturi illum illo eos!</p>",
        //     "kategory_id" => 1,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "title" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptatem saepe est ut ipsam",
        //     "body" => "<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptatem saepe est ut ipsam ipsum maxime sapiente repellat illo officia minus harum eligendi excepturi esse rem sunt facere tempore incidunt quis ex, tempora ullam corrupti? Soluta accusamus veniam corporis harum quae assumenda ducimus magnam reiciendis perspiciatis. Quod molestiae, enim earum quibusdam tenetur qui aspernatur obcaecati atque vel perferendis animi adipisci ab itaque unde.</p> <p> Quos reprehenderit blanditiis facere iusto veniam, aspernatur, autem qui hic culpa vitae, accusamus inventore excepturi delectus! Natus incidunt laudantium error consequuntur, perferendis ipsam reprehenderit eligendi repellendus earum dolor! Praesentium, ad itaque reiciendis quisquam nobis minus natus sed repudiandae deleniti earum rerum expedita minima quos autem ea ut sunt aspernatur velit deserunt quaerat adipisci ex? Obcaecati, soluta.</p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aliquam, autem in laborum amet quasi dignissimos excepturi illum illo eos!</p>",
        //     "kategory_id" => 3,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "title" => "Judul Keempat",
        //     "slug" => "judul-keempat",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptatem saepe est ut ipsam",
        //     "body" => "<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aliquid voluptatem saepe est ut ipsam ipsum maxime sapiente repellat illo officia minus harum eligendi excepturi esse rem sunt facere tempore incidunt quis ex, tempora ullam corrupti? Soluta accusamus veniam corporis harum quae assumenda ducimus magnam reiciendis perspiciatis. Quod molestiae, enim earum quibusdam tenetur qui aspernatur obcaecati atque vel perferendis animi adipisci ab itaque unde.</p> <p> Quos reprehenderit blanditiis facere iusto veniam, aspernatur, autem qui hic culpa vitae, accusamus inventore excepturi delectus! Natus incidunt laudantium error consequuntur, perferendis ipsam reprehenderit eligendi repellendus earum dolor! Praesentium, ad itaque reiciendis quisquam nobis minus natus sed repudiandae deleniti earum rerum expedita minima quos autem ea ut sunt aspernatur velit deserunt quaerat adipisci ex? Obcaecati, soluta.</p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aliquam, autem in laborum amet quasi dignissimos excepturi illum illo eos!</p>",
        //     "kategory_id" => 3,
        //     "user_id" => 2
        // ]);
    }
}

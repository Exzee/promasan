<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
                'name' => 'Rizqi',
                'username' => 'rizqi',
                'email' => 'kantor@kantor.test',
                'password' => bcrypt('password')
            ]);
            // User::create([
                //     'name' => 'Makosh',
                //     'email' => 'makosh@gmail.com',
                //     'password' => bcrypt('12345')
                // ]);
                
    User::factory(3)->create();

    Category::create([
        'name' => 'Promasan',
        'slug' => 'promasan'
    ]);
    Category::create([
        'name' => 'Medini',
        'slug' => 'medini'
    ]);
    Category::create([
        'name' => 'Separe',
        'slug' => 'separe'
    ]);
    Category::create([
        'name' => 'Gempol',
        'slug' => 'gempol'
    ]);

    Post::factory(16)->create();

    // Post::Create([
    //     'title' => 'Judul Pertama',
    //     'slug' => 'judul-pertama',
    //     'user_id' => 1,
    //     'category_id' => 1,
    //     'excerp' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab laudantium dignissimos eaque.',
    //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab laudantium dignissimos eaque. Consectetur alias praesentium fugit! Magni sunt dolores mollitia animi ut laborum molestias.</p> <p>Natus cupiditate officia tempore commodi enim, nemo laudantium sequi provident nihil inventore aspernatur necessitatibus tenetur corrupti nostrum illum excepturi autem, totam, sapiente vel ex ipsa dolor et? Odit dolor voluptates suscipit sint quaerat,</p> <p>nesciunt possimus explicabo ab corrupti eveniet unde eligendi! Porro qui voluptate tempora libero laboriosam dolorum sequi distinctio quo error beatae illo suscipit quaerat perferendis animi provident asperiores quidem eos veniam expedita,</p> <p>maxime earum ipsam. Sequi quis accusantium voluptatibus totam earum aperiam quod temporibus fugit ut nihil officiis est nostrum numquam cupiditate quasi ad, ipsa facilis delectus nisi dolores accusamus? Aliquam mollitia, asperiores sapiente eos beatae molestiae amet, possimus distinctio harum error eveniet reiciendis aspernatur explicabo architecto aut fugiat vel voluptatem doloribus nostrum magnam totam? Cum, nam consequuntur tempora ex libero consequatur at expedita.</p>'
    // ]);
    // Post::Create([
    //     'title' => 'Judul Ke Dua',
    //     'slug' => 'judul-ke-dua',
    //     'user_id' => 1,
    //     'category_id' => 1,
    //     'excerp' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab laudantium dignissimos eaque.',
    //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab laudantium dignissimos eaque. Consectetur alias praesentium fugit! Magni sunt dolores mollitia animi ut laborum molestias.</p> <p>Natus cupiditate officia tempore commodi enim, nemo laudantium sequi provident nihil inventore aspernatur necessitatibus tenetur corrupti nostrum illum excepturi autem, totam, sapiente vel ex ipsa dolor et? Odit dolor voluptates suscipit sint quaerat,</p> <p>nesciunt possimus explicabo ab corrupti eveniet unde eligendi! Porro qui voluptate tempora libero laboriosam dolorum sequi distinctio quo error beatae illo suscipit quaerat perferendis animi provident asperiores quidem eos veniam expedita,</p> <p>maxime earum ipsam. Sequi quis accusantium voluptatibus totam earum aperiam quod temporibus fugit ut nihil officiis est nostrum numquam cupiditate quasi ad, ipsa facilis delectus nisi dolores accusamus? Aliquam mollitia, asperiores sapiente eos beatae molestiae amet, possimus distinctio harum error eveniet reiciendis aspernatur explicabo architecto aut fugiat vel voluptatem doloribus nostrum magnam totam? Cum, nam consequuntur tempora ex libero consequatur at expedita.</p>'
    // ]);
    // Post::Create([
    //     'title' => 'Judul Ke Tiga',
    //     'slug' => 'judul-ke-tiga',
    //     'user_id' => 2,
    //     'category_id' => 1,
    //     'excerp' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab laudantium dignissimos eaque.',
    //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab laudantium dignissimos eaque. Consectetur alias praesentium fugit! Magni sunt dolores mollitia animi ut laborum molestias.</p> <p>Natus cupiditate officia tempore commodi enim, nemo laudantium sequi provident nihil inventore aspernatur necessitatibus tenetur corrupti nostrum illum excepturi autem, totam, sapiente vel ex ipsa dolor et? Odit dolor voluptates suscipit sint quaerat,</p> <p>nesciunt possimus explicabo ab corrupti eveniet unde eligendi! Porro qui voluptate tempora libero laboriosam dolorum sequi distinctio quo error beatae illo suscipit quaerat perferendis animi provident asperiores quidem eos veniam expedita,</p> <p>maxime earum ipsam. Sequi quis accusantium voluptatibus totam earum aperiam quod temporibus fugit ut nihil officiis est nostrum numquam cupiditate quasi ad, ipsa facilis delectus nisi dolores accusamus? Aliquam mollitia, asperiores sapiente eos beatae molestiae amet, possimus distinctio harum error eveniet reiciendis aspernatur explicabo architecto aut fugiat vel voluptatem doloribus nostrum magnam totam? Cum, nam consequuntur tempora ex libero consequatur at expedita.</p>'
    // ]);
    // Post::Create([
    //     'title' => 'Judul Ke Empat',
    //     'slug' => 'judul-ke-empat',
    //     'user_id' => 2,
    //     'category_id' => 2,
    //     'excerp' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab laudantium dignissimos eaque.',
    //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab laudantium dignissimos eaque. Consectetur alias praesentium fugit! Magni sunt dolores mollitia animi ut laborum molestias.</p> <p>Natus cupiditate officia tempore commodi enim, nemo laudantium sequi provident nihil inventore aspernatur necessitatibus tenetur corrupti nostrum illum excepturi autem, totam, sapiente vel ex ipsa dolor et? Odit dolor voluptates suscipit sint quaerat,</p> <p>nesciunt possimus explicabo ab corrupti eveniet unde eligendi! Porro qui voluptate tempora libero laboriosam dolorum sequi distinctio quo error beatae illo suscipit quaerat perferendis animi provident asperiores quidem eos veniam expedita,</p> <p>maxime earum ipsam. Sequi quis accusantium voluptatibus totam earum aperiam quod temporibus fugit ut nihil officiis est nostrum numquam cupiditate quasi ad, ipsa facilis delectus nisi dolores accusamus? Aliquam mollitia, asperiores sapiente eos beatae molestiae amet, possimus distinctio harum error eveniet reiciendis aspernatur explicabo architecto aut fugiat vel voluptatem doloribus nostrum magnam totam? Cum, nam consequuntur tempora ex libero consequatur at expedita.</p>'
    // ]);


    





    }
}

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
        // $this->call(UsersTableSeeder::class);
        DB::table('tasks')->insert([
            'body' => 'Learn Laravel',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tasks')->insert([
            'body' => 'Learn Eloquent',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tasks')->insert([
            'body' => 'Persist database data!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tasks')->insert([
            'body' => 'Learn VueJS'
        ]);

        /**
         * Users
         */
        DB::table('users')->insert([
            'name' => 'Joe Bloggs',
            'email' => 'jb@test.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => 'SimonL',
            'email' => 'sl@test.com',
            'password' => bcrypt('testtest')
        ]);

        /**
         * Posts
         */
        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => 'My first post',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed maiores illo possimus magnam sunt culpa voluptates, voluptatibus quod eaque molestias praesentium consequatur optio! Maxime ducimus itaque aliquid ratione consequuntur quod!
            Incidunt aspernatur, consectetur, laboriosam consequuntur adipisci voluptatum commodi fuga ipsam expedita, modi mollitia facilis? Molestiae, porro deleniti explicabo adipisci atque recusandae dolor maiores ut a? Libero deserunt inventore ab exercitationem?
            Id, incidunt magnam commodi placeat labore inventore in quis consequatur qui atque animi molestias alias? Eaque sapiente sint, quidem odit perspiciatis dolor itaque est soluta voluptates atque modi, ipsam ut?',
            'created_at' => '2018-09-04 16:30',
            'updated_at' => '2018-09-04 16:30',
        ]);
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'Test posting',
            'body' => 'Id, incidunt magnam commodi placeat labore inventore in quis consequatur qui atque animi molestias alias? Eaque sapiente sint, quidem odit perspiciatis dolor itaque est soluta voluptates atque modi, ipsam ut?',
            'created_at' => '2018-09-05 11:23',
            'updated_at' => '2018-09-05 11:23',
        ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => 'Another post',
            'body' => 'No amount of Latin will help me here.
                        There just aren\'t enough hours in the day.',
            'created_at' => '2018-09-06 14:27',
            'updated_at' => '2018-09-06 14:27',
        ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => 'January',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime asperiores beatae suscipit iste impedit quae necessitatibus sed reprehenderit accusantium hic sunt, dolor autem veritatis odio officia, nulla enim placeat aliquid modi totam praesentium temporibus libero! Enim ut itaque, dolor similique mollitia quae facilis nostrum tenetur pariatur soluta autem explicabo, adipisci harum quisquam porro sunt quam beatae accusamus, maxime praesentium consequatur reiciendis quidem repellat! Quo perferendis tempora autem itaque neque facere commodi dolor dolores ab, officiis culpa deleniti libero provident quia ex nemo, excepturi ut tempore atque modi aliquam ad ipsam nisi soluta? Dolores eaque ut, quisquam doloremque veniam accusamus et.',
            'created_at' => '2018-01-06 19:00',
            'updated_at' => '2018-01-06 19:00',
        ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => 'February',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus dolore est fugit dignissimos necessitatibus inventore a totam provident aut fuga rem, accusantium suscipit blanditiis incidunt adipisci quas quaerat molestiae laborum impedit corrupti! Quaerat nihil eum, amet distinctio repellendus est iure?',
            'created_at' => '2018-02-06 12:35',
            'updated_at' => '2018-02-06 12:35',
        ]);
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'November',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, totam voluptatibus laboriosam corrupti pariatur aliquam magni! Nemo obcaecati eum nam? Molestiae pariatur cum fugit vel aperiam eos harum veniam officiis, architecto magni impedit maiores explicabo ipsa, quam repellat doloribus, facilis non necessitatibus voluptas expedita voluptate.',
            'created_at' => '2017-11-06 13:30',
            'updated_at' => '2017-11-06 13:30',
        ]);

        /**
         * Comments
         */
        DB::table('comments')->insert([
            'user_id' => 1,
            'post_id' => 1,
            'body' => 'What a great post - thank you!',
            'created_at' => '2018-09-05 14:27',
            'updated_at' => '2018-09-05 14:27',
        ]);
        DB::table('comments')->insert([
            'user_id' => 2,
            'post_id' => 1,
            'body' => 'You are most welcome.',
            'created_at' => '2018-09-06 15:00',
            'updated_at' => '2018-09-06 15:00',
        ]);
        DB::table('comments')->insert([
            'user_id' => 1,
            'post_id' => 3,
            'body' => 'Latine Quid ergo mali?!',
            'created_at' => '2018-09-06 16:01',
            'updated_at' => '2018-09-06 16:01',
        ]);


        /**
         * Tags & post_tag mappings:
         */
        DB::table('tags')->insert([
            'name' => 'personal',
            'created_at' => '2018-09-18 12:50',
            'updated_at' => '2018-09-18 12:50',
        ]);
        DB::table('tags')->insert([
            'name' => 'php',
            'created_at' => '2018-09-18 12:55',
            'updated_at' => '2018-09-18 12:55',
        ]);

        DB::table('post_tag')->insert([
            'post_id' => 1,
            'tag_id' => 1
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 2,
            'tag_id' => 1
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 3,
            'tag_id' => 2
        ]);
    }
}

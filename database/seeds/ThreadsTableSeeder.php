<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = factory('App\Thread', 50)->create();

        $threads->each(function ($thread) {
            factory('App\Reply', rand(3,12))
                ->create(['thread_id' => $thread->id]);
        });
    }
}

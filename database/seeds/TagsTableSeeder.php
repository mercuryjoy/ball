<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = factory(\App\Models\Tag::class)->times(30)->make();
        \App\Models\Tag::insert($tags->toArray());
    }
}

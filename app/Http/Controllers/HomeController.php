<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        // read
        // return DB::table('posts')->get();
        // return DB::table('posts')->find(1);
        // return DB::table('posts')->first();
        // return DB::table('posts')->pluck('title', 'id');
        // return DB::table('posts')->where('id', '>=' , 0)->where('id', '<', '1')->get();

        // create
        // DB::table('posts')->insert([
        //     'title' => 'this is test title',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugiat unde, sint, voluptatem rem obcaecati consequatur eligendi iste Repellendus, quo? Quibusdam, quisquam ea?',
        //     'status' => 1,
        //     'publish_date' => date('y-m-d'),
        //     'user_id' => 1
        // ]);
        // dd('success');

        // update
        // return DB::table('posts')->where('id', 3)->update([
        //     'title' => 'we updated the title',
        //     'description' => 'this is the updated description'
        // ]);

        // delete
        // return DB::table('posts')->where('id', 3)->delete();
        // return DB::table('posts')->delete(3);

        // join
        // return DB::table('posts')->join('status', 'posts.status_id', '=', 'status.id')
        // ->select('posts.*')->get();

        //count
        // return DB::table('posts')->count();

        //sum, average, max and min
        // return DB::table('posts')->avg('view');

        // return view('home', compact(('blogs')));


        // ORM
        // return $posts = Post::all();
        // return $title = Post::findorfail(10);
        // $posts = Post::all();

        // foreach ($posts as $name) {
        //     echo $name->title;
        // }

        // orwhere
        // return Post::where('view', '>', 100)->orWhere('id', '=', 1)->get();

        // inserting data using orm
        // $post = new Post();
        // $post->title = 'post 4';
        // $post->description = 'dhsjfklh jdklsahf jsdfhkl usafd jdskla hjkfdsa';
        // $post->status = 1;
        // $post->publish_date = date('y-m-d');
        // $post->user_id = 1;
        // $post->status_id = 1;
        // $post->view = 165;

        // $post->save();
        // dd('success');

        // updating data using orm
        // $post = Post::find(2);
        // $post->title = 'post 3482';
        // $post->save();
        // dd('success');

        // delete data using orm
        // $post = Post::findOrFail(4)->delete();
        // dd('success');

        // mass assignment
        // $post = Post::create([
        //     'title' => 'post 4',
        //     'description' => 'dhsjfklh jdklsahf jsdfhkl usafd jdskla hjkfdsa',
        //     'status' => 1,
        //     'publish_date' => date('y-m-d'),
        //     'user_id' => 1,
        //     'status_id' => 1,
        //     'view' => 165,
        // ]);

        // update
        // $post = Post::find(1)->update([
        //     'title' => 'the data has been updated',
        //     'description' => 'abebe beso libela nber'
        // ]);

        //update multiple rows at once
        // $post = Post::where('status', 1)->update([
        //     'status' => '0',
        // ]);

        // dd('success');

        // delete data using softdelets
        // $post = Post::find(5)->delete();
        // dd('success');

        //fetching trashed data
        return Post::onlyTrashed()->get();

    }
}

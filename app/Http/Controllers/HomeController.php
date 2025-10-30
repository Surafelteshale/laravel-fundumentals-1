<?php

namespace App\Http\Controllers;

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
        // return DB::table('posts')->where('id', '>=', 0)->where('id', '<', '1')->get();

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
        return DB::table('posts')->where('id', 3)->update([
            'title' => 'we updated the title',
            'description' => 'this is the updated description'
        ]);


        // return view('home', compact(('blogs')));
    }
}

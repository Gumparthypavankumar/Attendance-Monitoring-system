<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //redirecting to attendance page
        $posts = Post::all();
        return view("pages.profile")->with('posts',$posts);
        // goes to profile page
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.enrollstudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['firstname'=>'required','lastname'=>'required','subject'=>'required']
        );
        $post=new Post;
        $post->firstname=$request->input('firstname');
        $post->lastname=$request->input('lastname');
        $post->subject=$request->input('subject');
        $post->save();
        return view('pages.enrollstudent')->with('success','Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show the user data in attendance page
        $student= Post::find($id);
        return view("pages.Attendance")->with('student',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = Post::find($id);
        // echo $posts;
        return view('pages.edit')->with('posts',$posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,['firstname'=>'required','lastname'=>'required','subject'=>'required']
        );
        $post= Post::find($id);
        $post->firstname=$request->input('firstname');
        $post->lastname=$request->input('lastname');
        $post->subject=$request->input('subject');
        $post->save();
        // echo "updated";
        // return $post->id;
        return view('pages.enrollstudent')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $id1= $request->input('id');
        Post::destroy($id1);
        $delete='success';
        redirect()->to('/delete')->with('success','success')->send();
        // 
        // print('hello');
    }
}

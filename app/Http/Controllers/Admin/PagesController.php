<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Page;

use Illuminate\Support\Facades\Redirect,
    Illuminate\Support\Facades\Input,
    Illuminate\Support\Facades\Auth;

use App\Comment;

class PagesController extends Controller {

    public function storeCom()
    {
        if (Comment::create(Input::all())) {
            return Redirect::back();
        } else {
            return Redirect::back()->withInput()->withErrors('评论发表失败！');
        }

    }

    public function show($id)
    {
        $page = Page::find($id);
        return view('pages.show',[
            'page' =>$page
        ]);
    }

    public function index()
    {
        return view('AdminHome')->withPages(Page::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * /admin/pages/create
     * get
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * /admin/pages
     * post
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:pages|max:255',
            'body' => 'required',
        ]);

        $page = new Page;
        $page->title = Input::get('title');
        $page->body = Input::get('body');
        $page->user_id = 1;//Auth::user()->id;

        if ($page->save()) {
            return Redirect::to('admin');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * admin/pages/7/edit
     * get
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.pages.edit')->withPage(Page::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * admin/pages/7
     * put
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|unique:pages,title,'.$id.'|max:255',
            'body' => 'required',
        ]);

        $page = Page::find($id);
        $page->title = Input::get('title');
        $page->body = Input::get('body');
        $page->user_id = 1;//Auth::user()->id;

        if ($page->save()) {
            return Redirect::to('admin');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * /admin/pages/7
     * delete
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        return Redirect::to('admin');
    }

}
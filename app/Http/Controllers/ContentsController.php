<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
 
use Session;
 
use App\Contents;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemsPerPage = 3;
        $contents = Contents::orderBy('created_at', 'desc')->paginate($itemsPerPage);
        
        return view('contents.index', array('contents' => $contents, 'title' => 'Contents Display'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.create', array('title' => 'Add Contents'));
    }
  
    public function dashboard()
    {
        $itemsPerPage = 5;
        $contents = Contents::orderBy('created_at', 'desc')->paginate($itemsPerPage);
        return view('contents.dashboard', array('contents' => $contents, 'title' => 'Lists Contents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, array(
                                'title' => 'required',
                                'full_content' => 'required',
                            )
                        );
        
        $input = $request->all();
        //dd($input); // dd() helper function is print_r alternative
        
        Contents::create($input);
        
        Session::flash('flash_message', 'News added successfully!');
 
        //return redirect()->back();
        //return redirect('news');
        return redirect()->route('contents.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contents = Contents::findOrFail($id);
 
        return view('contents.edit', array('contents' => $contents, 'title' => 'Edit News'));
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
        $contents = Contents::findOrFail($id);
 
        $this->validate($request, array(
                                'title' => 'required',
                                'full_content' => 'required',
                            )
                        );
 
        $input = $request->all();
 
        $contents->fill($input)->save();
 
        Session::flash('flash_message', 'News updated successfully!');
 
        return redirect()->route('contents.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contents = Contents::findOrFail($id);
 
        $contents->delete();
 
        Session::flash('flash_message', 'News deleted successfully!');
 
        return redirect()->route('contents.dashboard');
    }
}

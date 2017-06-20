@extends('layouts.master')
 
@section('title', $title)
 
@section('sidebar')
    @parent
    // you can add something here
@endsection
 
@section('content')
  @foreach ($contents as $data)
    <div class="col-md-12 blog-post">
        <div class="post-title">
          <a href="single.html"><h1>{{ $data->title }}</h1></a>
        </div>  
        <div class="post-info">
            <span>
              {{ $data->created_at }}  / by <a href="#" target="_blank">{{ $data->author }}</a>
              | Category: {{ $data->category }}
            </span>
        </div>  
        <p id="more">
          {{ $data->full_content }}
        </p>                          			
        <a href="single.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
    </div>
    
  @endforeach
    
    <!-- Showing Pagination Links -->
    <style>
        ul {display:inline-block}
        li {display:inline; padding:5px}
    </style>    
    <div> {{ $contents->links() }} </div>
    <!-- End Showing Pagination Links -->
    
    @section('postJquery')
        @parent
        var longText = $('#more');
        longText.text(longText.text().substr(0, 500)+'...');
    @endsection    
@endsection



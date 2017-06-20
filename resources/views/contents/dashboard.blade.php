@extends('layouts.master')

@section('content')
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('contents.create') }}"> Create New Item</a>
</div>
 <table class="table table-striped">
 
  <thead>
    <tr>
      <th>Title</th>
      <th>Category</th>
      <th>Author</th>
      <th>Action</th>
    </tr>
  </thead>
  @foreach ($contents as $data)
  <tbody>
    <tr>
      <td width="200">{{ $data->title }}</td>
      <td width='50'>{{ $data->category }}</td>
      <td width='50'>{{ $data->author }}</td>
      <td width='100'>
         <a class="btn btn-primary" href="{{ route('contents.edit',$data->id) }}">Edit</a>
            {!! Form::open([
              'method' => 'DELETE',
              'route' => ['contents.destroy', $data->id],
              'style'=>'display:inline',
              'onsubmit' => "return confirm('Are you sure you want to delete?')",
            ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
      </td>
    </tr>
    
  </tbody>
   @endforeach
</table>
@endsection
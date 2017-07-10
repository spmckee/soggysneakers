@extends('layouts.admin.master')

@section('content')
<h1>Categories</h1>
    @foreach($categories as $cat)
        <p>
            <h4>{{$cat->name}}</h4>
            <p>{{$cat->description}}</p>
            <p><strong>Applies to: </strong>{{$cat->is_hs == 1 ? 'High School' : ''}} | {{$cat->is_col == 1 ? 'College' : ''}} </p>
        </p>
    @endforeach

@endsection
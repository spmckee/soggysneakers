@extends('layouts.public.master')

@section('content')
<div class="container">
<h1>Judging</h1>
    @foreach($entry as $entries)
                    <p>
                        <h4>{{$faq->question}}</h4>
                        <p>{!! $faq->answer !!}</p>
                    </p>
    @endforeach
</div>

@endsection
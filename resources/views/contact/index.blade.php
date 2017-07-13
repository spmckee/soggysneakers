@extends('layouts.public.master')

@section('content')
<div class="container">
<h1>FAQs</h1>
    @foreach($faqs as $faq)
        <p>
            <h4>{{$faq->question}}</h4>
            <p>{!! $faq->answer !!}</p>
        </p>
    @endforeach
</div>

@endsection
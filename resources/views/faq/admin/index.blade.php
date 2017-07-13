@extends('layouts.admin.master')

@section('content')

<h1>FAQs</h1>

    @foreach($faqs as $faq)

        <p>
            <p></p>
        </p>


        <div class="card">
                <div class="card-header">
                    <strong>{{$faq->question}}</strong>
                </div>
                <div class="card-block">
                    {!! $faq->answer !!}
                </div>
                <div class="card-footer">
                    <button type="edit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Edit</button>
                    <button type="delete" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Delete</button>
                </div>
            </div>

    @endforeach

@endsection
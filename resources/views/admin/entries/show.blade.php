@extends('layouts.admin.master')

@section('content')

    <h1>{{ $entry->title }}</h1>
    <p>{{ $entry->description }}</p>
    <div class="evaltations">

        @foreach($entry->evaluations as $evaluation)

            <article>

                {{ $evaluation->q1 }}

            </article>

        @endforeach

    </div>

@endsection
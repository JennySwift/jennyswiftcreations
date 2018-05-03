@extends('layouts.app')

@section('content')
    <div class="codementor-success-story">
        <p class="alert alert-success">I was featured in the
            <a target="_blank" href="https://www.codementor.io/success-stories" class="alert-link">Codementor success stories.</a>
            :) Click
            <a target="_blank" href="https://www.codementor.io/success-stories/codementor-helps-beginner-gain-confidence" class="alert-link">here</a>
            to view my story.
        </p>
    </div>

    @include('templates.reviews')
@endsection
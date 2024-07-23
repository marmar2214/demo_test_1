@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ $news->title }}</div>
        <div class="card-body">
            <img src="{{ $news->image }}" class="img-fluid mb-3" alt="{{ $news->title }}">
            <p>{{ $news->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('news.index') }}" class="btn btn-secondary">Back to News</a>
        </div>
    </div>
</div>
@endsection

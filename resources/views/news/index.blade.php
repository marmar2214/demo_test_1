@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>News</h1>
        <a href="{{ route('news.create') }}" class="btn btn-primary">Create News</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @foreach ($news as $new)
            
                <img src="{{ $new->image }}" alt="" width="100">
                <h3>{{ $new->title }}</h3>
                <p>{{ $new->description }}</p>
                
                    <a href="{{ route('news.show', $new->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('news.edit', $new->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('news.destroy', $new->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                
        
        @endforeach
    
    </div>
@endsection

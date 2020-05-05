@extends('site.index')

@section('content')
        <div class="bghide">
            <img id="featureImg" src="{{asset('storage/'.$image->name)}}">
        </div>

        <div class="container">
            @forelse ($posts as $post)
                <h1>
                    {!! $post->title !!}
                </h1>
                <p>
                    {!! $post->body !!}
                </p>
            @empty

            @endforelse

        </div>
@endsection

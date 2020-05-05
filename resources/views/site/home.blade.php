@extends('site.index')

@section('content')
        <div class="bghide">
            @isset($image->name)
                <img id="featureImg" src="{{url('storage/'.$image->name)}}">
            @endisset
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

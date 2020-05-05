@extends('admin.app')

@section('content')
    <div class="conatiner justify-content ">
        <div class="col-md-12">
            <form action="{{route('posts.update', $post->id)}}" method="post">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{!! $post->title !!}" id="title" name="title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Body...">{!! $post->body !!}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

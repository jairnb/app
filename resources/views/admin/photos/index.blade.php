@extends('admin.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@isset($image->name)
    <img id="featureImg" src="{{asset('storage/'.$image->name)}}">
@endisset

     <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input class="form-control" type="file" name="name">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
@endsection

@push('script')
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
@endpush

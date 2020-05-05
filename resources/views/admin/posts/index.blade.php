@extends('admin.app')

@section('content')
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <span class="m-0 font-weight-bold text-primary h6">Posts Table</span>
              {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Post</button> --}}
              <a href="{{route('posts.create')}}" class="btn btn-primary float-right">Add Post</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @forelse ($posts as $post)
                        <tr>
                            <td>{!! $post->title !!}</td>
                            <td>{!! $post->body !!}</td>
                            <td>
                            <a href="{{url('posts/'.$post->id.'/edit')}}" class="btn btn-info btn-circle"><i class="fa fa-pen"></i></a>

                            <form action="{{ url('posts/'.$post->id)}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            </td>
                        </tr>
                      @empty
                      <tr>
                        <td colspan="90">
                            <p class="text-center">Empty!!!</p>
                        </td>
                    </tr>
                      @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          @include('admin.posts.modal')
@endsection

@push('script')
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
@endpush

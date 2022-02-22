@extends('layouts.admin')
@section('title', 'Genre Anime')
@section('content')

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-primary" role="alert" id="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10">
                        <h5 class="card-title">Data Genre</h5>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('genre.create') }}" class="btn btn-primary">ADD</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Genre</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        ?>
                        @foreach ($genres as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->genre }}</td>
                                <td>
                                    <a href="{{ route('genre.edit', $item->id) }}" class="btn btn-sm btn-warning"><i
                                            class="far fa-edit"></i></a>
                                    <form action="{{ route('genre.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fas fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('time-script')
    <script>
       $(document).ready(function() {
           window.setTimeout(function() {
                $('#alert').fadeTo(500,0).slideUp(500, function(){
                    $(this).remove();
                })
           }, 3000);
       })
    </script>
@endpush

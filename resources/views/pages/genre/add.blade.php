@extends('layouts.admin')
@section('title', 'Save Data Genre');
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Data Genre</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('genre.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control" name="genre" id="genre" placeholder="Masukan Genre">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success"><i class="far fa-save"></i> Save</button>
                    <button type="reset" class="btn btn-sm btn-warning"><i class="far fa-save"></i> Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')
@section('title', 'Genre Anime')
@section('content')
    <div class="container">

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
                        <tr>
                            <td>01</td>
                            <td>Action</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

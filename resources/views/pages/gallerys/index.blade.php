@extends('layouts.admin')
@section('title', 'Anime Page')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-10">
                    <h5 class="card-title">Data Gallery</h5>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary">ADD</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-borderer" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Url</th>
                        <th>Cover</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Shingeki No Kyojin</td>
                        <td>Action, Adventure, Shounen</td>
                        <td>...</td>
                        <td>
                            <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                            <a href="" class="btn btn-success"><i class="far fa-eye"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

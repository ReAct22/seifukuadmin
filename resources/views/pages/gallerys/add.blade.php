@extends('layouts.admin')
@section('title', 'Save Data Genre');
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Add Data Genre</h5>
        </div>
        <div class="card-body">
            <form action="" method="">
                @csrf
                    <div class="form-group">
                        <label for="Anime">Anime</label>
                        <select name="" id="" class="form-control">
                            <option value="">Pilih Anime</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Episode">Episode</label>
                        <input type="text" class="form-control" name="genre" id="genre" placeholder="Masukan Genre">
                    </div>
                    <div class="form-group">
                        <label for="genre">url</label>
                        <input type="text" class="form-control" name="genre" id="genre" placeholder="Masukan Genre">
                    </div>
                    <div class="form-group">
                        <label for="genre">Cover</label>
                        <input type="text" class="form-control" name="genre" id="genre" placeholder="Masukan Genre">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success"><i class="far fa-save"></i> Save</button>
                    <button type="reset" class="btn btn-sm btn-warning"><i class="far fa-save"></i> Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection

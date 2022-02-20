@extends('layouts.admin')
@section('title', ' Add Data Anime')
@section('content');
    <form action="" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Data Anime</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="" id="" placeholder="Masukan Judul" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Alternatif Title</label>
                                <input type="text" name="" id="" placeholder="Masukan Judul" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Sinopsis</label>
                                <textarea name="" id="" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Total Episode</label>
                                <input type="text" name="" id="" placeholder="Masukan Total Episode" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Information</h4>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-success">Publish</button>
                            <button class="btn btn-primary">Save As Draft</button>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="studio">Studio</label>
                                        <input type="text" name="" id="" placeholder="Masukan nama studio"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="musim">Musim</label>
                                        <input type="text" name="" id="" placeholder="Musim Penayangan" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Type">Type</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih Type Anime</option>
                                            <option value="Movie">Movie</option>
                                            <option value="TV Seris">TV Seris</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tglrilis">Tanggal Rilis</label>
                                        <input type="text" class="form-control" name="" id="tglrilis"
                                            placeholder="Tanggal rilis">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Type">Type</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih Type Anime</option>
                                            <option value="Movie">Movie</option>
                                            <option value="TV Seris">TV Seris</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tglrilis">Tanggal Rilis</label>
                                        <input type="text" class="form-control" name="" id="tglrilis"
                                            placeholder="Tanggal rilis" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Durasi">Durasi</label>
                                        <input type="text" class="form-control" name="" id="" placeholder="Durasi Anime">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tglrilis">Genre</label>
                                        <Select class="form-control" name="" id="">
                                            <option value="">Pilih Genre</option>
                                        </Select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Score">Score</label>
                                        <input type="text" name="score" id="" class="form-control" placeholder="Score Anime">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="ranting">Ranting</label>
                                        <input type="text" name="" id="" class="form-control" placeholder="Ranting Anime">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Cover">Cover</label>
                                <input type="file" name="" id="" class="form-control">
                            </div>
                            <div id="cover-show"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

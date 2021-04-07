@extends('master')

@section('content')
<div class="col-md-12">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">DATA PENGANTIN</h5>
        </div>
        <div class="card-body">
            <form method="POST" role="form" action="{{ url('/datapengantin/aksi_update/'.$data_pengantin->id) }}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" name="nama" value={{ $data_pengantin->nama }} class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>alamat</label>
                            <input type="text" name="alamat" value={{ $data_pengantin->alamat }} class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="Email" value={{ $data_pengantin->Email }} class="form-control">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>nohp</label>
                            <input type="text" name="nohp" value={{ $data_pengantin->nohp }} class="form-control">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>tanggal</label>
                            <input type="text" name="tanggal" value={{ $data_pengantin->tanggal }} class="form-control">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

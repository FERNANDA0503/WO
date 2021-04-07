@extends('master')

@section('content')
<div class="col-md-12">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">DATA BUSANA</h5>
        </div>
        <div class="card-body">
            <form method="POST" role="form" action="{{ url('/data_busana/aksi_update/'.$data_busana->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>keterangan</label>
                            <input type="text" name="keterangan" value={{ $data_busana->judul }} class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <img src="{{ URL::asset('/uploads/image/data_busana/'.$databusana->gambar) }}" class="img-thumbnail" alt="" style="width: 50px;height: 70px;">
                            <label>Thumbnail</label>
                            <div class="custom-file" id="customFile" lang="es">
                                <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile"
                                    aria-describedby="fileHelp">
                                <label class="custom-file-label" for="exampleInputFile">
                                    Select file...
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
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

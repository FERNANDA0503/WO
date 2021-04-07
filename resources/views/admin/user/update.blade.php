@extends('master')

@section('content')
<div class="col-md-12">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">DATA PENGANTIN</h5>
        </div>
        <div class="card-body">
            <form method="POST" role="form" action="{{ url('/alluser/aksi_update/'.$alluser->id) }}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" value="{{ $alluser->name }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ $alluser->email }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" hidden name="password" value="{{ $alluser->password }}"
                                class="form-control">
                            <input type="text" name="status" value="{{ $alluser->status }}" class="form-control">
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

@extends('master')

@section('content')
<div class="col-md-8">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">DATA PENGANTIN</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama</th>
                        <th scope="col">nohp</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">tanggal</th>
                        <th scope="col">aksi</th>
                    </tr>
                    <tr>
                        @foreach ($datapengantin as $index =>$p)

                        <th scope="row">{{ $index+1 }}</th>
                        <td>{{ $p->nama }}</td>
                        <td>{{  $p->nohp }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->Email }}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>
                            <a href="{{ url('/datapengantin/update/'.$p->id) }}">
                                <button type="button" class="btn btn-success">Update</button>
                            </a>
                            <a href="{{ url('/datapengantin/delete/'.$p->id) }}">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">INPUT DATA PENGANTIN</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('data_pengantin_create') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>nohp</label>
                            <input type="number" name="nohp" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
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

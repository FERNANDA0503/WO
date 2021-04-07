@extends('master')

@section('content')
<div class="col-md-6">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Vendor</h5>
        </div>
        <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <th>no</th>
                <th scope="col">paket_busana</th>
                <th scope="col">keterangan</th>
                <th>aksi</th>
              </tr>
              <tr>
            @foreach ($data_busana as $index =>$a)
            
                <th scope="row">{{ $index+1 }}</th>
                <td>
                  <img src="{{ URL::asset('/uploads/image/paket_busana/'.$a->paket_busana) }}" class="img-thumbnail" alt="" style="width: 50px;height: 70px;">
                </td>
                <td>{{ $a->keterangan }}</td>
                <td>
                  <a href="{{ url('/artikel/update/'.$a->id) }}">
                    <button type="button" class="btn btn-success">Update</button>
                  </a>
                  <a href="{{ url('/artikel/delete/'.$a->id) }}">
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
<div class="col-md-6">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">Keterangan</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('busana_create') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <div class="custom-file" id="customFile" lang="es">
                                <input type="file" name="paket_busana" class="custom-file-input" id="exampleInputFile"
                                    aria-describedby="fileHelp">
                                <label class="custom-file-label" for="exampleInputFile">
                                    Select file...
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="textarea22" cols="30" rows="35"></textarea>
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

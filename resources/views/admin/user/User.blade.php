@extends('master')

@section('content')
<div class="col-md-8">
    <div class="card card-user">
        <div class="card-header">
            <h5 class="card-title">User</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">username</th>
                        <th scope="col">Email</th>
                        <th scope="col">status</th>
                    </tr>
                    <tr>
                        @foreach ($alluser as $index =>$a)

                        <th scope="row">{{ $index+1 }}</th>
                        <td>{{ $a->name }}</td>
                        <td>{{  $a->email }}</td>
                        <td>
                            @if($a->status==0)
                            Adminstator
                            @elseif($a->status==1)
                            User
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('/alluser/update/'.$a->id) }}">
                                <button type="button" class="btn btn-success">Update</button>
                            </a>
                            <a href="{{ url('/alluser/delete/'.$a->id) }}">
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
    <div class="card card-User">
        <div class="card-header">
            <h5 class="card-title">USER</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('alluser_create') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" >
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

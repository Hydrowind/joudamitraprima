@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Admin</li>
    </ol>
    <!-- <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div> -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Admin Data
            <a class="btn btn-sm btn-primary float-end" href="{{ route('user.create') }}">+ Insert New Data</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                        <td> 
                            <div class="d-flex flex-row flex-nowrap">
                                <form action="{{ route( 'user.edit', $d->id) }}" method="get">
                                    <button class="btn btn-warning">Edit</button>
                                </form>
                                <a class="btn btn-danger ml-2" href="#" data-bs-toggle="modal" data-bs-target="{{ '#confirmModal'.$d->id }}">
                                    Hapus
                                </a>
                                <a class="btn btn-primary ml-2" href="#" data-bs-toggle="modal" data-bs-target="{{ '#changePasswordModal'.$d->id }}">
                                    Change Password
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@foreach ($data as $d)
<!-- Delete Modal -->
<div class="modal fade" id="{{ 'confirmModal'.$d->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">Apakah Anda yakin akan menghapus data ini ?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route( 'user.destroy', $d->id) }}" method="post" style="display: inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Change Password Modal -->
<div class="modal fade" id="{{ 'changePasswordModal'.$d->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn" data-bs-dismiss="modal"><i class="fas fa-xmark"></i></button>
      </div>
      <div class="modal-body">
        <form action="{{ route( 'user.changepassword', $d->id) }}" method="post" style="display: inline">
            @csrf
            <div class="form-group">
                <label for="name">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Input New Password" name="password" required>
            </div>
            <hr>

            <button type="submit" class="btn btn-primary btn-user btn-block">
                Submit
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
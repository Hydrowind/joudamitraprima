@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Gallery</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Gallery</li>
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
            Gallery Data
            <a class="btn btn-sm btn-primary float-end" href="{{ route('gallery.create') }}">+ Insert New Data</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Image URL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td><img src="{{ $d->imageUrl }}" alt="image" style="width: 300px; height: 200px"/></td>
                        <td> 
                            <div class="d-flex flex-row flex-nowrap">
                                <form action="{{ route( 'gallery.edit', $d->id) }}" method="get">
                                    <button class="btn btn-warning">Edit</button>
                                </form>
                                <a class="btn btn-danger ml-2" href="#" data-bs-toggle="modal" data-bs-target="{{ '#confirmModal'.$d->id }}">
                                    Hapus
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
<!-- Modal -->
<div class="modal fade" id="{{ 'confirmModal'.$d->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">Apakah Anda yakin akan menghapus data ini ?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route( 'gallery.destroy', $d->id) }}" method="post" style="display: inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
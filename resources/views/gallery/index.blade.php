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
                        <td>{{ $d->imageUrl }}</td>
                        <td> 
                            <div class="d-flex flex-row flex-nowrap">
                                <form action="{{ route( 'product.update', $d->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-warning">Edit</button>
                                </form>
                                <a class="btn btn-danger ml-2" href="#" data-toggle="modal" data-target="{{ '#confirmModal'.$d->id }}">
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
<div class="modal fade" id="{{ 'confirmModal'.$d->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">Apakah Anda yakin akan menghapus data ini ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <form action="{{ route( 'product.destroy', $d->id) }}" method="post" style="display: inline">
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
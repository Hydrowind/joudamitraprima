@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Product</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Product</li>
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
            Product Data
            <a class="btn btn-sm btn-primary float-end" href="{{ route('product.create') }}">+ Insert New Data</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>imageUrl</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Price</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->name }}</td>
                        <td><img src="{{ $d->imageUrl }}" alt="image" style="width: 300px; height: 200px"/></td>
                        <td>{{ $d->description }}</td>
                        <td>{{ $d->link }}</td>
                        <td>{{ $d->price }}</td>
                        <td>
                            @for($i=0 ; $i<$d->rating ; $i++)    
                                <div class="fa-solid fa-star"></div>
                            @endfor
                        </td>
                        <td>                                
                            <a class="btn btn-warning" href="{{ route( 'product.edit', $d->id) }}"><i class="fas fa-edit"></i>Edit</a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="{{ '#confirmModal'.$d->id }}">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
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
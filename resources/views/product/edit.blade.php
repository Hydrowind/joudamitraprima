@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="content-box-large">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-house-user"></i> Edit Data</h2>
            </div>
            <div class="card-body">
            <form class="user" method="post" action="{{ route('product.update', $data->id) }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name"
                            placeholder="Input Name" name="name" value="{{ $data->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ $data->imageUrl }}" alt="image" style="width: 300px; height: 200px"/>
                        <input type="file" class="form-control" id="imageUrl"
                            placeholder="Input Image" name="image" value="{{ $data->imageUrl }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description"
                            placeholder="Input Description" name="description" value="{{ $data->description }}" required>
                    </div>

                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link"
                            placeholder="Input Product Link" name="link" value="{{ $data->link }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price"
                            placeholder="Input Price" name="price" value="{{ $data->price }}" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


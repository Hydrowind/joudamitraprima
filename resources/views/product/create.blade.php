@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="content-box-large">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-house-user"></i> Create New Data</h2>
            </div>
            <div class="card-body">
                <form class="user" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Input Name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" placeholder="Input Image" name="image" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Input Description" name="description" required>
                    </div>

                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" placeholder="Input Product Link" name="link" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="Input Price" name="price" required>
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
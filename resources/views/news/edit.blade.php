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
                <form class="user" method="post" action="{{ route('news.update', $data->id) }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Input Title" name="title" value="{{ $data->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" id="content" placeholder="Input Content" name="content" value="{{ $data->content }}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ $data->imageUrl }}" alt="image" style="width: 300px; height: 200px"/>
                        <input type="file" class="form-control" id="image" placeholder="Input Image" name="image" value="{{ $data->imageUrl }}">
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
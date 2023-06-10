@extends('layouts.admin')
@section('content')

<div class="content-box-large">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-house-user"></i> Edit Data</h2>
            </div>
            <div class="card-body">
                <form class="user" method="post" action="{{ route('user.update', $data->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Input Name" name="name" value="{{ $data->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Input Email" name="email" value="{{ $data->email }}" required>
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


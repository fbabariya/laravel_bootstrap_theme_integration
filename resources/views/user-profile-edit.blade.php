@extends('customfiles.mainlayout')
@section('title', 'update')
@section('content')
<div class="container">
    <div class="row justify-content-center p-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Your Information</div>

                <div class="card-body">
                    <form action="{{ route('user.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

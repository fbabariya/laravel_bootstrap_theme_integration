@extends('customfiles.mainlayout')
@section('title', 'edit')
@section('content')
<div class="table-responsive p-5">
    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a> 
                </td>
            </tr>  
        </tbody>
    </table>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endsection

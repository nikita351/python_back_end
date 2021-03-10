@extends('parent')

@section('main')

@if($message = Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

@endif

<br>
<div align="right">
    <a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br>
    <table class="table table-border table-striped">
        <tr>
            <th width="10%">First Name</th>
            <th width="35%">Last Name</th>
            <th width="35%">Phone</th>
            <th width="35%">Action</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td>{{ $row['first_name'] }}</td>
                <td>{{ $row['last_name'] }}</td>
                <td>{{ $row['phone'] }}</td>
                <td>
                    <a href="{{ route('crud.show', $row['id']) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('crud.edit', $row['id']) }}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="{{ route('crud.destroy', $row['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

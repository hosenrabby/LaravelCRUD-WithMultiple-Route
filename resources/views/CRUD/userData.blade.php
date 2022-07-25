@extends('CRUD.layout')
@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-5 text-center">COMPLETE CRUD APPLICATION WITH LARAVEL</h1>
                <h3 class="display-6 text-center">All Data Information</h3>
                <hr>
                @if (session()->has('successMsg'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <strong>{{ session()->get('successMsg') }}</strong>
                    </div>
                @endif
                @if (session()->has('warnMsg'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>{{ session()->get('warnMsg') }}</strong>
                    </div>
                @endif
                <a class="btn btn-outline-success btn-sm" href="{{ url('/add') }}"><i
                        class="fa-solid fa-file-circle-plus"></i> ADD</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th colspan="2">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($passData as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->uName }}</td>
                                <td>{{ $data->uEmail }}</td>
                                <td>{{ $data->uPhone }}</td>
                                <td>
                                    <a href="{{ url('/editData/' . $data->id) }}" class="btn btn-outline-primary btn-sm"><i
                                            class="fa-solid fa-pen-to-square"></i> EDIT</a>
                                    <a href="{{ url('/deleteData/' . $data->id) }}" class="btn btn-outline-danger btn-sm"><i
                                            class="fa-solid fa-trash-can"></i> DELETE</a>
                                    {{-- <form action="{{ url('/deleteData/' . $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger" type="submit" name="submit">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin.master')
@section('title', 'view-categories Elearning')

@section('custome_styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css">

@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Categories</h1>
        <a href="{{ url('/admin/category/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Create Category</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-3 card shadow rounded">
                    <table id="categoryTable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Thumnail</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->title}}</td>
                                <td>{{$category->image}}</td>
                                <td>{{$category->created_at->format('d/m/Y')}}</td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @endforeach


                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('custom_scripts')

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#categoryTable');
    </script>
@endsection

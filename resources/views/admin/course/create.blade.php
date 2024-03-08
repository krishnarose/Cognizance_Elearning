@extends('layouts.admin.master')

@section('title', 'create-course Elearning')

@section('custom_styles')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection


@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create course</h1>
        <a href="{{ url('/admin/courese/') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> View All courses</a>
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
                <form action="{{ url('/admin/course/create') }}" method="post" class="card shadow rounded p-3"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="md-3">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="md-3">
                        <label for="">course Title</label>
                        <input class="form-control" type="text" name="title">
                        @error('title')
                            <span class="text-danger text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label for="">short Description</label>
                        <input class="form-control" type="text"name="description">
                        @error('description')
                            <span class="text-danger text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label for="">Long Description</label>
                        <textarea name="long_description" id="summernote" cols="30" rows="10"></textarea>
                        @error('long_description')
                            <span class="text-danger text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label for="">Slug</label>
                        <input class="form-control" type="text"name="slug">
                        @error('slug')
                            <span class="text-danger text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label for="">Video URL</label>
                        <input class="form-control" type="text"name="video">
                    </div>
                    <div class="md-3">
                        <label for="">Price</label>
                        <input class="form-control" type="text"name="price">
                    </div>
                    <div class="md-3">
                        <label for="">course Thumbnail</label>
                        <input class="form-control" type="file"name="image">
                    </div>
                    <div class="md-3">
                        <label for="">Meta course Title</label>
                        <input class="form-control" type="text"name="meta_title">
                    </div>
                    <div class="md-3">
                        <label for="">Meta course Description</label>
                        <input class="form-control" type="text"name="meta_description">
                    </div>
                    <div class="md-3">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

@section('custom_scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection

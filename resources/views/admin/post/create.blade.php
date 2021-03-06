@extends('admin.layouts.master')

@section('title', 'Post Create')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/post') }}" class="btn btn-secondary mb-3">
                Back
            </a>
        </div>
        <div class="col-md-12">

            @include('message.alert')

            <div class="card card-body">
                <form action="{{ url('admin/post') }}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Post Content</label>
                        <textarea name="content" rows="10" class="form-control">
                            {{ old('content') }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label >Category</label>
                        <select class="form-control" name="category_id[]" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Post Image</label>
                        <input type="file" multiple name="image[]" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
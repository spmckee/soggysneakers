@extends('layouts.admin.master')

@section('content')

<h1>Categories</h1>
<div class="card">
    <div class="card-header">
        <strong>Categories</strong> Elements
    </div>
    <div class="card-block">

        <form action="/admin/categories" method="post" class="form-horizontal ">
        {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Name</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control" id="description" rows="8"></textarea>
                </div>
            </div>

            <div class="form-group row">
                            <label class="col-md-2 form-control-label">Access</label>
                            <div class="col-md-9">
                                <div class="checkbox">
                                    <label for="is_hs">
                                        <input type="checkbox" id="is_hs" name="is_hs" value="1">High School
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label for="is_col">
                                        <input type="checkbox" id="is_col" name="is_col" value="1">College
                                    </label>
                                </div>
                            </div>
                        </div>

            <div class="form-group row">
                <label class="col-md-2"></label>
                <div class="alert-danger">

                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>

    <div class="card-footer">
      <div class="offset-sm-2 col-md-5">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
    </div>
</div>
@endsection

    {{-- <!-- TinyMCE -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script> --}}
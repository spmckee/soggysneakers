@extends ('layouts.admin.master')

@section ('content')

<div class="card">
    <div class="card-header">
        <strong>New FAQ</strong>
    </div>
    <div class="card-block">

        <form action="/admin/faqs" method="post" class="form-horizontal ">
        {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Question</label>
                <div class="col-md-8">
                    <input type="text" id="question" name="question" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="text-input">Answer</label>
                <div class="col-md-8">
                    <textarea  name="answer" class="form-control" id="answer" rows="8"></textarea>
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
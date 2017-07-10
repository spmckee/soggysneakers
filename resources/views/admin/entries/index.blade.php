@extends('layouts.admin.master')

@section('content')

@foreach ($entries as $entry)

<a href="/admin/entries/{{ $entry->id }}">{{ $entry->title }}</a>
{{-- {{ $entry->created_at->toFormatDataString() }} --}}
{{ $entry->created_at }}
@endforeach

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Striped Table
        </div>
        <div class="card-block">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Date registered</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Yiorgos Avraamu</td>
                        <td>2012/01/01</td>
                        <td>Member</td>
                        <td>
                            <span class="badge badge-success">Active</span>
                        </td>
                        <td>
                            <a class="btn btn-info" href="#">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Avram Tarasios</td>
                        <td>2012/02/01</td>
                        <td>Staff</td>
                        <td>
                            <span class="tag tag-danger">Banned</span>
                        </td>
                        <td>
                            <a class="btn btn-info" href="#">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Quintin Ed</td>
                        <td>2012/02/01</td>
                        <td>Admin</td>
                        <td>
                            <span class="tag tag-default">Inactive</span>
                        </td>
                        <td>
                            <a class="btn btn-info" href="#">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Enéas Kwadwo</td>
                        <td>2012/03/01</td>
                        <td>Member</td>
                        <td>
                            <span class="tag tag-warning">Pending</span>
                        </td>
                        <td>
                            <a class="btn btn-info" href="#">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Agapetus Tadeáš</td>
                        <td>2012/01/21</td>
                        <td>Staff</td>
                        <td>
                            <span class="tag tag-success">Active</span>
                        </td>
                        <td>
                            <a class="btn btn-info" href="#">
                                <i class="fa fa-edit "></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash-o "></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>


                        
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Striped Table
        </div>
        <div class="card-block">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Date registered</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Yiorgos Avraamu</td>
                        <td>2012/01/01</td>
                        <td>Member</td>
                        <td>
                            <span class="tag tag-success">Active</span>
                        </td>
                        </tr>
                    <tr>
                        <td>Avram Tarasios</td>
                        <td>2012/02/01</td>
                        <td>Staff</td>
                        <td>
                            <span class="tag tag-danger">Banned</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Quintin Ed</td>
                        <td>2012/02/01</td>
                        <td>Admin</td>
                        <td>
                            <span class="tag tag-default">Inactive</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Enéas Kwadwo</td>
                        <td>2012/03/01</td>
                        <td>Member</td>
                        <td>
                            <span class="tag tag-warning">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Agapetus Tadeáš</td>
                        <td>2012/01/21</td>
                        <td>Staff</td>
                        <td>
                            <span class="tag tag-success">Active</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
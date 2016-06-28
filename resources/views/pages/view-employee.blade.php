@extends('layout')

@section('content')
    <div class="col-sm-10">
        <div id="page-wrapper">
            <div class="container-fluid">
                <h1 class="page-header">
                    Employee
                </h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                @endif
                <ol class="breadcrumb">
                    <li class="active">
                        <strong><i class="fa fa-table"></i> View Employee </strong>
                    </li>
                </ol>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Employee ID</th>
                                <th>Firstname</th>
                                <th>Middlename</th>
                                <th>Lastname</th>
                                <th>Age</th>
                                <th>Mobile number</th>
                                <th>Address</th>
                                <th>Position</th>
                            </tr>
                        </thead>
                        @foreach ($employee as $view => $row)
                        <tbody>
                            <tr>
                                <td><a href=/edit-employee/{{ $row->id }}>{{ $row->employee_image }}</a></td>
                                <td><a href=/edit-employee/{{ $row->id }}>{{ $row->employee_id }}</a></td>
                                <td>{{ $row->employee_name }}</td>
                                <td>{{ $row->employee_mname }}</td>
                                <td>{{ $row->employee_lname }}</td>
                                <td>{{ $row->age }}</td>
                                <td>{{ $row->mobile_number }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->position }}</td>
                                <td><a class="btn btn-success form-control uppercase" href=/edit-employee/{{ $row->id }}>Edit</a></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

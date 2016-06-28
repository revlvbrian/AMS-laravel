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
                        <strong><i class="fa fa-pencil-square-o"></i> Edit Employee </strong>
                    </li>
                </ol>
                <div class="form-asset">
                     <form role="form" method="POST" action="/updateEmployee/{{ $employee->id }}"><input type="hidden" value="PATCH" name="_method">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="employee_image">Image:</label>
                                    <input type="file" class="form-control" name="employee_image" value={{ $employee->employee_image }}>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="employee_id">Employee ID:</label>
                                    <input type="text" class="form-control" name="employee_id" value={{ $employee->employee_id }}>
                                </div>
                                <div class="form-group">
                                    <label for="employee_name">Firstname:</label>
                                    <input type="text" class="form-control" name="employee_name" value={{ $employee->employee_name }}>
                                </div>
                                <div class="form-group">
                                    <label for="employee_mname">Middlename:</label>
                                    <input type="text" class="form-control" name="employee_mname" value={{ $employee->employee_mname }}>
                                </div>
                                <div class="form-group">
                                    <label for="employee_lname">Lastname:</label>
                                    <input type="text" class="form-control" name="employee_lname" value={{ $employee->employee_lname }}>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="age">Age:</label>
                                    <input type="number" class="form-control" name="age" value={{ $employee->age }}>
                                </div>
                                <div class="form-group">
                                    <label for="mobile_number">Mobile number:</label>
                                    <input type="number" class="form-control" name="mobile_number" value={{ $employee->mobile_number }}>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address" value={{ $employee->address }}>
                                </div>
                                <div class="form-group">
                                    <label for="position">Position:</label>
                                    <input type="text" class="form-control" name="position" value={{ $employee->position }}>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="/deleteEmployee/{{ $employee->id }}" class="btn btn-danger form-control uppercase">Delete</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success form-control uppercase">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

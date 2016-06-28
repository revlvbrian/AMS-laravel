@extends('layout')

@section('content')
    <div class="col-sm-10">
        <div id="page-wrapper">
            <div class="container-fluid">
                <h1 class="page-header">
                    Employeee
                </h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                @endif
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-plus"></i><strong> Add Employee </strong>
                    </li>
                </ol>
                <div class="form-asset">
                    <form role="form" action="/storeEmployee" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="employee_id">Employee ID:</label>
                                    <input type="text" class="form-control" name="employee_id">
                                </div>
                                <div class="form-group">
                                    <label for="employee_fname">Firstname:</label>
                                    <input type="text" class="form-control" name="employee_name">
                                </div>
                                <div class="form-group">
                                    <label for="employee_mname">Middlename:</label>
                                    <input type="text" class="form-control" name="employee_mname">
                                </div>
                                <div class="form-group">
                                    <label for="employee_lname">Lastname:</label>
                                    <input type="text" class="form-control" name="employee_lname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="age">Age:</label>
                                    <input type="number" class="form-control" name="age">
                                </div>
                                <div class="form-group">
                                    <label for="mobile_number">Mobile number:</label>
                                    <input type="number" class="form-control" name="mobile_number">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position:</label>
                                    <input type="text" class="form-control" name="position">
                                </div>
                                <div class="form-group">
                                    <label for="employee_image">Image:</label>
                                    <input type="file" class="form-control" name="employee_image">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="add-asset" class="btn btn-primary uppercase">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

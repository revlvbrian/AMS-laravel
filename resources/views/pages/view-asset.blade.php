@extends('layout')

@section('content')
    <div class="col-sm-10">
        <div id="page-wrapper">
            <div class="container-fluid">
                <h1 class="page-header">
                    Assets
                </h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                @endif
                <ol class="breadcrumb">
                    <li class="active">
                        <strong><i class="fa fa-table"></i> View Asset </strong>
                    </li>
                </ol>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Serial number</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Remarks</th>
                                <th>Image</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        @foreach ($asset as $view => $row)
                        <tbody>
                            <tr>
                                <td><a href=/edit-asset/{{ $row->id }}>{{ $row->serial_number }}</a></td>
                                <td>{{ $row->asset_name }}</td>
                                <td>{{ $row->asset_type }}</td>
                                <td>{{ $row->remarks }}</td>
                                <td><a href=/edit-asset/{{ $row->id }}>{{ $row->asset_image }}</a></td>
                                <td><a class="btn btn-success form-control uppercase" href=/edit-asset/{{ $row->id }}>Edit</a></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

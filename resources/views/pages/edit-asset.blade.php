@extends('layout')

@section('content')
    <div class="col-sm-10">
        <div id="page-wrapper">
            <div class="container-fluid">
                <h1 class="page-header">
                    Assets
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <strong><i class="fa fa-pencil-square-o"></i> Edit Asset </strong>
                    </li>
                </ol>

                @foreach ($asset as $view => $row)
                    <div class="edit-asset">
                        <form role="form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="serial-number">Serial number:</label>
                                    <input type="number" class="form-control" value={{ $row->serial_number }}>
                                </div>
                                <div class="form-group">
                                    <label for="asset_name">Name:</label>
                                    <input type="text" class="form-control" value={{ $row->asset_name }}>
                                </div>
                                <div class="form-group">
                                    <label for="asset_type">Type:</label>
                                    <input type="text" class="form-control" value={{ $row->asset_type }}>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="asset-remarks">Remarks:</label>
                                    <textarea class="add-asset form-control" name="asset-remarks">{{ $row->remarks }}</textarea>
                                </div>
                            <div class="form-group">
                                    <label for="asset-img">Image:</label>
                                    <input type="file" class="form-control" name="asset-img">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="btn btn-danger form-control" href=delete.php?asset_id=$row[asset_id]>Delete</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn btn-success form-control" href=update.php?asset_id=$row[asset_id]>Update</a>
                            </div>
                        </div>
                        </form>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@stop

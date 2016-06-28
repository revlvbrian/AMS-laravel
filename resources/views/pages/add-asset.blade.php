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
                        <i class="fa fa-plus"></i><strong> Add Asset </strong>
                    </li>
                </ol>
                <div class="form-asset">
                    <form role="form" action="/storeAsset" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="serial_number">Serial number:</label>
                                    <input type="number" class="form-control" name="serial_number" id="serial_no">
                                </div>
                                <div class="form-group">
                                    <label for="asset_name">Name:</label>
                                    <input type="text" class="form-control" name="asset_name" id="asset_name">
                                </div>
                                <div class="form-group">
                                    <label for="asset_type">Type:</label>
                                    <input type="text" class="form-control" name="asset_type" id="asset_type">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="remarks">Remarks:</label>
                                    <textarea class="add-asset form-control" name="remarks" id="remarks"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="asset_image">Image:</label>
                                    <input type="file" class="form-control" name="asset_image">
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

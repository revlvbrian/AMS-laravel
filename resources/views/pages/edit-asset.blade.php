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
                        <strong><i class="fa fa-pencil-square-o"></i> Edit Asset </strong>
                    </li>
                </ol>
                <div class="form-asset">
                    <form role="form" method="POST" action="/updateAsset/{{ $asset->id }}"><input type="hidden" value="PATCH" name="_method">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="employee_image">Image:</label>
                                    <input type="file" class="form-control" name="asset_image" value={{ $asset->asset_image }}>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="serial-number">Serial number:</label>
                                    <input type="number" class="form-control" name="serial_number" value={{ $asset->serial_number }}>
                                </div>
                                <div class="form-group">
                                    <label for="asset_name">Name:</label>
                                    <input type="text" class="form-control" name="asset_name" value={{ $asset->asset_name }}>
                                </div>
                                <div class="form-group">
                                    <label for="asset_type">Type:</label>
                                    <input type="text" class="form-control" name="asset_type" value={{ $asset->asset_type }}>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="asset-remarks">Remarks:</label>
                                    <textarea class="add-asset form-control" name="remarks">{{ $asset->remarks }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="/deleteAsset/{{ $asset->id }}" class="btn btn-danger form-control uppercase">Delete</a>
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

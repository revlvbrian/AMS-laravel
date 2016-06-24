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
                        <strong><i class="fa fa-clipboard"></i> View Asset </strong>
                    </li>
                </ol>

            @foreach ($asset as $view => $row)
                <div class="view-asset">
                    <form role="form" action="add.php" method="POST">
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
                                <label for="asset-no">Remarks:</label>
                                <textarea class="add-asset form-control" name="asset-remarks">{{ $row->remarks }}</textarea>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            @endforeach

            </div>
        </div>
    </div>
@stop
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

        <h2>{{ $row->serial_number }}</h2>

    @endforeach

    </div>
        </div>
    </div>

@stop
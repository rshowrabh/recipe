@extends('layout.layout')
@section('title', 'Meal Tag')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Tag</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Tag</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-tag') }}" class="btn btn-primary float-right">
                        <i class="fas fa-arrow-left"></i> Back to list</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th> Name</th>
                                    <td> {{ $mealtag->name }} </td>
                                </tr>
                                <tr>
                                    <th> Description</th>
                                    <td>{!! $mealtag->description !!}</td>
                                </tr>
                                <tr>
                                    <th> Approved</th>
                                    <td> {{ $mealtag->approved }} </td>
                                </tr>
                                <tr>
                                    <th> Color Code</th>
                                    <td> {{ $mealtag->color_code }} </td>
                                </tr>
                                <tr>
                                    <th> Meal Tag Categories Id</th>
                                    <td> {{ $mealtag->meal_tag_categories_id }} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@stop
@section('footer')
@endsection
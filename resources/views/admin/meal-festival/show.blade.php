@extends('layout.layout')
@section('title', 'Meal Festival')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Festival</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Festival</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-festival') }}" class="btn btn-primary float-right">
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
                                    <td> {{ $mealfestival->name }} </td>
                                </tr>
                                <tr>
                                    <th> Holiday</th>
                                    <td> {{ $mealfestival->holiday }} </td>
                                </tr>
                                <tr>
                                    <th> Description</th>
                                    <td> {!! $mealfestival->description !!} </td>
                                </tr>
                                <tr>
                                    <th> Festival Date</th>
                                    <td> {{ $mealfestival->festival_date }} </td>
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
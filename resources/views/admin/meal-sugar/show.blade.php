@extends('layout.layout')
@section('title', 'Meal Sugar')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Sugar</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Sugar</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-sugar') }}" class="btn btn-primary float-right">
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
                                    <th> Ingredient</th>
                                    <td>{{ optional($mealsugar->ingredient)->name }}</td>
                                </tr>
                                <tr>
                                    <th> Sugar</th>
                                    <td> {{ $mealsugar->sugar }} </td>
                                </tr>
                                <tr>
                                    <th> Sucrose</th>
                                    <td> {{ $mealsugar->sucrose }} </td>
                                </tr>
                                <tr>
                                    <th> Glucose</th>
                                    <td> {{ $mealsugar->glucose }} </td>
                                </tr>
                                <tr>
                                    <th> Fructose</th>
                                    <td> {{ $mealsugar->fructose }} </td>
                                </tr>
                                <tr>
                                    <th> Lactose</th>
                                    <td> {{ $mealsugar->lactose }} </td>
                                </tr>
                                <tr>
                                    <th> Maltose</th>
                                    <td> {{ $mealsugar->maltose }} </td>
                                </tr>
                                <tr>
                                    <th> Glactose</th>
                                    <td> {{ $mealsugar->glactose }} </td>
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
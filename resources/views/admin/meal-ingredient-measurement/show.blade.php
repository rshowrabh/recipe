@extends('layout.layout')
@section('title', 'Meal Ingredient Measurement')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Ingredient Measurement</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Ingredient Measurement</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-ingredient-measurement') }}" class="btn btn-primary float-right">
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
                                    <td>{{ optional($mealingredientmeasurement->ingredient)->name }}</td>
                                </tr>
                                <tr>
                                    <th> Measurement</th>
                                    <td>{{ optional($mealingredientmeasurement->measurement)->unit }}</td>
                                </tr>
                                <tr>
                                    <th> Measure</th>
                                    <td> {{ $mealingredientmeasurement->measure }} </td>
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
@extends('layout.layout')
@section('title', 'Meal Recipe Ingredient')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Recipe Ingredient</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Recipe Ingredient</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-recipe-ingredient') }}" class="btn btn-primary float-right">
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
                                    <th> Recipe</th>
                                    <td>{{ optional($mealrecipeingredient->recipe)->name }}</td>
                                </tr>
                                <tr>
                                    <th> Ingredient</th>
                                    <td>{{ optional($mealrecipeingredient->ingredient)->name }}</td>
                                </tr>
                                <tr>
                                    <th> Quantity</th>
                                    <td> {{ $mealrecipeingredient->quantity }} </td>
                                </tr>
                                <tr>
                                    <th> Unit Measure</th>
                                    <td> {{ $mealrecipeingredient->unit_measure }} </td>
                                </tr>
                                <tr>
                                    <th> Main Ingredient</th>
                                    <td>{{ optional($mealrecipeingredient->mainIngredient)->name }}</td>
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
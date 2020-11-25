@extends('layout.layout')
@section('title', 'Meal Fat')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Fat</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Fat</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-fat') }}" class="btn btn-primary float-right">
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
                                    <td>{{ optional($mealfat->ingredient)->name }}</td>
                                </tr>
                                <tr>
                                    <th> Saturated Fat</th>
                                    <td> {{ $mealfat->saturated_fat }} </td>
                                </tr>
                                <tr>
                                    <th> Mono Unsaturated Fat</th>
                                    <td> {{ $mealfat->mono_unsaturated_fat }} </td>
                                </tr>
                                <tr>
                                    <th> Poly Unsaturated Fat</th>
                                    <td> {{ $mealfat->poly_unsaturated_fat }} </td>
                                </tr>
                                <tr>
                                    <th> Trans Fat</th>
                                    <td> {{ $mealfat->trans_fat }} </td>
                                </tr>
                                <tr>
                                    <th> Omega 3 Fatty Acid</th>
                                    <td> {{ $mealfat->omega_3_fatty_acid }} </td>
                                </tr>
                                <tr>
                                    <th> Omega 6 Fatty Acid</th>
                                    <td> {{ $mealfat->omega_6_fatty_acid }} </td>
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
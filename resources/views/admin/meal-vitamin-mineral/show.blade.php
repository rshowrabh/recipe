@extends('layout.layout')
@section('title', 'Meal Vitamin Mineral')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Vitamin Mineral</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Vitamin Mineral</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-vitamin-mineral') }}" class="btn btn-primary float-right">
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
                                    <th>Ingredient</th>
                                    <td>{{ optional($mealvitaminmineral->ingredient)->name }}</td>
                                </tr>
                                <tr>
                                    <th> Vitamin A</th>
                                    <td> {{ $mealvitaminmineral->vitamin_a }} </td>
                                </tr>
                                <tr>
                                    <th> Vitamin B6</th>
                                    <td> {{ $mealvitaminmineral->vitamin_b6 }} </td>
                                </tr>
                                <tr>
                                    <th> Vitamin B12</th>
                                    <td> {{ $mealvitaminmineral->vitamin_b12 }} </td>
                                </tr>
                                <tr>
                                    <th> Vitamin C</th>
                                    <td> {{ $mealvitaminmineral->vitamin_c }} </td>
                                </tr>
                                <tr>
                                    <th> Vitamin D</th>
                                    <td> {{ $mealvitaminmineral->vitamin_d }} </td>
                                </tr>
                                <tr>
                                    <th> Vitamin D2</th>
                                    <td> {{ $mealvitaminmineral->vitamin_d2 }} </td>
                                </tr>
                                <tr>
                                    <th> Vitamin D3</th>
                                    <td> {{ $mealvitaminmineral->vitamin_d3 }} </td>
                                </tr>
                                <tr>
                                    <th> Vitamin E</th>
                                    <td> {{ $mealvitaminmineral->vitamin_e }} </td>
                                </tr>
                                <tr>
                                    <th> Vitamin K</th>
                                    <td> {{ $mealvitaminmineral->vitamin_k }} </td>
                                </tr>
                                <tr>
                                    <th> Calcium</th>
                                    <td> {{ $mealvitaminmineral->calcium }} </td>
                                </tr>
                                <tr>
                                    <th> Iron</th>
                                    <td> {{ $mealvitaminmineral->iron }} </td>
                                </tr>
                                <tr>
                                    <th> Magnesium</th>
                                    <td> {{ $mealvitaminmineral->magnesium }} </td>
                                </tr>
                                <tr>
                                    <th> Phosphorus</th>
                                    <td> {{ $mealvitaminmineral->phosphorus }} </td>
                                </tr>
                                <tr>
                                    <th> Zinc</th>
                                    <td> {{ $mealvitaminmineral->zinc }} </td>
                                </tr>
                                <tr>
                                    <th> Copper</th>
                                    <td> {{ $mealvitaminmineral->copper }} </td>
                                </tr>
                                <tr>
                                    <th> Manganese</th>
                                    <td> {{ $mealvitaminmineral->manganese }} </td>
                                </tr>
                                <tr>
                                    <th> Selenium</th>
                                    <td> {{ $mealvitaminmineral->selenium }} </td>
                                </tr>
                                <tr>
                                    <th> Retinol</th>
                                    <td> {{ $mealvitaminmineral->retinol }} </td>
                                </tr>
                                <tr>
                                    <th> Thiamine</th>
                                    <td> {{ $mealvitaminmineral->thiamine }} </td>
                                </tr>
                                <tr>
                                    <th> Riboflavin</th>
                                    <td> {{ $mealvitaminmineral->riboflavin }} </td>
                                </tr>
                                <tr>
                                    <th> Niacin</th>
                                    <td> {{ $mealvitaminmineral->niacin }} </td>
                                </tr>
                                <tr>
                                    <th> Folate</th>
                                    <td> {{ $mealvitaminmineral->folate }} </td>
                                </tr>
                                <tr>
                                    <th> Choline</th>
                                    <td> {{ $mealvitaminmineral->choline }} </td>
                                </tr>
                                <tr>
                                    <th> Betaine</th>
                                    <td> {{ $mealvitaminmineral->betaine }} </td>
                                </tr>
                                <tr>
                                    <th> Caffeine</th>
                                    <td> {{ $mealvitaminmineral->caffeine }} </td>
                                </tr>
                                <tr>
                                    <th> Lycopene</th>
                                    <td> {{ $mealvitaminmineral->lycopene }} </td>
                                </tr>
                                <tr>
                                    <th> Fluoride</th>
                                    <td> {{ $mealvitaminmineral->fluoride }} </td>
                                </tr>
                                <tr>
                                    <th> Water</th>
                                    <td> {{ $mealvitaminmineral->water }} </td>
                                </tr>
                                <tr>
                                    <th> Calcium In Percent</th>
                                    <td> {{ $mealvitaminmineral->calcium_in_percent }} </td>
                                </tr>
                                <tr>
                                    <th> Choline In Percent</th>
                                    <td> {{ $mealvitaminmineral->choline_in_percent }} </td>
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
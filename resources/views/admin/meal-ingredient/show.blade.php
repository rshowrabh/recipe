@extends('layout.layout')
@section('title', 'Meal Ingredient')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Ingredient</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Ingredient</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-ingredient') }}" class="btn btn-primary float-right">
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
                                    <td> {{ $mealingredient->name }} </td>
                                </tr>
                                <tr>
                                    <th> Also Known</th>
                                    <td> {{ $mealingredient->also_known }} </td>
                                </tr>
                                <tr>
                                    <th> Storage</th>
                                    <td> {{ $mealingredient->storage }} </td>
                                </tr>
                                <tr>
                                    <th> Shelf Life</th>
                                    <td> {{ $mealingredient->shelf_life }} </td>
                                </tr>
                                <tr>
                                    <th> Is Healthy</th>
                                    <td> {{ $mealingredient->is_healthy }} </td>
                                </tr>
                                <tr>
                                    <th> Parameter</th>
                                    <td> {{ $mealingredient->parameter }} </td>
                                </tr>
                                <tr>
                                    <th> Description</th>
                                    <td> {!! $mealingredient->description !!} </td>
                                </tr>
                                <tr>
                                    <th> Directly Edible</th>
                                    <td> {{ $mealingredient->directly_edible }} </td>
                                </tr>
                                <tr>
                                    <th> Images</th>
                                    <td>
                                        <a href="{{ url('download_multiple/'. $mealingredient->images) }}"
                                           target="_blank">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Image</th>
                                    <td>
                                        <a href="{{ url('download/'. $mealingredient->image) }}" target="_blank">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Thumb Image</th>
                                    <td>
                                        <a href="{{ url('download/'. $mealingredient->thumb_image) }}" target="_blank">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Category</th>
                                    <td> {{ optional($mealingredient->category)->name }} </td>
                                </tr>
                                <tr>
                                    <th> Calories</th>
                                    <td> {{ $mealingredient->calories }} </td>
                                </tr>
                                <tr>
                                    <th> Carbs</th>
                                    <td> {{ $mealingredient->carbs }} </td>
                                </tr>
                                <tr>
                                    <th> Fats</th>
                                    <td> {{ $mealingredient->fats }} </td>
                                </tr>
                                <tr>
                                    <th> protien</th>
                                    <td> {{ $mealingredient->protien }} </td>
                                </tr>
                                <tr>
                                    <th> Price</th>
                                    <td> {{ $mealingredient->price }} </td>
                                </tr>
                                <tr>
                                    <th> Serving</th>
                                    <td> {{ $mealingredient->serving }} </td>
                                </tr>
                                <tr>
                                    <th> Food Group</th>
                                    <td> {{ $mealingredient->food_group }} </td>
                                </tr>
                                <tr>
                                    <th> Per Gram Serving</th>
                                    <td> {{ $mealingredient->per_gram_serving }} </td>
                                </tr>
                                <tr>
                                    <th> Fiber In Gm</th>
                                    <td> {{ $mealingredient->fiber_in_gm }} </td>
                                </tr>
                                <tr>
                                    <th> Fiber In Percent</th>
                                    <td> {{ $mealingredient->fiber_in_percent }} </td>
                                </tr>
                                <tr>
                                    <th> Sodium In Mg</th>
                                    <td> {{ $mealingredient->sodium_in_mg }} </td>
                                </tr>
                                <tr>
                                    <th> Sodium In Percent</th>
                                    <td> {{ $mealingredient->sodium_in_percent }} </td>
                                </tr>
                                <tr>
                                    <th> Potassium</th>
                                    <td> {{ $mealingredient->potassium }} </td>
                                </tr>
                                <tr>
                                    <th> Cholesterol</th>
                                    <td> {{ $mealingredient->cholesterol }} </td>
                                </tr>
                                <tr>
                                    <th> Approved</th>
                                    <td> {{ $mealingredient->approved }} </td>
                                </tr>
                                <tr>
                                    <th> Created By</th>
                                    <td> {{ $mealingredient->created_by }} </td>
                                </tr>
                                <tr>
                                    <th> Sugar</th>
                                    <td> {{ $mealingredient->sugar }} </td>
                                </tr>
                                <tr>
                                    <th> Title</th>
                                    <td> {{ $mealingredient->title }} </td>
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
@extends('layout.layout')
@section('title', 'Meal Recipe')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Recipe</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Recipe</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-recipe') }}" class="btn btn-primary float-right">
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
                                    <th> Title</th>
                                    <td> {{ $mealrecipe->title }} </td>
                                </tr>
                                <tr>
                                    <th> Name</th>
                                    <td> {{ $mealrecipe->name }} </td>
                                </tr>
                                <tr>
                                    <th> Recipe Leftover</th>
                                    <td> {{ $mealrecipe->recipe_leftover }} </td>
                                </tr>
                                <tr>
                                    <th> Recipe Origin</th>
                                    <td> {{ $mealrecipe->recipe_origin }} </td>
                                </tr>
                                <tr>
                                    <th> Chef</th>
                                    <td> {{ $mealrecipe->chef }} </td>
                                </tr>
                                <tr>
                                    <th> Also Known</th>
                                    <td> {{ $mealrecipe->also_known }} </td>
                                </tr>
                                <tr>
                                    <th> Image</th>
                                    <td><a href="{{ url('download/'. $mealrecipe->image) }}"
                                           target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th> Thumb Image</th>
                                    <td><a href="{{ url('download/'. $mealrecipe->thumb_image) }}" target="_blank">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Imagealt</th>
                                    <td> {{ $mealrecipe->imagealt }} </td>
                                </tr>
                                <tr>
                                    <th> Imagetitle</th>
                                    <td> {{ $mealrecipe->imagetitle }} </td>
                                </tr>
                                <tr>
                                    <th> Images</th>
                                    <td>
                                        <a href="{{ url('download_multiple/'. $mealrecipe->images) }}" target="_blank">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Description</th>
                                    <td> {!! $mealrecipe->description !!} </td>
                                </tr>
                                <tr>
                                    <th> Prep Time</th>
                                    <td> {{ $mealrecipe->prep_time }} </td>
                                </tr>
                                <tr>
                                    <th> Cook Time</th>
                                    <td> {{ $mealrecipe->cook_time }} </td>
                                </tr>
                                <tr>
                                    <th> Cook Time To</th>
                                    <td> {{ $mealrecipe->cook_time_to }} </td>
                                </tr>
                                <tr>
                                    <th> Yields</th>
                                    <td> {{ $mealrecipe->yields }} </td>
                                </tr>
                                <tr>
                                    <th> Serving Size</th>
                                    <td> {{ $mealrecipe->serving_size }} </td>
                                </tr>
                                <tr>
                                    <th> Recipe Unit</th>
                                    <td> {{ $mealrecipe->recipe_unit }} </td>
                                </tr>
                                <tr>
                                    <th> Cooking Type</th>
                                    <td> {{ $mealrecipe->cooking_type }} </td>
                                </tr>
                                <tr>
                                    <th> Serving Description</th>
                                    <td> {{ $mealrecipe->serving_description }} </td>
                                </tr>
                                <tr>
                                    <th> Category</th>
                                    <td>{{ optional($mealrecipe->mealRecipeCategory)->name }}</td>
                                <tr>
                                    <th> Sub Category</th>
                                    <td>{{ optional($mealrecipe->mealRecipeSubCategory)->sub_category_name }}</td>
                                <tr>
                                    <th> Sub Sub Category</th>
                                    <td>{{ optional($mealrecipe->mealRecipeSubSubCategory)->sub_sub_category_name }}</td>
                                </tr>
                                <tr>
                                    <th> Dish Type</th>
                                    <td> {{ $mealrecipe->dish_type }} </td>
                                </tr>
                                <tr>
                                    <th> Single Serving</th>
                                    <td> {{ $mealrecipe->single_serving }} </td>
                                </tr>
                                <tr>
                                    <th> Breakfast</th>
                                    <td> {{ $mealrecipe->breakfast }} </td>
                                </tr>
                                <tr>
                                    <th> Keeps Well</th>
                                    <td> {{ $mealrecipe->keeps_well }} </td>
                                </tr>
                                <tr>
                                    <th> Calories</th>
                                    <td> {{ $mealrecipe->calories }} </td>
                                </tr>
                                <tr>
                                    <th> Directions</th>
                                    <td> {{ $mealrecipe->directions }} </td>
                                </tr>
                                <tr>
                                    <th> Positive Point</th>
                                    <td> {{ $mealrecipe->positive_point }} </td>
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
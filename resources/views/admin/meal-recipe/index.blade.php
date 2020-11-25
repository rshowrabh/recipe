@extends('layout.layout')
@section('title', 'Meal Recipe')
@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
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
                    <a href="{{ url('/admin/meal-recipe/create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus"></i> Create new</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                @include('layout.flash_message')
                <table id="example" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Recipe Leftover</th>
                        <th>Recipe Origin</th>
                        <th>Chef</th>
                        <th>Also Known</th>
                        <th>Image</th>
                        <th>Thumb Image</th>
                        <th>Imagealt</th>
                        <th>Imagetitle</th>
                        <th>Images</th>
                        <th>Description</th>
                        <th>Prep Time</th>
                        <th>Cook Time</th>
                        <th>Cook Time To</th>
                        <th>Yields</th>
                        <th>Serving Size</th>
                        <th>Recipe Unit</th>
                        <th>Cooking Type</th>
                        <th>Serving Description</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Sub Sub Category</th>
                        <th>Dish Type</th>
                        <th>Single Serving</th>
                        <th>Breakfast</th>
                        <th>Keeps Well</th>
                        <th>Calories</th>
                        <th>Directions</th>
                        <th>Positive Point</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mealrecipe as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->recipe_leftover }}</td>
                            <td>{{ $item->recipe_origin }}</td>
                            <td>{{ $item->chef }}</td>
                            <td>{{ $item->also_known }}</td>
                            <td><a href="{{ url('download/'. $item->image) }}" target="_blank">Download</a></td>
                            <td><a href="{{ url('download/'. $item->thumb_image) }}" target="_blank">Download</a></td>
                            <td>{{ $item->imagealt }}</td>
                            <td>{{ $item->imagetitle }}</td>
                            <td>
                                <a href="{{ url('download_multiple/'. $item->images) }}" target="_blank">Download</a>
                            </td>
                            <td>{!! $item->description !!}</td>
                            <td>{{ $item->prep_time }}</td>
                            <td>{{ $item->cook_time }}</td>
                            <td>{{ $item->cook_time_to }}</td>
                            <td>{{ $item->yields }}</td>
                            <td>{{ $item->serving_size }}</td>
                            <td>{{ $item->recipe_unit }}</td>
                            <td>{{ $item->cooking_type }}</td>
                            <td>{{ $item->serving_description }}</td>
                            <td>{{ optional($item->mealRecipeCategory)->name }}</td>
                            <td>{{ optional($item->mealRecipeSubCategory)->sub_category_name }}</td>
                            <td>{{ optional($item->mealRecipeSubSubCategory)->sub_sub_category_name }}</td>
                            <td>{{ $item->dish_type }}</td>
                            <td>{{ $item->single_serving }}</td>
                            <td>{{ $item->breakfast }}</td>
                            <td>{{ $item->keeps_well }}</td>
                            <td>{{ $item->calories }}</td>
                            <td>{{ $item->directions }}</td>
                            <td>{{ $item->positive_point }}</td>
                            <td>
                                <a href="{{ url('/admin/meal-recipe/' . $item->id) }}" title="View MealRecipe">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View
                                    </button>
                                </a>
                                <a href="{{ url('/admin/meal-recipe/' . $item->id . '/edit') }}"
                                   title="Edit MealRecipe">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i> Edit
                                    </button>
                                </a>

                                <form method="POST" action="{{ url('/admin/meal-recipe' . '/' . $item->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete MealRecipe"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@stop
@section('footer')
    <!-- DataTables -->
    <script src="{{asset('resources/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('resources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('resources/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('resources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $("#example").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
@extends('layout.layout')
@section('title', 'Meal Ingredient')
@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
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
                    <a href="{{ url('/admin/meal-ingredient/create') }}" class="btn btn-primary float-right">
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
                        <th>Name</th>
                        <th>Also Known</th>
                        <th>Storage</th>
                        <th>Shelf Life</th>
                        <th>Is Healthy</th>
                        <th>Parameter</th>
                        <th>Description</th>
                        <th>Directly Edible</th>
                        <th>Images</th>
                        <th>Image</th>
                        <th>Thumb Image</th>
                        <th>Category</th>
                        <th>Calories</th>
                        <th>Carbs</th>
                        <th>Fats</th>
                        <th>protien</th>
                        <th>Price</th>
                        <th>Serving</th>
                        <th>Food Group</th>
                        <th>Per Gram Serving</th>
                        <th>Fiber In Gm</th>
                        <th>Fiber In Percent</th>
                        <th>Sodium In Mg</th>
                        <th>Sodium In Percent</th>
                        <th>Potassium</th>
                        <th>Cholesterol</th>
                        <th>Approved</th>
                        <th>Created By</th>
                        <th>Sugar</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mealingredient as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->also_known }}</td>
                            <td>{{ $item->storage }}</td>
                            <td>{{ $item->shelf_life }}</td>
                            <td>{{ $item->is_healthy }}</td>
                            <td>{{ $item->parameter }}</td>
                            <td>{!! $item->description !!}</td>
                            <td>{{ $item->directly_edible }}</td>
                            <td>
                                <a href="{{ url('download_multiple/'. $item->images) }}" target="_blank">Download</a>
                            </td>
                            <td><a href="{{ url('download/'. $item->image) }}" target="_blank">Download</a></td>
                            <td><a href="{{ url('download/'. $item->thumb_image) }}" target="_blank">Download</a></td>
                            <td>{{ optional($item->category)->name }}</td>
                            <td>{{ $item->calories }}</td>
                            <td>{{ $item->carbs }}</td>
                            <td>{{ $item->fats }}</td>
                            <td>{{ $item->protien }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->serving }}</td>
                            <td>{{ $item->food_group }}</td>
                            <td>{{ $item->per_gram_serving }}</td>
                            <td>{{ $item->fiber_in_gm }}</td>
                            <td>{{ $item->fiber_in_percent }}</td>
                            <td>{{ $item->sodium_in_mg }}</td>
                            <td>{{ $item->sodium_in_percent }}</td>
                            <td>{{ $item->potassium }}</td>
                            <td>{{ $item->cholesterol }}</td>
                            <td>{{ $item->approved }}</td>
                            <td>{{ $item->created_by }}</td>
                            <td>{{ $item->sugar }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <a href="{{ url('/admin/meal-ingredient/' . $item->id) }}" title="View MealIngredient">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View
                                    </button>
                                </a>
                                @canany(['isAdmin','isEditor'])
                                <a href="{{ url('/admin/meal-ingredient/' . $item->id . '/edit') }}"
                                   title="Edit MealIngredient">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                @endcan
                                @canany(['isAdmin','isChef'])
                                <form method="POST" action="{{ url('/admin/meal-ingredient' . '/' . $item->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete MealIngredient"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                                @endcan
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
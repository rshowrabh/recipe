@extends('layout.layout')
@section('title', 'Meal Recipe Sub Sub Category')
@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Recipe Sub Sub Category</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Recipe Sub Sub Category</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-recipe-sub-sub-category/create') }}"
                       class="btn btn-primary float-right">
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
                        <th>Recipe Sub Category</th>
                        <th>Sub Sub Category Name</th>
                        <th>Description</th>
                        <th>Approved</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mealrecipesubsubcategory as $item)
                        <tr>
                            <td>{{ optional($item->mealRecipeSubCategory)->sub_category_name }}</td>
                            <td>{{ $item->sub_sub_category_name }}</td>
                            <td>{!! $item->description !!}</td>
                            <td>{{ $item->approved }}</td>
                            <td>
                                <a href="{{ url('/admin/meal-recipe-sub-sub-category/' . $item->id) }}"
                                   title="View MealRecipeSubSubCategory">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View
                                    </button>
                                </a>
                                <a href="{{ url('/admin/meal-recipe-sub-sub-category/' . $item->id . '/edit') }}"
                                   title="Edit MealRecipeSubSubCategory">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i> Edit
                                    </button>
                                </a>

                                <form method="POST"
                                      action="{{ url('/admin/meal-recipe-sub-sub-category' . '/' . $item->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            title="Delete MealRecipeSubSubCategory"
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
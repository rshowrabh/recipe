@extends('layout.layout')
@section('title', 'Meal Fat')
@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
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
                    <a href="{{ url('/admin/meal-fat/create') }}" class="btn btn-primary float-right">
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
                        <th>Ingredient</th>
                        <th>Saturated Fat</th>
                        <th>Mono Unsaturated Fat</th>
                        <th>Poly Unsaturated Fat</th>
                        <th>Trans Fat</th>
                        <th>Omega 3 Fatty Acid</th>
                        <th>Omega 6 Fatty Acid</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mealfat as $item)
                        <tr>
                            <td>{{ optional($item->ingredient)->name }}</td>
                            <td>{{ $item->saturated_fat }}</td>
                            <td>{{ $item->mono_unsaturated_fat }}</td>
                            <td>{{ $item->poly_unsaturated_fat }}</td>
                            <td>{{ $item->trans_fat }}</td>
                            <td>{{ $item->omega_3_fatty_acid }}</td>
                            <td>{{ $item->omega_6_fatty_acid }}</td>
                            <td>
                                <a href="{{ url('/admin/meal-fat/' . $item->id) }}" title="View MealFat">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View
                                    </button>
                                </a>
                                @canany(['isAdmin','isEditor'])
                                <a href="{{ url('/admin/meal-fat/' . $item->id . '/edit') }}" title="Edit MealFat">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                @endcanany
                                @canany(['isAdmin','isEditor'])

                                <form method="POST" action="{{ url('/admin/meal-fat' . '/' . $item->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete MealFat"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                                @endcanany
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
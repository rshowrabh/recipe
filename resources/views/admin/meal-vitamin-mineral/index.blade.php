@extends('layout.layout')
@section('title', 'Meal Vitamin Mineral')
@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
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
                    <a href="{{ url('/admin/meal-vitamin-mineral/create') }}" class="btn btn-primary float-right">
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
                        <th>Vitamin A</th>
                        <th>Vitamin B6</th>
                        <th>Vitamin B12</th>
                        <th>Vitamin C</th>
                        <th>Vitamin D</th>
                        <th>Vitamin D2</th>
                        <th>Vitamin D3</th>
                        <th>Vitamin E</th>
                        <th>Vitamin K</th>
                        <th>Calcium</th>
                        <th>Iron</th>
                        <th>Magnesium</th>
                        <th>Phosphorus</th>
                        <th>Zinc</th>
                        <th>Copper</th>
                        <th>Manganese</th>
                        <th>Selenium</th>
                        <th>Retinol</th>
                        <th>Thiamine</th>
                        <th>Riboflavin</th>
                        <th>Niacin</th>
                        <th>Folate</th>
                        <th>Choline</th>
                        <th>Betaine</th>
                        <th>Caffeine</th>
                        <th>Lycopene</th>
                        <th>Fluoride</th>
                        <th>Water</th>
                        <th>Calcium In Percent</th>
                        <th>Choline In Percent</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mealvitaminmineral as $item)
                        <tr>
                            <td>{{ optional($item->ingredient)->name }}</td>
                            <td>{{ $item->vitamin_a }}</td>
                            <td>{{ $item->vitamin_b6 }}</td>
                            <td>{{ $item->vitamin_b12 }}</td>
                            <td>{{ $item->vitamin_c }}</td>
                            <td>{{ $item->vitamin_d }}</td>
                            <td>{{ $item->vitamin_d2 }}</td>
                            <td>{{ $item->vitamin_d3 }}</td>
                            <td>{{ $item->vitamin_e }}</td>
                            <td>{{ $item->vitamin_k }}</td>
                            <td>{{ $item->calcium }}</td>
                            <td>{{ $item->iron }}</td>
                            <td>{{ $item->magnesium }}</td>
                            <td>{{ $item->phosphorus }}</td>
                            <td>{{ $item->zinc }}</td>
                            <td>{{ $item->copper }}</td>
                            <td>{{ $item->manganese }}</td>
                            <td>{{ $item->selenium }}</td>
                            <td>{{ $item->retinol }}</td>
                            <td>{{ $item->thiamine }}</td>
                            <td>{{ $item->riboflavin }}</td>
                            <td>{{ $item->niacin }}</td>
                            <td>{{ $item->folate }}</td>
                            <td>{{ $item->choline }}</td>
                            <td>{{ $item->betaine }}</td>
                            <td>{{ $item->caffeine }}</td>
                            <td>{{ $item->lycopene }}</td>
                            <td>{{ $item->fluoride }}</td>
                            <td>{{ $item->water }}</td>
                            <td>{{ $item->calcium_in_percent }}</td>
                            <td>{{ $item->choline_in_percent }}</td>
                            <td>
                                <a href="{{ url('/admin/meal-vitamin-mineral/' . $item->id) }}"
                                   title="View MealVitaminMineral">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View
                                    </button>
                                </a>
                                @canany(['isAdmin','isEditor'])
                                <a href="{{ url('/admin/meal-vitamin-mineral/' . $item->id . '/edit') }}"
                                   title="Edit MealVitaminMineral">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                @endcanany
                                @canany(['isAdmin','isChef'])

                                <form method="POST" action="{{ url('/admin/meal-vitamin-mineral' . '/' . $item->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            title="Delete MealVitaminMineral"
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
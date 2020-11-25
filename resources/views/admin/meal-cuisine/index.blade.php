@extends('layout.layout')
@section('title', 'Meal Cuisine')
@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Cuisine</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Cuisine</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-cuisine/create') }}" class="btn btn-primary float-right">
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
                              <th>Name</th><th>Actions</th>
                           </tr>
                       </thead>
                      <tbody>
                                                 @foreach($mealcuisine as $item)
                                                     <tr>
                                                         <td>{{ $item->name }}</td>
                                                         <td>
                                                             <a href="{{ url('/admin/meal-cuisine/' . $item->id) }}" title="View MealCuisine"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                             @canany(['isAdmin','isEditor'])
                                                             <a href="{{ url('/admin/meal-cuisine/' . $item->id . '/edit') }}" title="Edit MealCuisine"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                             @endcan
                                                             @canany(['isAdmin','isChef'])
                                                             <form method="POST" action="{{ url('/admin/meal-cuisine' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                 {{ method_field('DELETE') }}
                                                                 {{ csrf_field() }}
                                                                 <button type="submit" class="btn btn-danger btn-sm" title="Delete MealCuisine" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
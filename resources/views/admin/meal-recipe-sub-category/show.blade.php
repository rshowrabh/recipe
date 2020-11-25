@extends('layout.layout')
@section('title', 'Meal Recipe Sub Category')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Recipe Sub Category</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Recipe Sub Category</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-recipe-sub-category') }}" class="btn btn-primary float-right">
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
                                    <th> Recipe Category</th>
                                    <td> {{ optional($mealrecipesubcategory->mealRecipeCategory)->name }} </td>
                                </tr>
                                <tr>
                                    <th> Sub Category Name</th>
                                    <td> {{ $mealrecipesubcategory->sub_category_name }} </td>
                                </tr>
                                <tr>
                                    <th> Description</th>
                                    <td> {!! $mealrecipesubcategory->description !!} </td>
                                </tr>
                                <tr>
                                    <th> Approved</th>
                                    <td> {{ $mealrecipesubcategory->approved }} </td>
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
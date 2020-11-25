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

                                                <form method="POST" action="{{ url('/admin/meal-ingredient/' . $mealingredient->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                    {{ method_field('PATCH') }}
                                                    {{ csrf_field() }}

                                                    @include ('admin.meal-ingredient.form', ['formMode' => 'edit'])

                                                </form>
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
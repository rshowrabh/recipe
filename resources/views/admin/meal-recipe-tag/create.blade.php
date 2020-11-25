@extends('layout.layout')
@section('title', 'Meal Recipe Tag')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Meal Recipe Tag</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meal Recipe Tag</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/admin/meal-recipe-tag') }}" class="btn btn-primary float-right">
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

                        <form method="POST" action="{{ url('/admin/meal-recipe-tag') }}" accept-charset="UTF-8"
                              class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.meal-recipe-tag.form', ['formMode' => 'create'])

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
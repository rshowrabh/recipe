@extends('layout.layout')
@section('title', 'Change password')
@section('header')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Change password</li>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change password</h1>
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
                        <form action="{{url('change_password')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="oldPassword">Current password</label>
                                <input type="password" id="oldPassword" name="current_password"
                                       class="form-control <?php if ($errors->first('current_password') != null) echo 'is-invalid'; ?>">
                                <span class="error <?php if ($errors->first('current_password') != null) echo 'invalid-feedback'; ?>"
                                      style="display: inline;">{{$errors->first('current_password')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="newPassword">New password</label>
                                <input type="password" id="newPassword" name="new_password"
                                       class="form-control <?php if ($errors->first('new_password') != null) echo 'is-invalid'; ?>">
                                <span class="error <?php if ($errors->first('new_password') != null) echo 'invalid-feedback'; ?>"
                                      style="display: inline;">{{$errors->first('new_password')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="confirmNewPassword">Confirm new password</label>
                                <input type="password" id="confirmNewPassword" name="confirm_password"
                                       class="form-control <?php if ($errors->first('confirm_password') != null) echo 'is-invalid'; ?>">
                                <span class="error <?php if ($errors->first('confirm_password') != null) echo 'invalid-feedback'; ?>"
                                      style="display: inline;">{{$errors->first('confirm_password')}}</span>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-success float-right">
                            </div>
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
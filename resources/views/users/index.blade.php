@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
                <div style="margin-top:-30px;">
                <p class="breadcrumb-item active" style="padding-left:900px;">Employee Management</p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Add Employee Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add New Employee') }}</div>

                    <div class="card-body" style="background-color: #f2f2f2;">
                        <form action="{{url('employee')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="FirstName" placeholder="Enter first name" value="{{old('FirstName')}}" >
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="LastName" placeholder="Enter last name" value="{{old('LastName')}}" >
                            </div>

                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" name="DateofBirth" value="{{old('DateofBirth')}}"  >
                            </div>
                            <div class="form-group">
                                <label for="Phone">Phone</label>
                                <input type="int" class="form-control" name="Phone" value="{{old('Phone')}}" >
                            </div>


                           

                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- /.content -->
@endsection

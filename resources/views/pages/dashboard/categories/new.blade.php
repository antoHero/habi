@extends('layouts.dashboard')

@section('title')
    Categories
@endsection

@section('section')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">{{ $page['title'] }}</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $page['breadcrumb'] }}</a></li>
                                <li class="breadcrumb-item active">{{ $page['title'] }}</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div><!--end col-->  
                    </div><!--end row-->                                                              
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Category</h4>
                    </div><!--end card-header-->
                    <div class="card-body"> 
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('create.category') }}" method="POST">
                            @csrf
                            <label class="mb-2">Name</label>

                            <input type="text" placeholder="Name of category" class="form-control" maxlength="25" name="name" id="defaultconfig" />            
                            
                            <div class="mt-3">
                                <label class="mb-2">Description</label>
                                <textarea id="elm1" name="description"></textarea>
                            </div>
                            
                            <div class="mt-3">
                                <label class="mb-2">Background Image</label>
                                <input type="file" name="image" class="form-control" maxlength="25">
                            </div>
                            
                            <div class="mt-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                        
                        

                                                     
                    </div> <!-- end card-body -->
                </div> <!-- end card -->                                       
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; 2020 Dastyle <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
    </footer><!--end footer-->
</div>
@endsection
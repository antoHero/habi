@extends('layouts.dashboard')

@section('title')
    Add new subcategory
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

                        <form action="{{ route('create.subcategory') }}" method="POST">
                            @csrf
                            <label class="mb-2">Category</label>

                            <select name="category_id" id="" class="form-control" maxlength="25">
                                <option value="">--select--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <label class="mb-2">Name</label>

                            <input type="text" placeholder="Name of subcategory" class="form-control" maxlength="25" name="name" id="defaultconfig" />            
                            
                            {{-- <div class="mt-3">
                                <label class="mb-2">Description</label>
                                <textarea id="elm1" name="description"></textarea>
                            </div>        --}}
                            
                            <div class="mt-3">
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </form>
                        
                        

                                                     
                    </div> <!-- end card-body -->
                </div> <!-- end card -->                                       
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

    @include('partials.backend_partials.credits')
</div>
@endsection
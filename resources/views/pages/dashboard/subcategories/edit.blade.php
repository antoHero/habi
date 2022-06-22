@extends('layouts.dashboard')

@section('title')
    {{ $subcategory->slug }}
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
                        <h4 class="card-title">Edit {{ $subcategory->name }}</h4>
                    </div><!--end card-header-->
                    <div class="card-body">

                        <form action="{{ route('update.subcategory', $subcategory->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="mb-2">Category</label>

                            <select name="category_id" id="" class="form-control" maxlength="25">
                                <option value="{{ $subcategory->category->id }}">{{ $subcategory->category->name }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <label class="mb-2">Name</label>

                            <input type="text" placeholder="Name of subcategory" class="form-control" maxlength="25" name="name" value="{{ $subcategory->name }}" id="defaultconfig" />
                            <br>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="status" id="InlineCheckbox" data-parsley-multiple="groups" data-parsley-mincheck="2" {{ $subcategory->status === 'ACTIVE' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="InlineCheckbox">{{ $subcategory->status === 'INACTIVE' ? 'ACTIVATE' : 'DEACTIVATE' }}</label>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label class="mb-2">Background Image</label>
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" name="image" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                    </div>
                                </div>


                                <div class="image-area mt-4">
                                    <img id="imageResult" src="{{ $subcategory->bg }}" alt="" class="rounded shadow-sm mx-auto d-block" height="383">
                                </div>

                                {{-- <input type="file" id="input-file-now" class="dropify" name="image" /> --}}
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary" type="submit">Update</button>
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

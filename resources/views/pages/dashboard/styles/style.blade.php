@extends('layouts.dashboard')

@section('title')
    Add new style
@endsection

@section('css')



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

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Style</h4>
                    </div><!--end card-header-->
                    <div class="card-body">

                        <form action="{{ route('style.update', $style->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="mb-2">Title</label>

                            <input type="text" placeholder="Name of style" class="form-control" name="name" id="defaultconfig" value="{{ $style->name }}" />

                            <div class="form-group row">
                                <div class="col-md-6 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Category</label>
                                            <select name="category_id" id="apparelCat" class="form-control" onchange="subcategories()" value="{{ $style->category->name }}">
                                                <option value="">--select--</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Price</label>
                                            <input type="number" placeholder="Amount" class="form-control" maxlength="25" name="price" id="defaultconfig" value="{{ $style->price }}" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label class="mb-2">Image</label>
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" name="image" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                    </div>
                                </div>


                                <div class="image-area mt-4">
                                    <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" value="{{ $style->image }}">
                                </div>

                                {{-- <input type="file" id="input-file-now" class="dropify" name="image" /> --}}
                            </div>
                            <div class="mt-3">
                                <label class="mb-2">Description</label>
                                <textarea id="elm1" name="description" value="{{ $style->description }}">{{ $style->description }}</textarea>
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

    @include('partials.backend_partials.credits')
    @section('js')

        <script type="text/javascript">

        /*  ==========================================
            SHOW UPLOADED IMAGE
        * ========================================== */
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );

        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
          var input = event.srcElement;
          var fileName = input.files[0].name;
          infoArea.textContent = 'File name: ' + fileName;
        }

        </script>

    @endsection
</div>
@endsection

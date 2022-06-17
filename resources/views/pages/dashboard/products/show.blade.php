@extends('layouts.dashboard')

@section('title')
    {{$product->slug}}
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
                            <h4 class="page-title">{{ $product->name }}</h4>
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
                        <h4 class="card-title">Add New apparel</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                      <fieldset>
                        <legend>Product information</legend>
                        <form action="{{ route('update.apparel', $product->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="mb-2">Title</label>

                            <input type="text" placeholder="Title of product" class="form-control" name="name" id="defaultconfig" value="{{ $product->name }}" />

                            <div class="form-group row">
                                <div class="col-md-4 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">For</label>
                                            <select name="category_id" id="apparelCat" class="form-control" onchange="subcategories()" value="{{ old('category_id') }}">
                                                <option value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 control-label hideSubCat d-none">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Category</label>
                                            <select name="sub_category_id" id="" class="form-control getting_subcat" value="{{ old('sub_category_id') }}">
                                                <option value="">--select--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Quantity</label>
                                            <input type="number" placeholder="Quantity" class="form-control" maxlength="25" name="qty" id="defaultconfig" value="{{ $product->qty }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Amount</label>
                                            <input type="number" placeholder="Amount" class="form-control" maxlength="25" name="amount" id="defaultconfig" value="{{ $product->amount }}" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Size</label>
                                            <input type="text" placeholder=" M, L, XL" class="form-control"  name="size[]" id="defaultconfig" value="{{ $product->size }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Ocassion</label>
                                            <input type="text" placeholder="Ocassion" class="form-control" maxlength="25" name="occasion" id="defaultconfig" value="{{ $product->ocassion }}" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Material</label>
                                            <input type="text" placeholder="Material" class="form-control" maxlength="25" name="material" id="defaultconfig" value="{{ $product->material }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 control-label">
                                    <div class="my-2">
                                        <div class="">
                                            <label class="mb-2">Style</label>
                                            <input type="text" placeholder="Style" class="form-control" maxlength="25" name="style" id="defaultconfig" value="{{ $product->style }}" />
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
                                    <img id="imageResult" src="{{ $product->image }}" alt="" class="rounded shadow-sm mx-auto d-block">
                                </div>

                                {{-- <input type="file" id="input-file-now" class="dropify" name="image" /> --}}
                            </div>
                            <div class="mt-3">
                                <label class="mb-2">Description</label>
                                <textarea id="elm1" name="detail" value="{{ $product->description }}">{{ $product->description }}</textarea>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                      </fieldset>
                      <br>
                      <fieldset>
                        <legend>Product atributes</legend>
                        <table id="" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Available color</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($attributes) > 0)
                                @foreach($attributes as $key=>$attribute)
                                <a href="#">
                                    <tr>
                                        <td>
                                            <img src="{{ $attribute->image }}" alt="" height="40">
                                        </td>
                                        <td><li class="list-inline-item align-middle"><i class="fas fa-circle" style="color: {{$attribute->color}};"></i></li></td>
                                        <td>
                                            <a href="{{ route('get.product.attribute', $attribute->id) }}" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr>
                                </a>

                                @endforeach
                            @endif
                            </tbody>
                        </table>
                      </fieldset>




                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

    @include('partials.backend_partials.credits')
    @section('js')

        <script type="text/javascript">

        function subcategories()
        {
            var base_url = '{{ url('/') }}';
            let id = $('#apparelCat').val();


            console.log('logging from jquery', id);

            if(id)
            {
                $.ajax({
                    url: base_url + '/dashboard/subcategories/ajax/' + id,
                    method: 'GET',
                    success: function(result) {

                        $('.hideSubCat').removeClass('d-none')
                        $('.getting_subcat').empty();
                        $.each(result, function(key, value) {

                            $('.getting_subcat').append('<option class="form-control" value="">--select--</option> <option class="form-control" value="'+value['id']+'">'+value['name']+'</option>');
                        })
                    }
                });
            } else {
                $('.getting_subcat').empty();
            }
        }


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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Fabrics</h4>
                <a href="{{ route('new.fabric.view') }}" class="btn btn-primary text-white">Add New</a>
            </div><!--end card-header-->
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Avai.Color</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($products)
                        @foreach($products as $key=>$product)
                        <a href="#">
                            <tr>
                                <td>
                                    <img src="{{ $product->image }}" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <a href="" data-id="{{ $product->id }}" class="d-inline-block align-middle mb-0 product-name">{{ $product->name }}</a>
                                        <br>
                                        @if($product->type === "APPAREL")
                                        <span class="text-muted font-13">Size: {{ $product->size }}</span>
                                        @endif
                                    </p>
                                </td>
                                <td>{{ $product->qty }}</td>
                                <td>{{ '₦' . number_format($product->amount) }}</td>
                                <td><span class="badge badge-soft-warning">{{ $product->status }}</span></td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        @if($product->product_attributes != '')
                                        @foreach($product->product_attributes as $attribute)
                                        <li class="list-inline-item align-middle"><i class="fas fa-circle" style="color: {{$attribute->color}};"></i></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ route('get.fabric', $product->slug) }}"  class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                    <a class="" data-slug="{{$product->slug}}" id="productInfo"  data-product-type="{{ $product->type }}"><i class="las la-trash-alt text-danger font-18 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalDanger"></i></a>
                                </td>
                            </tr>
                        </a>

                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<div class="modal fade" id="exampleModalDanger" tabindex="-1" role="dialog" aria-labelledby="exampleModalDanger1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h6 class="modal-title m-0 text-white" id="exampleModalDanger1">Delete Product</h6>
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="la la-times text-white"></i></span>
                </button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3 text-center align-self-center">
                        <img src="{{ url('backend_assets')}}/images/error.svg" alt="" class="img-fluid">
                    </div><!--end col-->
                    <div class="col-lg-9">
                        <h5>You are about to delete a product</h5>
                        <small class="text-muted ml-2">This action is irreversible, you can't retrieve the product after it has been deleted</small>

                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No, cancel</button>
                <button type="button" class="btn btn-danger btn-sm">Yes, I understand</button>
            </div><!--end modal-footer-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->

@section('js')
<script src="{{ url('backend_assets') }}/js/jquery.min.js"></script>
<script>

$(document).ready(function () {
    $("#productInfo").on("click", function (e) {
        var slug = $(this).attr("data-slug");
        var type = $(this).attr("data-product-type")
        console.log('slug', slug, type)
        // $('#pass_id').val(id);
    });
});

</script>
@endsection

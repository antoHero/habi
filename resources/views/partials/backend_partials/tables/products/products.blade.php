<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Apparels</h4>
                <a href="{{ route('new.apparel.view') }}" class="btn btn-primary text-white">Add New</a>
            </div><!--end card-header-->
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Avai.Color</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($products) > 0)
                        @foreach($products as $key=>$product)
                        <a href="#">
                            <tr>
                                <td>
                                    <img src="{{ $product->image }}" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <a href="" class="d-inline-block align-middle mb-0 product-name">{{ $product->name }}</a> 
                                        <br>
                                        <span class="text-muted font-13">Size: {{ $product->size }}</span> 
                                    </p>
                                </td>
                                <td>{{ $product->category->name }}</td>
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
                                    <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
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
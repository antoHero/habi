<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('styles.new') }}" class="btn btn-primary text-white">Add New</a>
            </div><!--end card-header-->
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Status</th>
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
                                    </p>
                                </td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ '₦' . number_format($product->price) }}</td>
                                <td><span class="badge badge-soft-warning">{{ $product->status }}</span></td>
                                <td>
                                    <a href="{{ route('style.style', $product->slug) }}" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                    <a href="{{ route('style.delete', $product->slug) }}"><i class="las la-trash-alt text-danger font-18"></i></a>
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

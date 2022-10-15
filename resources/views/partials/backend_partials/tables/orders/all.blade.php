<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Orders</h4>
                <br/>
                <small>To view the details of an order, click on it's <span>Tracking ID</span></small>
            </div><!--end card-header-->
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Tracking ID</th>
                        <th>Amount</th>
                        <th>Order Status</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($orders) > 0)
                        @foreach($orders as $key=>$order)
                        <a href="#">
                            <tr>
                                <td>{{ $order->name }}</td>
                                <td><a href="{{ route('orders.order.details', $order->reference) }}" title="View Details">{{ $order->tracking_id }}</a></td>
                                <td>{{ '₦' . number_format($order->order_amount) }}</td>
                                <td><span class="badge badge-soft-warning">{{ $order->status }}</span></td>
                                <td>{{ $order->payment_status }}</td>
                                <td>
                                    <a href="" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                </td>
                                <td>
                                    <form action="">
                                        <select name="" id="" class="form-control">
                                            <option value="">Update status</option>
                                            <option value="PROGRESS">Set as in progress</option>
                                            <option value="DELIVERED">Set as in delivered</option>
                                            <option value="CANCELED">Set as in cancelled</option>
                                        </select>
                                    </form>
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

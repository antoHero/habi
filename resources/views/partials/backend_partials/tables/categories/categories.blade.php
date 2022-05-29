<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Categories</h4>
            </div><!--end card-header-->
            <div class="card-body table-responsive">
                <div class="">
                    <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>S/No</th>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Status</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        @if(count($categories) > 0)
                        <tbody>
                            @foreach($categories as $key=>$category)
                            <a href="#">
                                <tr>
                                    <th>{{ ++$key }}</th>
                                    <th>{{ $category->name }}</th>
                                    <th>{{ url('/').'/'.$category->slug }}</th>
                                    <th>{{ $category->status }}</th>
                                    <th>{{ $category->slug }}</th>
                                    <td class="text-right">
                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                <a class="dropdown-item" href="{{ route('edit.category.view', $category->slug) }}">Edit</a>
                                                <a class="dropdown-item" href="{{ route('category.change.status', $category->slug) }}">Change status</a>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalDefault">Delete</a>
                                            </div>
                                        </div>
                                    </td>

                                    <div class="modal fade" id="exampleModalDefault" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="exampleModalDefaultLabel">Delete category</h6>
                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-times"></i></span>
                                                    </button>
                                                </div><!--end modal-header-->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-3 text-center align-self-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                              </svg>
                                                            {{-- <img src="{{ url('/backend_assets') }}/images/widgets/btc.png" alt="" class="img-fluid"> --}}
                                                        </div><!--end col-->
                                                        <div class="col-lg-9">
                                                            <h5>Delete {{ $category->name }}?</h5>
                                                            <span class="badge bg-soft-secondary">You cant undo this</span>
                                                        </div><!--end col-->
                                                    </div><!--end row-->                                                      
                                                </div><!--end modal-body-->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                </div><!--end modal-footer-->
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->
                                </tr>
                            </a>
                            @endforeach
                        </tbody>
                        @else 
                        @endif
                    </table>
                </div>           
            </div>
        </div>
    </div>
</div><!--end row-->
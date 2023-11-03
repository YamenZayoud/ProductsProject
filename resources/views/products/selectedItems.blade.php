@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				
                <div class="breadcrumb-header justify-content-between">
                    
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">selected Items List</h4>
						</div>
					</div>
					
				</div>
                
@endsection



@section('content')
    <!--div-->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div >
                    <h4 class="card-title mg-b-0">List of all selected Items</h4>
                    
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr class="table-dark">
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Price</th>
                                <th class="wd-20p border-bottom-0">discription</th>
                                <th class="wd-20p border-bottom-0">Category</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                            </tr>
                                
                        </thead>
                        @foreach ($products as $product)
                            
                        
                            <tbody>
                                <tr>

                                    <td class="table-active" >{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->discription}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>@if (auth::user())
                                        @if (auth()->user()->type=='admin' )
                                            <div class="card-body">
                                                <a href="{{route('products.edit',['product'=>$product])}}" class="btn btn-success">Edit</a><br>
                                    
                                                <form action="{{route('products.destroy',['product'=>$product])}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"> Delete</button><br>
                                                </form>
                                            </div>   
                                            
                                        @endif
                                        
                                        @else
                        
                                    @endif</td>
                                
                                </tr>
                            </tbody>
                        @endforeach
                    </div>      
                    <!-- /row -->
                </div>
                <!-- Container closed -->
            </div>
            <!-- main-content closed -->
        </div>
    </div>
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
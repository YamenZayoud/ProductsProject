@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				
                <div class="breadcrumb-header justify-content-between">
                    
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Users List</h4>
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
                    <h4 class="card-title mg-b-0">List of all Users</h4>
                    
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr class="table-dark">
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Email</th>
                                <th class="wd-20p border-bottom-0">Password</th>
                                <th class="wd-20p border-bottom-0">Type</th>
                                <th class="wd-20p border-bottom-0">Orders</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                            </tr>
                                
                        </thead>
                        @foreach ($users as $user)
                            
                        
                            <tbody>
                                <tr>

                                    <td class="table-active" >{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>{{$user->type}}</td>
                                    <td><a href="{{route('ShowUserOrders', $user->id)}}"><button>Show orders</button></a></td>
                                    <td>@if (auth::user())
                                        @if (auth()->user()->type=='admin' )
                                            <div class="card-body">
                                                <a href="{{route('userEdit', ['user' => $user])}}" class="btn btn-success">Edit</a><br>
                                    
                                                <form action="{{route('userDelete',['user'=>$user])}}" method="post">
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
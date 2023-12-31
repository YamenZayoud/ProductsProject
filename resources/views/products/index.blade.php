@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<a href="{{route('products.index')}}"><h4 class="content-title mb-0 my-auto">Products</h4></a>
						</div>
					</div>
					<!--<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>-->
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">

                    <div class="col-xl-9 col-lg-9 col-md-12 "><br><br>

                        <!-- Search Bar -->
                        <!--<div class="card">
                            <div class="card-body p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary" type="button">Search</button>
                                    </span>
                                </div>
                            </div>
                        </div>-->


                        <!-- Products -->

                        <div class="row row-sm">

                            @foreach ($products as $product)
                                
                        

                                <a href="{{route('products.show' , ['product' => $product])}}">

                                    <div class="col-md-6 col-lg-6 col-xl-4  col-sm-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="pro-img-box">
                                                   <!-- <div class="d-flex product-sale">
                                                        <div class="badge bg-pink">New</div>
                                                        <i class="mdi mdi-heart-outline ml-auto wishlist"></i>
                                                    </div>-->
                                                    <img class="w-100" src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="product-image">
                                                    <!--<a href="#" class="adtocart" name = "products_ids[]"> <i class="las la-shopping-cart "></i>
                                                    <a href="#" class="adtocart"> <i class="las la-shopping-cart "></i>-->

                                                    </a>
                                                </div>

                                                <div class="text-center pt-3">
													<h2 class="h6 mb-2 mt-4 font-weight-bold text-uppercase text-warning">{{$product->category->name}}</h2>
                                                
                                                    <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">{{$product->name}}</h3>
                                                
                                                    <h4 class="h5 mb-0 mt-2 text-center font-weight-bold text-danger">{{$product->price}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            @endforeach
                        </div>
					</div>
				</div>


				
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>
@endsection
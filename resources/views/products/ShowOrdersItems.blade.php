@extends('layouts.master')
@section('css')
<!--Internal  Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Ecommerce</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Product-Cart</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				 <div class="row">
					<div class="col-xl-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<!-- Shopping Cart-->
								<div class="product-details table-responsive text-nowrap">
									<table class="table table-bordered table-hover mb-0 text-nowrap">
										<thead>
											<tr>
												<th class="text-right">Product</th>
												<th class="w-150">Quantity</th>
												<th>SUBTOTAL</th>
												
											</tr>
										</thead>
										<tbody>
                                           <?php $i=0;?>
                                            @foreach ($products as $product)
                                                
                                            
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="card-aside-img">
                                                                <img src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="img" class="h-60 w-60">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="card-item-desc mt-0">
                                                                    <h6 class="font-weight-semibold mt-0 text-uppercase">{{$product->name}}</h6>
                                                                    <dl class="card-item-desc-1">
                                                                    <dt>Discription: </dt>
                                                                    <dd>{{$product->discription}}</dd>
                                                                    </dl>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex ml-2">
                                                            <ul class=" mb-0 qunatity-list">
                                                                <li>
                                                                    <div class="form-group">
                                                                        {{$quantities[$i]}}
                                                                        
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="text-center text-lg text-medium">{{$quantities[$i] * $product->price}}</td>
                                                    <td class="text-center text-lg text-medium">{{$product->price}}</td>
                                                    <!--<td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="" data-original-title="Remove item"><i class="fa fa-trash"></i></a></td>-->
                                                </tr><?php $i++;?>
                                            @endforeach

											
										</tbody>
									</table>
								</div>

								

								<div class="shopping-cart-footer">

									<div class="column"><a class="btn btn-secondary" href="{{route('products.index')}}">Back to Shopping</a></div>
                                    <div class="column"><a class="btn btn-danger" href="{{route('ClearCart')}}" >Clear Cart</a><a class="btn btn-success" href="{{route('checkout')}}">Checkout</a></div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>
@endsection
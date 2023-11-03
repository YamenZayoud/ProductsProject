@extends('layouts.master')
@section('css')
<!-- Internal Gallery css -->
<link href="{{URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Orders</h4>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-9 col-md-12">
						<div class="row row-sm">
							

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card mg-b-20">
									<div class="card-body p-0">
										<div class="card">
											<div class="card-header">
												<h3 class="card-title">Busines Team</h3>
											</div>
											<div class="card-body">
												<div>
													<div class="chips">
														<div class="team">
															<a href="javascript:void(0)" class="chip">
																<span class="avatar cover-image" data-image-src="{{URL::asset('assets/img/faces/2.jpg')}}"></span> Victoria
															</a>
															<i class="fab fa-facebook text-primary" aria-hidden="true"></i>
															<i class="fab fa-twitter text-primary" aria-hidden="true"></i>
															<i class="fas fa-envelope text-primary" aria-hidden="true"></i>
															<p>On the other hand, we denounce with right indignation and dislike imagesralized</p>
														</div>
														<div class="team">
															<a href="javascript:void(0)" class="chip">
																<span class="avatar cover-image" data-image-src="{{URL::asset('assets/img/faces/3.jpg')}}"></span> Nathan
															</a>
															<i class="fab fa-facebook text-primary" aria-hidden="true"></i>
															<i class="fab fa-twitter text-primary" aria-hidden="true"></i>
															<i class="fas fa-envelope text-primary" aria-hidden="true"></i>
															<p>On the other hand, we denounce with right indignation and dislike imagesralized</p>
														</div>
														<div class="team">
															<a href="javascript:void(0)" class="chip">
																<span class="avatar cover-image" data-image-src="{{URL::asset('assets/img/faces/4.jpg')}}"></span> Alice
															</a>
															<i class="fab fa-facebook text-primary" aria-hidden="true"></i>
															<i class="fab fa-twitter text-primary" aria-hidden="true"></i>
															<i class="fas fa-envelope text-primary" aria-hidden="true"></i>
															<p class="mb-0">On the other hand, we denounce with right indignation and dislike imagesralized</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer ">
										<a class="btn btn-primary disabled" href="#" title="Assign Task">Assign</a>
										<a class="btn btn-outline-primary mr-auto float-left" href="#" data-placement="top" data-toggle="tooltip" title="View Task">View All</a>
									</div>
								</div>
							</div>
							<!-- /col -->
						</div>
					</div>
					<!-- /col -->

					<!-- col -->
					<div class="col-lg-12 col-xl-3">
						<div class="card card--events mg-b-20">
							<div class="card-body">
								<div class="pd-20">
									<div class="main-content-label">Tasks</div>
									<p class="mg-b-0">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="list-group to-do-tasks">
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-info"></div>
										<h6 class="mg-t-5">Today Tasks</h6>
									</a>
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-primary"></div>
										<h6 class="mg-t-5">Yesterday Tasks</h6>
									</a>
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-success"></div>
										<h6 class="mg-t-5">Weakly Tasks</h6>
									</a>
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-danger"></div>
										<h6 class="mg-t-5">Mothly Tasks</h6>
									</a>
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-warning"></div>
										<h6 class="mg-t-5">User Tasks</h6>
									</a>
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
@endsection
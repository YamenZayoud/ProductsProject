
@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<!-- Internal Spectrum-colorpicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
@endsection

@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Edit the User Informations</h4>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<form method='post' action="{{route('userUpdate' , ['user' => $editUser])}}">
    @csrf
    @method('PUT')
				
            <form><br><br><br>
                        <!-- row -->
                        <div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Use this form to update the user information.
								</div>
								<div id="wizard2">
									<h3>Personal Information</h3><br>
									<section>
										<div class="row row-sm">
											<div class="col-md-5 col-lg-4">
												<label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                                 <input class="form-control" id="firstname" name="name" value="{{$editUser->name}}" required="" type="text">
											</div>
											
										</div>
									</section>
									<h3>Privacy Information</h3><br>
									<section>
										
										<div class="form-group wd-xs-300">
											<label class="form-control-label">Email: <span class="tx-danger">*</span></label> 
                                            <input class="form-control" id="email" name="email" value="{{$editUser->email}}" required="" type="email">
										</div>

                                        <div class="form-group wd-xs-300">
											<label class="form-control-label">Password: <span class="tx-danger">*</span></label> 
                                            <input class="form-control" id="password" name="password" value="{{$editUser->password}}" required="" type="password">
										</div>
									</section>
									<h3>Privilege</h3><br>
									<section>
										<div class="col-lg-4">
                                            <select class="form-control select2-no-search" name="type">
                                               
                                                <option value="admin" <?php echo ($editUser->type === 'admin') ? 'selected' : '';?> >
                                                    Admin 
                                                </option>
                                        
                                                <option value="user" <?php echo ($editUser->type === 'user') ? 'selected' : ''; ?>>
                                                    User
                                                </option>
                                            </select>
                                        </div>
										
										
									</section>
								</div>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
                        <!-- row closed -->
                    </div>
                    <!-- Container closed -->
                </div>
                <!-- main-content closed -->
        
    </form>        
</form>
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.steps js -->
<script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!--Internal  Form-wizard js -->
<script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
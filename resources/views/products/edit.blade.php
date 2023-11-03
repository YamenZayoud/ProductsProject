
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
							<h4 class="content-title mb-0 my-auto">Edit the Product</h4>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<form method='post' action="{{route('products.update' , ['product' => $editProduct])}}">
    @csrf
    @method('PUT')
				
            <form><br><br><br>
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="main-content-label mg-b-5">
                                            Edit an existing product in the store
                                        </div>
                                        <p class="mg-b-20">Use this form to Edit the product information.</p>
                                        <div id="wizard3">

                                            <h3>Baisc Information</h3><br>
                                            <section>
                                                <div class="control-group form-group">
                                                    <label class="form-label">Product Name</label>
                                                    <input type="text" class="form-control" name="name" value="{{$editProduct->name}}">
                                                </div>

                                                <div class="control-group form-group">
                                                    <label class="form-label">Price</label>
                                                    <input type="float" class="form-control" name="price" value="{{$editProduct->price}}">
                                                </div>
                                            </section>

                                            <h3>Complete Information</h3><br>
                                            <section>
                                                <div class="form-group has-success mg-b-0">
                                                    <label class="form-label">Product Discription</label>

                                                    <textarea class="form-control mg-t-20" type="text" name="discription" value="{{$editProduct->discription}}" required="" rows="3">This is textarea</textarea>

                                                </div><br><br>
                                                <div class="col-lg-4">
                                                    <label class="form-label">Chosse a category </label>


                                                    <select class="form-control select2-no-search" name="category_id"  >
                                                        <option label="Choose one"></option>
                                                        <?php
                                                        $categories = App\Models\Category::all();
                                                        foreach ($categories as $category) {
                                                            ?>
                                                            <option value="<?php echo $category->id; ?>">
                                                                <?php echo $category->name; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>

                                                </div>

                                            </section>
                                            <h3>Payment </h3>
                                            <section>
                                                <!--<div class="form-group">
                                                    <label class="form-label" >CardHolder Name</label>
                                                    <input type="text" class="form-control" id="name12" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Card number</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search for...">
                                                        <span class="input-group-append">
                                                            <button class="btn btn-info" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
                                                            <i class="fab fa-cc-mastercard"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group mb-sm-0">
                                                            <label class="form-label">Expiration</label>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" placeholder="MM" name="expiremonth">
                                                                <input type="number" class="form-control" placeholder="YY" name="expireyear">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 ">
                                                        <div class="form-group mb-0">
                                                            <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                                            <input type="number" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <div class="card" style="width: 18rem;">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </section>
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
        <div class="card" style="width: 18rem;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
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
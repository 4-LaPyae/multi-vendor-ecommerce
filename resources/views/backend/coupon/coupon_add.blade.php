
@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Coupon</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Coupon</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">

        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">

                <div class="col-lg-10">
                    <div class="card">
                        <form action="{{route('store#coupon')}}" method="POST">
                            @csrf
                            <div class="card-body">

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Coupon Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="coupon_name" class="form-control @error('coupon_name') is-invalid
                                        @enderror " value=" " />
                                        @error('coupon_name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>

                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Coupon Discount (%)</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="coupon_discount" class="form-control @error('coupon_discount') is-invalid
                                        @enderror " value=" " />
                                        @error('coupon_discount')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>

                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Coupon Validity Date</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="coupon_validity" class="form-control @error('coupon_validity') is-invalid
                                        @enderror " value=" " min="{{Carbon\Carbon::now()->format("Y-m-d")}} " />
                                        @error('coupon_validity')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>

                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Category Image</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="category_image" class="form-control @error('category_image') is-invalid
                                        @enderror " id="image" value="" />
                                        @error('category_image')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>

                                        @enderror
                                    </div>
                                </div> --}}
                                {{-- <div class="row mb-3">
                                    <div class="col-sm-3">

                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <img id="showImage" src="{{url('upload/no_image.jpg')}}" alt="Admin" style="width:100px;height:100px">
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(run){
              var reader = new FileReader();
              reader.onload = function(run){
                $('#showImage').attr('src', run.target.result);

              }
              reader.readAsDataURL (run.target.files['0'])
        });
    });

    </script> --}}

@endsection

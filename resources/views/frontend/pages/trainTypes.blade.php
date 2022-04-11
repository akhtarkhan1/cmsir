@extends('frontend.layouts.master')

@section('title', app_name() . ' | ' . __('labels.frontend.traintype.box_title'))

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Train Type</span>
          <h1 class="text-capitalize mb-5 text-lg">Train Type</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Train Type</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/trainTypes/train1.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/trainTypes/train2.jpg') }}" style="height: 215px;"  alt="" class="img-fluid w-100">
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/trainTypes/train4.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>


			<div class="col-lg-4 col-md-6 ">
				<div class="department-block  mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/trainTypes/train5.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/trainTypes/train6.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/trainTypes/train7.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

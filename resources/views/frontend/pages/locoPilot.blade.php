@extends('frontend.layouts.master')

@section('title', app_name() . ' | ' . __('labels.frontend.locoPilot.box_title'))

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Loco Pilot</span>
          <h1 class="text-capitalize mb-5 text-lg">Loco Pilot</h1>
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
					<h2>Loco Pilot</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/locoPilot/lp1.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/locoPilot/lp3.jpg') }}" style="height: 215px;"  alt="" class="img-fluid w-100">
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/locoPilot/lp4.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>


			<div class="col-lg-4 col-md-6 ">
				<div class="department-block  mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/locoPilot/lp5.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/locoPilot/lp6.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/locoPilot/lp7.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

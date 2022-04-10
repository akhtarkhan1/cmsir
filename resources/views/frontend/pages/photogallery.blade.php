@extends('frontend.layouts.master')

@section('title', app_name() . ' | ' . __('labels.frontend.photoGallery.box_title'))

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Photo Gallery</span>
          <h1 class="text-capitalize mb-5 text-lg">Photo Gallery</h1>
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
					<h2>Photo Gallery</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/photoGallery/lp2.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
                    <div class="content">
						<h4 class="mt-4 mb-2 title-color">Loco Pilot</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/photoGallery/alp4.jpg') }}" style="height: 215px;"  alt="" class="img-fluid w-100">
                    <div class="content">
						<h4 class="mt-4 mb-2 title-color">Asst Loco Pilot</h4>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5">
					<img src="{{ asset('theme/images/gallery/photoGallery/guard.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
                    <div class="content">
						<h4 class="mt-4 mb-2 title-color">Guards</h4>
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-6 ">
				<div class="department-block  mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/photoGallery/sh6.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
                    <div class="content">
						<h4 class="mt-4 mb-2 title-color">Shunters</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/photoGallery/loco1.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
                    <div class="content">
						<h4 class="mt-4 mb-2 title-color">Train Types</h4>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="department-block mb-5 mb-lg-0">
					<img src="{{ asset('theme/images/gallery/photoGallery/train9.jpg') }}" style="height: 215px;" alt="" class="img-fluid w-100">
                    <div class="content">
						<h4 class="mt-4 mb-2 title-color">Train Parts</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@extends('frontend.layouts.master')

@section('title', app_name() . ' | ' . __('labels.frontend.about.box_title'))

@section('content')


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">About Us</span>
          <h1 class="text-capitalize mb-5 text-lg">About Us</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color">Crew Management System of Indian Railway</h2>
			</div>
			<div class="col-lg-8">
			  <p>
          The Indian Railways is the largest operating railway in the world, with 65,000 km of route, 7,500 stations, 
          and 25 million</br>
          passengers and 2.8 millions tons of freight carried daily. Executing the 10,000 daily trains
          runs of the Indian Railways are</br>
          its 60,000+ loco pilots and 40,000+ guards.
          <p>The management of these 100,000 trained workmen is important for the overall health of the Indian Railways.
          These workers have erratic work schedules, yet they operate very heavy and dangerous equipment. Therefore their
          health, alertness, training and general well being are of the utmost concern. At the same time, it is important
          to optimally utilise this experienced workforce.</p>

          <p> This centralised software takes care of scheduling, training, and sign on and sign off of these workers. It provides 
          an interface for communicating technical issues (such as problems in the track or locomotive) as well as personal
          issues (leave application, grievances). Finally, it ensures the security of the Railways by mandating biometric 
          authentication of each work before and after their shift, and testing them for the consumption of alcohol.</p>

          <p>The challenge for Cmsir was to develop a 24X7X365 system that is easy to use for people unfamiliar with
          computers, yet robust and featureful enough to facilitate their migration from existing paper based systems.</p>
        </p>
			</div>
		</div>
	</div>
</section>

@endsection

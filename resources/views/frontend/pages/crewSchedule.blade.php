@extends('frontend.layouts.master')

@section('title', app_name() . ' | ' . __('labels.frontend.crew_schedule.box_title'))

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Crew Schedule</span>
          <h1 class="text-capitalize mb-5 text-lg">Crew Schedule</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
                    <p>
            Crew has to be called two and half hour to three hours prior to the scheduled signing on. Signing on is a physical
            act when the staff presents itself at the place of the duty at the scheduled called time. Crew scheduling requires
            ear marking of individual staff for every requirement. The requirement may be:
            <ul>  
            i)  Daily train arrangement, which is based on shift wise/daily train schedule given by the control.<br>
            ii) Schedule for pilots, waiting duty staff etc.(this schedule normally does not change on day to day
            basis the expected duty hours of such staff may vary and is given in the schedule).
            </ul>
            At present provisional duty list is prepared every day which names each and every staff of that depot
            station wise and status is updated as and when input are received. The crew scheduling is
            done with the help of this duty list based on certain set criteria according to the requirement.
            This list is finalized to be used as a guide for knowing the daily status for master roll.
            </p>
            </font>
            <br/>
			</div>
		</div>
	</div>
</section>

@endsection

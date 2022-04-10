@extends('frontend.layouts.master')

@section('title', app_name() . ' | ' . __('labels.frontend.medical.box_title'))

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Medical</span>
          <h1 class="text-capitalize mb-5 text-lg">Medical</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
        <div class="row">
			<div class="col">
                <h2 class="title-color">Medical Information</h2>
                    Medical examination is conducted on initial induction as Asst Driver and promotion to Goods
                    Drivers on W.Rly. Date of next PME is calculated from the date of last medical examination,
                    whether done on periodical basis or on promotion
                    <br><br>

                    <b><u>PERIODICAL MEDICAL EXAMINATION</u></b>
                    <br></br>
                    PME is calculated by the current age, for example: -</br>
                    <ul>

                    (i) If last PME done at the age of 41, next PME shall be at the age of 45.</br>
                    (ii) If last PME done at the age of 43, next PME shall be at the age of 45</br>
                    (iii) If last PME done at the age of 44, next PME shall be at the age of 45.</br>
                    (iv) If last PME done at the age of 53, next PME shall be at the age of 55.</br>
                    (v) If last PME done at the age of 54, next PME shall be at the age of 55.</br>
                    </ul>
                    <br>
                    <b>Note :</b> The rule is said to be modified recently with the following relaxations. Reference is not
                    available with CRIS :-
                    <br>
                    <ul>
                        i) If 44.5 to 45 years then he shall go after 2 years.</br>
                        ii) If les than 44.5 than at 45 years.</br>
                        iii) If 54.5 to 55 years then he shall go after 1 years.</br>
                        iv) If less than 54.5 than at 55 years.</br>
                    </ul>
                    The records of PME done/due date are updated along with correction of vision
                    recommended in the medical certificate after crew passes the PME. Crews failing to pass
                    PME are not allowed to work on Running Duty<br></br>

                    The CMS should be able to produce a Monthly report of staff due for medical examination.
                    When a staff is sent for Medical examination he is considered to be on duty for the first 3
                    days and absent thereafter. This absent period can be later regularized as leave. No staff
                    due for PME can be booked for running a train.</br><br>

                    The medical records of the running staff are maintained at the base station. On his transfer
                    his records are transferred to the other station.
			</div>
		</div>
	</div>
</section>

@endsection

@extends('frontend.layouts.master')

@section('title', app_name() . ' | ' . __('labels.frontend.crew_status.box_title'))

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Crew Status</span>
          <h1 class="text-capitalize mb-5 text-lg">Crew Status</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
        <table class="table">
<tr bgcolor="#CCFFCC" bordercolor="green">
<th class="col-sm-1">S.No.</th>
<th class="col-sm-1">Status</th>
<th class="col-sm-6">can be booked on duty after</th>
<th class="col-sm-4">Allowance paid during this<br>
period and Hrs. of duty</th>
</tr>
<tr>
	<td>i.</td>
	<td> On CasualLeave, SCL,CCL</td>
        <td> Shall be treated as OFF duty after Odd Hrs and can be booked after 08:00 Hrs,
        (BRC divn it is 00:00 Hrs also some divn it may be 06:00 hrs)</td>
        <td>1% of basic pay and 7.26 Hrsper day of the leave period.</td>
</tr>

<tr>
	<td>ii.</td>
	<td> On LAP</td>
        <td> Shall be treated as Available after Odd Hrs and be booked first on turn.</td>
        <td>1% of basic pay and 7.26 Hrsper day of the leave period.</td>
</tr>

<tr>
	<td>iii.</td>
	<td> Commuted Sick Leave. LHAP</td>
        <td> Shall be treated as Available at odd Hrs for AN and 12 hrs for
        BN. AN/BN shall be as per the medical memo.</td>
        <td>1% of basic pay and 7.26 Hrsper day of the leave period.</td>
</tr>


<tr>
	<td  >iv.</td>
	<td > IOD</td>
        <td > Shall be treated as Available at odd Hrs for AN and 12 hrs for
        BN. AN/BN shall be as per the medical memo. Except no leave is debited from the employee</td>
        <td  >1% of basic pay and 7.26 Hrsper day of the leave period.</td>
</tr>

<tr>
	<td  >v.</td>
	<td > Absent, Leave not due</td>
        <td > Shall be treated as Available after Odd Hrs next day in case he
        comes to duty after 12:01 Hrs. If he comes before 12:00 Hrs then Same day Odd Hrs on duty.</td>
        <td  >No Payment, mileage, RA or Hrs for the day.</td>
</tr>

<tr>
	<td  >vi.</td>
	<td > PME</td>
        <td > Shall be treated as Available at next day odd Hrs for AN and
        12:00 hrs for BN. AN/BN shall be as per the medical memo.</td>
        <td  >1% of basic pay and 7.26 Hrs per day of the leave period.
        If reports to duty BN then no Running allowance credit is there</td>
</tr>

<tr>
	<td  >vii.</td>
	<td > Maternity,Paternity Leave</td>
        <td > Shall be treated as Available at odd Hrs</td>
        <td  >1% of basic pay and 7.26 Hrs per day of the leave period.</td>
</tr>

<tr>
	<td  >viii.</td>
	<td > Training.</td>
        <td > Shall do OFF duty at crew booking point and there after be
        given standard (Standard rest are variable) rest after he can be booked. Max rest is 16 Hrs</td>
        <td  >Shall be paid 7.26 Hrs for the training period and OSRA of
        160 kms for outstation and 1% RA for HQ cases.</td>
</tr>

<tr>
	<td  >ix.</td>
	<td > Enquiry</td>
        <td > Shall do OFF duty at crew booking point and after given rest
        as per normal train running shall be booked. Journey period is as per Releasing letter.</td>
        <td  >OSRA paid out of HQ. And for the Journey period shall be
        treated as TAP. Or 1 % of basic pay at HQ And 7.26 Hrs of duty.</td>
</tr>

<tr>
	<td  >x.</td>
	<td > Special Duty for< 30 days</td>
        <td > Shall do OFF duty at crew booking point and after given 16
            Hrs rest he can be booked.</td>
        <td  >OSRA paid out of HQ. Or 1 % of basic pay at HQ and 7.26 Hrs of duty.</td>
</tr>

<tr>
	<td  >xi.</td>
	<td >Learning road,Handling</td>
        <td > Shall be as per normal duty</td>
        <td  >Actual as earned during LR and 7.26 Hrs of duty.</td>
</tr>

<tr>
	<td  >xii.</td>
	<td > Under Suspension.</td>
        <td > Shall be treated as Available as soon as revoked.</td>
        <td  >Normally however for the day of revoking he shall be given
        actual running allowance for the journey only.</td>
</tr>

<tr>
	<td  >xiii.</td>
	<td >Competency trials, L.R.</td>
        <td >Competency trials, L.R.</td>
        <td > OSRA and 7.26 Hrs of duty.</td>
        
</tr>

<tr>
	<td  >xiv.</td>
	<td >Officiating in higher grade.</td>
        <td > As per actual</td>
        <td  >15 % more than actual milage for Passenger Trains and 30% more for M/Exp Trains</td>
</tr>

<tr>
	<td  >xv.</td>
	<td > Online.</td>
        <td > -</td>
        <td  >-</td>
</tr>

<tr>
	<td  >xvi.</td>
	<td > Called.</td>
        <td > -</td>
        <td  >-</td>
</tr>

<tr>
	<td>xvii.</td>
	<td>Available (rest over) - AV</td>
        <td > -</td>
        <td  >-</td>
</tr>

<tr>
	<td>xviii.</td>
	<td > Periodic Rest -PR</td>
        <td > -</td>
        <td  >-</td>
</tr>

<tr>
	<td>xix.</td>
	<td >Under rest - UR</td>
        <td> -</td>
        <td>-</td>
</tr>
</table>
		</div>
	</div>
</section>

@endsection

@extends('frontend.layouts.master')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')

    <section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="block text-center">
            <span class="text-white">Register</span>
            <h1 class="text-capitalize mb-5 text-lg">Register Here</h1>
            </div>
        </div>
        </div>
    </div>
    </section>

    <div class="row justify-content-center align-items-center" style="margin-top: 50px;">
        <div class="col col-sm-8 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        @lang('labels.frontend.auth.register_box_title')
                    </strong>
                </div>

                <div class="card-body">
                    {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}

                                    {{ html()->text('first_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.first_name'))
                                        ->attribute('maxlength', 191)
                                        ->required()}}
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}

                                    {{ html()->text('last_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.last_name'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.dob'))->for('dob') }}

                                    {{ html()->date('dob')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.dob')) }}
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.sex'))->for('sex') }}

                                    {{ html()->text('sex')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.sex')) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.contact'))->for('contact') }}

                                    {{ html()->text('contact')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.contact')) }}
                                </div>
                            </div>
                      
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                    {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                    {{ html()->password('password')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                        ->required() }}
                                </div>
                            </div>
                
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}

                                    {{ html()->password('password_confirmation')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                        ->required() }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.address'))->for('address') }}

                                    {{ html()->textarea('address')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.address')) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.pincode'))->for('pincode') }}

                                    {{ html()->text('pincode')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.pincode')) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                 <span><h5>Departmental Details</h5></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.pf_no'))->for('pf_no') }}

                                    {{ html()->text('pf_no')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.pf_no'))
                                        ->required()  }}
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.designation'))->for('designation') }}

                                    {{ html()->text('designation')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.designation')) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>{{ __('validation.attributes.frontend.crew_type') }}</label>
                                    <SELECT class="form-control" name="crew">
                                        <OPTION Value="">--Select option--</OPTION>		
                                        <OPTION Value="Driver">Driver</OPTION>
                                        <OPTION Value="Astt_Driver">Astt Driver</OPTION>
                                        <OPTION Value="Gaurd">Guard</OPTION>
                                    </SELECT>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.doj'))->for('doj') }}

                                    {{ html()->date('doj')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.doj')) }}
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.basic_salary'))->for('basic_salary') }}

                                    {{ html()->text('basic_salary')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.basic_salary')) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.total_tdt'))->for('total_tdt') }}

                                    {{ html()->text('total_tdt')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.total_tdt')) }}
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.total_na'))->for('total_na') }}

                                    {{ html()->text('total_na')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.total_na')) }}
                                </div>
                            </div>
                        </div>

                        @if(config('access.captcha.registration'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    {{ html()->hidden('captcha_status', 'true') }}
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                    {{ form_submit(__('labels.frontend.auth.register_button')) }}
                                </div>
                            </div>
                        </div>
                    {{ html()->form()->close() }}

                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                @include('frontend.auth.includes.socialite')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        @captchaScripts
    @endif
@endpush

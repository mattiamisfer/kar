@extends('layouts.app')

@section('content')

 <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            @if (Session::has('success'))

                            <div class="alert alert-success" role="alert">
                              {{ Session::get('success') }}
                            </div>
                            @endif
                            @if (Session::has('failure'))
                            <div class="alert alert-danger" role="alert">
                              {{ Session::get('failure') }}
                            </div>
                         @endif
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">DAILY UPDATES ON ACCOUNT MANAGEMENT...</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Account Management</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body p-4">

                                    <form action="{{ route('user.products.update',$entry->id)}}" method="POST">
                                        @method('put')
                                        @csrf

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">DT. OF RECEIPT OF
                                                        REQUIREMENT</label>
                                                    <input class="form-control" type="date" name="receipt_requirement_date" value="{{ $entry->receipt_requirement_date}}"
                                                        id="example-text-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">CLIENT</label>
                                                    <input class="form-control" type="text" name ="client_name" value="{{ $entry->client_name}}"
                                                        id="example-search-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">COUNTRY</label>
                                                    <input class="form-control" type="text"  name ="country_name" value="{{ $entry->country_name}}"
                                                        id="example-email-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-url-input" class="form-label">PROJECT</label>
                                                    <input class="form-control" type="text"  name ="project_name" value="{{$entry->project_name}}"
                                                        id="example-url-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input"
                                                        class="form-label">POSITIONS</label>
                                                    <input class="form-control" type="text" name="postitions" value="{{ $entry->postitions}}"
                                                        id="example-email-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">NO. OF
                                                        REQUIREMENTS</label>
                                                    <input class="form-control" type="number" name="num_of_requirement"  value="{{ $entry->num_of_requirement}}"
                                                        id="example-email-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">SOURCE</label>
                                                    <input class="form-control" type="text" name="source" value="{{$entry->source}}"
                                                        id="example-email-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">CVS
                                                        SHARED</label>
                                                    <input class="form-control" type="text" name="cvs_shared" value="{{ $entry->cvs_shared}}"
                                                        id="example-email-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input"
                                                        class="form-label">SHORTLISTED</label>
                                                    <input class="form-control" type="text" name="short_list" value="{{ $entry->short_list}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">LINED UP FOR
                                                        INTERVIEW</label>
                                                    <input class="form-control" type="text"  name="line_up_for_interview" value="{{ $entry->line_up_for_interview}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">INTERVIEW
                                                        LOCATION</label>
                                                    <input class="form-control" type="text" name="interview_location" value="{{ $entry->interview_location}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">DATE OF
                                                        INTERVIEW</label>
                                                    <input class="form-control" type="date" name="date_of_interview" value="{{ $entry->date_of_interview}}"
                                                        id="example-date-input">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">SELECTED</label>
                                                    <input class="form-control" type="text" name="selected" value="{{ $entry->selected}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">ACCEPTED</label>
                                                    <input class="form-control" type="text" name="accepted" value="{{ $entry->accepted}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">OFFER RECEIVED
                                                    </label>
                                                    <input class="form-control" type="text" name="offer_received" value="{{ $entry->offer_received}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">UNDER MEDICAL
                                                    </label>
                                                    <input class="form-control" type="text" name="under_medical" value="{{ $entry->under_medical}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">MEDICAL FIT
                                                    </label>
                                                    <input class="form-control" type="text" name="medical_fit" value="{{ $entry->under_medical}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">VISA UNDER
                                                        PROCESS </label>
                                                    <input class="form-control" type="text" name="visa_under_proccess" value="{{ $entry->visa_under_proccess}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">VISA RECEIVED</label>
                                                    <input class="form-control" type="text" name="visa_received" value="{{ $entry->visa_received}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">ECR STATUS</label>
                                                    <input class="form-control" type="text" name="ecr_status" value="{{ $entry->ecr_status}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">SCHEDULED</label>
                                                    <input class="form-control" type="date" name="scheduled" value="{{ $entry->scheduled}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">DEPLOYED ON  </label>
                                                    <input class="form-control" type="date" name="deployed_on" value="{{ $entry->deployed_on}}"
                                                        id="example-date-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">REMARKS...</label>
                                                    {{-- <input class="form-control" type="text" name="remarks" value="{{ $entry->remarks}}"
                                                        id="example-date-input"> --}}
                                                        <textarea class="form-control" name="remarks">{{ $entry->remarks}}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">ATTENDED </label>
                                                    <input class="form-control" type="text" name="attended" value="{{ $entry->attended}}"
                                                        id="example-date-input">
                                                </div>



                                            </div>

                                        </div>
                                        <div class="mb-3">

                                            <input type="submit" class="form-control btn btn-success" value="Submit"/>

                                        </div>

                                    </div>

                                    <form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- Start row -->

                    <!-- End row -->


                    <!-- end row -->


                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- END layout-wrapper -->


            <!-- Right Sidebar -->
            <div class="right-bar">
                <div data-simplebar class="h-100">
                    <div class="rightbar-title d-flex align-items-center bg-dark p-3">

                        <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                            <i class="mdi mdi-close noti-icon"></i>
                        </a>
                    </div>

                    <!-- Settings -->
                    <hr class="m-0" />

                    <div class="p-4">
                        <h6 class="mb-3">Layout</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                                value="vertical">
                            <label class="form-check-label" for="layout-vertical">Vertical</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                                value="horizontal">
                            <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                                value="light">
                            <label class="form-check-label" for="layout-mode-light">Light</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                                value="dark">
                            <label class="form-check-label" for="layout-mode-dark">Dark</label>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                                value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                            <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                                value="boxed"
                                onchange="document.body.setAttribute('data-layout-size', 'boxed'),document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-position"
                                id="layout-position-fixed" value="fixed"
                                onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                            <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-position"
                                id="layout-position-scrollable" value="scrollable"
                                onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                            <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                                value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                            <label class="form-check-label" for="topbar-color-light">Light</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                                value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                            <label class="form-check-label" for="topbar-color-dark">Dark</label>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                                value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                            <label class="form-check-label" for="sidebar-size-default">Default</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                                value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                                value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                                value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                            <label class="form-check-label" for="sidebar-color-light">Light</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                                value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand"
                                value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                            <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-direction"
                                id="layout-direction-ltr" value="ltr">
                            <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout-direction"
                                id="layout-direction-rtl" value="rtl">
                            <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                        </div>

                    </div>

                </div> <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->

            <!-- Right bar overlay-->
@endsection

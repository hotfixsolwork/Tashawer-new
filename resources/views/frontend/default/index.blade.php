@extends('frontend.default.layouts.app')

@section('content')
    @if (get_setting('slider_section_show') == 'on')
        
    <section class="position-relative overflow-hidden pt-6 pb-7 d-flex flex-column justify-content-center main-banner" style="min-height: 720px;">
            <div class="absolute-full">
                <div class="aiz-carousel aiz-carousel-full h-100" data-fade='true' data-infinite='true' data-autoplay='true'>
                    @if (get_setting('sliders') != null)
                        @foreach (explode(',', get_setting('sliders')) as $key => $value)
                            <img class="img-fit" src="{{ custom_asset($value) }}">
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="container container-custome">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 pr-xl-4">
                            <h3 class="fw-300 display-5 fs-28 text-dark custome"><strong class="fw-600" > {{ get_setting('slider_section_title', 'ar') }}</strong></h3>
                        </div>
                    </div>

                </div>
                
                <div class=" container">
                    <div class="row">
                    
                        <div class="col-xl-6 col-lg-8">
                        <h3 class="fw-300 fs-28 custome mt-3 mb-5">
                            @php
                                echo get_setting('slider_section_subtitle', 'ar');
                            @endphp
                        </h3>
                        <!--<div>
                            <a href="{{ route('register') }}?type=2"
                                class="btn btn-primary fw-700 py-3 px-4 rounded-1">{{ translate('I want to Hire') }}</a>
                            <a href="{{ route('register') }}?type=1"
                                class="btn btn-outline-primary py-3 px-4 ml-3 rounded-1">{{ translate('I want to Work') }}</a>
                        </div>-->
                        <!-- <div class="search">
                            <div class="front-header-search d-flex align-items-center bg-white px-3 px-lg-3"">
                            <form action="{{ route('search') }}" method="GET" class="flex-grow-1">
                                <div class="input-group">
                                    <!--<a class="text-reset bg-soft-secondary fs-12 rounded-left d-lg-none p-2" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                                        <i class="las la-arrow-left la-2x"></i>
                                    </a>
                                    <div class="input-group-prepend d-none d-sm-block input-with-icon intro-search-field ">
                                        <i class="las la-map-marker-alt la-2x"></i>
                                        <input type="text" class="form-control text-center custome" placeholder="{{ translate('I am looking for') }}" name="keyword" style="border: none;border-top-left-radius: 0rem;border-bottom-left-radius: 0rem;">
                                        
                                    </div>
                                    <select class="form-control aiz-selectpicker intro-search-field custome" name="type">
                                        <option value="freelancer" @isset($type)
                                            @if ($type == 'freelancer')
                                                selected
                                            @endif
                                        @endisset>{{ translate('Freelancers') }}</option>
                                        <option value="project" @isset($type)
                                            @if ($type == 'project')
                                                selected
                                            @endif
                                        @endisset>{{ translate('Projects') }}</option>
                                        <option value="service" @isset($type)
                                            @if ($type == 'service')
                                                selected
                                            @endif
                                        @endisset>{{ translate('Services') }}</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-blue custome" >
                                            <!-- <i class="las la-search la-rotate-270"></i> 
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>-->
                        
                    </div>
                    </div>
               <!-- Search Bar -->
	            <div class="row custome-search">
			        <div class="col-md-12">
                    <form action="{{ route('search') }}" method="GET" class="flex-grow-1">
				      <div class="intro-banner-search-form margin-top-95">

					   <!-- Search Field -->
					    <div class="intro-search-field with-autocomplete">
						 <!--<label for="autocomplete-input" class="field-title ripple-effect"style="background-color: #2a41e8;">{{ translate ('Where?') }}</label>-->
						<div class="input-with-icon">
							<input id="autocomplete-input" type="text" name="keyword" placeholder="{{ translate('I am looking for') }}">
							<i class="las la-map-marker-alt la-2x"></i>
						</div>
					    </div>

					    <!-- Search Field -->
                        <div class="intro-search-field">
                             <!--<label for ="intro-keywords" class="field-title ripple-effect" style="background-color: #2a41e8;" >{{ translate ('What you want?') }}</label>-->
                            <!-- <input id="intro-keywords" type="text" placeholder="Job Title or Keywords"> -->
                            <select class="form-control aiz-selectpicker intro-search-field custome" name="type">
                                        <option value="freelancer" @isset($type)
                                           @if ($type == 'freelancer')
                                               selected
                                           @endif
                                       @endisset>{{ translate('Consultants') }}</option>
                                       <option value="project" @isset($type)
                                           @if ($type == 'project')
                                               selected
                                           @endif
                                       @endisset>{{ translate('Projects') }}</option>
                                       <option value="service" @isset($type)
                                           @if ($type == 'service')
                                               selected
                                           @endif
                                       @endisset>{{ translate('Services') }}</option>
                                   </select>
                        </div>

                        <!-- Button -->
                        <div class="intro-search-button">
                            <button type="submit" class="button ripple-effect" style="border-radius: 10px">{{ translate ('Search') }}</button>
                        </div>
				      </div>
			        </div>
                    </form>
		        </div>

                </div>
                

            </div>
    </section>
    
    @endif
    <!--@if (get_setting('client_logo_show') == 'on')
        <section class="bg-white py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="aiz-carousel gutters-10" data-autoplay='true' data-items="6" data-xl-items="6"
                        data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-infinite='true'>
                        @if (get_setting('client_logos') != null)
                            @foreach (explode(',', get_setting('client_logos')) as $key => $value)
                                <div class="caorusel-box">
                                    <img class="img-fluid" src="{{ custom_asset($value) }}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif-->
    @if (get_setting('how_it_works_show') == 'on')
        <section class="bg-white py-4">
            <div class="container">
                <div class="py-3 border-primary bg-hov-soft-primary">
                    <div class="w-xl-50 w-lg-75 mx-auto my-5 text-center">
                        <h2 class="fw-700 fs-40">{{ get_setting('how_it_works_title', 'ar') }}</h2>
                        <p class="fs-17 text-secondary">{{ get_setting('how_it_works_subtitle', 'ar') }}</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6">
                            <div class="px-xl-5 px-md-3 mb-4 text-center">
                                <img src="{{ get_setting('how_it_works_banner_1') ? custom_asset(get_setting('how_it_works_banner_1')) : my_asset('assets/placeholder.jpg') }}" class="img-fluid mx-auto">
                                <div class="p-4">
                                    @php
                                        echo get_setting('how_it_works_description_1', 'ar');
                                    @endphp
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="px-xl-5 px-md-3 mb-4 text-center">
                                <img src="{{ get_setting('how_it_works_banner_2') ? custom_asset(get_setting('how_it_works_banner_2')) : my_asset('assets/placeholder.jpg') }}"
                                    class="img-fluid mx-auto">
                                <div class="p-4">
                                    @php
                                        echo get_setting('how_it_works_description_2', 'ar');
                                    @endphp
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="px-xl-5 px-md-3 mb-4 text-center">
                                <img src="{{ get_setting('how_it_works_banner_3') ? custom_asset(get_setting('how_it_works_banner_3')) : my_asset('assets/placeholder.jpg') }}"
                                    class="img-fluid mx-auto">
                                <div class="p-4">
                                    @php
                                        echo get_setting('how_it_works_description_3', 'ar');
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    
    <!--@if (get_setting('featured_category_show') == 'on')
        <section class="bg-white pt-5 pb-4">
            <div class="container">
                <div class="">
                    <div class="lh-1-8 mx-auto mb-5 text-center">
                        <h3 class="fw-500 fs-26 text-dark custome">{{ get_setting('featured_category_title') }}</h3>
                         <p class="fs-17 text-dark">{{ get_setting('featured_category_subtitle') }}</p> 
                    </div>
                    <div class="row">
                        <div class=" col-xl-12">

                        <div class="categories-container">
                        @if (get_setting('featured_category_list') != null)
                            @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
                                @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
                                    
                                        <a class="featured_category category-box"
                                            href="{{ route('projects.category', $category->slug) }}">
                                             <img src="{{ custom_asset($category->photo) }}" class="mw-100 h-50px mb-2">
                                            <div class="category-box-icon mb-5">
							                  <!-- <i class="las la-map-marker-alt la-2x"></i> 
						                    </div>
                                            <div class="category-box-content">
                                               <h3 class="fs-16 category-box-content custome">{{ $category->name }}</h3>
                                               
                                            </div>
                                        </a>
                                   
                                @endif
                            @endforeach
                        @endif
                        </div>
                        </div>
                    </div>
                    {{-- <div class="row gutters-10 mt-5">
                        <div class="col-lg-6">
                            <img src="{{ custom_asset(get_setting('featured_category_left_banner')) }}"
                                class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ custom_asset(get_setting('featured_category_right_banner')) }}"
                                class="img-fluid">
                        </div>
                    </div> --}}
                    <div class="mt-5">
                        <a href="{{ route('search') }}?category="
                            class="btn bg-white text-primary rounded-1">{{ translate('Browse More Categories') }}</a>
                    </div>
                </div>
            </div>
        </section>
    @endif-->
    @if (get_setting('featured_category_show') == 'on')
        <section class="bg-white pt-5 pb-4">
            <div class="container">
                <div class="bg-white py-7 px-6 rounded-2">
                    <div class="lh-1-8 mx-auto mb-5 text-center">
                        <h3 class="fw-500 fs-26 text-dark custome">{{ get_setting('featured_category_title', 'ar') }}</h3>
                        <!-- <p class="fs-17 text-dark">{{ get_setting('featured_category_subtitle') }}</p> -->
                    </div>
                    <div class="row gutters-10">
                        @if (get_setting('featured_category_list') != null)
                            @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
                                @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <a class="featured_category d-block card bg-transparent py-4 px-3 text-center text-inherit bg-transparent"
                                            href="{{ route('projects.category', $category->slug) }}"
                                            >
                                            <img src="{{ custom_asset($category->photo) }}" class="mw-100 h-50px mb-2">
                                            <h4 class="fs-16 fw-700 text-dark mt-3 custome">{{ session('locale', 'en') == 'en' ? $category->name : $category->name_ar}}</h4>
                                            <h4 class="fs-14 fw-500 text-dark mt-3 custome">{{ session('locale', 'en') == 'en' ? $category->des : $category->des_ar}}</h4>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <!--{{-- <div class="row gutters-10 mt-5">
                        <div class="col-lg-6">
                            <img src="{{ custom_asset(get_setting('featured_category_left_banner')) }}"
                                class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ custom_asset(get_setting('featured_category_right_banner')) }}"
                                class="img-fluid">
                        </div>
                    </div> --}}-->
                    <div class="mt-5 text-center">
                        <a href="{{ route('search') }}?category="
                            class="btn bg-dark-blue text-white custome">{{ translate('Browse More Categories') }}</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if (get_setting('latest_project_show') == 'on')
        <section class="bg-white py-7">
            <div class="container">
                <div class="w-lg-75 w-xl-50 lh-1-8 mx-auto mb-5 text-center">
                    <h3 class="fw-500 fs-26 custome">{{ get_setting('latest_project_title') }}</h3>
                    <!-- <p class="fs-17 text-secondary">{{ get_setting('latest_project_subtitle') }}</p> -->
                </div>
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        @if (\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1)
                            @php
                                $projects = \App\Models\Project::biddable()
                                    ->notcancel()
                                    ->open()
                                    ->where('project_approval', 1)
                                    ->latest()
                                    ->get()
                                    ->take(6);
                            @endphp
                        @else
                            @php
                                $projects = \App\Models\Project::biddable()
                                    ->notcancel()
                                    ->open()
                                    ->latest()
                                    ->get()
                                    ->take(6);
                            @endphp
                        @endif
                        @foreach ($projects as $key => $project)
                            <a href="{{ route('project.details', $project->slug) }}"
                                class="d-block card mb-3 text-inherit card-custome job-listingg">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="fs-22 fw-500 lh-1-5 custome">
                                            {{ $project->name }}
                                        </h3>
                                        <ul class="list-inline fs-14 mb-0 opacity-80">
                                            <!--<li class="list-inline-item mr-3">
                                                {{-- <i class="las la-clock"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                                    <g id="Group_22" data-name="Group 22" transform="translate(-365 -1963)">
                                                      <path id="Subtraction_5" data-name="Subtraction 5" d="M-13,12a6.007,6.007,0,0,1-6-6,6.007,6.007,0,0,1,6-6A6.007,6.007,0,0,1-7,6,6.006,6.006,0,0,1-13,12Zm-.5-9V7h.013l2.109,2.109.707-.706L-12.5,6.572V3Z" transform="translate(384 1963)" fill="#989ea8"/>
                                                    </g>
                                                </svg>
                                               
                                                <span class="ml-1">{{ Carbon\Carbon::parse($project->created_at)->format('Y-m-d') }}</span>
                                            </li>-->
                                            <li class="list-inline-item mr-3">
                                                {{-- <i class="las la-stream"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11">
                                                    <g id="Group_23" data-name="Group 23" transform="translate(-498 -1963)">
                                                      <path id="Subtraction_2" data-name="Subtraction 2" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1963)" fill="#989ea8"/>
                                                      <path id="Subtraction_4" data-name="Subtraction 4" d="M1.5,0h5a1.5,1.5,0,0,1,0,3h-5a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1971)" fill="#989ea8"/>
                                                      <path id="Subtraction_3" data-name="Subtraction 3" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(500 1967)" fill="#989ea8"/>
                                                    </g>
                                                </svg>
                                               
                                                <span class="ml-1">{{ $project->project_category->name }}</span>
                                            </li>
                                            <li class="list-inline-item">
                                                {{-- <i class="las la-handshake"></i> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.643" height="12" viewBox="0 0 7.643 12">
                                                    <g id="Group_24" data-name="Group 24" transform="translate(-131 -59.8)">
                                                      <path id="Path_9" data-name="Path 9" d="M136.142,161.028,133.614,161A3.381,3.381,0,0,0,131,164.281v4.708a.92.92,0,0,0,.917.917h5.809a.92.92,0,0,0,.917-.917v-4.708A3.361,3.361,0,0,0,136.142,161.028Zm-1.321,4.488a1.122,1.122,0,0,1,.306,2.2v.248a.306.306,0,0,1-.611,0v-.248a1.123,1.123,0,0,1-.816-1.079.306.306,0,0,1,.611,0,.511.511,0,1,0,.511-.511,1.122,1.122,0,0,1-.306-2.2v-.183a.306.306,0,1,1,.611,0v.183a1.123,1.123,0,0,1,.816,1.079.306.306,0,1,1-.611,0,.511.511,0,1,0-.511.511Z" transform="translate(0 -98.106)" fill="#989ea8"/>
                                                      <path id="Path_10" data-name="Path 10" d="M219.424,124.641l.15-.52L217.1,124.1l.171.52Z" transform="translate(-83.468 -62.334)" fill="#989ea8"/>
                                                      <path id="Path_11" data-name="Path 11" d="M199.1,61.179l.4-1.379h-3.7l.449,1.351Z" transform="translate(-62.819)" fill="#989ea8"/>
                                                    </g>
                                                </svg>
                                                
                                                <span class="ml-1">{{ translate($project->type) }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="fs-24 fw-500 custome">{{ single_price($project->price) }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="pt-4 text-center">
                    <a href="{{ route('search') }}?keyword=&type=project"
                        class="btn btn btn-dark-blue">{{ translate('Check All Projects') }}</a>
                </div>
            </div>
        </section>
    @endif

    <!--@if (get_setting('service_section_show') == 'on')
        <section class="pt-8 pb-2 bg-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-xl-6 col-md-8 mx-auto">
                        <div class="text-center">
                            <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2>
                            <p class="fs-17 text-secondary">{{ get_setting('service_section_subtitle') }}</p>
                        </div>
                    </div>
                </div>
                @php
                    $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
                        ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
                        ->pluck('user_id');
                    
                    $services = \App\Models\Service::inRandomOrder()
                        ->whereIn('user_id', $user_ids)
                        ->take(get_setting('max_service_show_homepage'))
                        ->get();
                @endphp
                <div class="row">
                    <div class="aiz-carousel gutters-15 w-100" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1"
                    data-arrows='true'> 
                        @foreach ($services as $service)
                            <div class="caorusel-box">
                                <div class="card bg-transparent rounded-2 border-gray-light hov-box overflow-hidden">
                                    <a href="{{ route('service.show', $service->slug) }}">
                                        @if($service->image != null)
                                            <img src="{{ custom_asset($service->image) }}" class="card-img-top" alt="service_image" height="212">
                                        @else
                                            <img src="{{ my_asset('assets/frontend/default/img/placeholder-service.jpg') }}" class="card-img-top" alt="{{ translate('Service Image') }}" height="212">
                                        @endif
                                    </a>
                                    <div class="card-body hov-box-body">
                                        <div class="d-flex mb-2">
                                            <span class="mr-2">
                                                @if ($service->user->photo != null)
                                                    <img src="{{ custom_asset($service->user->photo) }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                                @else
                                                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                                @endif
                                            </span>
                                            <span class="d-flex flex-column justify-content-center">
                                                <a href="{{ route('freelancer.details', $service->user->user_name) }}"
                                                    class="text-secondary fs-14"><span
                                                        class="font-weight-bold">{{ $service->user->name }}</span></a>
                                            </span>
                                        </div>

                                        <a href="{{ route('service.show', $service->slug) }}" class="text-dark"  title="{{ $service->title }}">
                                            <h5 class="card-title fs-16 fw-700 h-40px">
                                                {{ \Illuminate\Support\Str::limit($service->title, 45, $end = '...') }}</h5>
                                        </a>
                                        <div class="text-warning">
                                            <span class="rating rating-lg rating-mr-1">
                                                {{ renderStarRating(getAverageRating($service->user->id)) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div> 
                    
                </div>
                <div class="pt-5 text-center">
                    <a href="{{ route('search') }}?keyword=&type=service"
                        class="btn btn-primary rounded-1">{{ translate('Explore More Services') }}</a>
                </div>
            </div>
        </section>
    @endif-->


    @if (get_setting('cta_section_show') == 'on')
        <section class="cta_section py-8 bg-white">
            <div class="container">
                <div class="bg-white">
                    <div class="row mx-0 sm-no-gutters rounded-2 overflow-hidden">
                        <div class="col-lg-6 px-0">
                            <img src="{{ get_setting('cta_section_banner') ? custom_asset(get_setting('cta_section_banner')) : my_asset('assets/placeholder.jpg') }}" alt="" class="w-100 h-100">
                        </div>
                        <div class="col-lg-6 px-0">
                            <div class="bg-primary py-6 px-4 h-100">
                                <nav class="nav mb-3">
                                    <a class="nav-link text-white opacity-50 active" href="#nav-client" data-toggle="tab">{{ translate('Client') }}</a>
                                    <a class="nav-link text-white opacity-50" href="#nav-freelancer" data-toggle="tab">{{ translate('Consultant') }}</a>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active " id="nav-client">
                                        <div class="lh-1-8 mx-auto mb-5">
                                            <h2 class="fw-700 fs-40 text-white">{{ get_setting('cta_section_title_client', 'ar') }}</h2>
                                            <p class="fs-16 text-white mt-3">{!! get_setting('cta_section_subtitle_client', 'ar') !!}</p>
                                        </div>
                                        <div>
                                            <div><a href="{{ route('login') }}" class="text-white hov-text-light">{{ translate('Already a Client') }}, <strong>{{ translate('Login to Get Started') }} <i class="las la-long-arrow-alt-right"></i></strong></a></div>
                                            <a href="{{ route('register') }}?type=2"
                                                class="btn bg-white text-primary hov-text-soft-primary rounded-1 mt-3">{{ translate('Or, Create an Account to Get Started') }}</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="nav-freelancer">
                                        <div class="lh-1-8 mx-auto mb-5">
                                            <h2 class="fw-700 fs-40 text-white">{{ get_setting('cta_section_title_freelancer', 'ar') }}</h2>
                                            <p class="fs-16 text-white mt-3">{!! get_setting('cta_section_subtitle_freelancer', 'ar') !!}</p>
                                        </div>
                                        <div>
                                            <div><a href="{{ route('login') }}" class="text-white hov-text-light">{{ translate('Already a Consultant') }}, <strong>{{ translate('Login to Get Started') }} <i class="las la-long-arrow-alt-right"></i></strong></a></div>
                                            <a href="{{ route('register') }}?type=1"
                                                class="btn bg-white text-primary rounded-1 mt-3">{{ translate('Or, Create an Account to Get Started') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!--@if (get_setting('blog_section_show') == 'on')
        <section class="bg-white pt-4 pb-7 text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
                        <div class="section-title mb-5 text-center">
                            <h2 class="fw-700 fs-40 text-dark">{{ get_setting('blog_section_title') }}</h2>
                            <p class="fs-17 text-secondary">{{ get_setting('blog_section_subtitle') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="aiz-carousel gutters-15 w-100" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1"
                        data-arrows='true'>
                        @php
                            $blogs = \App\Models\Blog::where('status', 1)->latest()
                                ->limit(get_setting('max_blog_show_homepage'))
                                ->get();
                        @endphp
                        @foreach ($blogs as $key => $blog)
                            <div class="caorusel-box">
                                <div class="card text-dark mb-3 overflow-hidden rounded-2 border-gray-light hov-box">
                                    <a href="{{ route('blog.details', $blog->slug) }}" class="text-reset d-block">
                                        <img src="{{ custom_asset($blog->banner) }}" alt="{{ $blog->title }}"
                                            class="card-img-top" height="212">
                                    </a>
                                    <div class="p-4">
                                        <h2 class="fs-18 fw-600 mb-1 h-45px">
                                            <a href="{{ route('blog.details', $blog->slug) }}" class="text-dark fs-16 fw-700" title="{{ $blog->title }}">
                                                {{ \Illuminate\Support\Str::limit($blog->title, 45, $end = '...') }}
                                            </a>
                                        </h2>
                                        @if ($blog->category != null)
                                            <p class="mt-3 mb-0 text-primary fs-14 fw-700">{{ $blog->category->category_name }}</p>
                                        @endif
                                        <p class="mb-4 fs-14 text-secondary opacity-70">{{ $blog->created_at ? date('d.m.Y',strtotime($blog->created_at)) : '' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="{{ route('blog') }}" class="btn btn-primary rounded-1">{{ translate('View More') }}</a>
                </div>
            </div>
        </section>
    @endif-->
@endsection




<!--@section('modal')
    @if ((Session::has('new_user') && Session::get('new_user') == true) || (auth()->check() && auth()->user()->user_type == null))
        <div class="modal fade" id="show_new_user_modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ translate('Choose your account Type') }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="show_modal_body">
                        <form action="{{ route('user.account.type') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="user_type">{{ translate('User Type') }}</label>
                                <select name="user_type" id="user_type" class="form-control aiz-selectpicker">
                                    <option value="client">{{ translate('Client') }}</option>
                                    <option value="freelancer">{{ translate('Freelancer') }}</option>
                                </select>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Proceed') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('script')
    @if ((Session::has('new_user') && Session::get('new_user') == true) || (auth()->check() && auth()->user()->user_type == null))
        <script>
            $('#show_new_user_modal').modal({
                show: true
            });
            
        </script>
    @endif
@endsection-->

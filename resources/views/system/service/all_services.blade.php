@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-primary page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Departments</h1>
                        <span class="sub-title">Learn more about our departments</span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                            <li><a href="demo-medical.html">Home</a></li>
                            <li class="active">Departments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row mt-5 mb-5">
                <div class="col">

                    <h2 class="font-weight-semibold mb-3">Health Specialists</h2>

                    <p class="lead font-weight-normal mb-5">At Porto Medical, we offer a wide array of departments, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>


                    <div class="appear-animation animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon" style="min-width: 4.7rem;">
                                <img src="img/demos/medical/icons/department-icon-cardiology.png" alt="" class="img-fluid">
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-semibold mb-1">Cardiology</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor quam, sagittis eget pulvinar id, vulputate sit amet nisi. Etiam dui massa, semper eget pulvinar eget, imperdiet et neque. Donec rutrum purus a lectus consequat cursus. Curabitur sed lacinia felis. Phasellus non purus sit amet purus molestie molestie. Phasellus ornare volutpat nibh ut vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                <p class="mb-0"><a href="demo-medical-departments-detail.html" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-3 font-weight-bold btn-md text-1">view more...</a></p>
                            </div>
                        </div>

                        <hr class="solid my-5">
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection

@push('after-scripts')
    <script>

    </script>
@endpush

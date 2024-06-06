@extends('layouts.preview')
@section('content')
    <div class="container pt-5">
        <div class="part">
            <p class="radjhani dark-purple">- HIGHLIGHT PROJECTS</p>
        </div>
        <h3 class="dark-blue fw-bold mb-3">Programming : </h3>
        <div class="row gy-4 g-5 justify-content-center">
            <div class="col-md-6">
                <a href="{{ route('ov.digitalinv') }}" class="project-card rounded-3 p-3">
                    <img src="{{ asset('assets/digital-invitation.png') }}" alt="Projects-Photo"
                        class="img-thumbnail mb-4 shadow-sm project-preview-img">
                    <h3 class="card-subtitle poppins-bold">Digital Invitation</h3>
                    <p class="card-description mt-3">LARAVEL · PHP · JavaScript</p>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('ov.laterecap') }}" class="project-card rounded-3 p-3">
                    <img src="{{ asset('assets/late-recapitulation.png') }}" alt="Projects-Photo"
                        class="img-thumbnail mb-4 shadow-sm project-preview-img">
                    <h3 class="card-subtitle poppins-bold">Late Recapitulation</h3>
                    <p class="card-description mt-3">LARAVEL · PHP · JavaScript</p>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('ov.cashier') }}" class="project-card rounded-3 p-3">
                    <img src="{{ asset('assets/cashier.png') }}" alt="Projects-Photo"
                        class="img-thumbnail mb-4 shadow-sm project-preview-img ">
                    <h3 class="card-subtitle poppins-bold">Cashier</h3>
                    <p class="card-description mt-3">PHP · JavaScript</p>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('ov.calculator') }}" class="project-card rounded-3 p-3">
                    <img src="{{ asset('assets/calculator.png') }}" alt="Projects-Photo"
                        class="img-thumbnail mb-4 shadow-sm project-preview-img">
                    <h3 class="card-subtitle poppins-bold">Calculator</h3>
                    <p class="card-description mt-3">HTML · JavaScript</p>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('ov.students') }}" class="project-card rounded-3 p-3">
                    <img src="{{ asset('assets/students.png') }}" alt="Projects-Photo"
                        class="img-thumbnail mb-4 shadow-sm project-preview-img">
                    <h3 class="card-subtitle poppins-bold">Students Data</h3>
                    <p class="card-description mt-3">PHP · JavaScript</p>
                </a>
            </div>
        </div>

    </div>
@endsection

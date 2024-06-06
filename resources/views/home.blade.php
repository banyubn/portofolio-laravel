@extends('layouts.main')
@section('header')
    <div class="container">
        <div class="row g-4 align-items-center">
            <p class="radjhani dark-purple">- INTRODUCTION</p>
            <div class="col-md-6">
                <h1 class="display-1 dark-blue poppins-bold">Banyu Bagastara Nugroho</h1>
                <p class="dark-blue p-0 m-0 poppins-light">AKA</p>
                <p class="dark-blue poppins-light-italic font-small">banyu · anyu · sir · bagastra · bandijet · BAD
                    MANO · TOKYOSLEEP</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <p class="dark-blue p-0 m-0">Currently, I am a Student on</p>
                <h1 class="poppins-bold dark-blue mb-5">Wikrama Vocational Highschool</h1>
                <p class="dark-blue p-0 m-0">On Software Development major as</p>
                <h1 class="poppins-bold dark-blue mb-5">Fullstack Developer</h1>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div class="part">
                <p class="radjhani dark-purple">- HIGHLIGHT PROJECTS</p>
            </div>

            {{-- Programming Projects --}}
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
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('programming') }}" class="btn btn-primary mt-4 px-5 form-control">View More</a>
            </div>

            <hr class="my-5">

            {{-- Music Producing Projects --}}
            <h3 class="dark-blue fw-bold mb-3">Music Producing : </h3>
            <div class="row gy-4 g-5 justify-content-center align-items-center">
                <p class="dark-blue mb-0 pt-0 fs-5">My <span class="fw-bold">most viral</span> contribution on Music
                    Producing : </p>
                <div class="col-md-6">
                    <a href="https://open.spotify.com/track/2ksyzVfU0WJoBpu8otr4pz" target="_blank"
                        class="project-card rounded-3 p-3">
                        <img src="{{ asset('assets/metamorphosis.jpg') }}" alt="Projects-Photo"
                            class="img-thumbnail mb-4 shadow-sm project-preview-img w-100 h-100">
                        <h3 class="card-subtitle poppins-bold">Metamorphosis</h3>
                        <p class="card-description mt-3">by INTERWORLD</p>
                        <div>
                            <img src="{{ asset('assets/icons/spotify_icon.png') }}" alt="spotify" class="icon"
                                style="width: 25px; height: 25px;">
                            <img src="{{ asset('assets/icons/youtube_icon.png') }}" alt="youtube_music" class="icon"
                                style="width: 25px; height: 25px;">
                            <img src="{{ asset('assets/icons/soundcloud_icon.png') }}" alt="soundcloud" class="icon"
                                style="width: 25px; height: 25px;">
                            <img src="{{ asset('assets/icons/itunes_icon.png') }}" alt="itunes" class="icon"
                                style="width: 25px; height: 25px;">
                            <span class="dark-blue m-0 p-0 mx-1"> etc.</span>
                        </div>
                        <div class="card-desc mt-4">
                            <p class="dark-blue m-0 p-0 fs-5">Streamed 600M++ on Spotify, mixing & mastering were by me, the
                                original track was made by a random guy i found on discord, we were just randomly having fun
                                by making PHONK genres track. This one blows up like CRAZY. All thanks to TikTok Community
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="https://open.spotify.com/track/39BOpF8KvdMqUZlJyfnV34" target="_blank"
                        class="project-card rounded-3 p-3">
                        <img src="{{ asset('assets/toma.jpg') }}" alt="Projects-Photo"
                            class="img-thumbnail mb-4 shadow-sm project-preview-img w-100 h-100">
                        <h3 class="card-subtitle poppins-bold fs-3">TOMA TOMA TOMA</h3>
                        <p class="card-description mt-3">by $werve, TOKYOSLEEP</p>
                        <div>
                            <img src="{{ asset('assets/icons/spotify_icon.png') }}" alt="spotify" class="icon"
                                style="width: 25px; height: 25px;">
                            <img src="{{ asset('assets/icons/youtube_icon.png') }}" alt="youtube_music" class="icon"
                                style="width: 25px; height: 25px;">
                            <img src="{{ asset('assets/icons/soundcloud_icon.png') }}" alt="soundcloud" class="icon"
                                style="width: 25px; height: 25px;">
                            <img src="{{ asset('assets/icons/itunes_icon.png') }}" alt="itunes" class="icon"
                                style="width: 25px; height: 25px;">
                            <span class="dark-blue m-0 p-0 mx-1"> etc.</span>
                        </div>
                        <div class="card-desc mt-4">
                            <p class="dark-blue m-0 p-0 fs-5 mb-1">Streamed 30M++ on Spotify, almost all of the sample kits
                                and packs that are used is by me.</p>
                            <p class="dark-blue m-0- p-0 fs-5">Once again, we met up on Discord and the song blown up by
                                TikTok Community</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('music') }}" class="btn btn-primary mt-4 px-5 form-control">View More</a>
            </div>

        </div>
    </div>
@endsection

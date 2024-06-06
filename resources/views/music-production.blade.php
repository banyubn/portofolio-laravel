@extends('layouts.preview')
@section('content')
    <div class="container pt-5">
        <div class="part">
            <p class="radjhani dark-purple">- HIGHLIGHT PROJECTS</p>
        </div>
        <h3 class="dark-blue fw-bold mb-3">Music Producing : </h3>
        <div class="row gy-4 g-5 justify-content-center align-items-center">
            <p class="dark-blue mb-0 pt-0 fs-5">My <span class="fw-bold">most viral</span> contribution on Music Producing :
            </p>
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
                            original track was made by a random guy i found on discord, we were just randomly having fun by
                            making PHONK genres track. This one blows up like CRAZY. All thanks to TikTok Community </p>
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
                        <p class="dark-blue m-0 p-0 fs-5 mb-1">Streamed 30M++ on Spotify, almost all of the sample kits and
                            packs that are used is by me.</p>
                        <p class="dark-blue m-0- p-0 fs-5">Once again, we met up on Discord and the song blown up by TikTok
                            Community</p>
                    </div>
                </a>
            </div>
            <div class="row mt-5 gy-4">
                <p class="dark-blue mb-0 pt-0 fw-bold fs-4">Collaboration :</p>
                <p class="dark-blue mt-4 mb-0 pt-0 fs-5">(viral ones)</p>
                <a href="https://open.spotify.com/track/3xxb7JTqrnyXbJ59tmw5fK" class="col-sm-4 rounded-3" target="_blank">
                    <img src="{{ asset('assets/overview/music/matador.jpg') }}" alt="Projects-Photo"
                        class="img-thumbnail mb-4 shadow-sm project-preview-img w-100 h-100">
                </a>
                <a href="https://open.spotify.com/track/4lxLioQ8YilK1QbF7FxGjZ" class="col-sm-4 rounded-3" target="_blank">
                    <img src="{{ asset('assets/overview/music/phonk_up.jpeg') }}" alt="Projects-Photo"
                        class="img-thumbnail mb-4 shadow-sm project-preview-img w-100 h-100">
                </a>
                <a href="https://open.spotify.com/track/46f2B6isZhPq4shhC1vZZu" class="col-sm-4 rounded-3" target="_blank">
                    <img src="{{ asset('assets/overview/music/preto_bmw.jpg') }}" alt="Projects-Photo"
                        class="img-thumbnail mb-4 shadow-sm project-preview-img w-100 h-100">
                </a>
                <p class="dark-blue text-center">much more . . .</p>
            </div>
            <div class="row mt-5 gy-4">
                <p class="dark-blue mb-0 pt-0 fw-bold fs-4">Personal <span class="fw-thin fs-5">(only for fun)</span> :
                </p>
                <div class="col-sm-4">
                    <a href="https://open.spotify.com/track/491g8yfpVvVjIwA6CrkAsf" class="project-card rounded-3 p-3" target="_blank">
                        <img src="{{ asset('assets/overview/music/prau_layar.jpg') }}" alt="Projects-Photo"
                            class="img-thumbnail mb-4 shadow-sm project-preview-img w-100 h-100">
                        <h3 class="card-subtitle poppins-bold fs-3">Prau Layar Phonk</h3>
                        <p class="card-description mt-3">by BANDIJET</p>
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
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://open.spotify.com/track/6GMf9AfRcxbw2zwGwrpsb6" class="project-card rounded-3 p-3" target="_blank">
                        <img src="{{ asset('assets/overview/music/mixue_drip.jpg') }}" alt="Projects-Photo"
                            class="img-thumbnail mb-4 shadow-sm project-preview-img w-100 h-100">
                        <h3 class="card-subtitle poppins-bold fs-3">Mixue Drip</h3>
                        <p class="card-description mt-3">by BANDIJET</p>
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
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://open.spotify.com/track/0qfQdeAJVWktuH2e4DcWNU" class="project-card rounded-3 p-3" target="_blank">
                        <img src="{{ asset('assets/overview/music/here_i_come.jpg') }}" alt="Projects-Photo"
                            class="img-thumbnail mb-4 shadow-sm project-preview-img w-100 h-100">
                        <h3 class="card-subtitle poppins-bold fs-3">Here I Come</h3>
                        <p class="card-description mt-3">by BANDIJET Too</p>
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
                    </a>
                </div>
            </div>
        </div>
    @endsection

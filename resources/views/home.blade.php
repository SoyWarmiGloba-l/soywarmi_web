<x-layouts.app>
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <!-- <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video> -->
        <img id="bg-video" src="assets/images/InfoWallpaper.jpg" alt="">

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <div class="main-button-red mb-4 animated flash">
                                <div>
                                    <a href="{{ route('our-mission') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M12 8l4 4-4 4M8 12h7" />
                                        </svg>
                                        {{ __('home.mission') }}
                                    </a>
                                </div>
                            </div>
                            <h6></h6>
                            <h2>{{ __('home.welcome') }}</h2>
                            <p>{{ __('home.resum')}}</p>

                            {{-- <p>This is an edu meeting HTML CSS template provided by <a rel="nofollow"
                                    href="https://templatemo.com/page/1" target="_blank">TemplateMo website</a>. This is
                                a
                                Bootstrap v5.1.3 layout. The video background is taken from Pexels website, a group of
                                young
                                people by <a rel="nofollow" href="https://www.pexels.com/@pressmaster"
                                    target="_blank">Pressmaster</a>.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-01.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>{{ __('home.bestproyect') }}</h4>
                                <p>{{ __('home.bestproyectdescription') }}</p>
                            </div>
                        </div>

                        <a href="https://www.worldlearning.org" target="_blank">
                            <div class="item">
                                <div class="icon">
                                    <img src="assets/images/service-icon-02.png" alt="">
                                </div>

                                <div class="down-content">
                                    <h4>World Learning.</h4>
                                    <p>{{ __('home.impulsing') }}</p>
                                </div>

                            </div>
                        </a>
                        <a href="https://thepollinationproject.org" target="_blank">
                            <div class="item">
                                <div class="icon">
                                    <img src="assets/images/service-icon-02.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>The Pollination Project.</h4>
                                    <p>{{ __('home.bestpopulationproyect') }}</p>
                                </div>
                            </div>
                        </a>
                        <a href="https://www.unesco.org" target="_blank">
                            <div class="item">
                                <div class="icon">
                                    <img src="assets/images/service-icon-03.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{ __('home.bestparticipating') }}</h4>
                                    <p>{{ __('home.bestparticipatingdescription') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>{{ __('home.whyus') }}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="categories" style="border-width: 5px; border-style: solid; border-color: #00858E;">
                        <h4>{{ __('home.whyus1') }}</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="categories" style="border-width: 5px; border-style: solid; border-color: #F2AE5D;">
                        <h4>{{ __('home.whyus2') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Upcoming Meetings</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Meeting Catgories</h4>
                        <ul>
                            <li><a href="#">Sed tempus enim leo</a></li>
                            <li><a href="#">Aenean molestie quis</a></li>
                            <li><a href="#">Cras et metus vestibulum</a></li>
                            <li><a href="#">Nam et condimentum</a></li>
                            <li><a href="#">Phasellus nec sapien</a></li>
                        </ul>
                        <div class="main-button-red">
                            <a href="meetings.html">All Upcoming Meetings</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$22.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg"
                                            alt="New Lecturer Meeting"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>10</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>New Lecturers Meeting</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$36.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg"
                                            alt="Online Teaching"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>24</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Online Teaching Techniques</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$14.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg"
                                            alt="Higher Education"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>26</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Higher Education Conference</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$48.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg"
                                            alt="Student Training"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>30</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Student Training Meetup</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="our-facts" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>{{ __('home.smallus') }}</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit" style="color: #00858E">70</div>
                                        <div class="count-title">{{ __('home.countPerson') }}</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit" style="color: #8B3A3D">500</div>
                                        <div class="count-title">{{ __('home.countWork') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit" style="color: #F2AE5D">10</div>
                                        <div class="count-title">{{ __('home.countEducation') }}</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit" style="color: #A9CDDB">150</div>
                                        <div class="count-title">{{ __('home.countVoluntary') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        {{-- <a href="https://youtu.be/efiYGs8wBOg?si=LY8x8iV-l1p-hqEW" target="_blank"><img
                                src="assets/images/play-icon.png" alt=""></a> --}}
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/efiYGs8wBOg?si=amFObweIWnPYfudx"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div style="text-align: center;">
                        <div class="main-button-red mb-4 animated flash">
                            <div>
                                <a href="{{ route('our-mission') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 8l4 4-4 4M8 12h7" />
                                    </svg>
                                    {{ __('home.donation') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="apply-now" id="apply">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="main-button-red mb-4">
                        <a href="#">
                            Ver más Noticias
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>{{ $news1->title }}</h3>
                                <p>{{ Str::limit($news1->description, 120) }}</p>
                                <div class="main-button-red">
                                    <div class="scroll-to-section"><a href="#contact">Leer más-></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>{{ $news2->title }}</h3>
                                <p>{{ Str::limit($news2->description, 120) }}</p>
                                <div class="main-button-yellow">
                                    <div class="scroll-to-section"><a href="#contact">Leer más-></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded"
                        style="border-width: 5px; border-style: solid; border-color: #8B3A3D;">
                        @forelse($otherNews as $new)
                        <article class="accordion @if($loop->last) last-accordion @endif">
                            <div class="accordion-head">
                                <span>{{ $new->title }}</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>{{ Str::limit($new->description, 120) }}</p>
                                </div>
                            </div>
                        </article>
                        @empty
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>No News</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>No News</p>
                                </div>
                            </div>
                        </article>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-courses" id="courses" style="padding-top: 10px; padding-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <a href="{{ route('testimony') }}">
                            <h2>{{ __('home.alltestimony') }}👈</h2>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        @forelse ($testimonies as $testimony)
                        <div class="item">
                            @php
                            $arrayColores = [
                            'F2AE5D',
                            '8B3A3D',
                            '00858E'
                            ];
                            @endphp
                            <a href="{{ route('testimony.show', $testimony->slug) }}" target="_blank">
                                {{-- @if ($testimony->person->role_id == 3)
                                <img src="https://ui-avatars.com/api/?name={{ $testimony->person->name }}?size=50"
                                    alt="Course One">
                                @else
                                <img src="{{ $testimony->person->photo }}" alt="Course One">
                                @endif --}}
                                <div class="down-content"
                                    style="border-width: 5px; border-style: solid; border-color: #{{ $arrayColores[rand(0, 2)] }};">
                                    <h4>{{ $testimony->title }}</h4>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-12" style="word-break: break-all;">
                                                <p>{{ Str::limit($testimony->description, 50, '...') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                        No hay
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-12" style="display: flex; justify-content: center;">
                            {{-- <div class="item">
                                <h3>{{ $news1->title }}</h3>
                                <p>{{ Str::limit($news1->description, 120) }}</p>
                                <div class="main-button-red">
                                    <div class="scroll-to-section"><a href="#contact">Leer más-></a></div>
                                </div>
                            </div> --}}
                            <div id="carouselExampleCaptions" class="carousel slide w-50" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/images/course-01.jpg') }}" class="d-block w-100"
                                            alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/course-02.jpg') }}" class="d-block w-100"
                                            alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/course-03.jpg') }}" class="d-block w-100"
                                            alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-layouts.contact />
</x-layouts.app>
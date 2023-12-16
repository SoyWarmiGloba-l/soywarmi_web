<x-layouts.app>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-transform: none; color: white">SoyWarmi</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 20px;">
                            <h4 class="stylea">{{ __('ourmission.about_us') }}</h4>
                            <p class="description" style="margin-top: 0px; margin-bottom: 0; padding-bottom: 0;">
                                {{ __('ourmission.description_us') }}</p>
                            <button class="btn btn-danger animated flash"
                                style="margin-top: 54px; border-radius: 12px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 8l4 4-4 4M8 12h7" />
                                </svg>
                                Programas y Proyectos
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 20px;">
                            <img src="{{ asset('assets/images/logohorizontal.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 5%;">
                            <h4 class="stylea">{{ __('ourmission.tittle_history_us') }}</h4>
                            <p class="description" style="margin-top: 10px; margin-bottom: 0; padding-bottom: 0;">
                                {{ __('ourmission.history_us') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 20px;">
                            <div class="video w-50">
                                {{-- <a href="https://youtu.be/efiYGs8wBOg?si=LY8x8iV-l1p-hqEW" target="_blank"><img
                                        src="assets/images/play-icon.png" alt=""></a> --}}
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/efiYGs8wBOg?si=amFObweIWnPYfudx"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 20px;">
                            <img src="{{ asset('assets/images/warmi_ambassors2.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 20px;">
                            <h4 class="stylea">{{ __('ourmission.tittle_why_us') }}</h4>
                            <p class="description" style="margin-top: 10px; margin-bottom: 0; padding-bottom: 0;">
                                {{ __('ourmission.why_us') }}</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>{{ __('home.teamTittle') }}&nbsp;</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        @php
                        $arrayColores = [
                        'F2AE5D',
                        '8B3A3D',
                        '00858E'
                        ];
                        @endphp
                        @forelse ($teams[0]->person as $personas)
                        @php
                        $color = $arrayColores[rand(0, 2)];
                        @endphp
                        <div class="item">
                            <img src="{{ env('API_URL_API') . $personas->photo }}" style="border-width: 0 5px 5px 5px; border-style: solid; border-radius: 20px 20px 0 0; border-color: #{{ $color }};
                                alt=" Course One">
                            <div class="down-content"
                                style="border-width: 0 5px 5px 5px; border-style: solid; border-radius: 0 0 20px 20px; border-color: #{{ $color }};">
                                <h4>{{ $personas->description }}</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col">
                                            <span>{{ $personas->name . " " . $personas->lastname }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        No hay equipo
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

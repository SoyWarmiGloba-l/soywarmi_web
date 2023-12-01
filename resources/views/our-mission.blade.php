<x-layouts.app>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-transform: none;">SoyWarmi</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="down-content" style="border-radius: 2%;">
                                    <h4 class="stylea">{{ __('ourmission.about_us') }}</h4>
                                    <p class="description" style="margin-top: 10px;">
                                        {{ __('ourmission.description_us') }}
                                        <a href="{{ route('projects_programs') }}" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="M12 8l4 4-4 4M8 12h7" />
                                            </svg>
                                            {{ __('home.programsprojects') }}
                                        </a>
                                    </p>
                                    <h4 class="styleaaa">{{ __('ourmission.tittle_history_us') }}</h4>
                                    <p class="description" style="margin-top: 10px;">
                                        {{ __('ourmission.history_us') }}
                                    </p>
                                    <h4 class="styleaaaa">{{ __('ourmission.tittle_why_us') }}</h4>
                                    <p class="description" style="margin-top: 10px;">
                                        {{ __('ourmission.why_us') }}
                                    </p>
                                    <h4 class="stylea">{{ __('ourmission.team_tittle_us') }}</h4>
                                    <div class="row d-flex">
                                        <div class="col-lg-12">
                                            @php
                                            $arrayColores = [
                                            'F2AE5D',
                                            '8B3A3D',
                                            '00858E'
                                            ];
                                            @endphp
                                            <div class="row grid">
                                                @forelse ($teams as $team)
                                                @foreach ($team->person as $person)
                                                <div class="col-lg-4 templatemo-item-col all soon mr-5"
                                                    >
                                                    <div class="meeting-item">
                                                        <div class="thumb">
                                                            <a href="#"><img class="mx-auto d-block w-50"
                                                                    src="{{ env('API_URL_API') . '/' . $person->photo }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="down-content" style="padding: 10px;">

                                                            <a href="meeting-details.html">
                                                                <h4>{{ $person->name . ' ' . $person->lastname }}</h4>
                                                            </a>
                                                            <p style="margin-left: 0;">{{ $person->description }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @empty
                                                <p>No hay equipos</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-lg-4">
                                            <div class="hours">
                                                <h5>Hours</h5>
                                                <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00
                                                    AM -
                                                    15:00 PM</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="location">
                                                <h5>Location</h5>
                                                <p>Recreio dos Bandeirantes,
                                                    <br>Rio de Janeiro - RJ, 22795-008, Brazil
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="book now">
                                                <h5>Book Now</h5>
                                                <p>010-020-0340<br>090-080-0760</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="share">
                                                <h5>Share:</h5>
                                                <ul>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a>,</li>
                                                    <li><a href="#">Linkedin</a>,</li>
                                                    <li><a href="#">Behance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <x-layouts.back_home />
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

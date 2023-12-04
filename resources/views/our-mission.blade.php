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
                <div class="col-lg-8">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 5%;">
                            <h4 class="stylea animatedWord">{{ __('ourmission.about_us') }}</h4>
                            <p class="description" style="margin-top: 10px; margin-bottom: 0; padding-bottom: 0;">
                                {{ __('ourmission.description_us') }}</p>
                            <button class="btn btn-danger animated flash" style="margin-top: 4px; border-radius: 12px;">
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
                        <div class="down-content" style="border-radius: 2%;">
                            <img src="{{ asset('assets/images/logohorizontal.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 5%;">
                            <h4 class="stylea animatedWord">{{ __('ourmission.tittle_history_us') }}</h4>
                            <p class="description" style="margin-top: 10px; margin-bottom: 0; padding-bottom: 0;">
                                {{ __('ourmission.history_us') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 2%;">
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
                <div class="col-lg-8">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 5%;">
                            <h4 class="stylea animatedWord">{{ __('ourmission.tittle_why_us') }}</h4>
                            <p class="description" style="margin-top: 10px; margin-bottom: 0; padding-bottom: 0;">
                                {{ __('ourmission.why_us') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="meeting-single-item">
                        <div class="down-content" style="border-radius: 2%;">
                        </div>
                    </div>
                </div>
            </div>
    </section>
</x-layouts.app>
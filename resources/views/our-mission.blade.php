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
                                    <h4>{{ __('ourmission.about_us') }}</h4>
                                    <p class="description" style="margin-top: 10px;">
                                        {{ __('ourmission.description_us') }}
                                    </p>
                                    <h4>{{ __('ourmission.tittle_history_us') }}</h4>
                                    <p class="description" style="margin-top: 10px;">
                                        {{ __('ourmission.history_us') }}
                                    </p>
                                    <h4>{{ __('ourmission.tittle_why_us') }}</h4>
                                    <p class="description" style="margin-top: 10px;">
                                        {{ __('ourmission.why_us') }}
                                    </p>
                                    <h4>{{ __('ourmission.team_tittle_us') }}</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row grid">
                                                <div class="col-lg-4 templatemo-item-col all soon">
                                                    <div class="meeting-item">
                                                        <div class="thumb">
                                                            <a href="meeting-details.html"><img
                                                                    src="assets/images/meeting-01.jpg" alt=""></a>
                                                        </div>
                                                        <div class="down-content" style="padding: 10px;">
                                                            <a href="meeting-details.html">
                                                                <h4>New Lecturers Meeting</h4>
                                                            </a>
                                                            <p style="margin-left: 0;">Morbi in libero blandit
                                                                lectus<br>cursus ullamcorper.</p>
                                                        </div>
                                                    </div>
                                                </div>
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
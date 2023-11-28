<x-layouts.app>
    <!-- ***** Header Area End ***** -->

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Testimonio</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" style="padding-top: 10px;" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">

                                    <div style="height: auto; padding: 0;" class="date">
                                        <span style="font-size: 14px">{{
                                            \Carbon\Carbon::parse($testimony->created_at)->diffForHumans()
                                            }}</span>
                                    </div>
                                </div>
                                <div class="down-content">
                                    <a href="meeting-details.html">
                                        <h4>{{ $testimony->title }}</h4>
                                    </a>
                                    <p class="description">
                                        {{ $testimony->description }}
                                    </p>
                                    <div class="row">
                                        {{--<div class="col-lg-4">
                                            <div class="hours">
                                                <h5>Hours</h5>
                                                <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM -
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
                                        </div>--}}
                                        <div class="col-lg-12">
                                            <div class="share">
                                                <h5>Share:</h5>
                                                <ul>
                                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{
                                                            url()->current() }}" class="share-btn facebook"
                                                            style="color: white;">Facebook</a>,</li>
                                                    {{-- <li><a href="#" class="share-btn twitter"
                                                            style="color: white;">Twitter</a>,</li> --}}
                                                    {{-- <li><a href="#">Linkedin</a>,</li>
                                                    <li><a href="#">Behance</a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
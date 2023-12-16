<x-layouts.app>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Testimonios</h6>
                    <h2>Dale Click!!</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="meetings-page mt-0 pt-4" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        {{--<div class="col-lg-12">
                            <div class="filters">
                                <ul>
                                    <li data-filter="*" class="active">All Meetings</li>
                                    <li data-filter=".soon">Soon</li>
                                    <li data-filter=".imp">Important</li>
                                    <li data-filter=".att">Attractive</li>
                                </ul>
                            </div>
                        </div>--}}
                        <div class="col-lg-12">
                            <div class="row grid">
                                @forelse($testimonies as $testimony)
                                @php
                                $arrayColores = [
                                'F2AE5D',
                                '8B3A3D',
                                '00858E'
                                ];
                                @endphp

                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <a href="{{ route('testimony.show', $testimony->slug) }}" target="_blank">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <div class="price">
                                                    <span>{{
                                                        \Carbon\Carbon::parse($testimony->created_at)->diffForHumans()
                                                        }}</span>
                                                </div>
                                            </div>
                                            <div class="down-content"
                                                style="border-width: 5px; border-style: solid; border-color: #{{ $arrayColores[rand(0, 2)] }};">
                                                <h4 class="pt-4">{{ $testimony->title }}</h4>
                                                <p>{{ Str::limit($testimony->description, 57, '...') }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @empty
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h4>No hay recursos disponibles</h4>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                        {{--<div class="col-lg-12">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

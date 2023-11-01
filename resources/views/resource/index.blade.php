<x-layouts.app>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Puedes encontrar recursos importantes aqui</h6>
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
                                    <li data-filter="*"  class="active">All Meetings</li>
                                    <li data-filter=".soon">Soon</li>
                                    <li data-filter=".imp">Important</li>
                                    <li data-filter=".att">Attractive</li>
                                </ul>
                            </div>
                        </div>--}}
                        <div class="col-lg-12">
                            <div class="row grid">
                                @forelse($resources as $resource)

                                    <div class="col-lg-4 templatemo-item-col all soon">
                                        <a href="{{ asset($resource->url) }}" target="_blank">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <div class="price">
                                                    <span>{{ '.' .$resource->code_type }}</span>
                                                </div>
                                            </div>
                                            <div class="down-content">
                                                <h4>{{ $resource->name }}</h4>
                                                <p>{{ $resource->description }}</p>
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

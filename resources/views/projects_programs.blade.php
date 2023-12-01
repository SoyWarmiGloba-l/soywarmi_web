<x-layouts.app>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>{{ __('home.programsprojects') }}</h6>
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
                        {{-- aqui va un modal --}}
                        <!-- Modal de Ambassadors-->
                        <div class="modal fade" id="exampleModalAmbassadors" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">WARMI AMBASSADORS&nbsp;😊
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('home.warmiam') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Modal de pasantia --}}
                        <div class="modal fade" id="exampleModalPasantia" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalPasantia">WARMI INTERNSHIPS&nbsp;🤗
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('home.warmipas') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- descripcion --}}

                        <div class="col-lg-12">
                            <div class="row grid">
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalAmbassadors">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <div class="price" style="background-color: #00858E">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="down-content"
                                                style="border-width: 5px; border-style: solid; border-color: #F2AE5D;">
                                                <h4 class="pt-4">WARMI AMBASSADORS</h4>
                                                {{-- <p>{{ __('home.warmiam') }}</p> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalPasantia">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <div class="price" style="background-color: #F2AE5D">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="down-content"
                                                style="border-width: 5px; border-style: solid; border-color: #00858E;">
                                                <h4 class="pt-4">WARMI INTERNSHIPS</h4>
                                                {{-- <p>{{ __('home.warmipas') }}</p> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
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
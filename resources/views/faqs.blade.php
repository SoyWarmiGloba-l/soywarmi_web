<x-layouts.app>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>{{ __('home.faqs') }}</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="meetings-page mt-0 pt-4 pb-4" id="meetings">
        <style>
            .accordion-button:not(.collapsed) {
                background: #f2ae5d !important;
                color: white;
            }
        </style>
        <div class="container">
            <div class="row">
                @forelse ($faqs as $faq)
                <div class="col">
                    <div class="accordion" style="height:auto;" id="accordionPanelsStayOpenExample">
                        @foreach ($faq as $faqAcordion)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne{{ $faqAcordion->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne{{ $faqAcordion->id }}"
                                    aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseOne{{ $faqAcordion->id }}">
                                    {{ $faqAcordion->question }}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne{{ $faqAcordion->id }}"
                                class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingOne{{ $faqAcordion->id }}">
                                <div class="accordion-body">
                                    {{ $faqAcordion->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @empty
                <h4>No hay preguntas</h4>
                @endforelse
            </div>
        </div>
    </section>
</x-layouts.app>
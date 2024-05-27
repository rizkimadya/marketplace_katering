@extends('layout_kantor.app', ['title' => 'Marketplace Catering'])

@section('content')
    <section class="home-slider js-fullheight owl-carousel bg-white">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight"
                        style="background-image:url(kantor/images/bg_3.jpg);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text mt-md-5">
                            <h1 class="mb-4">Eat Healthy <br> and Natural Foods</h1>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country.</p>
                            <div class="thumb mt-4 mb-3 d-flex">
                                <a href="#" class="thumb-menu pr-md-4 text-center">
                                    <div class="img" style="background-image: url(kantor/images/menu-1.jpg);"></div>
                                    <h4>Australian Organic Beef</h4>
                                </a>
                                <a href="#" class="thumb-menu pr-md-4 text-center">
                                    <div class="img" style="background-image: url(kantor/images/menu-2.jpg);"></div>
                                    <h4>Australian Organic Beef</h4>
                                </a>
                                <a href="#" class="thumb-menu pr-md-4 text-center">
                                    <div class="img" style="background-image: url(kantor/images/menu-3.jpg);"></div>
                                    <h4>Australian Organic Beef</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
                <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight"
                        style="background-image:url(kantor/images/bg_2.jpg);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text mt-md-5">
                            <h1 class="mb-4">We Love <br> Delicious Foods</h1>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country.</p>
                            <div class="thumb mt-4 mb-3 d-flex">
                                <a href="#" class="thumb-menu pr-md-4 text-center">
                                    <div class="img" style="background-image: url(kantor/images/menu-1.jpg);"></div>
                                    <h4>Australian Organic Beef</h4>
                                </a>
                                <a href="#" class="thumb-menu pr-md-4 text-center">
                                    <div class="img" style="background-image: url(kantor/images/menu-2.jpg);"></div>
                                    <h4>Australian Organic Beef</h4>
                                </a>
                                <a href="#" class="thumb-menu pr-md-4 text-center">
                                    <div class="img" style="background-image: url(kantor/images/menu-3.jpg);"></div>
                                    <h4>Australian Organic Beef</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="menu" class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Specialties</span>
                    <h2 class="mb-4">Our Menu</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($makanan as $item)
                    <div class="col-md-6 col-lg-4 mb-md-4 mb-3">
                        <img src="{{ asset('storage/fileMakanan/' . $item->gambar) }}" alt="img" width="100%"
                            style="height: 300px; object-fit:cover;">
                        <div class="card shadow p-3 border-0">
                            <h6>{{ $item->nama_menu }}</h6>
                            <h4 class="text-primary">Rp {{ number_format($item->harga, 0, ',', '.') }}</h4>
                            <p class="mb-0">
                                {{ rtrim(substr(strip_tags($item->deskripsi), 0, 150)) }}{{ strlen(strip_tags($item->deskripsi)) > 150 ? '...' : '' }}
                            </p>
                            <!-- Button trigger modal -->
                            <a href="{{url('pesan/'.$item->id)}}" class="btn btn-primary mt-3">
                                Pesan
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

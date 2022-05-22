<div class="prising_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="section_title mb-55">
                    <h3>ค่าบริการ</h3>
                    <p>จองคิวล่วงหน้า line: @kew หรือกดปุ่ม <strong> “จองคิวตัดผม”</strong> ได้เลย</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="prising_slider_active owl-carousel">
                    <div class="prising_active d-flex justify-content-between">
                        <div class="single_prising">
                            <div class="prise_title">
                                <h4>Hair Styling</h4>
                            </div>
                            @foreach ($data_service as $data)

                            <div class="single_service">
                                <div class="service_inner">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/prising/1.png') }}" alt="">


                                    </div>
                                </div>
                                <div class="hair_style_info">
                                    <div class="prise d-flex justify-content-between">
                                        <span>{{$data->service}}</span>
                                        <span>{{$data->price}}</span>
                                    </div>
                                    {{-- <p>เลือกทรงผมได้เลย </p> --}}
                                </div>
                            </div>

                            @endforeach
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

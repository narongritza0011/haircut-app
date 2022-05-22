<div class="team_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section_title text-center mb-55">
                    <h3>รูปภาพผลงานทางร้าน</h3>
                    <p>💙💙</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">


            @foreach ($project as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single_team_member">
                        <div class="team_thumb">

                            <img src="{{ asset($item->image) }}" alt="">

                        </div>
                        <div class="member_info text-center">
                            {{-- <h3>คิว</h3>
                        <p>ช่างตัดผม</p>
                    </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

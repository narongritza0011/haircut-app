<form id="test-form" class="white-popup-block mfp-hide" action="{{ route('appointment') }}" method="post">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>เเบบฟอร์มจองคิวตัดผม</h3>
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @csrf
            <div class="row">
                <div class="col-xl-6 col-md-6 form-group">
                    <input id="datepicker" placeholder="วันที่" name="date" required>
                </div>
                <div class="col-xl-6 col-md-6 form-group">
                    {{-- <input id="timepicker" placeholder="time"> --}}
                    <select class="form-select wide" id="default-select" name="time" required>

                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->time }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-xl-6 col-md-6 form-group">
                    <select class="form-select wide" id="default-select" class="" name="service" required>

                        @foreach ($data_service as $item)
                            <option value="{{ $item->id }}">{{ $item->service }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-xl-6 col-md-6 form-group">
                    <input type="text" placeholder="ชื่อ" name="name" required>
                </div>
                <div class="col-xl-6 col-md-6 form-group">
                    <input type="number" placeholder="เบอร์ติดต่อ" name="tel" required>
                </div>
                <div class="col-xl-12 form-group">
                    <button type="submit" class="boxed-btn3">จองคิว</button>
                </div>
            </div>

        </div>
    </div>
</form>

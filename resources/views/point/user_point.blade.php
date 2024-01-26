@extends('/layouts/main')

@push('css-dependencies')
<link rel="stylesheet" type="text/css" href="/css/point.css" />
@endpush

@push('scripts-dependencies')
<script src="/js/point.js"></script>
@endpush

@section('content')

<div class="container-fluid px-3">
  <!-- flasher -->
  @if(session()->has('message'))
  {!! session("message") !!}
  @endif

  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid mt-5">
          <div class="text-center">
            <div class="point mx-auto"><sup style="font-size: 4rem; left: 1rem;">
                {{ auth()->user()->point }}
              </sup>/<sub style="font-size: 4rem; left: -1rem;">50</sub> </div>
            <p class="lead text-gray-800 mt-3">Jumlah Point</p>
            <p class="text-gray-500 mb-2 mt-3">Dapatkan poin setiap kali Anda membeli produk kami
            </p>
            <form action="/point/convert_point" method="post" id="form_convert_point">
              @csrf
              <button class="btn btn-success text-white mt-5"
                data-isCanConvert="{{auth()->user()->point >= 50 ? 'true':'false'}}" id="button_convert_point">Convert
                point</button>
            </form>
            <div class="text-muted mt-5" style="font-size: 2rem;">Coupon dimiliki :
              {{auth()->user()->coupon}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
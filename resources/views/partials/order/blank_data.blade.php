<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="text-center mt-4">
        <h1 class="display-1">?</h1>
        <p class="lead">Order Kosong</p>
        @if (!isset($is_filtered))
          <p>Tidak ada order saat ini!</p>
        @else
          <p>Tidak ada order {{ $is_filtered }}</p>
        @endif

        @if (auth()->user()->id == 2)
        <a href="/product" class="link-info">
          <i class="fas fa-arrow-left me-1"></i>
          Beli produk sekarang
        </a>
        @else
        <a href="/order/order_history" class="link-info">
          <i class="fas fa-arrow-left me-1"></i>
          Cek histori order?
        </a>
        @endif
      </div>
    </div>
  </div>
</div>
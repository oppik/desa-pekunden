@extends('layouts.frontend.master-exclude-header')

@section('title')
    Detail Paket : {{ $package->name }}
@endsection

@section('content')
    <div class="clear-fix">
        <form action="{{ route('order', $package->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex justify-content-center pb-5">
                @if (session('success'))
                    <div class="col-10">
                        <div class="alert alert-success">{{ session('success') }}</div>
                    </div>
                @endif
                <div class="col-sm-4 col-md-4 ml-1">
                    <div class="py-4 pl-6 d-flex flex-row">
                    </div>
                    <div class="bg-grey p-2 d-flex flex-column" style="border-radius:14px">
                        <div class="text-center"> <img class="img-fluid" src="{{ asset($package->image) }}" />
                        </div>
                    </div>
                    <div class="bg-grey p-3 d-flex flex-column mt-4" style="border-radius:14px">
                        <div class="pt-2">
                            <h5>Paket Wisata {{ $package->name }}</h5>
                        </div>
                        <div class="d-flex">
                            <div class="col-6">Harga</div>
                            <div class="ml-auto">@rupiah($package->price) <b>/orang</b></div>
                        </div>
                        <hr>
                        {!! $package->description !!}
                    </div>
                </div>
                <div class="col-sm-5 col-md-6 mobile">
                    <div class="py-4 d-flex justify-content-end">
                    </div>
                    <div class="bg-grey p-3 d-flex flex-column" style="border-radius:14px">
                        <div class="pt-2">
                            <h5>Pesan</h5>
                        </div>
                        <form class="needs-validation">
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="firstName" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="John Doe" value="{{ old('name') }}"
                                        required="">
                                    @error('name')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email <span
                                            class="text-muted">(Optional)</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="you@example.com"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="phone" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" placeholder="081234567890" value="{{ old('phone') }}"
                                        required>
                                    @error('phone')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                        id="address" name="address"
                                        placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota/Kabupaten, Provinsi"
                                        value="{{ old('address') }}" required="">
                                    @error('address')
                                        <p class="text text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <hr class="my-4">

                            <h4 class="mb-3">Jumlah</h4>

                            @if ($package->minimum_person != null && $package->minimum_person != 1)
                                <div class="my-3">
                                    <div class="alert alert-secondary">Jika berkelompok minimal
                                        {{ $package->minimum_person }}
                                        orang.</div>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                    id="quantity" name="quantity" placeholder="1" value="{{ old('quantity', 1) }}"
                                    required>
                                @error('quantity')
                                    <p class="text text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <h6 class="mb-3">Total:</h6>

                            <h5 class="mb-3" id="total-preview">0</h5>
                            <input type="hidden" name="total" id="total" value="">

                            <hr class="my-4">

                            <h4 class="mb-3">Pembayaran</h4>

                            <div class="my-3">
                                <div class="alert alert-secondary">
                                    <h6>Bank Mandiri</h6>
                                    <h6 class="mb-0"><b>Raopik Ahmad</b> - <b>161-00-0615707-2</b></h6>
                                </div>
                            </div>

                            <div class="gy-3">
                                <label for="formFile" class="form-label">Foto Bukti Pembayaran</label>
                                <input class="form-control @error('payment_proof') is-invalid @enderror" type="file"
                                    id="formFile" name="payment_proof" accept=".jpg,.png" required>
                                @error('payment_proof')
                                    <p class="text text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Pesan Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        function convertToRupiah(angka) {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for (var i = 0; i < angkarev.length; i++)
                if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
            return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
        }

        $(document).ready(function() {
            var price = {{ $package->price }};
            var minimum_person = {{ $package->minimum_person ?? 0 }};
            var quantity = $('#quantity').val();
            var total = price * quantity;
            $('#total').val(total);
            $('#total-preview').html(convertToRupiah(total));

            $('#quantity').on('change keydown keypress keyup input', function() {
                var quantity = $(this).val();
                var total = price * quantity;
                $('#total').val(total);

                $('#total-preview').html(convertToRupiah(total));
            });
        });
    </script>
@endsection

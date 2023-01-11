@extends('layouts.backend.master')
@section('title')
    Orderan Masuk
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                            <i class="bi bi-check-square-fill"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted font-semibold">Orderan Success</h6>
                            <h6 class="font-extrabold mb-0">{{ $orders->where('status', 1)->count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="d-flex justify-content-start">
                        <div class="stats-icon red mb-2">
                            <i class="bi bi-info-square-fill"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted font-semibold">Orderan Process</h6>
                            <h6 class="font-extrabold mb-0">{{ $orders->where('status', 0)->count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3">
                                <label for="invoice" class="form-label">Cari Invoice</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">#</span>
                                    <input type="text" class="form-control" autocomplete="off" name="invoice"
                                        value="{{ Request::get('invoice') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="cari" class="form-label">Cari Nama Pemesan</label>
                                <input type="text" name="cari" class="form-control" autocomplete="off" id="cari"
                                    value="{{ Request::get('cari') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="basicSelect" class="form-label">Status Order</label>
                                <select class="form-control" autocomplete="off" id="basicSelect" name="statusp">
                                    <option value="">-- Pilih --</option>
                                    <option {{ Request::get('statusp') == '0' ? 'selected' : '' }} value="0">
                                        Process</option>
                                    <option {{ Request::get('statusp') == '1' ? 'selected' : '' }} value="1">Success
                                    </option>
                                    <option {{ Request::get('statusp') == '2' ? 'selected' : '' }} value="2">Cancelled
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                    <a href="{{ route('orderan.index') }}" class="btn btn-danger">
                                        <i class="bi bi-arrow-clockwise"></i> Reload
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th class="text-center">NO</th>
                                    <th class="text-center">INVOICE</th>
                                    <th>USER</th>
                                    <th>Paket Wisata</th>
                                    <th>HARGA</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">#INV-{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td class="text-bold-500">{{ $order->package }}</td>
                                        <td>@rupiah($order->price)</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td class="text-bold-500">@rupiah($order->total)</td>
                                        <td>
                                            @if ($order->status == 0)
                                                <span class="badge bg-warning">PROCESS</span>
                                            @elseif ($order->status == 1)
                                                <span class="badge bg-success">SUCCESS</span>
                                            @else
                                                <span class="badge bg-secondary">CANCELLED</span>
                                            @endif
                                        </td>
                                        <td class="text-bold-500">
                                            <button type="button" id="btnDetail" data-id="{{ $order->id }}"
                                                data-image="{{ asset($order->payment_proof) }}"
                                                data-package="{{ $order->package }}" data-price="@rupiah($order->price)"
                                                data-name="{{ $order->name }}" data-email="{{ $order->email }}"
                                                data-phone="{{ $order->phone }}" data-address="{{ $order->address }}"
                                                data-quantity="{{ $order->quantity }}" data-total="@rupiah($order->total)"
                                                class="btn btn-primary"><span class="bi bi-eye"></span>
                                                Detail
                                            </button>
                                            @if ($order->status == 0)
                                                <button type="button" id="btnProses" data-id="{{ $order->id }}"
                                                    data-image="{{ asset($order->payment_proof) }}"
                                                    data-package="{{ $order->package }}" data-price="@rupiah($order->price)"
                                                    data-name="{{ $order->name }}" data-email="{{ $order->email }}"
                                                    data-phone="{{ $order->phone }}"
                                                    data-address="{{ $order->address }}"
                                                    data-quantity="{{ $order->quantity }}" data-total="@rupiah($order->total)"
                                                    class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-edit">
                                                        <path
                                                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                        </path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                        </path>
                                                    </svg>
                                                    Proses
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Belum Ada Pesanan</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="prosesModal" tabindex="-1" aria-labelledby="prosesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="prosesModalLabel">Konfirmasi Pesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <div class="bg-grey d-flex flex-column" style="border-radius:14px">
                                <div class="pt-2">
                                    <h5>Data Diri</h5>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Nama</div>
                                    <div class="ml-auto" id="name"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Email</div>
                                    <div class="ml-auto" id="email"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">No. Telepon</div>
                                    <div class="ml-auto" id="phone"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Alamat</div>
                                    <div class="ml-auto" id="address"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Paket Wisata</div>
                                    <div class="ml-auto" id="package"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Harga</div>
                                    <div class="ml-auto" id="price"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Jumlah</div>
                                    <div class="ml-auto" id="quantity"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Total</div>
                                    <div class="ml-auto" id="total"></div>
                                </div>
                                <div class="pt-2">
                                    <h5>Bukti Pembayaran</h5>
                                </div>
                                <div class="d-flex">
                                    <div class="col-12">
                                        <img src="" alt="" style="width: 100%" id="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('orderan.confirm') }}" method="post">
                        @csrf
                        <input class="id" type="hidden" name="id">
                        <input type="hidden" name="status" value="2">
                        <button type="submit" class="btn btn-danger">Tolak</button>
                    </form>
                    <form action="{{ route('orderan.confirm') }}" method="post">
                        @csrf
                        <input class="id" type="hidden" name="id">
                        <input type="hidden" name="status" value="1">
                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="detailModalLabel">Detail Pesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <div class="bg-grey d-flex flex-column" style="border-radius:14px">
                                <div class="pt-2">
                                    <h5>Data Diri</h5>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Nama</div>
                                    <div class="ml-auto" id="detail-name"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Email</div>
                                    <div class="ml-auto" id="detail-email"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">No. Telepon</div>
                                    <div class="ml-auto" id="detail-phone"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Alamat</div>
                                    <div class="ml-auto" id="detail-address"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Paket Wisata</div>
                                    <div class="ml-auto" id="detail-package"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Harga</div>
                                    <div class="ml-auto" id="detail-price"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Jumlah</div>
                                    <div class="ml-auto" id="detail-quantity"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-6">Total</div>
                                    <div class="ml-auto" id="detail-total"></div>
                                </div>
                                <div class="pt-2">
                                    <h5>Bukti Pembayaran</h5>
                                </div>
                                <div class="d-flex">
                                    <div class="col-12">
                                        <img src="" alt="" style="width: 100%" id="detail-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#btnProses').on('click', function() {
                var id = $(this).data('id');
                var image = $(this).data('image');
                var package = $(this).data('package');
                var price = $(this).data('price');
                var name = $(this).data('name');
                var email = $(this).data('email');
                var phone = $(this).data('phone');
                var address = $(this).data('address');
                var quantity = $(this).data('quantity');
                var total = $(this).data('total');
                $('#prosesModal').modal('show');
                $('#name').text(name);
                $('#email').text(email);
                $('#phone').text(phone);
                $('#address').text(address);
                $('#package').text(package);
                $('#price').text(price);
                $('#image').attr('src', image);
                $('.id').val(id);
                $('#quantity').text(quantity);
                $('#total').text(total);
            });

            $('#btnDetail').on('click', function() {
                var image = $(this).data('image');
                var package = $(this).data('package');
                var price = $(this).data('price');
                var name = $(this).data('name');
                var email = $(this).data('email');
                var phone = $(this).data('phone');
                var address = $(this).data('address');
                var quantity = $(this).data('quantity');
                var total = $(this).data('total');
                $('#detailModal').modal('show');
                $('#detail-name').text(name);
                $('#detail-email').text(email);
                $('#detail-phone').text(phone);
                $('#detail-address').text(address);
                $('#detail-package').text(package);
                $('#detail-price').text(price);
                $('#detail-image').attr('src', image);
                $('#detail-quantity').text(quantity);
                $('#detail-total').text(total);
            });
        });
    </script>
@endsection

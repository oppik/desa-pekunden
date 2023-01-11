@extends('layouts.backend.master')
@section('title')
    Paket Wisata
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <div class="row g-3 align-items-center mt-4">
                        <div class="col-12">
                            <a href="{{ route('packages.create') }}" type="submit" class="btn btn-primary">
                                <i class="bi bi-plus"></i> Tambah Paket
                            </a>
                        </div>
                    </div>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA PAKET</th>
                                    <th>HARGA</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($packages as $package)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $package->name }}</td>
                                        <td>@rupiah($package->price)</td>
                                        <td>
                                            <a href="{{ route('package', $package->id) }}" class="btn btn-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-warning">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('packages.destroy', $package->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak Ada Paket Wisata. <a
                                                href="{{ route('packages.create') }}">Tambah Paket</a></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

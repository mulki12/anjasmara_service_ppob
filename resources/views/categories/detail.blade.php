@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Kategori</h1>
    {{-- <a href="{{ route('subcategory.create', ['category' => $data['uuid']]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Sub Kategori
    </a> --}}
</div>

@include('layouts.components.alert')

<div class="card">
    <div class="card-body">

        <div class="col-12 table-responsive mb-4">
            <table class="table">
                <tr>
                    <td>Kode Kategori</td>
                    <td>{{ $data['code_category'] }}</td>
                </tr>
                <tr>
                    <td>Kode Kategori</td>
                    <td>{{ $data['name_category'] }}</td>
                </tr>
            </table>
        </div>

        <div class="col-12 table-responsive mb-4">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h6 mb-0 text-gray-800">Daftar Sub Kategori</h1>
                <a href='{{ url("sub-categories/$data[uuid]") }}' class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Sub Kategori
                </a>
            </div>

            <table class="table table-hover table-stripped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Kode Sub Kategori</td>
                        <td>Nama Sub Kategori</td>
                        <td>Dibuat Pada</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data['subcategories'] as $key => $item)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$item->code_sub_category}}</td>
                            <td>{{$item->name_sub_category}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <a href="">
                                    <span class="fas fa-edit"></span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

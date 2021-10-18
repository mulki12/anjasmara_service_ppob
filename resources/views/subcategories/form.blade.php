@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Sub Kategori</h1>
    {{-- <a href="{{ route('categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori
    </a> --}}
</div>

@include('layouts.components.alert')

<div class="card">
    <div class="card-body">
        {!! Form::open(['method' => 'post', 'url' => route('subcategory.store')]) !!}
            <div class="form-group">
                <label for="">Nama Kategori</label>
                {!! Form::text('category_name', $category->name_category, ['class'=>'form-control disabled','read-only' => true]) !!}
                {!! Form::hidden('category_uuid', $category->uuid, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="">Kode Sub Kategori</label>
                {!! Form::text('code_sub_category', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="">Nama Sub Kategori</label>
                {!! Form::text('name_sub_category', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection

@push('js')

@endpush

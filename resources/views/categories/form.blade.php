@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
    <a href="{{ route('categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori
    </a>
</div>

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'categories.store', 'method' => 'post']) !!}
            <div>
                <div class="form-group">
                    <label for="code_category">Kode Kategori <sup>*</sup></label>
                    {!! Form::text('code_category', null, ['class' => 'form-control', 'placeholder' => 'Masukan ID Kategori', 'required' => true, 'id' => 'code_category']) !!}
                </div>
                <div class="form-group">
                    <label for="name_category">Nama Kategori <sup>*</sup></label>
                    {!! Form::text('name_category', null, ['class' => 'form-control', 'placeholder' => 'Masukan Nama Kategori', 'required' => true, 'id' => 'name_category']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('save_category', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection

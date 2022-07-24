@extends('layouts.admin.index')
@section('content')
<div class="row mb-3">
    <div class="col-md-6">
        <h4>Edit Treatment</h4>
    </div>
</div>

<div class="row">
    <div class="col-md-6">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->has('error'))
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
        @endif

        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <form action="{{ route('admin.treatment.update',$detail->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar </label><small class="text-warning ms-2">Pilih gambar untuk mengubah</small>
                        <input class="form-control" name="image" type="file" id="formFile" accept="image/png,image/jpg,image/jpeg">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input name="name" type="text" class="form-control" placeholder="" value="{{ $detail->name }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea rows="2" name="description" class="form-control" placeholder="">{{ $detail->description }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga</label>
                        <input name="price" type="number" class="form-control" placeholder="" value="{{ $detail->price }}">
                        @error('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
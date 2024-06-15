@extends('admin.layouts.mater')
@section('title')
    Cập nhât Danh mục sản phẩm: {{ $model->name }}
@endsection
@section('content')
<form action="{{ route('admin.catalogues.update', $model->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Cover</label>
      <input type="file" class="form-control" id="cover" name="cover">
      <img width="80px" src="{{ Storage::url($model->cover) }}" alt="">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" @if ($model->is_active)
          checked
      @endif name="is_active" value="1">
      <label class="form-check-label" for="exampleCheck1">Is_active</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
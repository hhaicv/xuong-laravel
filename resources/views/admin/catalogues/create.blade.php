@extends('admin.layouts.mater')
@section('title')
    Thêm mới danh mục sản phẩm
@endsection
@section('content')
<form action="{{ route('admin.catalogues.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Cover</label>
      <input type="file" class="form-control" id="cover" name="cover">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" checked name="is_active" value="1">
      <label class="form-check-label" for="exampleCheck1">Is_active</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
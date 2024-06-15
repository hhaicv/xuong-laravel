@extends('admin.layouts.mater')
@section('title')
    Chi tiết danh mục sản phẩm: {{ $model->name }}
@endsection
@section('content')
<table>
  <tr>
    <th>Trường</th>
    <th>Giá trị</th>
  </tr>
  @foreach ($model->toArray() as $key => $value)
      <tr>
        <td>{{ $key }}</td>
        <td>
          @php
                   if($key =='cover'){
                $url = Storage::url($value);
                echo "<img src=\"$url\" alt=\"\" width=\"80px\">";
              }elseif (\Illuminate\Support\Str::contains($key, 'is_')) {
                echo $value ?  '<span class="badge bg-primary">YES</span>' 
        : '<span class="badge bg-danger">NO</span>';
              }else {
                echo $value;
              }
          @endphp
          @php
         
          @endphp
        </td>
      </tr>
  @endforeach
</table>
@endsection
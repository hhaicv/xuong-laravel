@extends('admin.layouts.mater')
@section('title')
Thêm mới sản phẩm
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Thêm mới sản phẩm</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Sản Phẩm</a></li>
                    <li class="breadcrumb-item active">Thêm mới</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Thông tin</h4>

            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div>
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mt-3">
                                <label for="sku" class="form-label">SKU</label>
                                <input type="text" class="form-control" id="sku" name="sku"
                                    value="{{ strtoupper(\Str::random(8)) }}">
                            </div>
                            <div class="mt-3">
                                <label for="price_regular" class="form-label">Price_regular</label>
                                <input type="number" value="0" class="form-control" id="price_regular"
                                    name="price_regular">
                            </div>
                            <div class="mt-3">
                                <label for="price_sale" class="form-label">Price_sale</label>
                                <input type="number" value="0" class="form-control" id="price_sale" name="price_sale">
                            </div>
                            <div class="mt-3">
                                <label for="Catelogue" class="form-label">Catelogues</label>
                                <select class="form-select" name="catelogue_id" id="catelogue_id">
                                    @foreach ($catelogues as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="img_thumbnail" class="form-label">Img_Thumbnail</label>
                                <input type="file" class="form-control" id="img_thumbnail" name="img_thumbnail">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check form-switch form-switch-secondary">
                                        <input class="form-check-input" type="checkbox" role="switch" id="is_active"
                                            name="is_active" checked>
                                        <label class="form-check-label" for="is_active">Is_active</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-switch form-switch-danger">
                                        <input class="form-check-input" type="checkbox" role="switch" id="is_hot_deal"
                                            name="is_hot_deal" checked>
                                        <label class="form-check-label" for="is_hot_deal">Is_hot_deal</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-switch form-switch-success">
                                        <input class="form-check-input" type="checkbox" role="switch" id="is_good_deal"
                                            name="is_good_deal" checked>
                                        <label class="form-check-label" for="is_good_deal">Is_good_deal</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-switch form-switch-warning">
                                        <input class="form-check-input" type="checkbox" role="switch" id="is_new"
                                            name="is_new" checked>
                                        <label class="form-check-label" for="is_new">Is_new</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-switch form-switch-info">
                                        <input class="form-check-input" type="checkbox" role="switch" id="is_show_home"
                                            name="is_show_home" checked>
                                        <label class="form-check-label" for="is_show_home">Is_show_home</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-3">
                                    <div>
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div>
                                        <label for="material" class="form-label">Material</label>
                                        <textarea class="form-control" id="material" name="material" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div>
                                        <label for="user_manual" class="form-label">User_manual</label>
                                        <textarea class="form-control" id="user_manual" name="user_manual" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="mt-3">
                                   <label for="content" class="form-label">Contents</label>
                                   <textarea name="content" id="content" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!--end row-->
                </div>


            </div>
        </div>
      
    </div>
    <!--end col-->
</div>
<div class="row" style="height: 300px; overflow:scroll">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Biến thể</h4>

            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                    <div class="row gy-4">
                        <table>
                            <tr>
                                <th class="text-center">Size</th>
                                <th class="text-center">Color</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Image</th>
                            </tr>
                            @foreach ($sizes as $sizeID => $sizeName)
                                @foreach ($colors as $colorID => $ColorName)
                                    <tr>
                                        <td class="text-center">{{ $sizeName }}</td>
                                        <td>
                                            <div style="width: 50px;height: 50px; background-color: {{ $ColorName }};"></div>                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="product_variants[{{ $sizeID . '-' . $colorID }}][quatity]">
                                        </td>
                                        <td>
                                            <input type="file" class="form-control" name="product_variants[{{ $sizeID . '-' . $colorID }}][image]">
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>

                    
                    <!--end row-->
                </div>


            </div>
        </div>
    </div>
</div>
@endsection

@section('script-libs')

<script src="https:////cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script>


<script>
   CKEDITOR.replace('content');
   </script>
@endsection

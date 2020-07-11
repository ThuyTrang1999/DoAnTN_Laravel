@extends('shop.layouts.master')

@section('title_shop')
Trang chủ shop
@endsection

@section('shop_main_content')
<div class="shop_list_product">
    <div class="li-section-title mt-10">
        <h2>
            <span>Danh sách sản phẩm</span>
        </h2>
    </div>
    <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                            cellspacing="0" width="100%" role="grid"
                                            aria-describedby="datatable-responsive_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 81px;" aria-sort="ascending">
                                                        Tên sản phẩm</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 80px;">Đơn vị</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 176px;">
                                                        SKU</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 176px;">
                                                        Hình ảnh</th>

                                                    <!-- <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 34px;"
                                                        aria-label="Age: activate to sort column ascending">
                                                        Mô tả
                                                    </th> -->

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 166px;"
                                                        aria-label="E-mail: activate to sort column ascending">Loại sản phẩm
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 166px;"
                                                        aria-label="E-mail: activate to sort column ascending">Id người thêm
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 166px;"
                                                        aria-label="E-mail: activate to sort column ascending">Giá
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 166px;"
                                                        aria-label="E-mail: activate to sort column ascending">
                                                        Giá KM
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-responsive" rowspan="1" colspan="1"
                                                        style="width: 166px;"
                                                        aria-label="E-mail: activate to sort column ascending">Trạng thái
                                                    </th>
                                                    <th tabindex="0" aria-controls="datatable-responsive" rowspan="1"
                                                        colspan="1" style="width: 81px;" aria-sort="ascending">
                                                        Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($listProducesCategory as $listProCate)
                                                <tr role="row" class="odd">
                                                    <td>{{$listProCate->name}}</td>
                                                    <td>{{$listProCate->unit}}</td>
                                                    <td>{{$listProCate->SKU}}</td>
                                                    <td>
                                                        <img src="upload/{{$listProCate->url}}" alt=""
                                                            style="width: 50px; height: 50px;">
                                                    </td>
                                                    <!-- <td>{{$listProCate->desc}}</td> -->
                                                    <td>{{$listProCate->category_id}}</td>
                                                    <td>{{$listProCate->author_id}}</td>
                                                    <td>{{$listProCate->price}}</td>
                                                    <td>{{$listProCate->discout_price}}</td>
                                                    <td>{{$listProCate->status}}</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-warning">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        </a>
                                                        <button class="btn btn-danger">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>

                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
</div>
@endsection
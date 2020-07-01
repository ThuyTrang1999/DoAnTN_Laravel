@extends('admin.layouts.master')

@section('title')
add sub_category
@endsection

@section('main_content')
<div class="row">
    <div class="col-md-12" style="margin: 0 auto;">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add sub category</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                @if(isset($listsubCategorys))

                @else

                <form class="form-horizontal form-label-left" action="{{route('sub_category.xu-ly-them-moi')}}"
                    method="POST">
                    @endif
                    @csrf
                    <div class="row">
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Sub name</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="text" name="sub_name" class="form-control" placeholder="Name....." @if(isset($addSubCategory)) value="{{ $addSubCategory->sub_name }}" @endif>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Alilas</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="text" name="alilas" class="form-control" placeholder="Unit....." @if(isset($addSubCategory)) value="{{ $addSubCategory->alilas }}" @endif>
                            </div>
                        </div>


                    </div>
                    <div class="row">

                    <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Catagory</label>
                            <div class="col-md-10 col-sm-10 ">
                                <select class="select2_single form-control" name="parent_id" tabindex="-1">
                                    @foreach($listcategory as $listC)
                                    <option value="{{$listC->id}}">{{$listC -> name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Status</label>
                            <div class="col-md-10 col-sm-10 ">
                                <select class="select2_single form-control" name="status" @if(isset($addSubCategory))
                                    value="{{ $addSubCategory->status }}" @endif>

                                    <option value="1">Đang hoạt động</option>
                                    <option value="0">Ngưng hoạt động</option>

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn btn_submit">Add sub_category</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin.layouts.master')

@section('title')
add post
@endsection

@section('main_content')
<div class="row">
    <div class="col-md-12" style="margin: 0 auto;">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add post</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left">
                    <div class="row">
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Title</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="text" class="form-control" placeholder="Title.....">
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6">
                            <label class="control-label col-md-2 col-sm-2 ">Images</label>
                            <div class="col-md-10 col-sm-10 ">
                                <input type="file">
                                <img src="" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Short desc</label>
                            <div class="col-md-10 col-sm-10 ">
                                <textarea name="add_dress" id="" cols="10" rows="5" class="form-control"
                                    placeholder="..........."></textarea>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Desc</label>
                            <div class="col-md-10 col-sm-10 ">
                                <textarea name="add_dress" id="" cols="10" rows="5" class="form-control"
                                    placeholder="..........."></textarea>
                            </div>
                        </div>


                    </div>
                    <div class="row">

                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">User</label>
                            <div class="col-md-10 col-sm-10 ">
                                <select name="pst_user" id="pst_user" class="form-control">
                                @foreach($dataUser as $dataU)
                                    <option value="{{$dataU->id}}">{{ $dataU->user_name  }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 col-sm-6 ">
                            <label class="control-label col-md-2 col-sm-2 ">Status</label>
                            <div class="col-md-10 col-sm-10 ">
                            <select name="pst_status" id="pst_status" class="form-control">
                                    <option value="1">Đang hoạt động</option>
                                    <option value="0">Ngưng hoạt động</option>
                                </select>
                            </div>
                        </div>


                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn btn_submit">Post</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
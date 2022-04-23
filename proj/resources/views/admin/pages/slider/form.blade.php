@extends('admin.main')
@php
use App\Helpers\Template as Template;

@endphp
@section('content')
    <div class="page-header zvn-page-header clearfix">
        <div class="zvn-page-header-title">
            <h3>Quản lý Slider</h3>
        </div>

        <div class="zvn-add-new pull-right">
            {!! sprintf('<a href="%s" class="btn btn-info"><i class="fa fa-arrow-left"></i> Quay về</a>', route($controllerName)) !!}
        </div>
    </div>

    <!--box-lists-->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @include('admin.templates.x_title', ['title' => 'Form'])
                <div class="x_content">
                    <form method="POST" action="http://lar_prepare.xyz/admin123/slider/save" accept-charset="UTF-8"
                        enctype="multipart/form-data" class="form-horizontal form-label-left" id="main-form">
                        <input name="_token" type="hidden" value="dutQIgn8U38T7e7XMeOBAb7gy1so1xFoXAu3xK0y">
                        <div class="form-group">
                            <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-6 col-xs-12" name="name" type="text"
                                    value="Ưu đãi học phí" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-6 col-xs-12" name="description" type="text"
                                    value="Tổng hợp các trương trình ưu đãi học phí hàng tuần..." id="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control col-md-6 col-xs-12" id="status" name="status">
                                    <option value="default">Select status</option>
                                    <option value="active">Kích hoạt</option>
                                    <option value="inactive" selected="selected">Chưa kích hoạt</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link" class="control-label col-md-3 col-sm-3 col-xs-12">Link</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-6 col-xs-12" name="link" type="text"
                                    value="https://zendvn.com/uu-dai-hoc-phi-tai-zendvn/" id="link">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thumb" class="control-label col-md-3 col-sm-3 col-xs-12">Thumb</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-6 col-xs-12" name="thumb" type="file" id="thumb">
                                <p style="margin-top: 50px;"><img src="/images/slider/LWi6hINpXz.jpeg"
                                        alt="Ưu đãi học phí" class="zvn-thumb"></p>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input name="id" type="hidden" value="3">
                                <input name="thumb_current" type="hidden" value="LWi6hINpXz.jpeg">
                                <input class="btn btn-success" type="submit" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

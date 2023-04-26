@extends('admin.layouts.main')
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>{{ $_title }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right">
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <form method="post" action="{{ CommonHelper::admin('cms/home-sliders') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5>Add Slider</h5>
                        </div>
                        <div class="card-block">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Banner Image <span class="-req">*</span></label>
                                    <input name="banner" type="file" class="form-control" onchange="fileExAllowed(this,'.png,.jpg,.jpeg,.PNG');" placeholder="Banner Image" maxlength="10" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Order</label>
                                    <input name="order" type="text" class="form-control" value="" placeholder="Order" maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-success">
                                <i class="fa fa-plus"></i> Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-block table-responsive">
                        <table class="table table-bordered table-mini table-dt">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Order</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $key => $value)
                                    <tr>    
                                        <td class="text-center">
                                            <img src="{{ CommonHelper::getHomeBanner($value->image) }}" class="list-image-thumbnail-landscap">
                                        </td>
                                        <td>{{ $value->sort }}</td>
                                        <td class="text-center">
                                            <a href="{{ CommonHelper::admin('cms/home-sliders/'.encrypt($value->id)) }}" class="btn btn-danger btn-mini btn-delete" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
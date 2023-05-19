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
        <form method="post" action="{{ CommonHelper::admin('cms/files/save') }}" enctype="multipart/form-data">
        @csrf
            <div class="card">
                <div class="card-header">
                    <h5>Details</h5>
                    <span>Enter details</span>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Company Profile</label>
                                <input type="file" name="company_profile" class="form-control" onchange="return fileExAllowed(this,'.pdf')"/>
                                <p><a href="{{ url('uploads/cms/downloads').'/'.App\Models\DownloadsModel::where('item','company_profile')->first()->value }}" download="company_profile.pdf">Download</a></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Product List</label>
                                <input type="file" name="product_list" class="form-control" onchange="return fileExAllowed(this,'.pdf')"/>
                                <p><a href="{{ url('uploads/cms/downloads').'/'.App\Models\DownloadsModel::where('item','product_list')->first()->value }}" download="product-list.pdf">Download</a></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Product Brochure</label>
                                <input type="file" name="product_brochure" class="form-control" onchange="return fileExAllowed(this,'.pdf')"/>
                                <p><a href="{{ url('uploads/cms/downloads').'/'.App\Models\DownloadsModel::where('item','product_brochure')->first()->value }}" download="product-brochure.pdf">Download</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-success" type="submit">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop
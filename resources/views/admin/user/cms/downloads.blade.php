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
                    <form method="post" action="{{ CommonHelper::admin('cms/files/save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5>Add Downloads</h5>
                        </div>
                        <div class="card-block">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name <span class="-req">*</span></label>
                                    <input name="name" type="text" class="form-control" value="" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>File <span class="-req">*</span></label>
                                    <input type="file" name="file" class="form-control" onchange="return fileExAllowed(this,'.pdf,.jpg,.png,.PNG,.JPG,.JPEG,.jpeg')" required/>
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
                                    <th>Name</th>
                                    <th>Order</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $key => $value)
                                    <tr>    
                                        <td>
                                            {{ $value->item }}
                                        </td>
                                        <td>{{ $value->sort }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('uploads/cms/downloads/'.$value->value) }}" class="btn btn-success btn-mini" title="download" download>
                                                <i class="fa fa-download"></i>
                                            </a>
                                            <a href="{{ CommonHelper::admin('cms/files/'.encrypt($value->id)) }}" class="btn btn-danger btn-mini btn-delete" title="Delete">
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
        {{-- <form method="post" action="{{ CommonHelper::admin('cms/files/save') }}" enctype="multipart/form-data">
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
        </form> --}}
    </div>
@stop
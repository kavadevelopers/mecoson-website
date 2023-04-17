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
        </div>
    </div>

    <div class="page-body">
        <form method="post" action="{{ CommonHelper::admin('settings') }}" enctype="multipart/form-data">
         @csrf
            <div class="card">
                <div class="card-header">
                    <h5>Basics</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>App Name <span class="-req">*</span></label>
                                <input name="app_name" type="text" class="form-control" value="{{ CommonHelper::setting('app_name') }}" placeholder="App Name" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>SMTP</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Host <span class="-req">*</span></label>
                                <input name="smtp_host" type="text" class="form-control" value="{{ CommonHelper::setting('smtp_host') }}" placeholder="Host" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>User <span class="-req">*</span></label>
                                <input name="smtp_user" type="email" class="form-control" value="{{ CommonHelper::setting('smtp_user') }}" placeholder="User" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Password <span class="-req">*</span></label>
                                <input name="smtp_password" type="text" class="form-control" value="{{ CommonHelper::setting('smtp_password') }}" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Port <span class="-req">*</span></label>
                                <input name="smtp_port" type="text" class="form-control" value="{{ CommonHelper::setting('smtp_port') }}" placeholder="Port" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>From Email <span class="-req">*</span></label>
                                <input name="smtp_from_email" type="email" class="form-control" value="{{ CommonHelper::setting('smtp_from_email') }}" placeholder="From Email" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>From Name <span class="-req">*</span></label>
                                <input name="smtp_from_name" type="text" class="form-control" value="{{ CommonHelper::setting('smtp_from_name') }}" placeholder="From Name" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-footer text-right">
                    <button class="btn btn-success">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>

    <style type="text/css">
        .card-header{
            border-bottom: 1px solid #ccc !important;
            margin-bottom: 15px;
        }
        .card-header h5{
            margin-bottom: 0;
        }
    </style>
@stop
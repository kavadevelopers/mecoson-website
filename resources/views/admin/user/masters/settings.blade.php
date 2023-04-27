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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Contact Mobile <span class="-req">*</span></label>
                                <input name="web_mobile" type="text" class="form-control" value="{{ CommonHelper::setting('web_mobile') }}" placeholder="Contact Mobile" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Contact Email <span class="-req">*</span></label>
                                <input name="web_email" type="text" class="form-control" value="{{ CommonHelper::setting('web_email') }}" placeholder="Contact Email" required>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Google Map Embedded Url <span class="-req">*</span></label>
                                <input name="web_google_map_url" type="text" class="form-control" value="{{ CommonHelper::setting('web_google_map_url') }}" placeholder="Google Map Embedded Url" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Address <span class="-req">*</span></label>
                                <textarea name="web_address" type="text" class="form-control" placeholder="Contact Address" required>{{ CommonHelper::setting('web_address') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>PCD PHARMA FRANCHISE DOMESTIC SALES</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Phone <span class="-req">*</span></label>
                                <input name="pcd_phone" type="text" class="form-control" value="{{ CommonHelper::setting('pcd_phone') }}" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Email <span class="-req">*</span></label>
                                <input name="pcd_email" type="email" class="form-control" value="{{ CommonHelper::setting('pcd_email') }}" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>EXPORTS</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Phone <span class="-req">*</span></label>
                                <input name="exp_phone" type="text" class="form-control" value="{{ CommonHelper::setting('exp_phone') }}" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Email <span class="-req">*</span></label>
                                <input name="exp_email" type="email" class="form-control" value="{{ CommonHelper::setting('exp_email') }}" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>ACCOUNTS & LOGISTICS</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Phone <span class="-req">*</span></label>
                                <input name="acc_phone" type="text" class="form-control" value="{{ CommonHelper::setting('acc_phone') }}" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Email <span class="-req">*</span></label>
                                <input name="acc_email" type="email" class="form-control" value="{{ CommonHelper::setting('exp_email') }}" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Social Media Urls</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input name="so_facebook_url" type="text" class="form-control" value="{{ CommonHelper::setting('so_facebook_url') }}" placeholder="Facebook">
                                <p><b>Note:</b> Leave empty if no need</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Instagram</label>
                                <input name="so_instagram_url" type="text" class="form-control" value="{{ CommonHelper::setting('so_instagram_url') }}" placeholder="Instagram">
                                <p><b>Note:</b> Leave empty if no need</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input name="so_twitter_url" type="text" class="form-control" value="{{ CommonHelper::setting('so_twitter_url') }}" placeholder="Twitter">
                                <p><b>Note:</b> Leave empty if no need</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Linked In</label>
                                <input name="so_linkedin_url" type="text" class="form-control" value="{{ CommonHelper::setting('so_linkedin_url') }}" placeholder="Twitter">
                                <p><b>Note:</b> Leave empty if no need</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Youtube</label>
                                <input name="so_youtube_url" type="text" class="form-control" value="{{ CommonHelper::setting('so_youtube_url') }}" placeholder="Youtube">
                                <p><b>Note:</b> Leave empty if no need</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Skype</label>
                                <input name="so_skype_url" type="text" class="form-control" value="{{ CommonHelper::setting('so_skype_url') }}" placeholder="Skype">
                                <p><b>Note:</b> Leave empty if no need</p>
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
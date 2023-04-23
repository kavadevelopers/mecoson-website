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
                <a href="{{ url(CommonHelper::admin('products')) }}" class="btn btn-danger btn-mini">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>

    <div class="page-body">
        <form method="post" action="{{ CommonHelper::admin('products/create') }}" enctype="multipart/form-data">
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
                                <label>Name <span class="-req">*</span></label>
                                <input name="name" type="text" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Price <small>(Optional)</small></label>
                                <input name="price" type="text" class="form-control decimal-num" placeholder="Price">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Banner</label>
                                <div>
                                    <img src="{{ url('themes/thumbs/land.jpg') }}" class="list-image-thumbnail-landscap-auto" id="bannerImage">
                                    <br>
                                    <label class="change-image-lable">
                                        Select banner
                                        <input type="file" class="crop-image-upload croppieImgPicker" data-type="banner" data-aspratio="1.42" name="crop_banner" style="display:none;">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Short Description <span class="-req">*</span></label>
                                <textarea name="short_description" type="text" rows="5" class="form-control" placeholder="Short Description" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="long_description" type="text" class="form-control tinymceeditor" value="" ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <input type="hidden" name="bannerbase64" />
                    <button class="btn btn-success" type="submit">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />

    <script type="text/javascript">
        var cropper;
        $(function(){
            $('#modalImageEdit').on('shown.bs.modal', function () {
                cropper = new Cropper($('#imgEditBase')[0], {
                    aspectRatio : $('#modalImageEdit input[name=aratio]').val()
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
                $('input[name=crop_banner]').val('');
            });

            $('.croppieImgPicker').change(function(){
                if (fileExAllowed(this,'.png,.jpg,.jpeg,.PNG')) {
                    input = this;
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imgEditBase').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $('#modalImageEdit input[name=type]').val($(this).data('type'));
                    $('#modalImageEdit input[name=aratio]').val($(this).data('aspratio'))
                    $('#modalImageEdit').modal('show');
                }
            });

            $('.btn-rotate').click(function(event) {
                cropper.rotate($(this).data('option'));
                event.preventDefault();
            });

            $('.btn-zoom').click(function(event) {
                cropper.zoom($(this).data('option'));
                event.preventDefault();
            });

            $('.btn-fliphor').click(function(event) {
                cropper.scaleX($(this).data('option'));
                if ($(this).data('option') == -1) {
                    $(this).data('option',1);
                }else{
                    $(this).data('option',-1);
                }
                event.preventDefault();
            });

            $('.btn-flipver').click(function(event) {
                cropper.scaleY($(this).data('option'));
                if ($(this).data('option') == -1) {
                    $(this).data('option',1);
                }else{
                    $(this).data('option',-1);
                }
                event.preventDefault();
            });

            $('.btn-cropper-reset').click(function(event) {
                cropper.reset();
            });

            $('#saveCropped').click(function(event) {
                cropper.getCroppedCanvas().toBlob(function (blob) {
                    url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function() {
                        var base64data = reader.result;
                        $('#bannerImage').attr('src',base64data);
                        $('input[name=bannerbase64]').val(base64data);
                        $('#modalImageEdit').modal('hide');
                    }
                });
            });
        })
    </script>

    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalImageEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                   </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cropper-img-container" style="margin-bottom:20px;">
                                <img id="imgEditBase" src="" style="width:100%; border: solid 2px #ccc;">
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-mini btn-zoom" data-option="-0.1" title="Zoom Out">
                                            <i class="fa fa-search-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-mini btn-zoom" data-option="0.1" title="Zoom In">
                                          <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-mini btn-rotate" data-option="-45" title="Rotate Left">
                                            <i class="fa fa-rotate-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-mini btn-rotate" data-option="45" title="Rotate Right">
                                          <i class="fa fa-rotate-right"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-mini btn-fliphor" data-option="-1" title="Flip Horizontal">
                                            <i class="fa fa-arrows-h"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-mini btn-flipver" data-option="-1" title="Flip Vertical">
                                          <i class="fa fa-arrows-v"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-mini btn-cropper-reset" data-option="-1" title="Reset">
                                            <i class="fa fa-refresh"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="type">
                    <input type="hidden" name="aratio">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="saveCropped">Select</button>
                </div>
            </div>
        </div>
    </div>
@stop
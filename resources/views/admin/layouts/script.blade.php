<script>

    $(function(){
        $('.table-dt').DataTable({
            "dom": "<'row'<'col-md-6'l><'col-md-6'f>><'row'<'col-md-12't>><'row'<'col-md-6'i><'col-md-6'p>>",
            order : [],
            "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
        });

        $('.table-dt10').DataTable({
            "dom": "<'row'<'col-md-6'l><'col-md-6'f>><'row'<'col-md-12't>><'row'<'col-md-6'i><'col-md-6'p>>",
            order : [],
            "aLengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
        });

        $(document).on('click','.btn-delete', function(e){
			if(confirm('Are you sure you want to delete this?')){
				return true;
			}
			return false;
		});

        $(document).on('click','.inline-readmore', function(event){	
        	if($(this).prev().is(":visible")){
        		$(this).prev('.full-string-span').hide();
        		$(this).html('<small>...more</small>');
        	}else{
        		$(this).prev('.full-string-span').show();
        		$(this).html('<small> less</small>');
        	}
        	event.preventDefault();
        });

        $(document).on('click','.read-more-popup-btn', function(event){
        	event.preventDefault();
        	$('#modalFullStringText').html($(this).data('full'));
        	$('#modalFullString').modal('show');
        });

        $(document).on('click','.photo-swipe', function(event){
            var stringAr = $(this).data('photoswipe').split('+');
            var items = [];
            for(var i = 0; i < stringAr.length; i++) { 
                items.push({
                    src     : stringAr[i].split('=')[0], 
                    w       : parseInt(stringAr[i].split('=')[1].split(',')[0]),
                    h       : parseInt(stringAr[i].split('=')[1].split(',')[1])
                });
            }

            myConsole(items);
            var pswpElement = document.querySelectorAll('.pswp')[0];
            var options = {
                // optionName: 'option value'
                // for example:
                shareEl:true,
                index: 0 // start at first slide
            };

            // Initializes and opens PhotoSwipe
            var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        });
    })

    function myConsole(a) {
        console.log(a);
    }

    function showAjaxLoader() {
		$('.ajaxLoader').show();
	}

	function hideAjaxLoader() {
		$('.ajaxLoader').hide();
	}

    function PNOTY(_text,_type){
        new PNotify({
            text: _text,
            icon : false,
            type:_type,
            buttons: {
                sticker: false
            }
        });
    }

    function doAjax(params) {
        showAjaxLoader();
        var url                             = params['url'];
        if (params['type']) {
            var requestType                 = params['type'];
        }else{
            var requestType                 = 'POST';
        }
        if (params['dataType']) {
            var _dataType                    = params['dataType'];
        }else{
            var _dataType                    = 'HTML';
        }
        if (params['noHideAjax']) {
            var _showAjaxLoad                    = true;
        }else{
            var _showAjaxLoad                    = false;
        }
        var data                        = params['data'];
        var success                     = params['successCb'];
        var error                       = params['errorCb'];

        $.ajax({
            type        : requestType,
            data        : data,
            dataType    : _dataType,
            url         : url     
        }).done(function(data) {
            setTimeout(function () {
                if (!_showAjaxLoad) {
                    hideAjaxLoader();
                }
                if (typeof success === "function") {
                    success(data);
                }
            }, 100);
        }).fail(function(jqXHR, textStatus, errorThrown) {
            hideAjaxLoader();
            console.log('Ajax error pLease try again later - '+textStatus, errorThrown);
            if (typeof error === "function") {
                error();
            }
        });
    }

    function readFileImage(input) {
        if (input.files && input.files[0]) {
            
            var FileSize = input.files[0].size / 1024 / 1024; // in MB
            var extension = input.files[0].name.substring(input.files[0].name.lastIndexOf('.')+1);
            
            if (FileSize > 2) {
                PNOTY("Maxiumum Image Size Is 2 Mb.",'error');
                input.value = '';
                return false;
            }
            else{
                if (extension == 'jpg' || extension == 'png' || extension == 'jpeg') {
                    
                }
                else
                {
                    PNOTY("Only Allowed '.jpg' OR '.png' OR '.jpeg'",'error');
                    input.value = '';
                    return false;
                }
            }
        }
    }

    var editor_config = {
        path_absolute : "{{ url('/') }}",
        height: 500,    
        selector: 'textarea.tinymceeditor',
        relative_urls: false,
        plugins: [
              "advlist autolink lists link charmap print preview hr anchor pagebreak",
              "searchreplace wordcount visualblocks visualchars code fullscreen",
              "insertdatetime nonbreaking save table directionality",
              "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link",
        relative_urls: false,
        file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + '/filemanager?editor=tinymce5';
      
              if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
              } else {
                cmsURL = cmsURL + "&type=Files";
              }

            tinyMCE.activeEditor.windowManager.openUrl({
                url : cmsURL,
                title : 'Gallery',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no",
                onMessage: (api, message) => {
                  callback(message.content);
                  myConsole(message);
                }
            });
        }
    };
    tinymce.init(editor_config);

    function fileExAllowed(input,types) {
        if (input.files && input.files[0]) {
            var FileSize = input.files[0].size / 1024 / 1024; // in MB
            var extension = input.files[0].name.substring(input.files[0].name.lastIndexOf('.')+1);
            if (FileSize > 2) {
                PNOTY("Maxiumum File Size Is 2 Mb.",'error');
                input.value = '';
                return false;
            }else{
                typesAr = types.replaceAll('.','').split(',');
                if (isInArray(typesAr,extension)) {
                    return true;
                }else{
                    PNOTY('Only Allowed '+types+' Extension','error');
                    input.value = '';
                    return false;
                }
            }
        }
    }

    function isInArray(array, search){
	    return array.indexOf(search) >= 0;
	}
</script>
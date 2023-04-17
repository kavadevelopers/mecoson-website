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
</script>
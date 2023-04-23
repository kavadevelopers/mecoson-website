

<script>
    function notifyF(msg,type){
        if (type == "msg") {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: msg,
                confirmButtonColor: '#19ce67',
            })
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: msg,
                confirmButtonColor: '#19ce67',
            })
        }
    }
</script>
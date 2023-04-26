

<script>
    function notifyF(msg,type){
        if (type == "msg") {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: msg,
                confirmButtonColor: '#107dac',
            })
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: msg,
                confirmButtonColor: '#107dac',
            })
        }
    }
</script>
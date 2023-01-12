
    function sweetAlert(success_title, success_text){
        const message = $(".alert").data("id");
        if (message == 1) {
            Swal.fire({
                icon: 'success',
                title: success_title,
                text: success_text,
            });
        } else if (message == 2) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',

            });
        }else if (message == 3){
            Swal.fire({
                icon: 'info',
                title: 'Item Exist Already',
                text: 'Cannot Add An Existing Item. Check Data',
            });
        }
    }
        

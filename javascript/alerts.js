
    function sweetAlert(success_title, success_text){
        const message = $(".alert").data("id");
        if (message == 1) {
            Swal.fire({
                icon: 'success',
                title: success_title,
                text: 'Operation Completed Successfully',
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
        }else if (message == 4){
            Swal.fire({
                icon: 'success',
                title: 'Update Successful',
                text: '',
            });
        }else if (message == 5){
            Swal.fire({
                icon: 'success',
                title: 'Grant Given Successfully',
                text: '',
            });
        }
    }

    function alert_subtables(success_title){
        const message = $(".alert").data("id");
        if (message == 1) {
            Swal.fire({
                icon: 'success',
                title: success_title,
                text: 'Operation Completed Successfully',
            });
        }
    }
        

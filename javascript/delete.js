function delete_action(link) {
            

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            const xhttp = new XMLHttpRequest();
            xhttp.open("GET", ""+link);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send();
            xhttp.onload = function() {
                //  alert(this.responseText);
                
                if (this.responseText == 1) {
                    Swal.fire({
                        title:'Deleted!',
                        text: 'Your file has been deleted.',
                        icon: 'success'
                }).then(function(){
                    location.reload();
                })
                   
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: this.responseText,
                    });
                    
                }

                
            }
            
        }
    })
}
// fungsi untuk delete data dengan javascript dan swal.
function delete_alert(id) {
    var id = id; 
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this data!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Poof! Your data has been deleted!", {
          icon: "success",
          buttons: false, 
          timer: 3000,
        }).then((willRedirect) =>{
            window.location.href='delete.php?id='+id;
        });
      } else {
        swal({
            title: "Yuhu!", 
            text: "Your data is safe!",
            icon: "success",
            buttons: false, 
            timer: 2000, 
        });
      }
    });
}

function validate() {
   if( document.myForm.students_name.value == "" ) {
      document.getElementById("error_name").innerHTML = "Please provide your name!";
      document.myForm.students_name.focus() ;
      return false;
   }
   if( document.myForm.students_address.value == "" ) {
      document.getElementById("error_email").innerHTML = "Please provide your address!";
      document.myForm.students_address.focus() ;
      return false;
   }
   if( document.myForm.students_phone.value == "" ) {
      document.getElementById("error_phone").innerHTML = "Please provide your phone!";
      document.myForm.students_phone.focus() ;
      return false;
   }
   return( true );
}
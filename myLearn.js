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
        });
      }
    });
}
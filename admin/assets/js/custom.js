
function delete_record(record_id,table){

Swal.fire({
  title: 'Are you sure to delete this record?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: `Confirm`,
  denyButtonText: `Cancel`,
}).then((result) => {
        if (result.value === true) {
        img_id = $(event).attr('img_id');
        $('.delbtn'+img_id).css('display','none');
        $.ajax({
        type: "POST",
        data: {record_id: record_id,table:table},

        url: base_url+"ajax/ajax_record_delete.php",
        success: function(result) 
        {
              Swal.fire('Deleted!', '', 'success');
              setTimeout(function(){
               location.reload();
              }, 2000);  
              
           
        }
    });

        }else{
            Swal.fire('Changes are not saved', '', 'info')
        }

})

}

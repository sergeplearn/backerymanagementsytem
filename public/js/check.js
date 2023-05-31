// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict';
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
      form.addEventListener('submit', (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();

  
  
 


  $(document).ready(function () {
    $('#example').DataTable({
      //"aLengthMenu": [[4], [4]],
      "ordering":false,
      "searching":false,
      "bLengthChange":false,
       pageLength:5,
      searching:false,
      info:false,
      
  } );
});



  (function() {
      $('.from-prevent-multiple-submits').on('submit',function(){
        $('.button-prevent-multiple-submits').attr('disabled','true');
      })
      
    }
  )();



  $(".alerts").delay(5000).slideUp(1000, function() {
    $(this).alert('close');
});
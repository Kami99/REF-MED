document.addEventListener('DOMContentLoaded', () => {

 const entryInfoElements =document.querySelectorAll('.js-link-profile');
 if(entryInfoElements!=null){
     swal({

  title: "V",
  text: "Votre compte est incomplet. Pour avoir pleinement accès à nos fonctionnalités veuillez vous assurer de le complétez. Si vous voulez les complétez cliquez sur le boutton?",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-primary",
  confirmButtonText: "Oui",
  cancelButtonText: "Non",
  closeOnConfirm: false,
  closeOnCancel: false});
 }function(isConfirm) {
  if (isConfirm) {
    link=entryInfoElements.getAttribute('href')
    window.open(link);
  } else {
    window.open("https://www.yahoo.com");
  }
});

});
    

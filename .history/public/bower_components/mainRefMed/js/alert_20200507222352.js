document.addEventListener('DOMContentLoaded', () => {
 const entryInfoElements =document.querySelectorAll('.js-link-profile');
 link=entryInfoElements[0].getAttribute('href')
 if(entryInfoElements!=null){
     swal.fire({

  title: "Compte incomplet",
  text: "Votre compte est incomplet. Pour avoir pleinement accès à nos fonctionnalités veuillez vous assurer de le complétez. Si vous voulez les complétez cliquez sur le boutton?",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-primary",
  confirmButtonText: "Oui",
  cancelButtonText: "Non",
  closeOnConfirm: false,
  closeOnCancel: false}
  ).then((result) => {
   if (result.value) {
     window.location.href = link
   };
 })
 }
 }
);
    

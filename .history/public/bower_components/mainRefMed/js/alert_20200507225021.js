document.addEventListener('DOMContentLoaded', () => {
 const entryInfoElements =document.querySelectorAll('.js-link-profile');
 link=entryInfoElements[0].getAttribute('href')
 if(entryInfoElements!=null){
     swal({

  title: "Compte incomplet",
  text: "Votre compte est incomplet. Pour avoir pleinement accès à nos fonctionnalités veuillez vous assurer de le complétez. Si vous voulez les complétez cliquez sur le boutton?",
  icon: 'warning',
   showCloseButton: true,
   showCancelButton: true,
   focusConfirm: false,
   reverseButtons: true,
   focusCancel: true,
  confirmButtonClass: "btn-primary",

  }
  ).then(redirect=> {
   if (redirect) {
     window.location.href = link
   }
 });
 }
 }
);
    

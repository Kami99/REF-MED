document.addEventListener('DOMContentLoaded', () => {

 const entryInfoElements =document.querySelectorAll('.js-link-profile');
 if(entryInfoElements!=null){
     swal("Il manque des informations dans votre compte pour avoir pleinement accès à nos fonctionnalités veuillez à vous assurer qu'elle le soit. Voulez vous les complétez", {
  dangerMode: true,
  buttons: true,
  timer: 3000,
});
 }

});
    

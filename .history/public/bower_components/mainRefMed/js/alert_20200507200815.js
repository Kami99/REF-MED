document.addEventListener('DOMContentLoaded', () => {

 const entryInfoElements =document.querySelectorAll('.js-link-profile');
 if(entryInfoElements!=null){
     swal("Il manque des informations dans votre compte pour avoir pleinement accès à nos fonctionnalités veuillez à vous assurer qu'elle le soit. Si vous voulez les complétez cliquez sur le boutton?", {
  buttons: true,
  timer: 3000,
});
 }

});
    

document.addEventListener('DOMContentLoaded', () => {
 const entryInfoElements =document.querySelectorAll('.js-link-profile');
 link=entryInfoElements[0].getAttribute('href')
 if(entryInfoElements!=null){
 swal({
  title: "Compte incomplet",
  text: "Votre compte est incomplet. Pour avoir pleinement accès à nos fonctionnalités veuillez vous assurer de le complété. Si vous voulez les complétez cliquez sur le boutton?",
  icon: "warning",
  cancelButtonText: 'Retournez',
  confirmButtonColor: 'btn-primary',
  buttons: {
        confirm : {text:'Accédez à la page',className:'sweet-warning btn'},
        cancel : 'Annuler'
    },
  dangerMode: true,
})
.then((redirect) => {
  if (redirect) {
    window.location.href = link

  } else {
        swal("Pensez à rentrer les informations restantes", {
    });
  }
});
 }
 }
);
    

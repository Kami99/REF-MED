    let idSelect = document.querySelector('.form-selected').getAttribute('id');
    let attribute=document.querySelector('.js-form-selected')
    if (attribute.length !=0) {
     let idSelect2 = attribute.getAttribute('id');   
    }
if (idSelect!=null) {
      tail.select('#'+idSelect, {
    search: true,
    multiLimit:15,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: false,
    multiContainer: '.move-container',
}) 
}
if (idSelect2!=null) {
    tail.select('#'+idSelect2, {
    search: true,
    deselect: true,
})  
}



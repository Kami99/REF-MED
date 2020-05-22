    let idSelect = document.querySelector('.form-selected').getAttribute('id');
    let attribute=document.querySelector('.js-form-selected')
if (idSelect!=null) {
      tail.select('#'+idSelect, {
    search: true,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: false,
    multiContainer: '.move-container',
}) 
}
    if (attribute !=null) {
     let idSelect2 = attribute.getAttribute('id'); 
     if (idSelect2!=null) {
    tail.select('#'+idSelect2, {
    search: true,
    deselect: true,
})   
    }
}

 




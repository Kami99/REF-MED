    let idSelect = document.querySelector('.form-selected').getAttribute('id');
    let idSelect2 = document.querySelector('.js-form-selected').getAttribute('id');
if (idSelect!=null || idSelect2!=null) {
      tail.select('#'+idSelect, {
    search: true,
    multiLimit:15,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: false,
    multiContainer: '.move-container',
})
    tail.select('#'+idSelect2, {
    search: true,
    deselect: true,
})  
}
if (idSelect2!=null) {
    tail.select('#'+idSelect2, {
    search: true,
    deselect: true,
})  
}



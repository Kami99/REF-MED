    let idSelect = document.querySelector('.form-selected').getAttribute('id');

    tail.select('#'+idSelect, {
    search: true,
    multiLimit:15,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: false,
    multiContainer: '.move-container',
})


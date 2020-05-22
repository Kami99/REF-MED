let attribute = document.querySelector(".js-form-selected");
let attributeForm = document.querySelector(".form-selected");
if (attributeForm != null) {
  let idSelect = attributeForm.getAttribute("id");
  tail.select("#" + idSelect, {
    search: true,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: false,
    multiContainer: ".move-container",
  });
}



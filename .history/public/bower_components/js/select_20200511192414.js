let idSelect = document.querySelector(".form-selected").getAttribute("id");
let attribute = document.querySelector(".js-form-selected");
let attribute = document.querySelector(".form-selected");
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

if (attribute != null) {
  let idSelect2 = attribute.getAttribute("id");
  tail.select("#" + idSelect2, {
    search: true,
    deselect: true,
  });
}

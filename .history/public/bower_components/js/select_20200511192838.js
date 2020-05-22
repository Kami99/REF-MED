let attribute = document.querySelector(".js-form-selected");
let attributeForm = document.querySelector(".form-selected");
if (attributeForm != null) {
  let idSelect = attributeForm.getAttribute("id");
  tail.select("#" + idSelect, {
    search: true,
    hideSelected: true,
    hideDisabled: true,
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

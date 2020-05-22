let attribute = document.querySelector(".js-form-selected");
let attributeForm = document.querySelector(".form-selected");
let attributeClassForm = document.querySelector(".form-selected");

if (attributeForm != null) {
  tail.select(".form-selected", {
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

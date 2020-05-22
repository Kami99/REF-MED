let attribute = document.querySelector(".js-form-selected");
let attributeForm = document.querySelector(".form-selected");

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
  tail.select(".js-form-selected", {
    search: true,
    deselect: true,
  });
}

// js/scripts.js
document.addEventListener("DOMContentLoaded", function () {
  const includeHTML = (element, file) => {
    fetch(file)
      .then((response) => {
        if (response.ok) return response.text();
        throw new Error("Error al cargar " + file);
      })
      .then((data) => {
        element.innerHTML = data;
      })
      .catch((err) => console.error(err));
  };

  // Busca elementos con el atributo "data-include"
  document.querySelectorAll("[data-include]").forEach((el) => {
    const file = el.getAttribute("data-include");
    includeHTML(el, file);
  });
});

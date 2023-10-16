const agregarText = document.querySelector(".title-text .agregar");
const agregarForm = document.querySelector("form.agregar");
const agregarBtn = document.querySelector("label.agregar");
const editarBtn = document.querySelector("label.editar");
const editarLink = document.querySelector("form .editar-link a");
editarBtn.onclick = (()=>{
  agregarForm.style.marginLeft = "-50%";
  agregarText.style.marginLeft = "-50%";
});
agregarBtn.onclick = (()=>{
  agregarForm.style.marginLeft = "0%";
  agregarText.style.marginLeft = "0%";
});
editarLink.onclick = (()=>{
  editarBtn.click();
  return false;
});


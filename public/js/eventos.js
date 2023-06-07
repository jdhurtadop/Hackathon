const AlertasError = document.querySelector(".erroresAlertas");
const form = document.querySelector("#formEvento");

form.addEventListener("submit", registro);

async function registro(e) {
  e.preventDefault();
  const formData = new FormData(form);
  const url = "./update-evento";

  try {
    const peticion = await fetch(url, {
      method: "POST",
      body: formData,
    });
    const response = await peticion.json();
    console.log(response);
    if (response.exito == true) {
      Swal.fire({
        title: "Modificacion del evento exitosamente",
        text: "¡hurra ya has modificado los textos por defecto!",
        icon: "success",
        timer: 5000, // tiempo en milisegundos
        timerProgressBar: true,
        showConfirmButton: false,
      }).then(() => {
        window.location.href = "./";
      });
    } else if (response.error == true) {
      Swal.fire({
        icon: "error",
        title: "Error...",
        text: "Haz modificado el valor encriptado, intenta nuevamente",
        timer: 5000, // tiempo en milisegundos
        timerProgressBar: true,
        showConfirmButton: false,
      }).then(() => {
        window.location.reload();
      });
    }
  } catch (error) {
    console.log(error);
    Swal.fire({
      icon: "error",
      title: "Error en el servidor",
      text: "¡Lo sentimos, por favor intenta de nuevo en unos minutos!",
      timer: 5000, // tiempo en milisegundos
      timerProgressBar: true,
      showConfirmButton: false,
    }).then(() => {
      window.location.reload();
    });
  }
}

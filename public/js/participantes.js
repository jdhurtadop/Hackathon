const AlertasError = document.querySelector(".erroresAlertas");
const form = document.querySelector("form");

form.addEventListener("submit", registro);

async function registro(e) {
  e.preventDefault();
  const formData = new FormData(form);
  const url = "./inscripcion";

  try {
    const peticion = await fetch(url, {
      method: "POST",
      body: formData,
    });
    const response = await peticion.json();
    console.log(response);

    const divAlert = document.createElement("div");
    divAlert.classList.add("error");

    if (response.falso == false) {
      // Validacion para mostrar errores
      const { error } = response.errores;

      const listaDeAlertas = error.map((msg) => {
        return '<div class="error">' + msg + "</div>";
      });

      AlertasError.innerHTML = listaDeAlertas.join("");
    } else if (response.exito == true) {
      AlertasError.remove();
      Swal.fire({
        title: "Inscripción al evento Hackathon 2023 exitosamente",
        text: "¡hurra te agregamos al grupo de telegram, para que estes al tando del evento Hackathon 2023!",
        icon: "success",
        timer: 10000, // tiempo en milisegundos
        timerProgressBar: true,
        showConfirmButton: false,
      }).then(() => {
        window.location.reload();
      });
    } else {
      AlertasError.innerHTML = `<div class="error"> Este email ya ha sido registrado </div>`;
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

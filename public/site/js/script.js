const saber = document.querySelector(".lightsaber");
const trigger = document.getElementById("menu-trigger");

let animationId = null;
let animando = false;

function animateSaber(duration = 1500, subir = true) {
  if (animationId) {
    cancelAnimationFrame(animationId);
    animationId = null;
  }

  const startTime = performance.now();

  // Obtener progreso actual desde la variable CSS --progress
  const estilo = getComputedStyle(saber);
  const progresoActualStr = estilo.getPropertyValue("--progress").trim();
  let progresoActual = progresoActualStr.endsWith("%")
    ? parseFloat(progresoActualStr)
    : 0;

  function step(timestamp) {
    const elapsed = timestamp - startTime;
    const progress = Math.min(elapsed / duration, 1);

    const nuevoProgreso = subir
      ? progresoActual + (100 - progresoActual) * progress
      : progresoActual - progresoActual * progress;

    saber.style.setProperty("--progress", nuevoProgreso.toFixed(2) + "%");

    if (progress < 1) {
      animationId = requestAnimationFrame(step);
    } else {
      animationId = null;
      animando = false;
    }
  }

  animando = true;
  animationId = requestAnimationFrame(step);
}

function toggleSaber() {
  if (animando) return;

  const estilo = getComputedStyle(saber);
  const progresoStr = estilo.getPropertyValue("--progress").trim();
  const progreso = progresoStr.endsWith("%") ? parseFloat(progresoStr) : 0;

  const subir = progreso < 99;
  animateSaber(1500, subir);
}

// Evento manual
trigger.addEventListener("click", toggleSaber);

// Intervalo automático cada 3 minutos (180,000 ms)
setInterval(() => {
  toggleSaber();
}, 180000);


document.addEventListener('DOMContentLoaded', function () {
    const yearElements = document.querySelectorAll('.year');
    yearElements.forEach(function(el) {
        el.textContent = new Date().getFullYear();
    });
});



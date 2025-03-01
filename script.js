function mostrarCursos(materia) {
    document.getElementById("titulo-materia").innerText = materia;
    document.getElementById("cursos").classList.remove("oculto");
}

document.getElementById("formulario-tarea").addEventListener("submit", function(event) {
    event.preventDefault();

    let materia = document.getElementById("materia").value;
    let grupo = document.getElementById("grupo").value;
    let titulo = document.getElementById("titulo").value;
    let descripcion = document.getElementById("descripcion").value;

    if (materia && grupo && titulo && descripcion) {
        let tarea = document.createElement("div");
        tarea.classList.add("tarea");

        tarea.innerHTML = `
            <h3>${titulo}</h3>
            <p><strong>Materia:</strong> ${materia}</p>
            <p><strong>Grupo:</strong> ${grupo}</p>
            <p><strong>Descripción:</strong> ${descripcion}</p>
            <button class="boton-eliminar">Eliminar</button>
        `;

        document.getElementById("lista-tareas").appendChild(tarea);

        tarea.querySelector(".boton-eliminar").addEventListener("click", function() {
            tarea.remove();
        });

        document.getElementById("formulario-tarea").reset();
    }
});

function cerrarSesion() {
    alert("Cerrando sesión...");
    destroySession();
}

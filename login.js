document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email === "profesor@deasis.com" && password === "12345") {
        window.location.href = "profesor.html";
    } else {
        window.location.href = "estudiante.html";
    }
});

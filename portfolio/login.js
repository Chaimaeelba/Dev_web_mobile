document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const errorMessage = document.getElementById("error-message");

    // Vérifier que tous les champs sont remplis
    if (username === "" || email === "" || password === "") {
        errorMessage.textContent = "Tous les champs sont obligatoires.";
        errorMessage.style.display = "block";
        return;
    }

    // Vérifier si l'email est valide
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        errorMessage.textContent = "Veuillez entrer une adresse email valide.";
        errorMessage.style.display = "block";
        return;
    }

    // Tout est bon, redirection vers le portfolio
    window.location.href = "index.html";
});

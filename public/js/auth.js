const API_URL = "http://127.0.0.1:8000/api";

function loginUser() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    fetch(`${API_URL}/login`, {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({email, password})
    })
        .then(res => res.json())
        .then(data => {
            if (!data.success) {
                document.getElementById("error-msg").innerText = data.message;
                return;
            }

            localStorage.setItem("token", data.token);
            window.location.href = "/notes";
        });
}

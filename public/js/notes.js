const API_URL = "http://127.0.0.1:8000/api";
let token = localStorage.getItem("token");

if (!token && window.location.pathname !== "/login") {
    window.location.href = "/login";
}

/* Logout */
function logout() {
    localStorage.removeItem("token");
    window.location.href = "/login";
}

/* Load Notes */
function loadNotes() {
    fetch(`${API_URL}/notes`, {
        headers: {"Authorization": `Bearer ${token}`}
    })
        .then(res => res.json())
        .then(data => {
            let html = "";
            data.data.forEach(note => {
                html += `
                    <div class="card p-3 mb-3 shadow-sm">
                        <h5>${note.title}</h5>
                        <p>${note.content ?? ""}</p>

                        <a href="/notes/edit?id=${note.id}" class="btn btn-warning btn-sm">Edit</a>
                        <button onclick="deleteNote(${note.id})" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                `;
            });

            document.getElementById("notes-list").innerHTML = html;
        });
}

/* Create Note */
function createNote() {
    let title = document.getElementById("title").value;
    let content = document.getElementById("content").value;

    fetch(`${API_URL}/notes`, {
        method: "POST",
        headers: {
            "Authorization": `Bearer ${token}`,
            "Content-Type": "application/json"
        },
        body: JSON.stringify({title, content})
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("create-msg").innerText = data.message;
        loadNotes();
    });
}

/* Delete Note */
function deleteNote(id) {
    if (!confirm("Are you sure?")) return;

    fetch(`${API_URL}/notes/${id}`, {
        method: "DELETE",
        headers: {"Authorization": `Bearer ${token}`}
    })
        .then(() => loadNotes());
}

/* Load Note for Editing */
if (window.location.pathname === "/notes/edit") {
    let noteId = new URLSearchParams(window.location.search).get("id");

    fetch(`${API_URL}/notes/${noteId}`, {
        headers: {"Authorization": `Bearer ${token}`}
    })
        .then(res => res.json())
        .then(data => {
            document.getElementById("title").value = data.data.title;
            document.getElementById("content").value = data.data.content ?? "";
        });

    window.updateNote = function () {
        let title = document.getElementById("title").value;
        let content = document.getElementById("content").value;

        fetch(`${API_URL}/notes/${noteId}`, {
            method: "PUT",
            headers: {
                "Authorization": `Bearer ${token}`,
                "Content-Type": "application/json"
            },
            body: JSON.stringify({title, content})
        })
            .then(res => res.json())
            .then(data => {
                document.getElementById("msg").innerText = "Note updated!";
            });
    };
}

/* Load list only on notes page */
if (window.location.pathname === "/notes") {
    loadNotes();
}

<!DOCTYPE html>
<html>
<head>
    <title>My Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Your Notes</h2>
        <button class="btn btn-danger" onclick="logout()">Logout</button>
    </div>

    <!-- Create Note -->
    <div class="card p-4 shadow mb-4">
        <h4>Create Note</h4>

        <div class="mb-3">
            <label>Title</label>
            <input id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea id="content" class="form-control" rows="3"></textarea>
        </div>

        <button class="btn btn-success" onclick="createNote()">Save</button>
        <p id="create-msg" class="text-success mt-2"></p>
    </div>

    <div id="notes-list"></div>
</div>

<script src="/js/notes.js"></script>
</body>
</html>

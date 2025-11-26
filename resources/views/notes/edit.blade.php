<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <div class="card p-4 shadow">
        <h3>Edit Note</h3>

        <input type="hidden" id="noteId" value="{{ request()->id }}">

        <div class="mb-3">
            <label>Title</label>
            <input id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea id="content" class="form-control" rows="3"></textarea>
        </div>

        <button class="btn btn-primary w-100" onclick="updateNote()">Update</button>

        <p id="msg" class="text-success mt-3"></p>

        <a href="/notes" class="btn btn-secondary w-100 mt-3">Back</a>
    </div>
</div>

<script src="/js/notes.js"></script>

</body>
</html>

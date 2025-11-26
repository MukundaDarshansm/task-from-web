<!DOCTYPE html>
<html>
<head>
    <title>Login - Notes App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 450px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3">Login</h3>

        <div class="mb-3">
            <label>Email</label>
            <input id="email" type="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input id="password" type="password" class="form-control">
        </div>

        <button class="btn btn-primary w-100" onclick="loginUser()">Login</button>

        <p id="error-msg" class="text-danger mt-3 text-center"></p>
    </div>
</div>

<script src="/js/auth.js"></script>

</body>
</html>

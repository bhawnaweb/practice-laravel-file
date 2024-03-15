<!DOCTYPE html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Login Panel</h1>
            <form action="{{ route('user.form') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="mb-3">
                    <label for="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            @if(session('msg'))
                <div class="alert alert-danger" role="alert">
                    {{ session('msg') }}
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>

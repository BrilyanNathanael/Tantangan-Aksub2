<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/company.css">
    <title>Create Company</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Create New Company</h2>
            <form action="/create/company" method="post">
                @csrf
                <label for="Name">Company's Name</label>
                <input type="text" id="Name" name="name">
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</body>
</html>
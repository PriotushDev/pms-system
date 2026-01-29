<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send mail</title>
</head>
<body>
    <h1>Send Mail Form</h1>
    <form action="{{ route('demo.email.send') }}" method="POST">
        
        @csrf

        <div>
            <label for="name">Subject: </label>
            <input type="text" name="subject" required />
        </div>
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" required />
        </div>
        <div>
            <label for="name">Email: </label>
            <input type="text" name="email" required />
        </div>
        <div>
            <label for="name">Message: </label>
            <textarea type="text" id="message" name="message" required></textarea>
        </div>

        <button type="submit">Send Mail</button>

    </form>
</body>
</html>
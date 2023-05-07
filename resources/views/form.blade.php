<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Chat with Freddy</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ceface;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #71d077;
            border-radius: 25px;
            padding: 30px;
            max-width: 800px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            margin: 0 auto;
        }

        .conversation {
            background-color: #ffd3b6;
            border-radius: 25px;
            padding: 20px;
            margin-top: 20px;
            overflow-y: auto; /* Allow vertical scrolling */
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            max-height: calc(100vh - 250px); /* Limit the height */
        }

        .input-container {
            margin-top: auto;
        }

        .frog-navbar {
            background-color: #4CAF50; /* Green frog color */
            text-align: center;
        }

        .nav-link {
            color: #FFFFFF; /* White text color */
        }

        .nav-link:hover {
            color: #FFD700; /* Gold hover color */
        }

        .navbar-brand {
            color: #FFFFFF; /* White text color */
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #FFD700; /* Gold hover color */
        }

        .frog-footer {
            background-color: #4CAF50;
            padding: 10px 0;
            color: #FFFFFF;
            text-align: center;
            font-weight: bold;
            bottom: 0;
            width: 100%;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .round-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .round-image-user {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm frog-navbar">
    <a class="navbar-brand" href="#">Froggy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container d-flex flex-column overflow-scroll">
    <div class="header-container">
        <img src="img/img.png" alt="Frog Image" class="round-image">

        <h1 class="text-center navbar-brand nav-link">Chat with Freddy the Frog!</h1>
    </div>

    <div class="conversation">
        @if(isset($conversation))
            @foreach($conversation as $message)
                <p>
                    @if($message['type'] === 'user')
                        <img src="img/pepe.png" alt="pepe Image" class="round-image-user">You: {{ $message['text'] }}
                    @else
                        <img src="img/img.png" alt="Frog Image" class="round-image-user">Freddy: {{ $message['text'] }}
                    @endif
                </p>
            @endforeach
        @endif
    </div>

    <form method="POST" action="/generate" class="input-container">
        @csrf
        <div class="form-group">
            <label for="prompt">Say something to Freddy:</label>
            <input type="text" name="prompt" id="prompt" class="form-control" maxlength="140">

        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>

<div class="frog-footer">
    <p>&copy; {{ date('Y') }} Froggy Chat. All rights reserved.</p>
</div>

<!-- Add Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

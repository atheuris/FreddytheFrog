<!DOCTYPE html>
<html>
<head>
    <title>Chat with Freddy</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Add viewport for mobile devices -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-sm frog-navbar">
    <a class="navbar-brand" href="#">Froggy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link custom-button" href="#">Buy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-button" href="#">Chart</a>
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
            <label for="prompt" class="text-white-hover">Say something to Freddy:</label>
            <input type="text" name="prompt" id="prompt" class="form-control custom-input " maxlength="140">
        </div>
        <button type="submit" class="btn btn-primary custom-send-button">Send</button>
        <button type="button" class="btn btn-primary custom-send-button" onclick="window.location.href='/'">Clear Conversation</button>
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

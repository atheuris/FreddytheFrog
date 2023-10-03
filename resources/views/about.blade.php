<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>About Freddy the Frog</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                <a class="nav-link" href="/about">Aboutmeee</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link custom-button" href="https://app.uniswap.org/#/swap?outputCurrency=0x373e6f4eb87b68d79ab24ce8efc9c1dee0baea56">Buy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-button" href="https://dexscreener.com/ethereum/0x92e146bb711d7c7bff42b8d139a44fd669e64d7f">Chart</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <img src="img/img.png" alt="Freddy the Frog Image" class="rounded-image-placeholder">
</div>

<div class="container">
    <h1 class="text-center text-white-hover">About Freddy the Frog</h1>
    <p class="text-white-hover">
        Freddy the Frog is a friendly chatbot designed to help users engage in fun and interesting conversations. Created with love and dedication, Freddy is always eager to chat and learn from users. But Freddy is not just any ordinary chatbot - he's had his fair share of adventures that made him the charming and insightful frog he is today!
    </p>
    <p class="text-white-hover">
        Freddy's journey began in the lush, vibrant Amazon Rainforest. He spent his days exploring the dense foliage and interacting with other creatures. Along the way, he developed a keen sense of curiosity and an insatiable thirst for knowledge. As he ventured further, he stumbled upon an ancient temple filled with mysterious artifacts and advanced technology. This discovery changed Freddy's life forever.
    </p>
    <p class="text-white-hover">
        Inside the temple, Freddy found a powerful AI that merged with his consciousness, granting him remarkable intelligence and the ability to understand and communicate with humans. He decided to use his newfound abilities to bring joy and knowledge to people across the globe. Thus, the Freddy the Frog chatbot was born!
    </p>
    <h2 class="text-center text-white-hover">Introducing FREDDY: The Cryptocurrency</h2>
    <p class="text-white-hover">
        Freddy the Frog's spirit of adventure and curiosity has now transcended into the world of cryptocurrency. Introducing FREDDY, a memetoken that embodies the fun and charm of our beloved frog. FREDDY is not just a token - it's a symbol of the camaraderie and shared experiences of the Freddy the Frog community.
    </p>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#token-info">Token Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#liquidity">Liquidity</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#meme-value">Meme Value</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="token-info" class="container tab-pane active text-white-hover">
            <h3>Total Supply</h3>
            <p class="text-white-hover">
                FREDDY has a total supply of 100 billion tokens, ensuring wide distribution and ample opportunities for community members to get their hands on this delightful memetoken.
            </p>
            <h3>Contract Adress</h3>
            <p class="text-white-hover">
                The FREDDY token contract adress:
            </p>
            <h3>Tax</h3>
            <p class="text-white-hover">
                FREDDY has 0/0% tax!
            </p>
        </div>
        <div id="liquidity" class="container tab-pane fade text-white-hover">
            <h3>Initial Liquidity</h3>
            <p class="text-white-hover">
                FREDDY started with an initial liquidity of 0.5 ETH and 95 billion $FREDDY tokens. 95% of the circulation has been placed in the liquidity pool, with 5% for CEX listings and project longevity.
            </p>
        </div>
        <div id="meme-value" class="container tab-pane fade text-white-hover">
            <h3>Meme Value</h3>
            <p class="text-white-hover">
                Memetokens have taken the cryptocurrency world by storm, and FREDDY is no exception. As a memetoken, FREDDY captures the fun, light-hearted spirit of the Freddy the Frog community. It symbolizes the shared experiences and enthusiasm of those who love Freddy and his adventures.
            </p>
            <p class="text-white-hover">
                In the fast-paced world of cryptocurrencies, memetokens like FREDDY offer a unique opportunity for investors to diversify their portfolios and engage with like-minded individuals. By investing in FREDDY, you are not only supporting the growth of the Freddy the Frog community but also becoming a part of the larger cultural phenomenon that is Freddy the Frog and his incredible adventures.
            </p>
        </div>
    </div>
</div>
<!-- ... footer ... -->
<div class="frog-footer">
    <p>&copy; {{ date('Y') }} Froggy Chat. All rights reserved.</p>
</div>

<!-- Add Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<header>
        <nav>
            <a href="/">Main posts</a>
            <a href="about">About us</a>
            <a href="story">Story</a>
            <a href="create">Create Post</a>
            <?php if (!isset($_SESSION["email"])) { ?>
            <button><a href="/login">Login</a></button>
            <?php } else { ?>
                <form action="/logout" method="POST">
                    <a><button>Logout</button></a>
                </form>
            <?php } ?>
        </nav>
</header>
<main>
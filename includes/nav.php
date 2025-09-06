<nav>
    <ul>
        <li><a href="/"><i class="fa-regular fa-house"></i>&nbsp;Home</a></li>
        <li><a href="about.php"><i class="fa-regular fa-face-smile"></i>&nbsp;About Me</a></li>
        <li><a href="blog.php"><i class="fa-regular fa-newspaper"></i>&nbsp;Blog</a></li>
        <li><a href="contact.php"><i class="fa-regular fa-envelope"></i>&nbsp;Contact Me</a></li>
        <li><a href="portfolio.php"><i class="fa-regular fa-file-code"></i>&nbsp;Portfolio</a></li>

        <?php if ($_SESSION['is_logged_in']): ?>
            <li><a href="logout.php"><i class="fa-regular fa-file-code"></i>&nbsp;Logout</a></li>
        <?php else: ?>
            <li><a href="login.php"><i class="fa-regular fa-file-code"></i>&nbsp;Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
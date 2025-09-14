<?php

session_start();

// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Quiz';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
    <link rel="stylesheet" href="./css/quiz.css">
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <h1>Hello, World!</h1>
            <img src="/images/happy-stick.jpg" alt="smiling stick figure" class="header-img">
        </header>

        <!-- NAVBAR -->
        <?php include './includes/nav.php'; ?>

        <!-- MAIN -->
        <main>
            <!-- ARTICLE -->
            <article>
                <h2>Quiz Game</h2>
                <div class="quizFrame">
                    <div class="quizQuestion" id="quizQuestion">Main body of the question itself...</div>
                    <div class="quizAnswers">
                        <div class="quizAnswerBox">
                            <input type="radio" name="quizAnswer" id="answerA" value="quizAnswerA"><label for="quizAnswerA" id="quizAnswerALabel">Quiz Answer A</label>
                        </div>
                        <div class="quizAnswerBox">
                            <input type="radio" name="quizAnswer" id="answerB" value="quizAnswerB"><label for="quizAnswerB" id="quizAnswerBLabel">Quiz Answer B</label>
                        </div>
                        <div class="quizAnswerBox">
                            <input type="radio" name="quizAnswer" id="answerC" value="quizAnswerC"><label for="quizAnswerC" id="quizAnswerCLabel">Quiz Answer C</label>
                        </div>
                        <div class="quizAnswerBox">
                            <input type="radio" name="quizAnswer" id="answerD" value="quizAnswerD"><label for="quizAnswerD" id="quizAnswerDLabel">Quiz Answer D</label>
                        </div>
                    </div>
                    <button class="quizButton" id="quizButton" disabled>Submit</button>
                    <input type="hidden" name="correctAnswer" id="correctAnswer" value="">
                    <input type="hidden" name="answerText" id="answerText" value="">
                    <div class="quizSource" id="quizSource">Question Source</div>
                </div>
            </article>

            <!-- SECTION -->
            <section></section>
        </main>

        <!-- ASIDE -->
        <aside></aside>

        <!-- FOOTER -->
        <footer>
            <?php include './includes/footer.php'; ?>
            <script src="./js/script.js"></script>
            <script src="./js/quiz.js"></script>
        </footer>
    </div>
</body>

</html>
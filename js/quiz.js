let quizButton = document.getElementById("quizButton");
let quizQuestion = document.getElementById("quizQuestion");
let quizAnswerALabel = document.getElementById("quizAnswerALabel");
let quizAnswerBLabel = document.getElementById("quizAnswerBLabel");
let quizAnswerCLabel = document.getElementById("quizAnswerCLabel");
let quizAnswerDLabel = document.getElementById("quizAnswerDLabel");
let correctAnswer = document.getElementById("correctAnswer");
let answerText = document.getElementById("answerText");
let quizSource = document.getElementById("quizSource");

let quizAnswerRadioButtons = document.querySelectorAll(
    'input[name="quizAnswer"]'
);

// enable button when an answer is selected
quizAnswerRadioButtons.forEach((answer) => {
    answer.addEventListener("change", () => {
        quizButton.disabled = false;
    });
});

function getFirstQuestion() {
    // nochache used to prevent browser from using cached results instead of loading new ones.
    fetch("quiz2.php?nochache=" + Date.now())
        .then((response) => response.json())
        .then((data) => {
            quizSource.innerHTML = `Source: ${data.source}`;
            quizQuestion.innerHTML = data.question;
            quizAnswerALabel.innerHTML = data.answerA;
            quizAnswerBLabel.innerHTML = data.answerB;
            quizAnswerCLabel.innerHTML = data.answerC;
            quizAnswerDLabel.innerHTML = data.answerD;
            correctAnswer.value = data.correctAnswer;
            answerText.value = data.answerText;

            // reset the radio buttons and the submit button
            quizAnswerRadioButtons.forEach((btn) => (btn.checked = false));
            quizButton.disabled = true;
        });
}

function getNextQuestion() {
    // these two lines are to prevent the function from proceeding if none of the radio buttons are checked.
    let selected = document.querySelector('input[name="quizAnswer"]:checked');
    if (!selected) return;

    // nochache used to prevent browser from using cached results instead of loading new ones.
    fetch("quiz2.php?nochache=" + Date.now())
        .then((response) => response.json())
        .then((data) => {
            quizSource.innerHTML = `Source: ${data.source}`;
            quizQuestion.innerHTML = data.question;
            quizAnswerALabel.innerHTML = data.answerA;
            quizAnswerBLabel.innerHTML = data.answerB;
            quizAnswerCLabel.innerHTML = data.answerC;
            quizAnswerDLabel.innerHTML = data.answerD;
            correctAnswer.value = data.correctAnswer;
            answerText.value = data.answerText;

            // reset the radio buttons and the submit button
            quizAnswerRadioButtons.forEach((btn) => (btn.checked = false));
            quizButton.disabled = true;
        });
}

function validateAnswer() {
    let selected = document.querySelector('input[name="quizAnswer"]:checked');
    if (selected.id == correctAnswer.value) {
        alert(`That is correct. ${answerText.value}`);
    } else {
        alert(`That is incorrect. ${answerText.value}`);
    }
    getNextQuestion();
}

// get initial question
getFirstQuestion();

quizButton.addEventListener("click", validateAnswer);

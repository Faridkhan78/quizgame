<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .correct-answer {
            background-color: lightgreen;
            /* Correct answer color */
        }

        .incorrect-answer {
            background-color: lightcoral;
            /* Incorrect answer color */
        }
    </style>
</head>

<body>
    <form>
        <div class="quiz-options">
            <input type="radio" id="one-a" name="yes-1" required value="correct">
            <label for="one-a"><span class="alphabet">A</span> Cascading Style Sheets</label>

            <input type="radio" id="one-b" name="yes-1" value="incorrect">
            <label for="one-b"><span class="alphabet">B</span> Creative Screen Styling</label>

            <input type="radio" id="one-c" name="yes-1" value="incorrect">
            <label for="one-c"><span class="alphabet">C</span> Cascading Style Screen</label>
        </div>
        <a id="btn" onclick="goToNextSection()">Next</a>
    </form>


</body>

</html>


<script>
    function goToNextSection() {
        // Get all the radio buttons in the group
        const options = document.getElementsByName('yes-1');
        let selectedOption;

        // Loop through to find the selected radio button
        for (let i = 0; i < options.length; i++) {
            if (options[i].checked) {
                selectedOption = options[i];
                break;
            }
        }

        // If an option is selected, check if it's correct or incorrect
        if (selectedOption) {
            const label = document.querySelector(`label[for="${selectedOption.id}"]`);

            // If the selected value is correct
            if (selectedOption.value === 'correct') {
                label.classList.add('correct-answer');
            } else {
                label.classList.add('incorrect-answer');
            }
        }
    }
</script>

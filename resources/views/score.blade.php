<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            /* background-color: #f0f2f5; */
            /* background-color: #abbbd3; */
            background-color: #5988ce;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-container {
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0.5, 0.5, 0.5, 1.0);
            max-width: 400px;
            text-align: center;
            margin: 20px;
        }

        .result-container h1 {
            font-size: 48px;
            color: #4caf50;
        }

        .result-container p {
            font-size: 20px;
            color: #555;
        }

        .result-container .score {
            font-size: 24px;
            color: #333;
            margin: 15px 0;
        }

        .result-container .percentage {
            font-size: 37px;
            font-weight: bold;
            margin: 15px 0;
        }

        .result-container .message {
            font-size: 22px;
            font-weight: 500;
            color: #4caf50;
            margin-bottom: 20px;
        }

        .result-container .try-again-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .result-container .try-again-btn:hover {
            background-color: #43a047;
        }
    </style>
</head>
<body>

    <div class="result-container">
        <h1>Quiz Completed!</h1>
        {{-- <p class="score">Your Score: {{ $score }} / {{ $totalQuestions }}</p> --}}
        {{-- <p class="percentage">{{ round($percentage, 2) }}%</p>
        <p class="message">{{ $message }}</p> --}}
        <p>Your Score: {{session()->get('correct_answer')}}/8</p>
        {{-- <p>{{session()->get('correct_answer')}}</p> --}}
        
        

        <!-- Try Again Button -->
        {{-- <a href="{{ route('quiz.show') }}" class="try-again-btn">Try Again</a> --}}
    </div>
    

</body>
</html>

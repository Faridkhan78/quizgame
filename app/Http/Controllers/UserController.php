<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function showQuiz()
    {
        // Fetch only approved posts (status = 1)
        // $user = User::all(); 
        $users = User::paginate(1);
        if (request()->getrequestUri() == '/quize' && session()->get('correct_answer')) {
            session()->forget('correct_answer');
        }
        // If no approved posts are found, redirect to the 'postviewall' route
        // if ($card->isEmpty()) {
        //     return redirect()->route('postviewall');
        // }

        // Pass the approved posts to the view
        return view('quize', compact('users'));
    }
    public function checkans(Request $request)
{
    $id = $request->input('questionid');
    $answer = $request->input('answer');

    $question = User::find($id);

    // Check if the question exists
    if (!$question) {
        return response()->json([
            'status' => 'error',
            'message' => 'Question not found.',
        ], 404);
    }

    $correct = $question->correctAnswer == $answer;

    // Initialize or retrieve the correct answers count from the session
    if (session()->get('correct_answer')) {
        $correct_ans = session()->get('correct_answer');
    } else {
        $correct_ans = 0;
    }
    if ($correct) {
        $correct_ans += 1; // Increment the count for a correct answer
        session()->put('correct_answer', $correct_ans); // Correct the key here
        return response()->json([
            'status' => 'success',
            'question' => $question,
            'correct_count' => $correct_ans, // Optionally return the current count
        ]);
    } else {
        return response()->json([
            'status' => 'fail',
        ]);
    }
}


    // Set the timer for each question in the quiz

    // public function setTimer(Request $request)
    // {
    //     // Fetch the quiz questions and any related data from the database
    //     $users = User::all(); // Assuming you're fetching questions or users

    //     // Define the timer duration for each question (e.g., 20 seconds)
    //     $timerDuration = 20; // 20 seconds per question

    //     // Pass both the quiz data and timer duration to the view
    //     return view('quize', [
    //         'users' => $users,
    //         'timerDuration' => $timerDuration, // Pass the timer duration to the view
    //     ]);
    // }
    //get the scores for the quiz questions
    public function submitAnswer(Request $request)
    {
        $users = User::all();
        // dd($users);
        $score = 0;

        // Loop through each question and check the answers
        foreach ($users as $index => $user) {
            // Assuming 'answer' is sent as an array of selected answers
            $selectedAnswer = $request->input('answer')[$index]; // Get the answer for the current question

            if ($selectedAnswer == $user->correct_answer) {
                $score++; // Increment score for correct answer
            }
        }

        // Return the score to the view
        
        return response()->json(['score' => $score]);
    }
    
}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    // Route::get('/', function () {
    //     return view('tasks', [
    //         'tasks' => Task::orderBy('created_at', 'asc')->get()
    //     ]);
    // });

    /**
     * Home view
     */
    Route::get('/', function () {
        return view('home');
    });
    /**
     * does this work
     */
    Route::get('/resume', function () {
        return view('resume');
    });
    /**
     * does this work
     */
    Route::get('/project/{name?}', function ($name = 'null') {
        $projects = [
            'bobross' => [
                'title' => 'Bob Ross Data',
                'github' => 'https://github.com/zjswanson/d4',
                'demo' => 'https://bob-ross-data.firebaseapp.com/',
                'img' => '/img/rossScreen.png',
                'description' => "Bob Ross Data was created as a group cap-off project for our Javascript course at Epicodus. We were interested in learing how to create interactive data visualization using the D3 library. We found the dataset of Mr. Ross's work and couln't resist using it to highlight D3's capabilitites.",
                'highlights' => "Bob Ross Data is built in Angular2 and heavily features the D3.js data visualization library. Highlights include the use of D3's transitions to make the graphs dynamic as the user changes the inputs. I'm especially poud of the interaction we built between Angular and D3's data binding capabilities. The visualization methods are wrapped in callbacks that allow for dynamically re-drawing DOM and SVG elements as the user chooses to access different portions of the dataset."
            ],
            'adventure' => [
                'title' => 'Adventurer\'s Inn',
                'github' => 'https://github.com/zjswanson/Adventurers-Guild',
                'demo' => 'https://adventurers-guild-cf461.firebaseapp.com/',
                'img' => '/img/adventureScreen.png',
                'description' => "Adventurer's Guild was built as one of my weekly code reivews at Epicodus. The assignment was to build team-manager software that an organizer of a sports club might use. I delivered a tolkein-inspired version: a web app for inkeepers to manage all the adventurers that come through their establishment on the way to fortune and glory..",
                'highlights' => "The Adventurer's Guild is built in Angular2 using a Firebase datastore. Although the user interface is simple, the app makes use of some of Angular and Firebase's excellent data features, including two-way data binding and realtime subscription to the datastore. I am especially proud of the add/edit feature on the \"innkeeper\" tab. User's can create new database entries or edit existing ones using the same form without reloading. The app makes sure that they are subscribed to the right portion of the database or writing new information as appropriate."
            ],
            'hangman' => [
                'title' => 'Hangman Wars',
                'github' => 'https://github.com/zjswanson/hangman-wars-1',
                'demo' => '',
                'img' => '/img/hangmanScreen.png',
                'description' => "Hangman War's is a dynamic twist on the classic Hangman game. Players take the role of a general leading their army through a war of words. Each level, they must play multiple rounds of hangman to guess each unique word in a passage of classic literature. Each wrong guess kills a solider, lowering their chances of capturing the level's castle. Each corect guess brings the player closer to conquering the world of hangman!",
                'highlights' => "Hangman Wars us built on three sections: a simple mySQL database of literature passages, a PHP backend that maintains the game state and creates the views, and a javascript front end that controls user interactivity. The app is built on MVC architechure using Silex, a lightweight version of symfony2, and Twig templates. The backend does all of the parsing necessary to prepare a javascript object to control each round of play, and then the client-side javascript handles the user interaction."
            ]
        ];

        return view('project', ['project' => $projects[$name]]);
    });

    /**
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    });

    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();

        return redirect('/');
    });
});

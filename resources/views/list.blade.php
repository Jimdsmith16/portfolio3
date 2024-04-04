<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/styles.css?v=').time()}}" rel="stylesheet">
    <head>
        <title>Project Home</title>
    </head>
    <body>
        <header id="main-header">
            @if (Route::has('login'))
            <nav>
                <ul>
                    @auth
                    <li><a href="{{ url('logout') }}">Log Out</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Log In</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a><li>
                    @endif
                    @endauth
                </ul>
            </nav>
            @endif
        </header>
        <section>
            <h2>List Projects: </h2>
            <table>
                <thead>
                    <tr>
                        <th>Project Title</th>
                        <th>Start Date</th>
                        <th>Description</th>
                        <th>Access</th>
                        <th>Remove</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{$project->title}}</td>
                    <td>{{$project->start_date}}</td>
                    <td>{{$project->description}}</td>
                    <td><a href="{{url('show', ['id' => $project->pid])}}">Access</a></td>
                    @if(Auth::user())
                        <td><a href="{{url('delete', ['id' => $project->pid])}}">Remove</a></td>
                        <td><a href="{{route('edit_project', ['id' => $project->pid])}}">Edit</a></td>
                    @else
                        <td>Log In Required</td>
                        <td>Log In Required</td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
        </section>
        <section>
            <h2>Additional Options: </h2>
            <section id="options">
                <ul>
                    <li><a href="{{url('title-search-form')}}">Search By Title</a></li>
                    <li><a href="{{url('start-date-search-form')}}">Search By Start Date</a></li>
                    @if(Auth::user())
                        <li><a href="{{url('add-form')}}">Add</a></li>
                    @else
                        <li><p>Add (Log In Required)</p></li>
                    @endif
                </ul>
            </section>
        </section>
    </body>
<html>
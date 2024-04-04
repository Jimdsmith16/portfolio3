<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/styles.css?v=').time()}}" rel="stylesheet">
    <head>
        <title>Project {{$project->pid}}</title>
    </head>
    <body>
        <header id="main-header">
            <nav>
                <ul>
                    <li><a href="{{route('list_projects')}}">Home</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <h1>Project Title: {{$project->title}}</h1>
            <ul>
                <li>Project Start Date: {{$project->start_date}}</li>
                <li>Project End Date: {{$project->end_date}}</li>
                <li>Project Phase: {{$project->phase}}</li>
                <li>Project Description: {{$project->description}}</li>
                <li>User: {{$project->user->name}}</li>
                <li>User Email: {{$project->user->email}}</li>
            </ul>
        </section>
    </body>
</html>
<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/styles.css?v=').time()}}" rel="stylesheet">
    <head>
        <title>Add Project</title>
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
            <h1>Add Form</h1>
            <form method="post" action="{{url('store-form')}}" id="form">
                @csrf
                <label for="title">Title: </label>
                <input type="text" id="title" name="title" required />
                <br><br>
                <label for="start_date">Start Date: </label>
                <input type="date" id="start_date" name="start_date" />
                <label for="end_date">End Date: </label>
                <input type="date" id="end_date" name="end_date" />
                <br><br>
                <label for="phase">Phase: </label>
                <select id="phase" name="phase">
                    <option value="design">Design</option>
                    <option value="development">Development</option>
                    <option value="testing">Testing</option>
                    <option value="deployment">Deployment</option>
                    <option value="complete">Complete</option>
                </select>
                <br><br>
                <label for="description">Description: </label>
                <textarea id="description" name="description" rows="3" cols="30">Project Description</textarea>
                <br><br>
                <label for="username">User Name: </label>
                <input type="text" id="username" name="username" required />
                <br><br>
                <button type="submit">Submit</button>
            </form>
        </section>
    </body>
</html>
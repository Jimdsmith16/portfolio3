<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/styles.css?v=').time()}}" rel="stylesheet">
    <head>
        <title>Search by Title</title>
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
            <h1>Search by Title Form</h1>
            <form method="post" action="{{url('title-search')}}" id="form">
                @csrf
                <label for="title">Title: </label>
                <input type="text" id="title" name="title" required />
                <br><br>
                <button type="submit">Search</button>
            </form>
        </section>
    </body>
</html>
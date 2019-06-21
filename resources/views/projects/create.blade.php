<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    </head>
    <body>

        <form method="POST" action="/projects" class="container" style="padding-top: 4px">
            @csrf
            <h1 class="heading is-1">Create a Project</h1>
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" class="input" name="title" placeholder="Title">
                </div>
            </div>
            <div class="field">
                <label for="description" class="label">Description</label>
                <div class="control">
                    <input type="text" class="input" name="description" placeholder="Description">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Create Project</button>
                </div>
            </div>
        </form>
    </body>
</html>

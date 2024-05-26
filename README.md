<h1>To-Do List Application</h1>

<h3>Description</h3>
<p>This is a simple To-Do List application built with Laravel, designed to demonstrate basic CRUD (Create, Read, Update, Delete) functionalities. Users can create tasks with a title and description, mark them as completed or incomplete, and edit or delete them. The application uses a SQLite database for simplicity and follows Laravel’s best practices and coding standards.
</p>

<h3>Features</h3>
    <p>Create tasks with a title and description.</p>
    <p>Mark tasks as completed or incomplete.</p>
    <p>Edit and delete tasks.</p>
    <p>Display a list of all tasks with their titles and statuses.</p>
    <p>Basic styling to distinguish between completed and incomplete tasks.</p>

<h3>Requirements</h3>
<ul>
    <li>PHP (latest stable version)</li>
    <li>Composer</li>
    <li>Laravel (latest stable version)</li>
    <li>SQLite</li>
</ul>

<h3>Setup Instructions</h3>
<ol>
    <li>Clone the Repository</li> 
        <p>git clone https://github.com/rahathossaino/todo-list.git</p>
        <p>cd todo-list</p>
    <li>Install Dependencies</li>
        <p>composer install</p>
    <li>Run Migrations</li>
        <p>php artisan migrate</p>
    <li>Serve the Application</li>
    <p>php artisan serve</p>
    <p>Visit http://127.0.0.1:8000 in your browser to see the application.</p>
</ol>


<h3>Usage</h3>

<ol>
    <li>Create Task:</li>
        <p>URL: /tasks/create</p>
        <p>Description: Displays the task creation form.</p>
    <li>View Tasks:</li>
        <p>URL: /tasks</p>
        <p>Description: Displays a list of all tasks with their statuses.</p>
    <li>View Task:</li>
        <p>URL: /tasks/{task}</p>
        <p>Description: Displays all properties of a specific task</p>    
    <li>Edit Task:</li>
        <p>URL: /tasks/{task}/edit</p>
        <p>Description: Displays the task edit form for a specific task.</p>
    <li>Delete Task:</li>
        <p>URL: /tasks/{task}</p>
        <p>Description: Deletes a specific task.</p>
    <li>Mark as Completed/Incomplete:</li>
        <p>URL: /tasks/status/{id}</p>
        <p>Description: Updates the status of a specific task (marks as completed or incomplete).</p>
</ol>

<h3>Code Overview</h3>
    <p>Routes: Defined in routes/web.php.</p>
    <p>Controllers: TaskController handles CRUD operations.</p>
    <p>Views: Blade templates in resources/views for the user interface.</p>
    <p>Models: Task model in app/Models/Task.php.</p>
    <p>Migrations: Database schema defined in database/migrations/.</p>
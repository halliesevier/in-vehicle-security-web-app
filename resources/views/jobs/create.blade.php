@extends('layouts.layouts')

@section('content')

<style>
    .wrapper {
        margin-top: 10%;
        margin-left: 30%;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 40%;
    }

    input[type=text] {
        width: 100%;
        /* Full width */
        padding: 12px;
        /* Some padding */
        border: 1px solid #ccc;
        /* Gray border */
        border-radius: 4px;
        /* Rounded borders */
        box-sizing: border-box;
        /* Make sure that padding and width stays in place */
        margin-top: 6px;
        /* Add a top margin */
        margin-bottom: 16px;
        /* Bottom margin */
        resize: vertical
            /* Allow the user to vertically resize the textarea (not horizontally) */
    }

    /* Style the submit button with a specific background color etc */
    input[type=submit] {
        background-color: #4F2984;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        margin-top: 20px;
        width: 100%;
        cursor: pointer;
    }

    /* When moving the mouse over the submit button, add a darker green color */
    input[type=submit]:hover {
        background-color: #800080;
    }
</style>
<div>
    <div class="wrapper create-job">
        <h1>Create a New Job</h1>
        <form class="form" action="/jobs" method="POST" enctype="multipart/form-data">
            @csrf
            <label for=" name">Your name:</label>
            <input type="text" id="name" name="name">
            <label for="email">Your email:</label>
            <input type="text" id="email" name="email">
            <input type="file" name="file">
            <input type="submit" value="Create Job">
        </form>
    </div>
</div>
@endsection
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

    /* Style the submit button with a specific background color etc */
    button {
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
    button:hover {
        background-color: #800080;
    }
</style>
<div>
    <div class="wrapper create-job">
        <h1>Download your result.</h1>
        <p>Result2.txt</p>
        <a href="/results/1637350643_Rajat Bhattaraidegreeplan_results.txt" download>
            <button type="button">Download</button>
        </a>
    </div>
</div>
@endsection
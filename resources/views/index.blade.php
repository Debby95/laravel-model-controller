@extends('layouts\app')

<div class="container">
    <h1 class="text-center">Movies</h1>
    <div class="row row-cols-5 gy-3">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card" >
                    <div class="card-body">
                    <h5 class="card-title">Title: {{$movie["title"]}}</h5>
                    <p class="card-text">Original title: {{$movie["original_title"]}} <br> Nationality: {{$movie["nationality"]}} <br> Date: {{$movie["date"]}} <br> Vote: {{$movie["vote"]}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .card {
        width: 250px;
        height: 250px;
    }
</style>


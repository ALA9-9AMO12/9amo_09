@extends('layout')


@section('content')

    <br><h1>Contact</h1>
    <br><hr>
    <div class="container">
        <form action="/contact" method="POST">
            <div class="form-group">
                <label for="exampleInputName1">Naam</label>
                <input type="name" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We zullen uw e-mail nooit met iemand anders delen.</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Bericht</label>
                <textarea name="bericht" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            @csrf

            <button type="submit" class="btn btn-outline-secondary">Sturen</button>

        </form>


    </div>

@endsection





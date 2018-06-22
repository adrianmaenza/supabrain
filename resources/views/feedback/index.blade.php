@extends('layouts.master')
@section('title', 'Feedback')
@section('content')

<div class="container">
    <div class="row grey lighten-5 z-depth-2 down-20 feedback">
        <div class="section-heading teal-title">
            <p class="truncate">Please fill in the form below to share your thoughts and feedback.</p>
        </div>
        <div class="col l6 m8 s12 offset-l3 offset-m2 down-20">
            <div class="card">
                <form action="feedback.php" method="post">
                    <div class="card-content">

                        <div class="input-field">
                            <input type="text" name="fname" placeholder="Name" class="" required>
                        </div>
                        
                        <div class="input-field">
                            <input type="text" name="surname" placeholder="Surname" class="" required>
                        </div>
                        
                        <div class="input-field">
                            <input type="hidden" name="subject" value="Feedback">
                        </div>
                        
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Your email - example@example.com" class="" required>
                        </div>
                        
                        <div class="input-field">
                            <textarea name="body" placeholder="Please type your feedback here..." class="materialize-textarea" spellcheck required></textarea>
                        </div>   
                        
                    </div>

                    <div class="card-action">
                        <input type="submit" value="send" class="btn blue" id="send" class="down-20">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
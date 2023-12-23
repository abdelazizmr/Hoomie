@extends('layouts.base')

@section('content')
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    }

    .container {
        margin-top: 20px;
    }

    .panel-heading {
        background-color: #428bca;
        color: #ffffff;
    }

    .panel-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    textarea.form-control {
        resize: vertical;
    }

    .btn-primary {
        background-color: #428bca;
        color: #ffffff;
    }

    .btn-primary:hover {
        background-color: #3071a9;
        color: #ffffff;
    }

    /* Style pour l'image ou la vidéo actuelle */
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group img, .form-group video {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
    }

    /* Style pour les champs de fichier */
    input[type="file"] {
        margin-top: 5px;
    }

    /* Ajoutez d'autres styles en fonction de vos besoins */

</style>
<br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Place</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('places.update', $place->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $place->description }}</textarea>
                            </div>

                            @if($place->image)
                                <div class="form-group">
                                    <label>Current Image:</label>
                                    <img src="{{ asset($place->image) }}" alt="Current Image" style="max-width: 100%; height: auto;">
                                </div>
                            @elseif($place->video)
                                <div class="form-group">
                                    <label>Current Video:</label>
                                    <video width="100%" height="300" controls>
                                        <source src="{{ asset($place->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif

                            <!-- Add other form fields as needed -->

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <div class="form-group">
                                <label for="video">Video:</label>
                                <input type="file" class="form-control" id="video" name="video">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Place</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

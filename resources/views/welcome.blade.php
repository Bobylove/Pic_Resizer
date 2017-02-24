<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pic Resizer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body>

    <div class="ui top menu">


        <div class="item">
            <h1 class="header">Pics Resizer</h1>
        </div>

    </div>

    <img class="ui rounded  massive bordered image" src="image{{$random}}.jpg" alt="image aleatoire">
    <br>
    

    <div class="inputCopyPosition"> 

        <div class="ui  huge action input">
            <input type="text" value="http://ww.short.url/c0opq">
            <button class="ui teal right labeled icon button">
                <i class="copy icon"></i>
                Copy
            </button>
        </div>
    </div>

    <div class="ui  right fixed vertical menu">

        <div class="ui centered grid">


        <div class="formul">
                <form id="resize" action="/" method="POST" class="ui form">
                    {{csrf_field()}}
                    <div class="item">

                        <div class="field">
                            <label for="largeur">Largeur</label>
                            <input type="text" name="width" id="width" placeholder="Largeur">
                        </div>
                    </div>
                    <div class="item">
                        <div class="field">
                            <label for="longueur">Longueur</label>
                            <input type="text" name="heigth" id="heigth" placeholder="Longueur">
                        </div>
                        <div class="item">
                            <input type="submit" class="ui teal button" value="Valider">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>

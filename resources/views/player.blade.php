<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card p-4 shadow">
                <h3 class="text-center mb-4">Player Information</h3>
                <form method="POST" action="{{ route('player.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="player_name">Player Name:</label>
                        <input type="text" name="player_name" id="player_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="birth_place">Birth Place:</label>
                        <input type="text" name="birth_place" id="birth_place" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="team_name">Team Name:</label>

                        <select name="team_id" class="form-select">
                            @foreach($team as $team)
                                <option value="{{$team->id}}">
                                    {{$team->team_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="birth_day">Birth Day:</label>
                        <input type="datetime-local" name="birth_day" id="birth_day" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="player_role">Player Role:</label>
                        <input type="text" name="player_role" id="player_role" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="batting_style">Batting Style:</label>
                        <input type="text" name="batting_style" id="batting_style" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="bolling_style">Bolling Style:</label>
                        <input type="text" name="bolling_style" id="bolling_style" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>

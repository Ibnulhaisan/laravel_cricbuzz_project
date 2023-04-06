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

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card p-4 shadow">
                <h3 class="text-center mb-4">Team Information</h3>
                <form method="POST" action="{{ route('team.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="team_name">Team Name:</label>

                    <select name="team_name" id="team_name" class="form-control">
                        @foreach($team_names as $team_name)
                            <option value="{{$team_name}}" @if($team_name == $selectedData ) selected @endif>
                            {{$team_name}}
                            </option>
                        @endforeach
                    </select>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Many to Many Relationship</title>
    <style>
        body{
            font-size: 18px;
        }
    </style>
</head>
<body>
    <table border="1" width="700" align="center">
        @foreach ($doctors as $doctor)
            <tr>
                <td>
                    <strong>{{ $doctor->name }}</strong>
                    @foreach($doctor->hospitals as $hospital)
                    <div>{{ $hospital->name }} #{{ $hospital->id }}</div>
                    <div style="font-size: 14px;">CSD: {{ $hospital->pivot->contract_start_date }}</div>
                    <div style="font-size: 14px;">CED: {{ $hospital->pivot->contract_end_date }}</div>
                    <div style="font-size: 14px;">{{ ($hospital->pivot->isPartTime == 1) ? 'Full Time' : 'Part Time'}}</div>

                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
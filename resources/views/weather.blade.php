<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Weather App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">

        <h1>Weather App</h1>

        <form method="get" action="{{ route('weather') }}" class="form">

            <label for="city" class="label">Enter city name</label>
            <input type="text" name="city" id="city" class="input" placeholder="e.g., London"
                autocomplete="off" value="{{ $city }}" />

            <button type="submit" class="btn btn-default">Get Weather</button>
        </form>

        @if ($error)
            <div class="alert" style="color: var(--accent-1); margin-top: 1em;">
                {{ $error }}
            </div>
        @elseif (!empty($weatherData))
            <h2>Weather in {{ $weatherData['name'] }}</h2>
            <div style="margin-top: 1em;">
                <p><strong>Temperature:</strong> {{ $weatherData['main']['temp'] }} K</p>
                <p><strong>Humidity:</strong> {{ $weatherData['main']['humidity'] }}%</p>
                <p><strong>Condition:</strong> {{ $weatherData['weather'][0]['description'] }}</p>
                <p><strong>Wind Speed:</strong> {{ $weatherData['wind']['speed'] }} m/s</p>
            </div>
        @endif

    </div>

</body>

</html>

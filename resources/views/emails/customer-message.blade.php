<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOLO</title>
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
</head>

<body>
    <div class="email-header">
        {{-- <img src="{{ asset('assets/img/folo-splash-logo-white.png') }}" alt="Logo FOLO Education"> --}}
        <h2>Nouveau message d'un visiteur</h2>
    </div>
    <div class="email-content">
        <p><strong>De:</strong> {{ $customer_name }}</p>
        <p><strong>Email:</strong> {{ $customer_email }}</p>
        <p><strong>Message:</strong><br>{{ $customer_message }}</p>
    </div>
    <div class="email-footer">
        <a href="mailto:{{ $customer_email }}">Cliquez ici pour répondre</a>
    </div>

</body>

</html>

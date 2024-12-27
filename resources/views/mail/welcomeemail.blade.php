<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>

    <div class="container bg-info">
        <div class="row">
            <div class="col-8 mx-auto shadow m-5 border border-5 border-secondary">
                <h1 class="text-center pt-3">Manish Portfolio</h1>
                <hr>
                <div class="row">
                    <h2 class="pb-5">Subject : {{ $subject }}</h5>

                        <br><br>
                        <h2 class="pb-3 text-center text-secondary">Email Details</h2>
                        <p><strong>Subject:</strong> {{ $subject }}</p>
                        <p><strong>Name:</strong> {{ $sub }}</p>
                        <p><strong>Email:</strong> {{ $email }}</p>
                        <p><strong>Message:</strong></p>
                        <div class="alert alert-info p-3">
                            {{ $mailmessage }}
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Hello Mr/Mrs,  {!! $name !!}</h3></div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif
                    <br>
                    <h4>Thank you for your message,</h4>
                    <p>We will try to answer your message as soon as possible.</p>
                    <br>
                    <br>
                    <p>Thanks & Best Regards</p>
                    <h4>Mission Green</h4>
                    <a> </a>
                    <p></p>
                    <p> Call:,</p>
                    <p>Call:</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

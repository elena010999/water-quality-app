<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="Stylesheet" href="/css/banner.css" />


<body>
    @include('navbar')
    @include('loader')
    <div class="banner">
        <img src="/images/banner.jpg" style="width:100%;height:200px;">
        <div class="centered">Write us a message and expect to hear from us soon</div>
    </div>
    <div id="overviews" class="section-lb">
        <div class="container">

            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            <div class="contact-form-container">

                <form action="" method="post" action="{{ route('contact.save') }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name">

                        @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" size="30" required>

                        @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">

                        @if ($errors->has('phone'))
                        <div class="alert alert-danger">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject">

                        @if ($errors->has('subject'))
                        <div class="alert alert-danger">
                            {{ $errors->first('subject') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message" id="message" rows="5"></textarea>

                        @if ($errors->has('message'))
                        <div class="alert alert-danger">
                            {{ $errors->first('message') }}
                        </div>
                        @endif
                    </div>

                    <input type="submit" name="send" value="Send" class="btn  btn-block" style="background-color: #1f1f1f;color:white">
                </form>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
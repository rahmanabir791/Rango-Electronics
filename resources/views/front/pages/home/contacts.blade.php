@extends('back.front.master')
@section('title')
    Contacts
@endsection
@section('body')
    <div class="container">




        <div class="row mt-3">
            <div class="col-md-8">
                <h2>How to Find Us</h2>
                <div class="map">
                    <div class="img_block fleft">
                        <figure class="img_inner">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.601421368312!2d90.3893401!3d23.7509325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad83526c894485f0!2sCity%20University!5e0!3m2!1sen!2sbd!4v1675606333535!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </figure>

                    </div>
                    <div class="extra_wrapper">
                        <p class="pt1">Get 24/7 support for all <span class="col1">premium garden Design</span> at our site. We do not provide it for free.</p>
                        <p>If you need any help with customization your garden, ask <span class="col1">Mission Green</span> to help you.</p>
                        <address>
                            <dl>
                                <dt>The Company Name Inc. <br>
                                    13/A Panthapath, <br>
                                    Dhaka 1215.
                                </dt>
                                <dd><span>Freephone:</span>+01778-149097</dd>
                                <dd><span>Telephone:</span>+1 800 603 6035</dd>
                                <dd><span>FAX:</span>+1 800 889 9898</dd>
                                <dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
                            </dl>
                        </address>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h2>Contact Form</h2>
                <form action="{{route('back.submit.contact')}}" method="post" enctype="multipart/form-data">
@csrf
                    <input type="text" class="form-control" name="name" placeholder="Name:"/>
                    <br>
                    <input type="text" class="form-control" name="email" placeholder="E-mail:"  />
                    <br>
                    <input type="text" class="form-control" name="subject" placeholder="Subject:" />
                    <br>
                    <textarea name="message" placeholder="Message:" class="form-control" id="" cols="30" rows="10"></textarea>
                    <br>
                    <div>
                        <div class="clear"></div>
                        <div class="btns">
                            <input type="submit" class="form-control btn btn-outline-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>
    <br>
@endsection

@extends('front.master')
@section('title')
    Contacts - Rango Electronics
@endsection
@section('body')
@include('front.pages.home.sideBar')
    <div class="container" style="background-color: #800000; color: #fff; padding: 20px;">
        <div class="row mt-3">
            <div class="col-md-8">
                <h2>How to Find Us</h2>
                <div class="map">
                    <div class="img_block fleft">
                        <figure class="img_inner">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7302.504797939503!2d90.421437559943!3d23.77402486426061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHouse%3A%205%2C%20Road%3A%2012%2C%20DIT%20project%2C%20merul%20badda%2C%20Dhaka.!5e0!3m2!1sen!2sbd!4v1690866477732!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </figure>
                    </div>
                    <div class="extra_wrapper" >
                        <p class="pt1" style="color: #0b0b0b;">Get 24/7 support for all <span class="col1">premium electronics</span> at our store. We offer a wide rango of electronic products to meet your needs.</p>
                        <p style="color: #0b0b0b;">If you need any help with choosing the right electronic product, ask <span class="col1">Rango Electronics</span> to assist you.</p>
                        <address>
                            <dl>
                                <dt>Rango Electronics Inc. <br>
                                    House: 5, Road: 12, DIT project, <br>
                                    Merul Badda, Dhaka.
                                </dt>
                                <dd><span>Phone:</span> +01798-565001</dd>
                                <dd><span>Email:</span> <a href="mailto:info@rangoelectronics.com" class="link-1">info@rangoelectronics.com</a></dd>
                            </dl>
                        </address>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h2>Contact Form</h2>
                <form action="{{ route('submit.contact') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" name="name" placeholder="Name:" required/>
                    <br>
                    <input type="text" class="form-control" name="email" placeholder="E-mail:" required />
                    <br>
                    <input type="number" class="form-control" name="mobile" placeholder="Mobile-Number:" required />
                    <br>
                    <input type="text" class="form-control" name="subject" placeholder="Subject:" required />
                    <br>
                    <textarea name="message" placeholder="Message:" class="form-control" id="" cols="30" rows="10" required></textarea>
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

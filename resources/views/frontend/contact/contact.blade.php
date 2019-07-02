@extends('frontend.master')
@section('title', 'Contact')
@section('content')
      <section class="">
        <img src="{{asset('images/collection_image.jpg')}}" alt="">
        <div class="container">
            <h3 class="title-w3pvt text-center">Liên Hệ Với Chúng Tôi</h3>
            <div class="comment-top mt-5 row">
                <div class="col-lg-2 comment-bottom w3pvt_mail_grid-img">
                    <img class="img-fluid" src="" alt="">
                </div>
                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                    <form action="{{route('mail-contact-user')}}" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Họ tên</label>
                                <input class="form-control" type="text" name="name" value="{{old('name')}}" autofocus="">
                               @if($errors->has('name'))
                                <span style="color: red;font-size: 13px">{{$errors->first('name')}}</span>
                              @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" value="{{old('email')}}">
                                @if($errors->has('email'))
                                  <span style="color: red;font-size: 13px">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" type="text" name="phone" value="{{old('phone')}}">
                                @if($errors->has('phone'))
                                  <span style="color: red;font-size: 13px">{{$errors->first('phone')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control" name="content" value="{{old('content')}}" ></textarea>
                            @if($errors->has('content'))
                              <span style="color: red;font-size: 13px">{{$errors->first('content')}}</span>
                            @endif
                        </div>
                        <button type="submit" class="read-more btn submit mt-3">Gửi</button>
                    </form>
                </div>

            </div>

            <ul class="list-unstyled row text-left mt-lg-5 pt-lg-5  pb-lg-3">
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Location</h6>
                            <p>The company name
                                <br>California, USA </p>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Email</h6>
                            <a href="mailto:info@example.com">namdangnguyen09@gmail.com</a>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Phone Number</h6>
                            <p>+ 090 2438 246</p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="map-fo mt-lg-5 mt-4">
               <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen=""></iframe> -->
            </div>

        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/help-line -->
    <section class="help-line-w3layouts py-5">
        <div class="container">
            <div class="row help-line-grid">
                <div class="col-sm-6">
                    <h3>Contact Us</h3>
                    <p>Call us, we are 24/7 Helpline</p>
                </div>
                <div class="col-sm-6 text-sm-right mt-sm-0 mt-3">
                    <h3><span class="fa fa-phone" aria-hidden="true"></span> +0902 438 246</h3>
                </div>
            </div>
        </div>
    </section>
@endsection

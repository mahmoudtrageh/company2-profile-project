<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container ">
      <div class="row">
        @php
          $settings = DB::table('settings')->first();
        @endphp
          <div class="col-md-2">
            <h1 class="logo"><a href="{{url('/')}}">
            @if(isset($settings->logo) && $settings->logo != '')
              <img width="150" height="150" src="{{$settings->logo}}" alt="">
              @endif
            </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
          <div class="col-md-10">
            <nav class="nav-menu d-none d-lg-block">
              <ul>
                <li class="active"><a href="{{url('/')}}">الرئيسية</a></li>
      
                <li class="drop-down"><a href="#">صفحات الموقع</a>
                  <ul>
                    <li><a href="{{ route('portfolio') }}">معرض الأعمال</a></li>
                    <li><a href="{{ route('contact') }}">اتصل بنا</a></li>
                    <li class="drop-down"><a href="#">قائمة فرعية</a>
                      <ul>
                        <li><a href="#">قائمة فرعية</a></li>
                        <li><a href="#">قائمة فرعية</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
      
                <li><a href="{{ route('portfolio') }}">معرض الأعمال</a></li>
                <li><a href="{{ route('contact') }}">اتصل بنا</a></li>
                <div class="header-social-links">
                @if(isset($settings->twitter) && $settings->twitter != '')
                  <a href="{{$settings->twitter}}" class="twitter"><i class="icofont-twitter"></i></a>
                  @endif
                  @if(isset($settings->facebook) && $settings->facebook != '')
                  <a href="{{$settings->facebook}}" class="facebook"><i class="icofont-facebook"></i></a>
                  @endif
                  @if(isset($settings->instagram) && $settings->instagram != '')
                  <a href="{{$settings->instagram}}" class="instagram"><i class="icofont-instagram"></i></a>
                  @endif
                  @if(isset($settings->linkedin) && $settings->linkedin != '')
                  <a href="{{$settings->linkedin}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
                  @endif
                </div>
      
              </ul>
            </nav><!-- .nav-menu -->
          </div>
            

          
      </div>
     

     

     

    </div>
  </header><!-- End Header -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/brand2.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bpg-nino-mtavruli-bold.min.css">
    <title>2Steps</title>
  </head>
  <body>
    <header class="white">
      <nav class="navbar navbar-toggleable-md navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.html">
    <img src="img/brand.png" class="nav-logo">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      @foreach($menu as $value)
      <li class="nav-item active">
        <a class="nav-link" href="{{ $value->link }}">{{ $value->title }}</a>
      </li>
      @endforeach
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
      </li>
    </ul>
  </div>
</nav>
    </header>
    <!-- carousel -->
    <div class="mb-4">
      <div id="main-slider" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to=0 class="active"></li>
          <li data-target="#main-slider" data-slide-to=1></li>
          <li data-target="#main-slider" data-slide-to=2></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/slide2x.png" class="d-block img-fluid" width="100%">
            <div class="carousel-caption d-none d-md-block">
              <a href="#"><img src="img/play.png" class="float-left"></a>
              <h5 class="pt-5">ახალი მაღაზია გაიხსნა</h5>
              <p>მოდი მალე</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide1x.png" class="d-block img-fluid" width="100%">
            <div class="carousel-caption d-none d-md-block">
              <a href="#"><img src="img/play.png" class="float-left"></a>
              <h5 class="pt-5">ახალი მაღაზია გაიხსნა</h5>
              <p>მოდი მალე</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide3x.png" class="d-block img-fluid" width="100%">
            <div class="carousel-caption d-none d-md-block">
              <a href="#"><img src="img/play.png" class="float-left"></a>
              <h5 class="pt-5">ახალი მაღაზია გაიხსნა</h5>
              <p>მოდი მალე</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
    <!-- endCarousel -->
    <!-- lessons -->
    <div class="conatiner">
      <div class="red">
        <div class="pb-5">
          <h5 class="py-4 d-inline">კულინარიის გაკვეთილები</h5>
          <p class=" d-inline float-right"><a href="#">ყველას ნახვა</a></p>
        </div>
        <a href="#" class="btn btn-secondary ekko mr-2"><img src="img/icon1.png" class="img-btn"> სუში</a>
        <a href="#" class="btn btn-secondary ekko mr-2"><img src="img/icon2.png" class="img-btn"> კოქტეილი</a>
        <a href="#" class="btn btn-secondary ekko mr-2"><img src="img/icon3.png" class="img-btn"> ქართული</a>
        <a href="#" class="btn btn-secondary ekko mr-2"><img src="img/icon4.png" class="img-btn"> 5წთ</a>
        <a href="#" class="btn btn-secondary ekko mr-2"><img src="img/icon5.png" class="img-btn"> დესერტი</a>
        <a href="#" class="btn btn-secondary ekko mr-2"><img src="img/icon6.png" class="img-btn"> ხორცი</a>
        <a href="#" class="btn btn-secondary ekko mr-2"><img src="img/icon7.png" class="img-btn"> რუბრიკა</a>
        <a href="#" class="btn btn-secondary ekko mr-2"><img src="img/icon25.png" class="img-btn"></a>
      </div>
    </div>
    <!-- endlessons -->
    <!-- 6pack -->
    <div class="container">
      <h2 class="py-4">ამჟამად პოპულარული</h2>
      <div class="row">
        <div class="col-md-3 col-12 mb-4 mb-md-0">
          <div class="prodigy mb-3">
            <img src="img/layer1.png" class="image-fluid">
            <div class="image-info py-3">
              <p class="small">20მაისი</p>
              <p>20 წუთში მოსამძადებელი დილის საუზმე</p>
              <p class="d-inline"><img src="img/eye.png"> <small>300</small> <img src="img/fork.png" class="pl-3"><small> 5 ინგრედიენტი</small></p>
              <a href="post.html" class="xd btn btn-sm btn-secondary d-inline form-control mx-2"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 mb-4 mb-md-0">
          <div class="prodigy mb-3">
            <img src="img/layer2.png" class="image-fluid">
            <div class="image-info py-3">
              <p class="small">20მაისი</p>
              <p>20 წუთში მოსამძადებელი დილის საუზმე</p>
              <p class="d-inline"><img src="img/eye.png"> <small>300</small> <img src="img/fork.png" class="pl-3"><small> 5 ინგრედიენტი</small></p>
              <a href="post.html" class="xd btn btn-sm btn-secondary d-inline form-control mx-2"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 mb-4 mb-md-0">
          <div class="prodigy mb-3">
            <img src="img/layer3.png" class="image-fluid">
            <div class="image-info py-3">
              <p class="small">20მაისი</p>
              <p>20 წუთში მოსამძადებელი დილის საუზმე</p>
              <p class="d-inline"><img src="img/eye.png"> <small>300</small> <img src="img/fork.png" class="pl-3"><small> 5 ინგრედიენტი</small></p>
              <a href="post.html" class="xd btn btn-sm btn-secondary d-inline form-control mx-2"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 mb-4 mb-md-0">
          <div class="prodigy mb-3">
            <img src="img/layer1.png" class="image-fluid">
            <div class="image-info py-3">
              <p class="small">20მაისი</p>
              <p>20 წუთში მოსამძადებელი დილის საუზმე</p>
              <p class="d-inline"><img src="img/eye.png"> <small>300</small> <img src="img/fork.png" class="pl-3"><small> 5 ინგრედიენტი</small></p>
              <a href="post.html" class="xd btn btn-sm btn-secondary d-inline form-control mx-2"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 mb-4 mb-md-0">
          <div class="prodigy mb-3">
            <img src="img/layer5.png" class="image-fluid">
            <div class="image-info py-3">
              <p class="small">20მაისი</p>
              <p>20 წუთში მოსამძადებელი დილის საუზმე</p>
              <p class="d-inline"><img src="img/eye.png"> <small>300</small> <img src="img/fork.png" class="pl-3"><small> 5 ინგრედიენტი</small></p>
              <a href="post.html" class="xd btn btn-sm btn-secondary d-inline form-control mx-2"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 mb-4 mb-md-0">
          <div class="prodigy mb-3">
            <img src="img/layer6.png" class="image-fluid">
            <div class="image-info py-3">
              <p class="small">20მაისი</p>
              <p>20 წუთში მოსამძადებელი დილის საუზმე</p>
              <p class="d-inline"><img src="img/eye.png"> <small>300</small> <img src="img/fork.png" class="pl-3"><small> 5 ინგრედიენტი</small></p>
              <a href="post.html" class="xd btn btn-sm btn-secondary d-inline form-control mx-2"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 mb-4 mb-md-0">
          <div class="prodigy mb-3">
            <img src="img/layer7.png" class="image-fluid">
            <div class="image-info py-3">
              <p class="small">20მაისი</p>
              <p>20 წუთში მოსამძადებელი დილის საუზმე</p>
              <p class="d-inline"><img src="img/eye.png"> <small>300</small> <img src="img/fork.png" class="pl-3"><small> 5 ინგრედიენტი</small></p>
              <a href="post.html" class="xd btn btn-sm btn-secondary d-inline form-control mx-2"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 mb-4 mb-md-0">
          <div class="prodigy mb-3">
            <img src="img/layer8.png" class="image-fluid">
            <div class="image-info py-3">
              <p class="small">20მაისი</p>
              <p>20 წუთში მოსამძადებელი დილის საუზმე</p>
              <p class="d-inline"><img src="img/eye.png"> <small>300</small> <img src="img/fork.png" class="pl-3"><small> 5 ინგრედიენტი</small></p>
              <a href="post.html" class="xd btn btn-sm btn-secondary d-inline form-control mx-2"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>

    </div>
    </div>
    <!-- d -->
    <div class="container-fluid py-5">
      <p class="d-inline">სულ: <a href="#">956 პროდუქტი</a></p>
      <div class="d-inline float-right">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
          </ul>
      </div>
    </div>
    <!-- endpack -->
    <div class="black">
      <div class="center mt-5 pt-5 whitish">
        <h2>ორი ნაბიჯის ვიდეო</h2>
        <p class="gray">სწრაფი ვაახშამი მოუცლელი მანდილოსნებისთვი სწრაფი ვაახშამი კულინარიის შესახებ სწრაფი ვაახშამი მოუცლელი მანდილოსნებისთვი სწრაფი ვაახშამი კულინარიის შესახებ</p>
        <a href="#"><img src="img/play.png" class="qw"></a>
      </div>
    </div>
    <!-- icecream -->
    <div class="container">
      <div class="row">
        <div class="col-xl-8">
          <div class="row">
            <div class="col-md-8">
              <div class="greyy">
                <img src="img/ice.png" class="float-left mr-2 igi">
                <div class="dd">ყველაფერი <p class="h6">კულინარიის შესახებ</p></div>
            <div class="pb-4">
              <p class="small">20მაისი</p>
              <small class="my-5">სწრაფი ვაახშამი მოუცლელი მანდილოსნებისთვის</small><br>

              <p class="d-inline"><img src="img/eye.png"> <small>300 </small> 

              <img src="img/fork.png"> 
              <small> 5 ინგრედიენტი</small>
            </p>
              <button class="xd btn btn-sm btn-secondary d-inline form-control"><i class="fa fa-angle-right"></i></button>
              
            </div>
              </div>
            </div>
            <div class="col-md-4 gry">
              <div class="grey">
                <h4 class="whitish mb-4"><a href="#" class="d-block">საუკეთესო შეთავაზება</a>ორი ნაბიჯისგან</h4>
                <small class="gray">საუკეთესო შეთავაზება სწრაფი ვაახშამი მოუცლელი კულინარიის საუკეთესო</small>
                <a href="#" class="btn btn-sm btn-success form-control py-3">გადასვლა</a>

              </div>
            </div>
            <div class="col-md-12 ori my-4">
              <div class="mt-2">
                <div class="row">
                  <div class="col-md-6">
                    <h4>გამოიწერე ჩვენი <a href="#">განახლებები</a></h4>
                    <p class="gray">სწრაფი ვაახშამი მოუცლელი მანდილოსნებისთვი სწრაფი ვაახშამი</p>
                  </div>
                  <div class="col-md-4 my-2">
                    <input type="text" class="form-control" placeholder="მეილი...">
                  </div>
                  <div class="col-md-2 my-2">
                    <a href="#" class="btn btn-success btn-smx form-control px-0">გამოწერა</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
            <div class="rollme d-none d-xl-block">
                <p><a href="#">პოპულარული</a> შეთავაზებები</p>
                <div id="qww" class="float-left mr-2"></div>
                  <small class="my-5">დაბალი კალორიული ნამცხვარი თხილით და თაფლით</small>
                  <button class="btn btn-sm btn-secondary d-block"><i class="fa fa-angle-right"></i></button>
                  <div class="left"></div>
                <div id="qww" class="float-left mr-2"></div>
                  <small class="my-5">დაბალი კალორიული ნამცხვარი თხილით და თაფლით</small>
                  <button class="btn btn-sm btn-secondary d-block"><i class="fa fa-angle-right"></i></button>
                  <div class="left"></div>
                <div id="qww" class="float-left mr-2"></div>
                  <small class="my-5">დაბალი კალორიული ნამცხვარი თხილით და თაფლით</small>
                  <button class="btn btn-sm btn-secondary d-block"><i class="fa fa-angle-right"></i></button>
                  <div class="left"></div>
                  <hr>
                  <a href=""><p class="gray">ნახე მეტი</p></a>
              </div>
        </div>
      </div>
    </div>
  <div class="whii">
    <div class="container">
      <div class="gray">
        <small class="float-left">ყველა უფლება დაცულია &copy; 2017 <a href="#"> ორი ნაბიჯი</a></small>
        <img src="img/brand2.png" class="ctr">
        <small class="float-right">Created by:<a href="#">Your Friendly Neighborhood</a></small>
      </div>
    </div>
  </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
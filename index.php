<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portofolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a href="#home" class="navbar-brand page-scroll">Fakih km</a>
      </div>

       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
          <li><a href="#contact" class="page-scroll">Contact</a></li>
        </ul>
    </div>

    </div>
  </nav>


    <!-- akhir navbar -->
    <!-- JUMBOTRON -->
    <div class="jumbotron text-center">
     <img src="img/fakih.jpg" class="img-circle">
     <h1>Fakih Kakung Manafi</h1>
     <p>Mahasiswa | Programmer PHP | Driver Gojek</p> 
    </div>
    <!-- akhir JUMBOTRON -->

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5 col-sm-offset-1">
            <p class="pKiri">Portfolio dalam dunia pendidikan adalah merupakan sekumpulan informasi pribadi yang merupakan catatan dan dokumentasi atas pencapaian prestasi seseorang dalam pendidikannya. Ada beraneka portfolio mulai dari rapor / ijasah hingga dokumen-dokumen lainnya seperti sertifikat, piagam penghargaan, dan lain-lain sebagai bukti pencapaian.</p>
          </div>          
                 
          <div class="col-sm-5">
            <p class="pKanan">Portfolio dalam dunia pendidikan adalah merupakan sekumpulan informasi pribadi yang merupakan catatan dan dokumentasi atas pencapaian prestasi seseorang dalam pendidikannya. Ada beraneka portfolio mulai dari rapor / ijasah hingga dokumen-dokumen lainnya seperti sertifikat, piagam penghargaan, dan lain-lain sebagai bukti pencapaian.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- akhir about -->


    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2> Portfolio</h2>
            <hr>
          </div>
        </div>
      </div>


      <div class="row">   
        <div class="col-sm-4">
          <a href="" class="thumbnail">
          <img src="img/portfolio/2.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
          <img src="img/portfolio/2.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
          <img src="img/portfolio/2.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
          <img src="img/portfolio/2.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
          <img src="img/portfolio/2.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
          <img src="img/portfolio/2.png">
          </a>
        </div>
        


       </div>
      </div> 
    </section>
    <!-- akhir portfolio -->

    <!-- contact -->
    <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form>

            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" id="nama" class="form-control" placeholder="Masukan nama">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" class="form-control" placeholder="Masukan email">
            </div>

            <div class="form-group">
              <label for="telp">No Telp</label>
              <input type="tel" id="telp" class="form-control" placeholder="Masukan No telphon">
            </div>
            <select class="form-control">
              <option>-- Pilih kategori --</option>
              <option>Web Design</option>
              <option>Web Development</option>
            </select>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea rows="10" class="form-control" placeholder="Masukkan pesan">
                
              </textarea>
            </div>
            <button type="submit" class="btn-primary">Kirim Pesan</button>

          </form>
        </div>
      </div>
    </div>
    </section>
    <!-- akhir contact -->

    <!-- footer -->

    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy;Copyright 2017 | built by. <a href="http://instagram.com/faqih_km" target="_blank">Fakih_km</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="https://www.youtube.com/channel/UCD9mU8tU_A7Dfe58YNqg2TA?view_as=subscriber" target="_blank" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i>Subscribe to Youtube</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pomelo Cookies | Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/css/hias.css') }}" rel="stylesheet">
  </head>
  <body>
    @extends('layouts.app')
    @section('content')
    <div id="konten" class="mt-5">
      <table>
        <tr height="100px">
          <td width="10%" height="80">
            <table class="w-100" style="border-style: double; border-width: 1px; border-color: black">
              <tr>
                <td><h3 class="ml-5">Pomelo Cookies</h2></td>
                <div class="btnsearch"></div>
                <td class="text-right"><fore><input type="text" name="Search" placeholder="Search"></fore></td>
              </div>
              <td class="text-center"><input type= "image" src="{{ asset('assets/img/bnw.png') }}" width="25" height="30" alt="submit button"></td>
              <td class="text-center"><font size=6>|</font></td>
              <td class="text-center"><a href="/cart"><input type= "image" src="{{ asset('assets/img/icontas.png') }}" width="30" height="30" alt="submit button"></a></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <td width="30"></td>
              <td><font size="5" face="calibri"><b>Cake</font></b></td>
              <td width="20"></td>
              <td><a href=""><font size="3" face="calibri" color= "blue"><b>See More</b></font></a></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table border="0" class="cake">
            <tr>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Bolu/ketan.png') }}"
                width="150" height="200" margin-top="" alt="submit button">
                <br><font size="2" face="calibri"> Bolu Ketan
                <br><font size="4" face="calibri"><b>RP 55.000</b></font>
                <br><font size="2" face="calibri"><s>RP 110.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Bolu/keju.png') }}"
                width="150" height="200" alt="submit button">
                <br><font size="2" face="calibri"> Bolu Keju Susu
                <br><font size="4" face="calibri"><b>RP 63.000</b></font>
                <br><font size="2" face="calibri"><s>RP 126.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Bolu/Bolu ceres.jpg') }}"
                width="150" height="200" margin-top="" alt="submit button">
                <br><font size="2" face="calibri"> Bolu Ceres
                <br><font size="4" face="calibri"><b>RP 57.000</b></font>
                <br><font size="2" face="calibri"><s>RP 114.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Bolu/Bolu coklat.jpg') }}"
                width="150" height="200" margin-top="" alt="submit button">
                <br><font size="2" face="calibri"> Bolu Coklat
                <br><font size="4" face="calibri"><b>RP 60.000</b></font>
                <br><font size="2" face="calibri"><s>RP 120.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Bolu/Bolu kacang pandan.jpg') }}"
                width="150" height="200" margin-top="" alt="submit button">
                <br><font size="2" face="calibri"> Bolu Kacang Pandan
                <br><font size="4" face="calibri"><b>RP 73.000</b></font>
                <br><font size="2" face="calibri"><s>RP 146.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Bolu/Bolu keju.jpg') }}"
                width="150" height="200" margin-top="" alt="submit button">
                <br><font size="2" face="calibri"> Bolu Keju Lapis
                <br><font size="4" face="calibri"><b>RP 80.000</b></font>
                <br><font size="2" face="calibri"><s>RP 160.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Bolu/Bolu satuan.jpg') }}"
                width="150" height="200" margin-top="" alt="submit button">
                <br><font size="2" face="calibri"> Bolu Satuan
                <br><font size="4" face="calibri"><b>RP 41.000</b></font>
                <br><font size="2" face="calibri"><s>RP 82.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <td width="30"></td>
              <td><font size="5" face="calibri"><b>Brownies</font></b></td>
              <td width="20"></td>
              <td><a href=""><font size="3" face="calibri" color= "blue"><b>See More</b></font></a></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table border="0" class="cake">
            <tr>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Brownies/bronis.png') }}"
                width="150" height="200" alt="submit button">
                <br><font size="2" face="calibri"> Brownies Coklat
                <br><font size="4" face="calibri"><b>RP 47.000</b></font>
                <br><font size="2" face="calibri"><s>RP 94.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Brownies/Beownies oreo dough.jpg') }}"
                width="150" height="200" alt="submit button">
                <br><font size="2" face="calibri"> Brownies Dough Oreo
                <br><font size="4" face="calibri"><b>RP 80.000</b></font>
                <br><font size="2" face="calibri"><s>RP 160.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Brownies/Brownies cheesecake.jpg') }}"
                width="150" height="200" alt="submit button">
                <br><font size="2" face="calibri"> Brownies Cheese Cake
                <br><font size="4" face="calibri"><b>RP 82.000</b></font>
                <br><font size="2" face="calibri"><s>RP 164.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Brownies/Brownies lumer.jpg') }}"
                width="150" height="200" alt="submit button">
                <br><font size="2" face="calibri"> Brownies Lumer
                <br><font size="4" face="calibri"><b>RP 74.000</b></font>
                <br><font size="2" face="calibri"><s>RP 148.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Brownies/Brownies mocha.jpg') }}"
                width="150" height="200" alt="submit button">
                <br><font size="2" face="calibri"> Brownies Mocha
                <br><font size="4" face="calibri"><b>RP 68.000</b></font>
                <br><font size="2" face="calibri"><s>RP 136.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Brownies/Brownies oreo.jpg') }}"
                width="150" height="200" alt="submit button">
                <br><font size="2" face="calibri"> Brownies Oreo
                <br><font size="4" face="calibri"><b>RP 56.000</b></font>
                <br><font size="2" face="calibri"><s>RP 112.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Brownies/Brownies cupcake.jpg') }}"
                width="150" height="200" alt="submit button">
                <br><font size="2" face="calibri"> Brownies Cupcake
                <br><font size="4" face="calibri"><b>RP 66.000</b></font>
                <br><font size="2" face="calibri"><s>RP 132.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <td width="30"></td>
              <td><font size="5" face="calibri"><b>Special Ied Fitr</font></b></td>
              <td width="20"></td>
              <td><a href=""><font size="3" face="calibri" color= "blue"><b>See More</b></font></a></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table border="0" class="cake">
            <tr>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Kue/nastar.png') }}"
                width="150" height="170" alt="submit button">
                <br><font size="2" face="calibri"> Nastar
                <br><font size="4" face="calibri"><b>RP 30.000</b></font>
                <br><font size="2" face="calibri"><s>RP 60.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Kue/kastengel.png') }}"
                width="150" height="170" alt="submit button">
                <br><font size="2" face="calibri"> Kastangel
                <br><font size="4" face="calibri"><b>RP 35.000</b></font>
                <br><font size="2" face="calibri"><s>RP 70.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Kue/sagu.png') }}"
                width="150" height="170" alt="submit button">
                <br><font size="2" face="calibri"> Sagu Keju
                <br><font size="4" face="calibri"><b>RP 32.000</b></font>
                <br><font size="2" face="calibri"><s>RP 64.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Kue/putrisalju.jpg') }}"
                width="150" height="170" alt="submit button">
                <br><font size="2" face="calibri"> Putri Salju
                <br><font size="4" face="calibri"><b>RP 34.000</b></font>
                <br><font size="2" face="calibri"><s>RP 68.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Kue/Kue kenari.jpg') }}"
                width="150" height="170" alt="submit button">
                <br><font size="2" face="calibri"> Kue Kenari
                <br><font size="4" face="calibri"><b>RP 42.000</b></font>
                <br><font size="2" face="calibri"><s>RP 84.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Kue/Lidah kucing.jpg') }}"
                width="150" height="170" alt="submit button">
                <br><font size="2" face="calibri"> Lidah Kucing
                <br><font size="4" face="calibri"><b>RP 22.000</b></font>
                <br><font size="2" face="calibri"><s>RP 44.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
              <td><input type="image" src="{{ asset('assets/img/Kue/Semprit.jpg') }}"
                width="150" height="170" alt="submit button">
                <br><font size="2" face="calibri"> Kue Semprit
                <br><font size="4" face="calibri"><b>RP 36.000</b></font>
                <br><font size="2" face="calibri"><s>RP 72.000</b></font> &nbsp; <font color="red" face="calibri"
              size="2">(50% OFF)</font></td>
              <td width="20"></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td valign="top"><img src="{{ asset('assets/img/gratisongkir.jpg') }}" width="100%" height="75"></td>
      </tr>
      <tr>
        <td>
          <table class="testimoni">
            <tr>
              <td>
                <div class="testimoni">
                  <div class="small-container">
                    <div class="row">
                      <div class="col-5">
                        <i class="fa fa-quote-left"></i>
                        <p>Website ini sangat membantu saya dalam hal peningkatan marketing, naik hingga 70% perbedaannya!</p>
                        <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="img">
                          <img src="{{ asset('assets/img/jasonstatham.jpg') }}" height="150px" width="125px">
                        </div>
                        <div class="name">
                          <h2>Jason Statham</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-5">
                      <i class="fa fa-quote-left"></i>
                      <p>Desain yang simple sangat mempermudah saya untuk memahami dengan cepat cara kerja Website ini!</p>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </div>
                      <div class="img">
                        <img src="{{ asset('assets/img/rainnwilson.jpg') }}" height="150px" width="125px"  alt="">
                      </div>
                      <div class="name">
                        <h2>Rainn Wilson</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
  <center>
  <table width="100%" class="mx-n5">
    <tr bgcolor="grey">
      <td>
        <table align="center" width="100%">
          <tr>
            <td colspan="4"><h6>PEMBAYARAN YANG MUDAH DAN AMAN</h6>
              <br><img src="{{ asset('assets/img/cash.png') }}" width="60" height="30">
              <img src="{{ asset('assets/img/bni.png') }}" width="50" height="30">
              <img src="{{ asset('assets/img/bca.jpg') }}" width="50" height="30">
              <img src="{{ asset('assets/img/mandiri.png') }}" width="50" height="30">
              <img src="{{ asset('assets/img/bri.png') }}" width="50" height="30">
              <img src="{{ asset('assets/img/visa.png') }}" width="45" height="30">
              
              <table>
                <tr>
                  <td colspan="4"><br><h6>GANTI WILAYAH</h6></td>
                </tr>
                <tr>
                  <td><img src="{{ asset('assets/img/bendera indonesia.png') }}" width="50" height="50"></td>
                  <td><font color="grey" face="arial" size="2">Indonesia <br><u>Ganti</u></font></td>
                </tr>
              </table>
              <td></td>
              <td valign="top"><h6>UNDUH APLIKASI</h6>
              <br><img src="{{ asset('assets/img/playstore.png') }}" width="100" height="50"></td>
              <td valign="top"><h6>IKUTI KAMI</h6>
              <br><img src="{{ asset('assets/img/sosmed.png') }}" width="100" height="50"></td>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  </center>
  
  @endsection
</body>
</html>
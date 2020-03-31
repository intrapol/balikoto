<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
        <title>GİRİŞ SAYFASI</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
    <script src="dosya/jqu.js"></script>
    <link rel="stylesheet" href="dosya/boost.css">
    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <?php  
if(isset($_POST["sifre"])){
            if($_POST["sifre"]=="123"){
          // masalar kısmına yönlendirme
            header("Location:masalar.php");
        }
    
}
    
 ?>   


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div><br><br><br><br><br></div>
  <div class="col-md-3 mx-auto">
    <form  method="post">
  <img class="mb-4" src="dosya/balıkfoto" alt="" width="100" height="100">
  <h1 class="h3 mb-3 font-weight-normal">GİRİŞ YAP</h1>
    <input type="password" id="sifre" name="sifre" value="" class="form-control" placeholder="ŞİFRE" required>
  <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">GİRİŞ YAP</button>
  </form>
  
  
  </div>
  

</body>
</html>

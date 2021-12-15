<?php 
// <!-- cek apakah tombol submit sudah ditekan atau belum -->
    if (isset($_GET["submit"])){
        // cek apakah username dan password benar
        if ($_GET["username"]=="ketua" && $_GET["password"]=="ketua123"){
            header("Location: /bimits/ketua");
            exit;
        }
        if ($_GET["username"]=="pengurus" && $_GET["password"]=="pengurus123"){
            header("Location: /bimits/pengurus");
            exit;
        }
        if ($_GET["username"]=="pembina" && $_GET["password"]=="pembina123"){
            header("Location: /bimits/pembina");
            exit;
        }
        
        //     if ($POST["username"]=="admin" && $POST["password"]=="adminpass"){
        //     // jika benar, lanjut ke admin.php
        //     header("Location: admin.php");
        //     exit;
        // }
        // jika salah
        else{
            // tampilakn pesan error
            $error=true;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
        <style>
      .gradient-custom {
    /* fallback for old browsers */
    background: #6a11cb;
  
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
  
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
  }
    </style>
</head>
<body>
                <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 ">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">
                    <!-- masukkan kode anda sesuai jabatan anda -->
                  </p>
    <form  method="GET">
        @csrf
        
        
            <div class="form-outline form-white mb-4">
            <label for="username">Username :</label>
            <input type="text"name="username">
             </div>
            
            <label for="password">Password :</label>
            <input type="password"name="password">
            
        
        <?php if (isset($error)) :?>
        <p style="color: red; font-style:italic">Username/password salah</p>
        <?php endif ?>
        <br>
<br>
        <button class="btn btn-outline-light btn-lg px-5" type="submit"
   name="submit"
                 >
                   Login
                 </button>
    </form>
    <div
                    class="d-flex justify-content-center text-center mt-4 pt-1"
                  >
                    <a href="#!" class="text-white"
                      ><i class="fab fa-facebook-f fa-lg"></i
                    ></a>
                    <a href="#!" class="text-white"
                      ><i class="fab fa-twitter fa-lg mx-4 px-2"></i
                    ></a>
                    <a href="#!" class="text-white"
                      ><i class="fab fa-google fa-lg"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>

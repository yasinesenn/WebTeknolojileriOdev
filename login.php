<?php
    $kullanici = "b211210386@sakarya.edu.tr";
    $parola = "b211210386";
    session_start();
    ob_start();
    if(isset($_POST["username"])) {
        if (($_POST["username"]==$kullanici) and ($_POST["password"]==$parola)) {
            $_SESSION["login"]="true";
            $_SESSION["user"]=$kullanici;
            $_SESSION["pass"]=$parola;
            header("Location:girisBasarili.php");
        } else {
            echo "Kullanıcı Adı veya Şifre Yanlış.<br>";
            echo "Giriş sayfasına yönlendiriliyorsunuz.";
            header("Refresh: 2; url=login.php");
        }
    } else {
        echo "
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />
        <body class=\"container-fluit\">
        <header>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-nav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\">Yasin Emin Esen</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"index.html\">Anasayfa</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"cv.html\">Özgeçmiş</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"sakarya.html\">Sakarya</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"mirasımız.html\">Mirasımız</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"ilgiAlanlarim.html\">İlgi Alanlarım</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"iletisim.php\">İletişim</a>
                        </li>
                    </ul>
                    <form class=\"text-end ml-auto\">
                        <a href=\"login.php\"><button class=\"btn btn-dark me-2 btn-md\" type=\"button\">Giriş
                                Yap</button></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <br>   <br>   <br>    <br>    <br> 
        <div class=\"card container col-md-7\">
            <div class=\"card-body container col-md-7\">
                <div class=\"container\">
                    <h3 class=\"display-6 text-center\">Giriş Yap</h3>
                    <form action=\"login.php\" method=\"POST\">
                        <div class=\"mb-3 row\">
                            <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">Kullanıcı Adı</label>
                            <div class=\"col-sm-7\">
                            <input type=\"text\" class=\"form-control\" name=\"username\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Şifre</label>
                            <div class=\"col-sm-7\">
                            <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\">
                            </div>
                        </div>
                        <div class=\"col-auto text-center\">
                            <button type=\"submit\" class=\"btn btn-primary mb-3\">Giriş Yap</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\" ></script>
        </body>
        ";
      
    }
    
    ob_end_flush();
    ?>
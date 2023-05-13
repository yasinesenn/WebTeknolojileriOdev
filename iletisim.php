<?php
    session_start();
    ob_start();
    if(isset($_POST["message2"])) {
        echo "Mesajınız: ";
        echo  $_POST["message2"];
        echo "<br>";
        echo "E-postanız: ";
        echo  $_POST["email2"];
        echo "<br>";
        echo "Adınız: ";
        echo  $_POST["name2"];
        echo "<br>";
        echo "Cinsiyetiniz: ";
        echo  $_POST["gender2"];
        echo "<br>";
        echo "Mesajınız Gönderilmiştir. Anasayfaya Yönlendiriiliyorsunuz...";
        header("Refresh: 5; url=index.html");
    } else {
        echo "
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        
      
        <body class=\"container-fluit\">
        <header >
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
                    <form class=\"text-dark \">
                        <a href=\"login.php\"><button class=\"btn btn-dark me-2 btn-md\" type=\"button\">Giriş
                                Yap</button></a>
                    </form>
                </div>
            </div>
        </nav>
    </header> 
    <br> <br> <br> <br>
            <div class=\"row \">
                <div class=\"col-md-3 \"></div>
                <div class=\"col-md-6 text-center\">
                    <div class=\"card\">
                        <div class=\"card-body\" style=>
                            <div class=\"container\">
                                <h3 class=\"display-5 text-center\">Mesajını Bırak</h3>
                                <form action=\"iletisim.php\" method=\"POST\">
                                    <div class=\"mb-3 row\">
                                        <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">E-posta</label>
                                        <div class=\"col-sm-10\">
                                        <input type=\"email\" class=\"form-control\" id=\"staticEmail\" name=\"email2\" required>
                                        </div>
                                    </div>
                                    <div class=\"mb-3 row\">
                                        <label for=\"name\" class=\"col-sm-2 col-form-label\">Ad-Soyad</label>
                                        <div class=\"col-sm-10\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name2\" required>
                                        </div>
                                    </div>
                                    <div class=\"mb-3 row\">
                                        <label for=\"gender\">Cinsiyet</label>
                                        <select id=\"gender\" name=\"gender2\" class=\"form-control\" required>
                                        <option value=\"kadin\">Kadın</option>
                                        <option value=\"erkek\">Erkek</option>
                                        </select>
                                    </div>
                                    <div class=\"mb-3 row\">
                                        <label for=\"message\" class=\"col-sm-2 col-form-label\">Mesaj</label>
                                        <div class=\"col-sm-10\">
                                        <textarea class=\"form-control\" id=\"message\" name=\"message2\" required></textarea>
                                        </div>
                                    </div>
                                    <div class=\"col-auto text-center\">
                                        <button type=\"submit\" class=\"btn btn-primary mb-3\">Gönder</button>
                                    </div>
                                    <div class=\"col-auto text-center\">
                                        <a href=\"iletisim.php\">Temizle</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <body>";
    }
    ob_end_flush();
    ?>
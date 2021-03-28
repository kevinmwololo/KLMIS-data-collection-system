
<?php
    // this page outputs the contents of the textarea if posted

     // set var to avoid errors
     session_start(); // needs to be before anything else on page to use $_SESSION
    // this page outputs the textarea1 from the session IF it exists
    $date = ""; // set var to avoid errors
    if(isset($_SESSION['date'])){
        $date = $_SESSION['date'];
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">



<href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>


    <style type="text/css"> 
        .navbar-brand { 

            display: flex; 
            width: 100%; 
            justify-content: center; 

        } 




       fieldset.scheduler-border {
    border: 4px groove #ddd !important;
    width: inherit;
    justify-content: center;
    
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: italic !important;
    text-align: right; !important;

    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
}


     





.navbar-collapse.in {
    display: block !important;
}




    </style> 

<body>
<!--navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><figure><img src="logo1.png" height="70" width="100" > 
      <figcaption><h6 >REPUBLIC OF KENYA<br>MINISTRY OF LABOUR& SOCIAL PROTECTION</h6 ></figcaption></figure></a>
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" height="200">
      <span class="navbar-toggler-icon"></span>
      <a><img src="logo1.png"></a>
    </button>


    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="">Home</a>
          
         </li>
         <li class="nav-item">
          <a class="nav-link" href="">Contact</a>
          
         </li>
      </ul>
      
    </div>
  </div>
</nav>

     

   
<form action="data.php" method="post">


  <p>
        <div class="span9 btn-block">

  <a class="btn btn-large btn-block btn-primary"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    CLICK FOR INSTRUCTIONS ON COMPLETING QUESTIONNAIRE
  </a>
  </div>
</p>
<div class="collapse navbar-collapse" id="collapseExample">
  <div class="card card-body">
   <p><i><b> FILL IN CORRECT DETAILS ON EACH SPACE AND PROCEED TO THE NEXT PAGE.</b></i></p>
  </div>
</div>


<fieldset class="scheduler-border">
    <legend align="center" class="scheduler-border"><i>Proceed to fill in details</i></legend>
   
<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">


        <label class="control-label col-xs-2" for="Instution Name">Instution Name:</label>

    </div>
    <div class="col-lg-3">
     
        <select name="you" id="Type" class="  form-control input-lg" style="width:350px" autocomplete="off">
<OPTION >A C K Language & Orientation School</OPTION>
<OPTION >A.C.K. Bishop Hannington Institute of Theology and Development Studies </OPTION>
<OPTION>A.I.C. Kijabe School of Nursing</OPTION>
<OPTION>A.I.C. Nairobi Training Centre</OPTION>
<OPTION>Academy of Graphic Technologies</OPTION>
<OPTION>Academy of Professional Studies</OPTION>
<OPTION>Accurate Driving School</OPTION>
<OPTION>Achievers of Professionals School</OPTION>
<OPTION>Adams Arcade Secretarial College</OPTION>
<OPTION>Adoptive Business School</OPTION>
<OPTION>Adventist University of Africa</OPTION>
<OPTION>Advisory Centre for Overseas Education</OPTION>
<OPTION>Africa College of Social Work</OPTION>
<OPTION>Africa Institute of Experiential Education</OPTION>
<OPTION>African Institute of Development and Technology</OPTION>
<OPTION>African Institute of Research and Development Studies - </OPTION>
<OPTION>African Institute of Research and Development Studies -</OPTION>
<OPTION>African Institute of Research and Development Studies - </OPTION>
<OPTION>African Institute of Research and Development Studies - </OPTION>
<OPTION>African Institutes of Research and Development Studies - </OPTION>
<OPTION>African Institutes of Research and Development Studies - </OPTION>
<OPTION>African International College of Management and Technology</OPTION>
<OPTION>African International University</OPTION>
<OPTION>African Nazarene University</OPTION>
<OPTION>African Regional Centre for Computing</OPTION>
<OPTION>Africana Driving School</OPTION>
<OPTION>Africo Business College</OPTION>
<OPTION>Afro Beauty Academy</OPTION>
<OPTION>Aga Khan University</OPTION>
<OPTION>AIC Litein Hospital</OPTION>
<OPTION>Air Borne Aviation Institute</OPTION>
<OPTION>Air Hostess Academy Institute of Cabin Crew Training</OPTION>
<OPTION>Air Travel and Related Studies Centre</OPTION>
<OPTION>Air Travel and Tours Training College</OPTION>
<OPTION>Airways Travel Institute – Mombasa</OPTION>
<OPTION>Airways Travel Institute-Nairobi</OPTION>
<OPTION>Alison Caroline Institute</OPTION>
<OPTION>Alliance Francaise</OPTION>
<OPTION>Alphax College</OPTION>
<OPTION>Alupe University College (MU)</OPTION>
<OPTION>Amani Counselling Centre and Training Institute – Nairobi</OPTION>
<OPTION>Amani Counselling Centre and Training Institute – Nyeri</OPTION>
<OPTION>Amboseli Institute of Hospitality and Technology</OPTION>
<OPTION>Amicus Group of Schools – Nairobi</OPTION>
<OPTION>Ammarcom Computer Solutions</OPTION>
<OPTION>Andrew Crawford Media Training School</OPTION>
<OPTION>Angelic Training College</OPTION>
<OPTION>Annex Computer College</OPTION>
<OPTION>Anon Driving School</OPTION>
<OPTION>Aqua Ventures Ltd</OPTION>
<OPTION>Arena Arts Multimedia College</OPTION>
<OPTION>Ark School of Professionals</OPTION>
<OPTION>Asante College of Entrepreneurship</OPTION>
<OPTION>Ashley’s Beauty College</OPTION>
<OPTION>Associated Consulting and Training (The Act Institute)</OPTION>
<OPTION>Bamato Driving School</OPTION>
<OPTION>Bandari College</OPTION>
<OPTION>Baraka Agricultural College</OPTION>
<OPTION>Baraka Driving School</OPTION>
<OPTION>Baraton College</OPTION>
<OPTION>Baringo Teachers Training College – Seretunin</OPTION>
<OPTION>Bartek Institute</OPTION>
<OPTION>Beam International Training Centre – Kisii</OPTION>
<OPTION>Beam International Training Centre-Nairobi</OPTION>
<OPTION>Beauty Point School</OPTION>
<OPTION>Becon Bible College</OPTION>
<OPTION>Belcom Computer/ Accountancy College</OPTION>
<OPTION>Bell Institute of Technology</OPTION>
<OPTION>Bethany Christian College</OPTION>
<OPTION>Bethany Computer Training</OPTION>
<OPTION>Bible College of East Africa</OPTION>
<OPTION>Blanes College</OPTION>
<OPTION>Blanes Secretarial College</OPTION>
<OPTION>Blescohouse Teachers Training College – Nakuru</OPTION>
<OPTION>Blessed Institute of Electronic</OPTION>
<OPTION>Blue Marine Diving</OPTION>
<OPTION>Bomet College of Accountancy</OPTION>
<OPTION>Bondo Teachers Training College – Bondo</OPTION>
<OPTION>Bondo University College</OPTION>
<OPTION>Boston College</OPTION>
<OPTION>BRAEBURN COLLEGE</OPTION>
<OPTION>Braides School of Business</OPTION>
<OPTION>Breldan Consultants Computer Training College</OPTION>
<OPTION>Bridge College</OPTION>
<OPTION>Bridges Hospitality Centre</OPTION>
<OPTION>Bright Touch College</OPTION>
<OPTION>Brightwoods Institute of Accountancy</OPTION>
<OPTION>Brilliant College</OPTION>
<OPTION>Broadbase Computer School</OPTION>
<OPTION>Budget Driving School</OPTION>
<OPTION>Bungoma Teachers Training College – Bungoma</OPTION>
<OPTION>Bungoma Institute of Business & Technology</OPTION>
<OPTION>Nabongo Teachers’ Training College</OPTION>
<OPTION>West Kenya Teachers’ College</OPTION>
<OPTION>Western Teachers’ Training College</OPTION>
<OPTION>Kakamega Teachers’ Training College</OPTION>
<OPTION>Millenium Diploma Teachers Training College</OPTION>
<OPTION>Pamus Teachers’ Training College</OPTION>
<OPTION>Bungoma College of Technology</OPTION>
<OPTION>Bunks Early Childhood Education College Kenya</OPTION>
<OPTION>Bura Vocational Rehabilitation Centre</OPTION>
<OPTION>C.C.S Computer and Commercial College</OPTION>
<OPTION>C.F.K. Teachers Training College – Nairobi</OPTION>
<OPTION>Cage Driving School</OPTION>
<OPTION>Career Training Centre-Nairobi</OPTION>
<OPTION>Carlile College School of Business Studies</OPTION>
<OPTION>Carol Teachers Training College – Rongai</OPTION>
<OPTION>Carribean College of the Bible</OPTION>
<OPTION>Catholic University of Eastern Africa (CUEA)</OPTION>
<OPTION>Cedat Institute</OPTION>
<OPTION>Cefored Institute</OPTION>
<OPTION>Centre for Counselling and Life Skills Management – Thika Institute of Technology</OPTION>
<OPTION>Centre for Finance and Project Management</OPTION>
<OPTION>Centre of Professional Language</OPTION>
<OPTION>Century Park College</OPTION>
<OPTION>Ceroma Training College</OPTION>
<OPTION>Chako Training Centre</OPTION>
<OPTION>Chartered Institute of Logistics and Transport Kenya</OPTION>
<OPTION>Christ the Teacher Institute for Education – Nairobi</OPTION>
<OPTION>Christ the Teacher Institute for Education Tangaza College,</OPTION>
<OPTION>Christian Industrial Training Centre</OPTION>
<OPTION>Chuka University</OPTION>
<OPTION>City Business Training Institute</OPTION>
<OPTION>City Driving School</OPTION>
<OPTION>City Institute of Management and Accountancy</OPTION>
<OPTION>Clive School of Nursing</OPTION>
<OPTION>Coast Aviation Training Institute</OPTION>
<OPTION>Coast College of Commerce</OPTION>
<OPTION>Coast Facilitation and Psychological Counseling Centre</OPTION>
<OPTION>Coast Institute of Business Studies</OPTION>
<OPTION>College of Management Sciences</OPTION>
<OPTION>College of Tropical Medicine and Community Health – Ganjoni Hospital</OPTION>
<OPTION>Comboni Polytechnic</OPTION>
<OPTION>Common Ground Theological Institute</OPTION>
<OPTION>Compliance Institute of Professional Studies</OPTION>
<OPTION>Compuera College</OPTION>
<OPTION>Computer Aid International</OPTION>
<OPTION>Computer for School Kenya</OPTION>
<OPTION>Computer Fundamentals Institute</OPTION>
<OPTION>Computer Learning Centre</OPTION>
<OPTION>Computer Pride Learning Centre</OPTION>
<OPTION>Computer Science, Secretarial and Management Training Centre</OPTION>
<OPTION>Computer Training Centre</OPTION>
<OPTION>Computerways Computer Training Institute</OPTION>
<OPTION>Consolata College</OPTION>
<OPTION>Consolata Driving School</OPTION>
<OPTION>Consolata Hospital, Nyeri</OPTION>
<OPTION>Consolata Institute of Communication and Technology</OPTION>
<OPTION>Consolata Language Centre</OPTION>
<OPTION>Convoy Driving School</OPTION>
<OPTION>Co-operative College of Kenya</OPTION>
<OPTION>Copperbelt College</OPTION>
<OPTION>Costa Rica Driving School</OPTION>
<OPTION>Cotech Training Centre</OPTION>
<OPTION>Crown School of Business Training College</OPTION>
<OPTION>Cybeitech Training</OPTION>
<OPTION>Cyber School Technology Solutions Ltd</OPTION>
<OPTION>Dagoretti College of Catering and Institutional Management</OPTION>
<OPTION>DALC Education</OPTION>
<OPTION>Data Centre Ltd</OPTION>
<OPTION>Data Sector Ltd</OPTION>
<OPTION>Davis Computer Institute</OPTION>
<OPTION>Dawn to Dusk College</OPTION>
<OPTION>Daystar University</OPTION>
<OPTION>Dean E.C.D College</OPTION>
<OPTION>Dedan Kimathi University of Technology</OPTION>
<OPTION>DeepAfrica School</OPTION>
<OPTION>Defensive Driving Systems Ltd</OPTION>
<OPTION>Development Training Institute</OPTION>
<OPTION>Dhiirens Hair and Beauty College</OPTION>
<OPTION>Diamond Defensive Driving Academy</OPTION>
<OPTION>Diani Commercial College</OPTION>
<OPTION>Diani Marine Ltd</OPTION>
<OPTION>Dima College</OPTION>
<OPTION>Diverse ICT College Mtwapa</OPTION>
<OPTION>Diving The Crab (Blue Wave Ltd)</OPTION>
<OPTION>Dominion Computer College</OPTION>
<OPTION>Dominion Training Institute</OPTION>
<OPTION>Double Visio Driving School</OPTION>
<OPTION>Dreamline College – Nairobi</OPTION>
<OPTION>Dynamic College of Professional Studies</OPTION>
<OPTION>Dynamic Foreign Language Centre</OPTION>
<OPTION>E.L.C.K.A.T.P Technical College</OPTION>
<OPTION>Eagle College of Management and Business Studies</OPTION>
<OPTION>East Africa Institute of Certified Studies</OPTION>
<OPTION>East Africa Media Institute</OPTION>
<OPTION>East Africa School of Foreign Languages</OPTION>
<OPTION>East Africa School of Journalism</OPTION>
<OPTION>East Africa Utalii Institute</OPTION>
<OPTION>East African Center for Maritime Affairs</OPTION>
<OPTION>East African Commercial College</OPTION>
<OPTION>East African Institute of Information</OPTION>
<OPTION>East African Institute of Professional Counseling</OPTION>
<OPTION>East African School of Aviation</OPTION>
<OPTION>East African School of Foreign Languages</OPTION>
<OPTION>East African School of Journalism</OPTION>
<OPTION>East African School of Management</OPTION>
<OPTION>East African School of Media Studies-Nairobi</OPTION>
<OPTION>Eastern Computer Institute</OPTION>
<OPTION>Eastern Institute for Health Research and Training – Westlands</OPTION>
<OPTION>Easton Training Institute</OPTION>
<OPTION>Ebenezer Commercial College</OPTION>
<OPTION>Eden Driving School</OPTION>
<OPTION>Edsal College</OPTION>
<OPTION>Egerton University</OPTION>
<OPTION>Egoji Teachers Training College – Egoji</OPTION>
<OPTION>Eldo-Mwangaza Institute of Accountancy and Commercial Studies</OPTION>
<OPTION>Eldoret Aviation Training Institute</OPTION>
<OPTION>Eldoret Polytechnic</OPTION>
<OPTION>Eldoret Professional Accountancy and Computer College </OPTION>
<OPTION>Eldoret Splendid College of Computer Training</OPTION>
<OPTION>Elevate Commercial College</OPTION>
<OPTION>Elgonview College</OPTION>
<OPTION>Elite Commercial College</OPTION>
<OPTION>Embu Institute of Business Management</OPTION>
<OPTION>Embu Technical Training Institute</OPTION>
<OPTION>Embu University College (UoN)</OPTION>
<OPTION>Embu Vocational Rehabilitation Centre</OPTION>
<OPTION>EMICS Salon and College of Hairdressing and Beauty</OPTION>
<OPTION>Emmanuel Computer Academy</OPTION>
<OPTION>Emmys College of Hairdressing and Beauty Therapy</OPTION>
<OPTION>English Language Training Institute</OPTION>
<OPTION>Enjoy Driving School</OPTION>
<OPTION>Eregi Teachers Training College – Maragoli</OPTION>
<OPTION>Esmart College</OPTION>
<OPTION>Estenest College</OPTION>
<OPTION>Evangelical Bible College</OPTION>
<OPTION>Evelyn College of Design</OPTION>
<OPTION>Excel Institute of Professionals – Kiambu</OPTION>
<OPTION>Extreme School of Hair Dressing and Beauty Parlour</OPTION>
<OPTION>Felmu College</OPTION>
<OPTION>Financial Training Solutions</OPTION>
<OPTION>Focus Driving School</OPTION>
<OPTION>Foresight Institute of Logistics and Business Studies</OPTION>
<OPTION>Forr Nax Computer College</OPTION>
<OPTION>Foundation College of Professional Studies</OPTION>
<OPTION>Foundation Institute of Africa – Kisumu</OPTION>
<OPTION>Foundation Institute of Africa – Mombasa</OPTION>
<OPTION>Foundation Institute of Africa-Nairobi</OPTION>
<OPTION>Foundation Institute of Professionals</OPTION>
<OPTION>Fountain College of Business Studies</OPTION>
<OPTION>Fourth Dimension College</OPTION>
<OPTION>Frantech College</OPTION>
<OPTION>Freuki College</OPTION>
<OPTION>Friends Hospital Kaimosi</OPTION>
<OPTION>Friends university Kaimosi</OPTION>
<OPTION>Frontier Institute of Professional and Management Studies</OPTION>
<OPTION>Futurecom Institute of Professional Studies</OPTION>
<OPTION>Gakeo College of Business Studies</OPTION>
<OPTION>Garissa Commercial College</OPTION>
<OPTION>Garissa Teachers Training College – Garissa</OPTION>
<OPTION>Garissa University College (MU)</OPTION>
<OPTION>GENCO University</OPTION>
<OPTION>Generations Driving School</OPTION>
<OPTION>German Institute</OPTION>
<OPTION>German Institute of Professional Studies</OPTION>
<OPTION>Glad Toto Early Childhood Teachers Training Centre – Nairobi</OPTION>
<OPTION>Gladpoint College of Business Studies</OPTION>
<OPTION>Glamourland School of Hair Design and Beauty Therapy</OPTION>
<OPTION>Global Institute of Business Studies</OPTION>
<OPTION>Global Institute of Management and Commerce</OPTION>
<OPTION>Globeville Shanzu Beach College</OPTION>
<OPTION>Glory Commercial College</OPTION>
<OPTION>Gorgeous Looks College</OPTION>
<OPTION>Grace Bible College</OPTION>
<OPTION>Graffins College</OPTION>
<OPTION>Great Lakes University of Kisumu</OPTION>
<OPTION>Gretsa University</OPTION>
<OPTION>Hands of Love Training Centre</OPTION>
<OPTION>Hekima Education Centre</OPTION>
<OPTION>Hekima University College (CUEA)</OPTION>
<OPTION>Hemland Computer Institute</OPTION>
<OPTION>High Grade Computer College</OPTION>
<OPTION>Higher Institute of Development Studies</OPTION>
<OPTION>Hightech College of Accountancy</OPTION>
<OPTION>Hi-Tec Institute</OPTION>
<OPTION>Hi-Tec institute of Professional Studies</OPTION>
<OPTION>Holy Rosary College, Tala</OPTION>
<OPTION>Homabay District Hospital</OPTION>
<OPTION>Hope School of Professional Studies</OPTION>
<OPTION>Horizon Breeze ICT Consultancy</OPTION>
<OPTION>Hosannah institute of Professional Studies</OPTION>
<OPTION>Hospitality and Hotel Management Institute – Kilifi</OPTION>
<OPTION>ICE Training and Consultancy Ltd</OPTION>
<OPTION>ICS Training Services</OPTION>
<OPTION>I-link Institute of Development and International Management</OPTION>
<OPTION>Imara Early Childhood Development Training College</OPTION>
<OPTION>Imenti College</OPTION>
<OPTION>Impala Driving School</OPTION>
<OPTION>Imphonet Upline Technologies</OPTION>
<OPTION>Industrial Rehabilitation Centre -Nairobi</OPTION>
<OPTION>Informatics Training Centre</OPTION>
<OPTION>Infotech Training Center</OPTION>
<OPTION>Inooro University</OPTION>
<OPTION>Institute of Advanced Datalink</OPTION>
<OPTION>Institute of Advanced Technology - Mombasa</OPTION>
<OPTION>Institute of Advanced Technology - Nairobi</OPTION>
<OPTION>Institute of Applied Studies and Research</OPTION>
<OPTION>Institute of Applied Technology</OPTION>
<OPTION>Institute of Business and Professional Studies</OPTION>
<OPTION>Institute of Community Development</OPTION>
<OPTION>Institute of Computer Education</OPTION>
<OPTION>Institute of Computer Science and Technology</OPTION>
<OPTION>Institute of Human Resource Management – Nairobi</OPTION>
<OPTION>Institute of Information and Communication Technology – Machakos</OPTION>
<OPTION>Institute of Information Technology and Computer Knowledge</OPTION>
<OPTION>Institute of Information Technology Studies and Research</OPTION>
<OPTION>Institute of Logistics and Supply Chain Management</OPTION>
<OPTION>Institute of Media and Technology</OPTION>
<OPTION>Institute of Software Technologies</OPTION>
<OPTION>Institute of Trade Development</OPTION>
<OPTION>Institute of Visual Communication Design</OPTION>
<OPTION>Integrity School of Management</OPTION>
<OPTION>Intel College</OPTION>
<OPTION>Intercontinental Aviation Institute & Related Studies</OPTION>
<OPTION>International Centre for Tourism and Foreign Languages</OPTION>
<OPTION>International College of Professionals</OPTION>
<OPTION>International Leadership University</OPTION>
<OPTION>International Montessori School – Nairobi</OPTION>
<OPTION>International School of Medicine and Applied Technology</OPTION>
<OPTION>International Teachers Training College – Nairobi</OPTION>
<OPTION>International Teachers’ and Training Centre</OPTION>
<OPTION>Interstate College of IT and Business Studies</OPTION>
<OPTION>Interworld College</OPTION>
<OPTION>Intraglobal Training Institute</OPTION>
<OPTION>Intraglobal Training Institute – Embu</OPTION>
<OPTION>Intraglobal Training Institute – Kisii</OPTION>
<OPTION>Intraglobal Training institute – Kisumu</OPTION>
<OPTION>Intraglobal Training Institute – Nakuru Town</OPTION>
<OPTION>Isiolo District Hospital</OPTION>
<OPTION>Islamic Teachers’ Training College – Maragua</OPTION>
<OPTION>Italian Institute of Culture Nairobi</OPTION>
<OPTION>Itando Vocational Rehabilitation Centre</OPTION>
<OPTION>Iten District Hospital</OPTION>
<OPTION>Jackson and Associates Banking and Business School</OPTION>
<OPTION>Jaffery Institute of Professional Studies</OPTION>
<OPTION>Jamia Training Institute</OPTION>
<OPTION>Japan Africa Culture Interchange Institute</OPTION>
<OPTION>Jaramogi Oginga Odinga Teaching and Referral Hospital</OPTION>
<OPTION>Jaramogi Oginga Odinga University of Science and Technology</OPTION>
<OPTION>Jasmine School of Catering</OPTION>
<OPTION>Jerusa Teachers Training College, Jttc – Butere – Kakamega</OPTION>
<OPTION>Jodan College of Technology</OPTION>
<OPTION>Jogoo Commercial College</OPTION>
<OPTION>Jomaken ECD Pre-Primary Teachers Training Programme & Care Centre – Nairobi</OPTION>
<OPTION>Jomo Kenyatta University of Agriculture and Technology</OPTION>
<OPTION>Jomo Kenyatta University of Agriculture and Technology (JKUAT)</OPTION>
<OPTION>Joo’s School of IT and Management Studies</OPTION>
<OPTION>Josneb Commercial College</OPTION>
<OPTION>Joyce Haji College</OPTION>
<OPTION>Joyka College</OPTION>
<OPTION>Jusnet Business Institute</OPTION>
<OPTION>Kaanan International College</OPTION>
<OPTION>Kabarak University</OPTION>
<OPTION>Kabarnet District Hospital</OPTION>
<OPTION>Kabarnet Vocational Rehabilitation Centre</OPTION>
<OPTION>Kabianga University College</OPTION>
<OPTION>KAG - EAST University</OPTION>
<OPTION>Kagumo Ngandu Commercial College</OPTION>
<OPTION>Kahawa Training College</OPTION>
<OPTION>Kaimosi Teachers Training College – Kaimosi</OPTION>
<OPTION>Kajiado District Hospital</OPTION>
<OPTION>Kakamega Provincial General Hospital</OPTION>
<OPTION>Kakamega Vocational Rehabilitation Centre</OPTION>
<OPTION>KAM School of Health and Beauty</OPTION>
<OPTION>Kamagambo Adventist College</OPTION>
<OPTION>Kamagambo Adventist Teachers’ Training College – Kisii</OPTION>
<OPTION>Kamata School of Music</OPTION>
<OPTION>Kamwenja Teachers Training College – Nyeri</OPTION>
<OPTION>Kanaani Technical and Computer College</OPTION>
<OPTION>Kangundo District Hospital</OPTION>
<OPTION>Kapenguria District Hospital</OPTION>
<OPTION>Kapkatet District Hospital</OPTION>
<OPTION>Kapsabet District Hospital</OPTION>
<OPTION>Karatina Business College</OPTION>
<OPTION>Karatina District Hospital</OPTION>
<OPTION>Karatina University</OPTION>
<OPTION>Karen Christian College</OPTION>
<OPTION>Karen International College</OPTION>
<OPTION>Karengata Driving School</OPTION>
<OPTION>Katoloni Technical Training College</OPTION>
<OPTION>KCA University</OPTION>
<OPTION>KCB Management Centre</OPTION>
<OPTION>Kenafric College of Professional Studies</OPTION>
<OPTION>Kendu Adventist Hospital</OPTION>
<OPTION>Kenya Baptist Theological College</OPTION>
<OPTION>Kenya Christian Industrial Training Institute</OPTION>
<OPTION>Kenya College of Management and Information Technology</OPTION>
<OPTION>Kenya Education Staff Institute – Nairobi</OPTION>
<OPTION>Kenya Highlands Evangelical University</OPTION>
<OPTION>Kenya Institute of Advanced Driving</OPTION>
<OPTION>Kenya Institute of Applied Sciences</OPTION>
<OPTION>Kenya Institute of Bankers</OPTION>
<OPTION>Kenya Institute of Biomedical Sciences and Technology</OPTION>
<OPTION>Kenya Institute of Business Training</OPTION>
<OPTION>Kenya Institute of Cargo Forwarders</OPTION>
<OPTION>Kenya Institute of Computer Studies</OPTION>
<OPTION>Kenya Institute of Development Studies</OPTION>
<OPTION>Kenya Institute of Electronics and Technology</OPTION>
<OPTION>Kenya Institute of Entrepreneurship and Related Studies</OPTION>
<OPTION>Kenya Institute of Entrepreneurship Development</OPTION>
<OPTION>Kenya Institute of Finance and Applied Management</OPTION>
<OPTION>Kenya Institute of Foreign Languages and Professional Studies</OPTION>
<OPTION>Kenya Institute of Hospitality Studies</OPTION>
<OPTION>Kenya Institute Of Management</OPTION>
<OPTION>Kenya Institute of Management – Nyeri</OPTION>
<OPTION>Kenya Institute of Management and Technology</OPTION>
<OPTION>Kenya Institute of Media and Technology</OPTION>
<OPTION>Kenya Institute of Professional Counseling - Kisii</OPTION>
<OPTION>Kenya Institute of Professional Counseling - Nairobi</OPTION>
<OPTION>Kenya Institute of Professional Counseling - Nakuru</OPTION>
<OPTION>Kenya Institute of Professional Counseling - Nyandarua</OPTION>
<OPTION>Kenya Institute of Professional Counseling - Nyeri</OPTION>
<OPTION>Kenya Institute of Professional Counseling - Uasin Gishu</OPTION>
<OPTION>Kenya institute of Professional Counseling - Wajir</OPTION>
<OPTION>Kenya Institute of Professional Counselling - Bomet</OPTION>
<OPTION>Kenya Institute of Professional Counselling - Bungoma</OPTION>
<OPTION>Kenya Institute of Professional Counselling - Kakamega</OPTION>
<OPTION>Kenya Institute of Professional Counselling - Kericho</OPTION>
<OPTION>Kenya Institute of Professional Counselling - Kiambu</OPTION>
<OPTION>Kenya Institute of Professional Counselling - Machakos</OPTION>
<OPTION>Kenya Institute of Professional Studies</OPTION>
<OPTION>Kenya institute of project management</OPTION>
<OPTION>Kenya Institute of Social Work</OPTION>
<OPTION>Kenya Institute of Special Education</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Bomet</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Bungoma</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Embu</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Garissa</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Kakamega</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Kericho</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Kiambu</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Kisii</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Kisumu</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Machakos</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Meru</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Mombasa</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Nairobi</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Nakuru</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Nyeri</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Taveta Town</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Uasin Gishu</OPTION>
<OPTION>Kenya Institute of Studies in Criminal Justice - Voi Town</OPTION>
<OPTION>Kenya Institute of Surveying and Mapping</OPTION>
<OPTION>Kenya International Institute of Business Studies</OPTION>
<OPTION>Kenya Methodist University</OPTION>
<OPTION>Kenya Methodist University – Medical School</OPTION>
<OPTION>Kenya School of Credit Management</OPTION>
<OPTION>Kenya School of Flying</OPTION>
<OPTION>Kenya School of Law</OPTION>
<OPTION>Kenya School of Medical Science and Technology</OPTION>
<OPTION>Kenya School of Professional Studies</OPTION>
<OPTION>Kenya School of Technology Studies</OPTION>
<OPTION>Kenya Science Teachers College – Nairobi</OPTION>
<OPTION>Kenya Technical Teachers College – KTTC</OPTION>
<OPTION>Kenya Water Institute</OPTION>
<OPTION>Kenyatta National Hospital</OPTION>
<OPTION>Kenyatta University</OPTION>
<OPTION>Kenyatta University (KU)</OPTION>
<OPTION>Kericho Teachers Training College – Kericho</OPTION>
<OPTION>Kericho Technical Institute</OPTION>
<OPTION>Kericho Vocational Rehabilitation Centre</OPTION>
<OPTION>Keroka College of Accountancy</OPTION>
<OPTION>Kerugoya District Hospital</OPTION>
<OPTION>Kiambu District Hospital</OPTION>
<OPTION>Kiambu Institute of Business Studies</OPTION>
<OPTION>Kiambu Institute of Computers and Engineering</OPTION>
<OPTION>Kiambu Institute of Science and Technology</OPTION>
<OPTION>Kiamosi Friends University College (MMUST)</OPTION>
<OPTION>Kibabi Teachers Training College – Bumgoma</OPTION>
<OPTION>Kibabii University</OPTION>
<OPTION>Kifu School of Business Studies</OPTION>
<OPTION>Kijabe Hospital School of Nursing</OPTION>
<OPTION>Kikuyu College of Accountancy and Information Technology</OPTION>
<OPTION>Kikuyu Commercial College</OPTION>
<OPTION>Kilifi District Hospital</OPTION>
<OPTION>Kilifi Institute of Business</OPTION>
<OPTION>Kilimambogo Teachers Training College – Thika</OPTION>
<OPTION>KIMA International School of Theology – Siaya</OPTION>
<OPTION>KIMA International School of Theology – Vihiga</OPTION>
<OPTION>Kimathi University College of Technology</OPTION>
<OPTION>Kinango Driving School</OPTION>
<OPTION>Kinetic Institute of Business Management</OPTION>
<OPTION>Kings Medical College</OPTION>
<OPTION>Kinyanjui Technical Training Institute</OPTION>
<OPTION>Kirinyaga School of Professional Studies</OPTION>
<OPTION>Kirinyaga University College (JKUAT)</OPTION>
<OPTION>Kiriri Women’s University of Science and Technology</OPTION>
<OPTION>Kiriri Women's University of Science and Technology</OPTION>
<OPTION>Kisauni Youth Polytechnic</OPTION>
<OPTION>Kisii College of Accountancy</OPTION>
<OPTION>Kisii College of Professional Studies</OPTION>
<OPTION>Kisii Level 5 Hospital</OPTION>
<OPTION>Kisii University College</OPTION>
<OPTION>Kisii Vocational Rehabilitation Centre</OPTION>
<OPTION>Kisumu Business College</OPTION>
<OPTION>Kisumu District Hospital</OPTION>
<OPTION>Kisumu Polytechnic</OPTION>
<OPTION>Kitale District Hospital</OPTION>
<OPTION>Kitale Technical Training Institute</OPTION>
<OPTION>Kithimani Integrated Teachers College – Kithimani</OPTION>
<OPTION>Kitui District Hospital</OPTION>
<OPTION>Kobujoi Development Training Institute</OPTION>
<OPTION>KTI Institute</OPTION>
<OPTION>La Contessa College</OPTION>
<OPTION>Laikipia University</OPTION>
<OPTION>Laikipia University College</OPTION>
<OPTION>Lake Institute of Tropical Medicine</OPTION>
<OPTION>Lake Nakuru Hotel and Ecotourism Management</OPTION>
<OPTION>Language Center Ltd, The</OPTION>
<OPTION>Language Connections Centre</OPTION>
<OPTION>Leaders Institute of Business Studies</OPTION>
<OPTION>Legacy College of Business Studies</OPTION>
<OPTION>Legacy Institute of Social Work and Community Development</OPTION>
<OPTION>Lematon Computer Training Centre</OPTION>
<OPTION>Lidas Driving School</OPTION>
<OPTION>Likoni Community Technical Centre</OPTION>
<OPTION>Link-up Institute</OPTION>
<OPTION>Lio School of Computer Studies</OPTION>
<OPTION>Lolaz Communication Institute</OPTION>
<OPTION>Lukenya University</OPTION>
<OPTION>Maasai Teachers’ College – Karen</OPTION>
<OPTION>Mabati Technical Training Institute</OPTION>
<OPTION>Machakos Institute of Development Studies</OPTION>
<OPTION>Machakos Institute of Technology</OPTION>
<OPTION>Machakos Level 5 Hospital</OPTION>
<OPTION>Machakos Medical and Technical Training College</OPTION>
<OPTION>Machakos Teachers Training College – Machakos</OPTION>
<OPTION>Machakos Technical Institute for the Blind</OPTION>
<OPTION>Machakos University College (KU)</OPTION>
<OPTION>Machakos Vocational Rehabilitation Centre</OPTION>
<OPTION>Magan College</OPTION>
<OPTION>Magenta Training Institute</OPTION>
<OPTION>Makini College</OPTION>
<OPTION>Makueni District Hospital</OPTION>
<OPTION>Malezi College</OPTION>
<OPTION>Malindi District Hospital</OPTION>
<OPTION>Malindi Language Centre</OPTION>
<OPTION>Mama Lucy Kibaki Hospital</OPTION>
<OPTION>Management University of East Africa</OPTION>
<OPTION>Manna Bible Institute and School of Missions</OPTION>
<OPTION>Maragua District Hospital</OPTION>
<OPTION>Maragua Teachers Training College – Muranga</OPTION>
<OPTION>Maranatha College of Professional Studies</OPTION>
<OPTION>Marcs Driving School</OPTION>
<OPTION>Mariakani Youth Polytechnic</OPTION>
<OPTION>Marist International College</OPTION>
<OPTION>Marist International University College (CUEA)</OPTION>
<OPTION>Maritime and Management Institute of East Africa</OPTION>
<OPTION>Masai Mara University</OPTION>
<OPTION>Masai Teachers’ Training College</OPTION>
<OPTION>Masai Technical Training Institute</OPTION>
<OPTION>Maseno University</OPTION>
<OPTION>Maseno University – Medical School</OPTION>
<OPTION>Masinde Muliro University of Science and Technology (MMUST)</OPTION>
<OPTION>Mathenge Technical Institute</OPTION>
<OPTION>Maua Methodist Hospital</OPTION>
<OPTION>Mawego Technical Training Institute</OPTION>
<OPTION>Mbagathi District Hospital</OPTION>
<OPTION>Mbaya Karichu Institute</OPTION>
<OPTION>Media School Africa</OPTION>
<OPTION>Medical Schools In Kenya – Approved Internship Training Centres</OPTION>
<OPTION>Memon College</OPTION>
<OPTION>Menengai Medical Training College</OPTION>
<OPTION>Merit Institute of Business and Applied Technology</OPTION>
<OPTION>Meru District Hospital</OPTION>
<OPTION>Meru Teachers Training College – Meru</OPTION>
<OPTION>Meru Technical Training Institute</OPTION>
<OPTION>Meru University of Science and Technology</OPTION>
<OPTION>Mesburn Institute</OPTION>
<OPTION>Metropolitan Group of Colleges</OPTION>
<OPTION>Michuki Technical Training Institute</OPTION>
<OPTION>Microchip Secretarial Services</OPTION>
<OPTION>Microhouse Institute of Information Technology</OPTION>
<OPTION>Midlands Driving School</OPTION>
<OPTION>Migori Bible Training Centre</OPTION>
<OPTION>Migori District Hospital</OPTION>
<OPTION>Migori Institute of Medical Science and Technology</OPTION>
<OPTION>Migori School of Guidance and Counselling</OPTION>
<OPTION>Migori Teachers Training College – Migori</OPTION>
<OPTION>Millennium Global Education Services</OPTION>
<OPTION>Mkwajuni Youth Polytechnic</OPTION>
<OPTION>Modia Driving School</OPTION>
<OPTION>Moi Hospital – Voi</OPTION>
<OPTION>Moi Teaching & Referral Hospital</OPTION>
<OPTION>Moi Teaching and Referral Hospital</OPTION>
<OPTION>Moi University – Dental School</OPTION>
<OPTION>Moi University (MU)</OPTION>
<OPTION>Moi University School of Dentistry</OPTION>
<OPTION>Moi-Baringo Teachers College – Kabarnet</OPTION>
<OPTION>Mombasa Aviation Training Institute</OPTION>
<OPTION>Mombasa College of Business and Related Studies</OPTION>
<OPTION>Mombasa College of Professional Studies</OPTION>
<OPTION>Mombasa College of Tourism and Business Studies</OPTION>
<OPTION>Mombasa Management and Technical Training Centre</OPTION>
<OPTION>MOMBASA POLYTECHNIC</OPTION>
<OPTION>Mombasa Polytechnic University College</OPTION>
<OPTION>Mombasa School of Accountancy</OPTION>
<OPTION>Mombasa Technical Training Institute (MTTI)</OPTION>
<OPTION>Mosoriot Teachers Training College – Mosoriot</OPTION>
<OPTION>Mounain View College of Hotel and Hairdressing</OPTION>
<OPTION>Mount Kenya University</OPTION>
<OPTION>Mount Kenya University </OPTION>
<OPTION>Mountain Top Hotel and Travel Institute</OPTION>
<OPTION>Mountain Top Institute</OPTION>
<OPTION>Msambweni District Hospital</OPTION>
<OPTION>Mukurweini District Hospital</OPTION>
<OPTION>Multi Media Business College</OPTION>
<OPTION>Multimedia University</OPTION>
<OPTION>Multimedia University of Kenya</OPTION>
<OPTION>Mumbuni Engineering and Driving School</OPTION>
<OPTION>Murang’a District Hospital</OPTION>
<OPTION>Murang’a Technical Institute</OPTION>
<OPTION>Muranga Teachers Training College – Makuyu</OPTION>
<OPTION>Muranga Technical Institute</OPTION>
<OPTION>Murang'a University College (JKUAT)</OPTION>
<OPTION>Muriranjas Vocational Rehabilitation Centre</OPTION>
<OPTION>Mwalimu Technical College and Driving School</OPTION>
<OPTION>Mwangaza Nakuru College</OPTION>
<OPTION>Mwingi District Hospital</OPTION>
<OPTION>Nairobi Aviation College</OPTION>
<OPTION>Nairobi Aviation College – Kisumu</OPTION>
<OPTION>Nairobi Aviation College – Kitale</OPTION>
<OPTION>Nairobi Aviation College – Uasin Gishu</OPTION>
<OPTION>Nairobi Aviation Institute</OPTION>
<OPTION>Nairobi College of Bread and Confectionery Technology</OPTION>
<OPTION>Nairobi Evangelical School of Theology (NEGST)</OPTION>
<OPTION>Nairobi Hospital Cicely Macdonald School of Nursing</OPTION>
<OPTION>Nairobi Institute of Computer Science</OPTION>
<OPTION>Nairobi Institute of Swahili & East African Culture</OPTION>
<OPTION>Nairobi North Polytechnic</OPTION>
<OPTION>Nairobi Sailing & Sub Aqua Club</OPTION>
<OPTION>Nairobi Technical Training Institute</OPTION>
<OPTION>Naitiri Commercial and Technical College</OPTION>
<OPTION>Naivasha District Hospital</OPTION>
<OPTION>Nakuru College of Health Sciences</OPTION>
<OPTION>Nakuru Institute of Medical Sciences and Management</OPTION>
<OPTION>Nakuru Provincial</OPTION>
<OPTION>Nakuru Teachers Training College – Nakuru</OPTION>
<OPTION>Nanyuki District Hospital</OPTION>
<OPTION>Narok District Hospital</OPTION>
<OPTION>Narok Teachers Training College – Narok</OPTION>
<OPTION>Nazareth Medical College</OPTION>
<OPTION>Nazareth Mission Hospital</OPTION>
<OPTION>Neet Training College</OPTION>
<OPTION>Nehema Institute of Science and Technology – Bungoma</OPTION>
<OPTION>Nehema Institute of Science and Technology – Uasin Gishu</OPTION>
<OPTION>Nelson’s Banking and Business Institute</OPTION>
<OPTION>Neptune Driving School</OPTION>
<OPTION>New Horizons Computer Learning Centre</OPTION>
<OPTION>NIBS College – Nairobi Institute of Business Studies</OPTION>
<OPTION>Ninety-Nine Flying School</OPTION>
<OPTION>North Eastern Province Technical Training Institute</OPTION>
<OPTION>North Kinangop Catholic Hospital</OPTION>
<OPTION>Nyahururu District Hospital</OPTION>
<OPTION>Nyamira District Hospital</OPTION>
<OPTION>Nyanchwa Adventist College</OPTION>
<OPTION>Nyanchwa Teachers Training College – Kisii</OPTION>
<OPTION>Nyandarua Vocational Rehabilitation Centre</OPTION>
<OPTION>Nyeri Catholic (ECDE TTC) – Nyeri</OPTION>
<OPTION>Nyeri County General Hospital</OPTION>
<OPTION>Nyeri Institute of Computer Studies</OPTION>
<OPTION>Nyeri Provincial General Hospital</OPTION>
<OPTION>Nyeri Sterling Computers College</OPTION>
<OPTION>Nyeri Technical Training Institute</OPTION>
<OPTION>Oasis Africa Institute of Professional Counselling and Psychology</OPTION>
<OPTION>Odiado Vocational Rehabilitation Centre</OPTION>
<OPTION>Ol Kalou District Hospital</OPTION>
<OPTION>Omni-Tech Computer Services</OPTION>
<OPTION>Orbit school of management studies</OPTION>
<OPTION>Orthodox Teachers Training College of Africa – Nairobi</OPTION>
<OPTION>Oshwal College</OPTION>
<OPTION>Our Lady of Lourdes Mwea Hospital</OPTION>
<OPTION>Our lady of lourdes school of nursing</OPTION>
<OPTION>Outspan college</OPTION>
<OPTION>Outspan Medical College – Nyeri Town</OPTION>
<OPTION>Outspan Medical College – P.C.E.A. Tumutumu Hospital</OPTION>
<OPTION>Overcomers Commercial College</OPTION>
<OPTION>P.C.E.A. Tumutumu Hospital</OPTION>
<OPTION>Pago Airways Travel Services and Training Institute</OPTION>
<OPTION>Palmax College</OPTION>
<OPTION>Pan African Christian University</OPTION>
<OPTION>Pan African School of Theology (PAST)</OPTION>
<OPTION>Paradise Divers Ltd</OPTION>
<OPTION>Parapet Hospitality and Business Institute</OPTION>
<OPTION>Patana Institute</OPTION>
<OPTION>PATH Institute of Technology and Entrepreneurship</OPTION>
<OPTION>PCEA Chogoria Hospital</OPTION>
<OPTION>PCEA Kikuyu Hospital</OPTION>
<OPTION>PCEA Tumutumu Hospital</OPTION>
<OPTION>Pearl School of Hair and Beauty</OPTION>
<OPTION>Personal Care Institute</OPTION>
<OPTION>Petanns Driving School Computer College</OPTION>
<OPTION>Phillips Business Training College</OPTION>
<OPTION>Phoenix Aviation</OPTION>
<OPTION>Pinnacle Business School</OPTION>
<OPTION>Pinnacle College of Professional Studies</OPTION>
<OPTION>Pinnacle School of Business</OPTION>
<OPTION>Pioneer International College</OPTION>
<OPTION>Pioneer International University</OPTION>
<OPTION>Pivot Point Hair Design and Beauty School</OPTION>
<OPTION>Pivot Point International School</OPTION>
<OPTION>Platinum College Of Actuarial Science</OPTION>
<OPTION>Posco Executive College</OPTION>
<OPTION>Posh Institute</OPTION>
<OPTION>Premese Africa Development Institute</OPTION>
<OPTION>Premese Montessori – Nairobi</OPTION>
<OPTION>Premier Institute of Hospitality and Business Studies</OPTION>
<OPTION>Premier Institute of Professional Studies Ltd</OPTION>
<OPTION>Presbyterian University of East Africa</OPTION>
<OPTION>Prestige Global Language Center</OPTION>
<OPTION>Project Management Institute</OPTION>
<OPTION>Prosperity Driving School</OPTION>
<OPTION>Pulp College of Accountancy</OPTION>
<OPTION>Pwani Training Institute</OPTION>
<OPTION>Pwani University College</OPTION>
<OPTION>Pwani Vocational College</OPTION>
<OPTION>Queen’s Park College of Hair Dressing</OPTION>
<OPTION>Queensway Secretarial College</OPTION>
<OPTION>Rahabel College</OPTION>
<OPTION>Real Music House Ltd</OPTION>
<OPTION>Redeemed Bible Seminary An African Campus of Vision International University</OPTION>
<OPTION>Reeswood Secretarial College</OPTION>
<OPTION>Regency Beauty College</OPTION>
<OPTION>Regina Pacis University College (CUEA)</OPTION>
<OPTION>Regional Aviation Training Institute</OPTION>
<OPTION>Regional Center For Tourism and Foreign Languages</OPTION>
<OPTION>Regional Centre for Mapping of Resources for Development Information    Technology Training Centre</OPTION>
<OPTION>Regional Centre for Tourism and Foreign Languages</OPTION>
<OPTION>Regional Institute of Business Management</OPTION>
<OPTION>Reward Institute of Professional Studies</OPTION>
<OPTION>Rewarding College</OPTION>
<OPTION>Rewards Institute of Professional Studies</OPTION>
<OPTION>Riara University</OPTION>
<OPTION>Riccatti Business College of East Africa</OPTION>
<OPTION>Rifkins Business College</OPTION>
<OPTION>Rift Valley County Provincial Hospital</OPTION>
<OPTION>Rift Valley Institute of Development Studies</OPTION>
<OPTION>Rift Valley Technical Training Institute</OPTION>
<OPTION>Rizfar Hair College and Salon Ltd</OPTION>
<OPTION>Road Skills Driving School</OPTION>
<OPTION>Robin Institute of Business Studies</OPTION>
<OPTION>Rochester Business School</OPTION>
<OPTION>Rocky Computer College</OPTION>
<OPTION>Rocky Driving School</OPTION>
<OPTION>Rolima Training Institute</OPTION>
<OPTION>Rongo University College</OPTION>
<OPTION>Rongo University College (MU)</OPTION>
<OPTION>Rosetta Business College</OPTION>
<OPTION>Royal Automobile Club (RAC) Kenya</OPTION>
<OPTION>Royal Beauty College</OPTION>
<OPTION>Royal Business School</OPTION>
<OPTION>Royal College of Science and Technology</OPTION>
<OPTION>Ruiru College of Catering and Management Studies</OPTION>
<OPTION>Rural Aid Kenya Training Institute</OPTION>
<OPTION>Sacred Training Institute-Bungoma</OPTION>
<OPTION>Sacred Training Institute-Nairobi</OPTION>
<OPTION>Safeworld information and Technical Institute</OPTION>
<OPTION>Sagana Technical Training Institute</OPTION>
<OPTION>Sairene Travel Operations College</OPTION>
<OPTION>School of Petroleum Studies</OPTION>
<OPTION>Scott Christian University</OPTION>
<OPTION>Scuba Diving Watamu Ltd</OPTION>
<OPTION>Sea World East Africa Ltd</OPTION>
<OPTION>Selika Driving School</OPTION>
<OPTION>Senior Driving School</OPTION>
<OPTION>Seniors Driving School Ltd</OPTION>
<OPTION>Serengeti Institute – Thika</OPTION>
<OPTION>Shanzu Teachers Traning College – Mombasa</OPTION>
<OPTION>Sheer Logic Computer Training Centre</OPTION>
<OPTION>Shepherds Foundation Education and Research Centre</OPTION>
<OPTION>Shields Institute of Commerce and Marketing</OPTION>
<OPTION>Shilrey’s International Hair and Beauty College</OPTION>
<OPTION>Shujaa Training Institute of Development Studies</OPTION>
<OPTION>Siaya District Hospital</OPTION>
<OPTION>Sigalagala Technical Training Institute</OPTION>
<OPTION>Simplified Language Services</OPTION>
<OPTION>Skynet Business School</OPTION>
<OPTION>Skytech Aviation College International</OPTION>
<OPTION>Smart Media Colleges</OPTION>
<OPTION>Sontana Computer College</OPTION>
<OPTION>Sotemi Business Centre</OPTION>
<OPTION>South Eastern Kenya University</OPTION>
<OPTION>Southern College – Collegedale TN</OPTION>
<OPTION>Special Education & Professional Studies College – Nairobi</OPTION>
<OPTION>St Mary’s School of Clinical Medicine</OPTION>
<OPTION>St Paul;s University</OPTION>
<OPTION>St. Andrew’s College of Theology</OPTION>
<OPTION>St. Ann’s ECD Teachers College – Kisii</OPTION>
<OPTION>St. Anne’s College</OPTION>
<OPTION>St. Austin’s Teachers Training College – Ishiara</OPTION>
<OPTION>St. Francis Institute of Science and Technology</OPTION>
<OPTION>St. Francis Techinical Training Institute – Asumbi</OPTION>
<OPTION>St. John’s Community Centre College</OPTION>
<OPTION>St. John’s Riruta Computer College</OPTION>
<OPTION>St. John’s Teachers Training College – Thika</OPTION>
<OPTION>St. Kizito Vocational Training Institute</OPTION>
<OPTION>St. Martin De Porres Teachers College – Kiserian</OPTION>
<OPTION>St. Mary Computer College</OPTION>
<OPTION>St. Paul’s Nyabururu Teachers Training College – Kisii</OPTION>
<OPTION>St. Paul’s United Theological College</OPTION>
<OPTION>St. Theresa’s Commercial College</OPTION>
<OPTION>Stanley Mathenge Youth Politechnic</OPTION>
<OPTION>Star College of Management Studies</OPTION>
<OPTION>Star Media Institute</OPTION>
<OPTION>Star Technical Institute</OPTION>
<OPTION>Stonebic College</OPTION>
<OPTION>Strathmore University</OPTION>
<OPTION>Strive and Excell Commercial College</OPTION>
<OPTION>Success Professional Institute</OPTION>
<OPTION>Summit Institute of Professionals</OPTION>
<OPTION>Sunrise Teachers College – Athi River</OPTION>
<OPTION>Superior Commercial and Secretarial College</OPTION>
<OPTION>Suwon Christian College</OPTION>
<OPTION>Swiss Management Academy</OPTION>
<OPTION>Sydney Driving School</OPTION>
<OPTION>T.E.S. College</OPTION>
<OPTION>Taita Taveta University College (JKUAT)</OPTION>
<OPTION>Tala School of Management Studies</OPTION>
<OPTION>Tangaza College</OPTION>
<OPTION>Tanya Centre</OPTION>
<OPTION>TEC Institute of Management – Machakos</OPTION>
<OPTION>Tec institute of Management-Nairobi</OPTION>
<OPTION>Tec Teachers Training Institute – Nairobi</OPTION>
<OPTION>Technical Education Centre</OPTION>
<OPTION>Technical Institute</OPTION>
<OPTION>Technical University of Kenya</OPTION>
<OPTION>Technical University of Mombasa</OPTION>
<OPTION>Techno Brain (K) Ltd</OPTION>
<OPTION>Technosoft Computer Training Centre</OPTION>
<OPTION>Tenwek Mission Hospital</OPTION>
<OPTION>The Aviation College</OPTION>
<OPTION>The Catholic University of Eastern Africa (CUEA)</OPTION>
<OPTION>The Co-operative University College (JKUAT)</OPTION>
<OPTION>The East African University</OPTION>
<OPTION>The Eastern and Southern African Management Institute (ESAMI)</OPTION>
<OPTION>The Institute of Administrative Management</OPTION>
<OPTION>The Institute Of Community Development</OPTION>
<OPTION>The Karen Hospital</OPTION>
<OPTION>The Kenya Agricultural Research Institute (KARI)</OPTION>
<OPTION>The Kenya Christian Industrial Training Institute (KCITI-Mombasa)</OPTION>
<OPTION>The KIM, School of Management</OPTION>
<OPTION>The Language Center Ltd</OPTION>
<OPTION>The Mater Hospital</OPTION>
<OPTION>The Rocky Mirror College</OPTION>
<OPTION>The SPA Ambassador College – Nyeri Town</OPTION>
<OPTION>The SPA Ambassador College – Voi Town</OPTION>
<OPTION>The Springboard College</OPTION>
<OPTION>The Summit College of Professional Studies-Nairobi</OPTION>
<OPTION>Thika Advanced Institute of Science and Technology</OPTION>
<OPTION>Thika College of Banking, Accountancy and Computer Studies</OPTION>
<OPTION>Thika E.C.D. Academy – Thika</OPTION>
<OPTION>Thika Institute of Business Studies</OPTION>
<OPTION>Thika Institute of Engineering and Technology</OPTION>
<OPTION>Thika Institute of Technology</OPTION>
<OPTION>Thika Level 5 Hospital</OPTION>
<OPTION>Thika School of Medical and Health Sciences</OPTION>
<OPTION>Thika Technical Training Institute</OPTION>
<OPTION>Thogoto Teachers Training College – Kikuyu</OPTION>
<OPTION>Timeless Professional College</OPTION>
<OPTION>Times Professional Institute</OPTION>
<OPTION>Times Training Centre</OPTION>
<OPTION>Timmabby School of Hairdressing for Beauty Therapy</OPTION>
<OPTION>Tom Mboya Labour College Courses and Contacts</OPTION>
<OPTION>Tonic Hair and Beauty College</OPTION>
<OPTION>Top Media Institute</OPTION>
<OPTION>Toprank Computer Training Centre – Kikuyu Township</OPTION>
<OPTION>Total Care Pre-School Teachers College – Nairobi</OPTION>
<OPTION>Total Quality Driving School</OPTION>
<OPTION>Tracom College of Professional Studies</OPTION>
<OPTION>Trans-Eastern Airlines Aviation College</OPTION>
<OPTION>Trans-National College</OPTION>
<OPTION>Trezian Driving School</OPTION>
<OPTION>Trinity Academy of Contemporary Music</OPTION>
<OPTION>Trinity College</OPTION>
<OPTION>Tropical Institute of Community Health and Development (TICH)</OPTION>
<OPTION>Tsavo Institute of Technology</OPTION>
<OPTION>Ujuzi Driving School</OPTION>
<OPTION>Ukamba Agricultural Institute – UKAI</OPTION>
<OPTION>UMMA University</OPTION>
<OPTION>United Stataes International University</OPTION>
<OPTION>Unity College of Profesional Studies</OPTION>
<OPTION>Universal Technical Training Institute of Science and Technology</OPTION>
<OPTION>University of Eastern Africa, Baraton</OPTION>
<OPTION>University of Eldoret</OPTION>
<OPTION>University of Kabianga</OPTION>
<OPTION>University of Nairobi</OPTION>
<OPTION>Update School of Hairdressing and Beauty</OPTION>
<OPTION>Upinde Diving Center</OPTION>
<OPTION>Uzima University College CUEA</OPTION>
<OPTION>Uzuri Institute of Technology and Development</OPTION>
<OPTION>Valentine school of catering and hotel management</OPTION>
<OPTION>Valley Business School</OPTION>
<OPTION>Vera Beauty College</OPTION>
<OPTION>Vera Beauty College – Uasin Gishu</OPTION>
<OPTION>Vera Beauty College and Fashion Institute – Nairobi</OPTION>
<OPTION>Vihiga District Hospital</OPTION>
<OPTION>Violet Driving School</OPTION>
<OPTION>Vision Empowerment Training Institute</OPTION>
<OPTION>Vision Institute of Professionals – Kilifi</OPTION>
<OPTION>Vision Institute of Professionals – Mombasa</OPTION>
<OPTION>Vision Institute of Professionals – Nairobi</OPTION>
<OPTION>Vision View Commercial College</OPTION>
<OPTION>Viteec Training Institute</OPTION>
<OPTION>Wagema Institute of Professional Studies</OPTION>
<OPTION>Wamy Vocational College</OPTION>
<OPTION>Wang Point Technologies</OPTION>
<OPTION>Wanjua School of Beauty Therapy and Hairdressing</OPTION>
<OPTION>Watulizeni Technical Training Centre</OPTION>
<OPTION>Weaver College</OPTION>
<OPTION>Webbs Institute</OPTION>
<OPTION>Webuye District Hospital</OPTION>
<OPTION>Western Kenya College of Economics and Business Studies</OPTION>
<OPTION>Willpower Institute</OPTION>
<OPTION>Wisemen School of Management</OPTION>
<OPTION>Woodgrove Fashion College</OPTION>
<OPTION>Woodvale Institute of Professional Studies</OPTION>
<OPTION>Wote Technical Training Institute</OPTION>
<OPTION>Wright Flyers International College</OPTION>
<OPTION>Wyda College of Advanced Information and Communication Technology</OPTION>
<OPTION>YMCA National Training Institute</OPTION>
<OPTION>Zetech University</OPTION>

        </select>
     

    </div>

    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Institution Type">Institution Type:</label>
    </div>
    <div class="col-lg-3">
        <select name="be" id="Type" class="  form-control input-lg" style="width:350px" autocomplete="off">    
            <option value="university" ="University"  selected="active">University</option>
            <option value="National Polytechnic" ="National Polytechnic" >National Polytechnic</option>
            <option value="Medical Training College" ="Medical Training College" >Medical Training College</option>
            <option value="other">Other</option>
        </select>
    </div>
</div>


</div><br>

<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">

        <label class="control-label col-xs-2" for="Postal Address">Postal Address:</label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="address" placeholder="address" name="address" required="" /> 
    </div>


     <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Telephone:">Telephone:</label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="Telephone" placeholder="Telephone" name="Telephone" required="" /> 
    </div>
</div>


</div><br>

<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="County">County:</label>
    </div>
    <div class="col-lg-3">
        <select name="County" id="Type" class="  form-control input-lg  " style="width:350px" autocomplete="off">
          <option>Mombasa </option>
<option>Kwale</option>
<option>Kilifi</option>
<option>Tana River</option>
<option>Lamu</option>
<option>Taita–Taveta</option>
<option>Garissa</option>
<option>Wajir</option>
<option>Mandera</option>
<option>Marsabit</option>
<option>Isiolo</option>
<option>Meru</option>
<option>Tharaka-Nithi</option>
<option>Embu</option>
<option>Kitui</option>
<option>Machakos</option>
<option>Makueni</option>
<option>Nyandarua</option>
<option>Nyeri</option>
<option>Kirinyaga</option>
<option>Murang'a</option>
<option>Kiambu</option>
<option>Turkana</option>
<option>West Pokot</option>
<option>Samburu</option>
<option>Trans-Nzoia</option>
<option>Uasin Gishu</option>
<option>Elgeyo-Marakwet</option>
<option>Nandi</option>
<option>Baringo</option>
<option>Laikipia</option>
<option>Nakuru</option>
<option>Narok</option>
<option>Kajiado</option>
<option>Kericho</option>
<option>Bomet</option>
<option>Kakamega</option>
<option>Vihiga</option>
<option>Bungoma</option>
<option>Busia</option>
<option>Siaya</option>
<option>Kisumu</option>
<option>Homa Bay</option>
<option>Migori</option>
<option>Kisii</option>
<option>Nyamira</option>
<option>Nairobi </option>
<option>Other</option>
        </select>
    </div>
<div class="col-lg-1">
        <label class="control-label col-xs-2" for="Sub-County">Sub-County:</label>
    </div>

    <div class="col-lg-3">
        <input type="text" class="form-control" id="Sub" placeholder="Sub-County" name="Sub" required=""> 
    </div>

</div>


</div><br>


<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Town":>Town</label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="Town" placeholder="Town" name="Town" required=""> 
    </div>

     <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Road":>Road:</label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="Road" placeholder="Road" name="Road" required=""> 
    </div>
  </div>
</div><br>


<div class="form-group">
<div class="col-lg-12">
  <div class="row">

     <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Building">Building:</label>
    </div>
    <div class="col-lg-3">
        <input type="text" class="form-control" id="Building" placeholder="Building" name="Building" required=""  > 
    </div>
 <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Type of Ownership">Type of Ownership:</label>
    </div>
    <div class="col-lg-3">
        <select name="type" id="class_type" class="  form-control input-lg" style="width:350px" autocomplete="off">
            <option value="private">Private</option>
            <option value="public" selected="active">Public</option>
            
        </select>
    </div>

</div>


</div><br>






<div class="form-group" >
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Date" >Date:</label>
    </div>
    <div class="col-lg-3">
        <input type="label" class="form-control" id="date"  name="date"  style="background-color: grey;"  value="<?php echo $date;?>"   readonly> 
    </div>
</div>


</div><br>




</fieldset>



 <div class="form-group">        
      
        <form>
           <div class="row">
             <div class="col-lg-12">
  
         
         
           <input type="submit" value="Proceed to next page" class=" btn btn-primary"  />
        
           
    </div>
</div>

      

      
      </form>
      </div>
    </div>
  
  </form>
</div>

</form>


</form>



</body>
</html>

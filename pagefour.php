<?php
    // this page outputs the contents of the textarea if posted

     // set var to avoid errors
     session_start(); // needs to be before anything else on page to use $_SESSION
    // this page outputs the textarea1 from the session IF it exists
    $you = ""; // set var to avoid errors
    if(isset($_SESSION['you'])){
        $you = $_SESSION['you'];
    }
?>


<?php
    // this page outputs the contents of the textarea if posted

     // set var to avoid errors
     // needs to be before anything else on page to use $_SESSION
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
           <i class="bi bi-plus"></i>
         </li>
      </ul>
      
    </div>
  </div>
</nav>


 <p>
        <div class="span9 btn-block">

  <a class="btn btn-large btn-block btn-primary"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    CLICK FOR INSTRUCTIONS ON COMPLETING QUESTIONNAIRE
  </a>
  </div>
</p>
<div class="collapse navbar-collapse" id="collapseExample">
  <div class="card card-body">
   <p><i><b>Once you have filled data on the available row,click "submit data" which will capture your data &  provide you with a new row to add any other additional information.Once you have submitted all the data, proceed to the next page.Make sure to submit data before proceeding to next page.</b></i></p>
  </div>
</div>


<form action="data2.php" method="POST">
<!-- Editable table -->
<div class="card">
  <h7 class="card-header text-center font-weight-bold text-uppercase py-4"><i>Enter number of students who graduated</i></h7>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success">
        </a></span>

      <table class="table table-bordered table-responsive-md table-striped text-center">

        <thead>
          <tr>
            
            <th class="text-center">S/NO</th>
            <th class="text-center">PROGRAMME/COURSE</th>
             <th class="text-center">DURATION</th>
            <th class="text-center">CODE(for office use)</th>
            <th class="text-center">MALE</th>
             <th class="text-center">FEMALE</th>
            <th class="text-center">YEAR</th>
           
            <th class="text-center">INSTITUTION</th>
            <th class="text-center">DATE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
            <td class="pt-3-half" contenteditable="false"><input type="text" class=" form-control input-lg pt-3-half" name="S/NO"  placeholder="S/NO" required=""></td>
            <td class="pt-3-half" contenteditable="false"><select name="COURSE" id="Institution Type" class=" form-control input-lg pt-3-half" style="" autocomplete="off" required="">
            <option>140003  Agriculture, Education and Extension</option>
<option>140004  Education Arts</option>
<option>140005  Education Music</option>
<option>140006  History of Education</option>
<option>140007  Child Development</option>
<option>140008  Comparative Education</option>
<option>140009  Counseling Psychology</option>
<option>140010  Creative Art Education</option>
<option>140011  Curriculum Studies</option>
<option>140012  Development Studies</option>
<option>140013  Early Childhood Development Education (ECDE)</option>
<option>140014  Economics Of Education</option>
<option>140015  Education </option>
<option>140016  Educational Management and Policy Studies</option>
<option>140017  Educational Planning and Management</option>
<option>140018  Educational Psychology</option>
<option>140019  Educational Technology</option>
<option>140020  Environmental Education</option>
<option>140021  Evaluation of Education Programs</option>
<option>140022  French</option>
<option>140023  Geology  </option>
<option>140024  History of Education</option>
<option>140025  Home Economics</option>
<option>140026  Kiswahili</option>
<option>140027  Language Education</option>
<option>140028  Music Education</option>
<option>140029  Mathematics Education</option>
<option>140030  Measurement and Evaluation</option>
<option>140031  Music Education</option>
<option>140032  Pedagogy</option>
<option>140033  Philosophy of Education</option>
<option>140034  Planning and Economics of Education</option>
<option>140035  Primary Education</option>
<option>140036  Science Education</option>
<option>140037  Social Studies Education</option>
<option>140038  Sociology of Education and Policy Issues</option>
<option>140039  Special Needs Education</option>
<option>140040  Technology Education</option>
<option> 21 Arts </option>
<option>210001  Advanced Video Editing</option>
<option>210002  Animations and Programming</option>
<option>210003  Arts (Construction Management)</option>
<option>210004  Broadcast Journalism</option>
<option>210005  Coaching</option>
<option>210006  Creative Arts</option>
<option>210007  Design</option>
<option>210008  Drama & Theatre Studies</option>
<option>210009  Ethnomusicology</option>
<option>210010  Fashion Construction</option>
<option>210011  Fashion Merchandising</option>
<option>210012  Film Technology</option>
<option>210013  Fine Art </option>
<option>210014  Fitting and Masonry</option>
<option>210015  Graphic Arts</option>
<option>210016  Graphic Design / Animation</option>
<option>210017  Interior Design and Decoration</option>
<option>210018  International Culinary Arts-Chefs. </option>
<option>210019  Missions Studies</option>
<option>210020  Music</option>
<option>210021  Musical Arts DMA</option>
<option>210022  Musical Arts in Performance</option>
<option>210023  Musicology</option>
<option>210024  Printing Technology</option>
<option>210025  Radio and Television</option>
<option>210026  Education in Physical Health</option>
<option>210027  Sports Science Education</option>
<option>210028  Sports Management and Administration</option>
<option>210029  Theatre Arts / Drama</option>
<option>210030  Theatre Arts and Film Technology</option>
<option>210031  TV / Video Production</option>
<option>210032  TV And Film Production</option>
<option>210033  Video Editing</option>
<option>210034  Production and Quality Management(Film,Video)</option>

<option> 22 Humanities</option>
<option>220001  Advanced Arabic</option>
<option>220002  Advanced Kiswahili</option>
<option>220003  African Music</option>

<option>220005  Applied Theology, Christian Education, Mission and Evangelism</option>
<option>220006  Arabic</option>
<option>220007  Arts</option>
<option>220008  Bible and Theology</option>
<option>220009  Biblical & Religious Studies</option>
<option>220010  Bioinformatics</option>
<option>220011  Care Management of Heritage</option>
<option>220012  Child Development</option>
<option>220013  Chinese Language and Culture</option>
<option>220014  Christian Education</option>
<option>220015  Christian Ministries</option>
<option>220016  Church History</option>
<option>220017  Clinical Pastoral Education </option>
<option>220018  Communication and Public Relations </option>
<option>220019  Community Pastoral Care and HIV&AIDS</option>
<option>220020  Comparative Education</option>
<option>220021  Conflict Management and Conflict Resolution</option>
<option>220022  Cultural Studies</option>
<option>220023  Development Studies</option>
<option>220024  Diplomacy and International Relations</option>
<option>220025  Disaster Preparedness and Engineering Management</option>
<option>220026  Disaster Management and Humanitarian Assistance</option>
<option>220027  Disaster Management and Sustainable Development</option>
<option>220028  Divinity </option>
<option>220029  Educational Psychology</option>
<option>220030  English Language & Literature</option>
<option>220031  English Language for Foreigners (ESOL)</option>
<option>220032  French</option>
<option>220033  Gender and Development Studies</option>
<option>220034  Geographic Information Systems</option>
<option>220035  Geography</option>
<option>220036  History</option>
<option>220037  History of Global Christianity</option>
<option>220038  Human Resource Management</option>
<option>220039  International Studies</option>
<option>220040  Islam and Christian Muslim Relations </option>
<option>220041  Italian </option>
<option>220042  Leadership</option>
<option>220043  Linguistics</option>
<option>220044  Literature</option>
<option>220045  Missions Studies</option>
<option>220046  Pastoral Studies</option>
<option>220047  Peace and Conflict Studies</option>
<option>220048  Physical Education</option>
<option>220049  Political Science</option>
<option>220050  Religion and Society</option>
<option>220051  Religious Studies</option>
<option>220052  Sacred Liturgy</option>
<option>220053  Small Christian Communities</option>
<option>220054  Social Development & Management</option>
<option>220055  Social Sciences</option>
<option>220056  Social Studies Education</option>
<option>220057  Social Work </option>
<option>220058  Sociology</option>
<option>220059  Theological Studies</option>
<option>220060  Theology in African Christianity</option>
<option>220061  Transformational Church Leadership Development Programme </option>
<option>220062  Translation Studies</option>
<option>220063  Youth Discipleship Programme</option>

<option> 31 Social Sciences</option>
<option>310001  Anthropology</option>
<option>310002  Community Development</option>
<option>310003  Community Economic Development </option>
<option>310004  Community Resource Management</option>
<option>310005  Community Studies & Extension</option>
<option>310006  Conflict Resolution and Humanitarian Assistance</option>
<option>310007  Culinary Arts</option>
<option>310008  Disaster Management and International Diplomacy</option>
<option>310009  Disaster Mitigation and Sustainable Development</option>
<option>310010  Disaster Preparedness and Environmental Technology</option>
<option>310011  Economics and History</option>
<option>310012  Economics and Sociology</option>
<option>310013  Economics by Research</option>
<option>310014  Economics</option>
<option>310015  Economics (Development)</option>
<option>310016  Economics (Econometrics)</option>
<option>310017  Economics (Environment)</option>
<option>310018  Economics (Finance</option>
<option>310019  Economics (Health)</option>
<option>310020  Economics and Finance</option>
<option>310021  Economics and Management of Education</option>
<option>310022  Gender and Development</option>
<option>310023  Geographical Information System</option>
<option>310024  Rural Development</option>
<option>310025  Integrated Rural Development</option>
<option>310026  Geography</option>
<option>310027  History</option>
<option>310028  International Studies</option>
<option>310029  Land Economics</option>
<option>310030  Organizational Development </option>
<option>310031  Peace and Conflict Studies</option>
<option>310032  Philosophy</option>
<option>310033  Philosophy and Ethics) </option>
<option>310034  Planning</option>
<option>310035  Policy and Management</option>
<option>310036  Political Science</option>
<option>310037  Population Studies</option>
<option>310038  Project Planning And Management</option>
<option>310039  Psychology</option>
<option>310040  Recreation & Leisure Management</option>
<option>310041  Research Activities</option>
<option>310042  Research Methodology</option>
<option>310043  Social Sciences</option>
<option>310044  Social Statistics</option>
<option>310045  Social Studies</option>
<option>310046  Social Work</option>
<option>310047  Sociology & Anthropology</option>
<option>310048  Sociology and Religion</option>
<option>310049  Sports Science</option>
<option>310050  Youth Development Work</option>
<option>310051  Political Science and Public Administration</option>

<option> 32 Journalism and Information</option>
<option>320001  Archives and Records Management</option>
<option>320002  Broadcast Journalism</option>
<option>320003  Health Records and Information Technology</option>
<option>320004  Information Studies</option>
<option>320005  Journalism/International Journalism</option>
<option>320006  Journalism & Media Studies</option>
<option>320007  Journalism and Mass Media Communications</option>
<option>320008  Library and Information Management</option>
<option>320009  Library Archives & Information Studies</option>
<option>320010  Mass Communication</option>
<option>320011  Modern Library, Archives and Records Management </option>
<option>320012  Library & Information Science</option>
<option>320013  Print Journalism</option>
<option>320014  Printing Technology</option>
<option>320015  Science (Informatics) </option>
<option>320016  Science (Information Sciences)</option>
<option>320017  Technical & Professional Communication</option>
<option> 320018 Microfilming</option>
<option>320019  Photography</option>
<option>320020  Binding</option>
<option> 34 Business and Administration</option>
<option>340001  Accounting & Finance, HRM, Marketing, Entrepreneurship)</option>
<option>340002  Kenya Accounting Technical Certificate (KATC)</option>
<option>340003  Advanced Management Course for Secretaries </option>
<option>340004  Banking</option>
<option>340005  Business Administration</option>
<option>340006  Business Administration and Management </option>
<option>340007  Business and Office Management</option>
<option>340008  Business Information Management</option>
<option>340009  Business Information Systems</option>
<option>340010  Business Leadership</option>
<option>340011  Business Management & Information Technology</option>
<option>340012  Business Management </option>
<option>340013  Business Management and Marketing</option>
<option>340014  Business Science (Finance) </option>
<option>340015  Business Science (Financial Economics)</option>
<option>340016  Business Administration in Marketing</option>
<option>340017  Catering & Institutions Management</option>
<option>340018  Certified Public Accountant (CPA)</option>
<option>340019  Certified Public Secretary (CPS)</option>
<option>340020  Certified Securities and Investment Analyst (CSIA)</option>
<option>340021  Chartered Certified Accountants (ACCA)</option>
<option>340022  Chartered Financial Analyst (CFA) </option>
<option>340023  Chartered Institute of Purchasing and Supplies (CIPS)</option>
<option>340024  Commerce</option>
<option>340025  Co-Operative Management</option>
<option>340026  Customer Care Service</option>
<option>340027  Economic Policy Management</option>
<option>340028  Economics of Multilateral Trading Systems</option>
<option>340029  Education Planning and Management</option>
<option>340030  Educational Administration</option>
<option>340031  Educational Curriculum Development</option>
<option>340032  Enterprise Management</option>
<option>340033  Financial Engineering</option>
<option>340034  Front Office 0perations and Customer Care Management</option>
<option>340035  Human Resource Management</option>
<option>340036  Institutional Management</option>
<option>340037  International Business Administration       </option>
<option>340038  International Relations and Diplomacy </option>
<option>340039  International Trade & Finance</option>
<option>340040  Kenya Accounting Technician Certificate</option>
<option>340041  Leadership and Management</option>
<option>340042  Legal Secretarial Studies</option>
<option>340043  Logistics and Supplies</option>
<option>340044  Marketing</option>
<option>340045  Microfinance Programme </option>
<option>340046  Office Administration</option>
<option>340047  Office Management</option>
<option>340048  Personnel Management and Industrial Relations</option>
<option>340049  Policy Planning and Implementation </option>
<option>340050  Portfolio Management.</option>
<option>340051  Procurement and Materials Management</option>
<option>340052  Project Management</option>
<option>340053  Project Monitoring and Evaluation </option>
<option>340054  Project Planning and Management</option>
<option>340055  Project Proposal Development </option>
<option>340056  Public Administration</option>
<option>340057  Public Procurement Management Course</option>
<option>340058  Public Relations (PR) </option>
<option>340059  Public Relations and Customer Care </option>
<option>340060  Public Relations, Advertising & Marketing</option>
<option>340061  Purchasing and Supplies Management</option>
<option>340062  Real Estate Agency & Property Management</option>
<option>340063  Receptionist/Customer Care</option>
<option>340064  Sales & Marketing</option>
<option>340065  School Management </option>
<option>340066  Science (Accounting)</option>
<option>340067  Secretarial Studies</option>
<option>340068  Senior Management Course</option>
<option>340069  Sports Management and Administration</option>
<option>340070  Store Keeping</option>
<option>340071  Stores Management</option>
<option>340072  Strategic Leadership Development Programme</option>
<option>340073  Supervisory Skills / Development Skills</option>
<option>340074  Training of Trainers Course</option>
<option>340075  Typing</option>
<option>340076  Proficiency/Clerical</option>
<option>340077  Taxation</option>
<option>340078  Auditing</option>
<option>340079  Production & Quality Management</option>
<option>340080  Weights & Measures</option>
<option>340081  Policy Analysis</option>
<option>340082  Valuation and Property Management</option>
<option> 38 Law</option>

<option>380001  Law(s)  </option>

<option> 42 Life Sciences</option>
<option>420001  Animal Bio-System and Management</option>
<option>420002  Applied Animal Laboratory Sciences</option>
<option>420003  Applied Biology</option>
<option>420004  Applied Microbiology</option>
<option>420005  Applied Parasitology</option>
<option>420006  Applied Physiology and Cellular Biology</option>
<option>420007  Aquatic Science</option>
<option>420008  Bio Resources Conservation and Management</option>
<option>420009  Biochemistry</option>
<option>420010  Biological Sciences</option>
<option>420011  Biology - Biomedical Option</option>
<option>420012  Biology - Conservation Biology Option</option>
<option>420013  Biology - General </option>
<option>420014  Biology and Anatomical Sciences</option>
<option>420015  Biology of Conservation</option>
<option>420016  Biomedical Science</option>
<option>420017  Biomedical Science & Technology</option>
<option>420018  Biometry</option>
<option>420019  Biotechnology</option>
<option>420020  Biotechnology and Biosafety</option>
<option>420021  Botany</option>
<option>420022  Botany & Horticulture</option>
<option>420023  Botany and Zoology</option>
<option>420024  Clinical Pathology And Laboratory Diagnosis</option>
<option>420025  Clinical Psychology</option>
<option>420026  Conservation Biology</option>
<option>420027  Developmental Botany</option>
<option>420028  Entomology and Parasitology</option>
<option>420029  Environmental Biology</option>
<option>420030  Ethnobotany</option>
<option>420031  Family and Consumer Sciences</option>
<option>420032  Genetics</option>
<option>420033  Geology </option>
<option>420034  Industrial Microbiology and Biotechnology</option>
<option>420035  Integrated Pest and Vector Management</option>
<option>420036  Limnology</option>
<option>420037  Medical Biochemistry</option>
<option>420038  Medical Entomology</option>
<option>420039  Medical Parasitology</option>
<option>420040  Medical Physiology</option>
<option>420041  Microbiology</option>
<option>420042  Microbiology and Biotechnology</option>
<option>420043  Molecular and Cellular Biology</option>
<option>420044  Molecular Biology & Bioinformatics</option>
<option>420045  Physiology</option>
<option>420046  Plant Biochemistry and Physiology</option>
<option>420047  Plant Biotechnology</option>
<option>420048  Plant Ecology</option>
<option>420049  Plant Pathology</option>
<option>420050  Plant Sciences</option>
<option>420051  Taxonomy & Economic Botany</option>
<option>420052  Vertebrate Pest Studies</option>
<option>420053  Zoology</option>
<option> 44 </option>
<option>Physical Sciences</option>
<option>440001  Industrial Chemistry With Management</option>
<option>440002  Aerospace Science and Operations</option>
<option>440003  Aerospace Science and Operations - Aerospace Logistics</option>
<option>440004  Aerospace Science and Operations - Professional Pilot</option>
<option>440005  Aircraft Maintenance</option>
<option>440006  Analytical Chemistry</option>
<option>440007  Analytical Chemistry with Management</option>
<option>440008  Applied Analytical Chemistry</option>
<option>440009  Applied Aquatic Science</option>
<option>440010  Applied Chemistry </option>
<option>440011  Astronomy and Astrophysics</option>
<option>440012  Atmospheric Science</option>
<option>440013  Aviation Meteorology</option>
<option>440014  Biochemistry Science and Technology </option>
<option>440015  Biochemistry</option>
<option>440016  Biotechnology</option>
<option>440017  Chemistry</option>
<option>440018  Chemistry, Science and Laboratory Technology </option>
<option>440019  Control and Instrumentation</option>
<option>440020  Earth Science </option>
<option>440021  Environmental Chemistry</option>
<option>440022  Environmental Science</option>
<option>440023  Forensic Science</option>
<option>440024  Geography</option>
<option>440025  Geology</option>
<option>440026  Industrial Chemistry</option>
<option>440027  Integrated Watershed Management</option>
<option>440028  Land and Water Management</option>
<option>440029  Land Resource Planning and Management</option>
<option>440030  Maritime Science</option>
<option>440031  Materials Science</option>
<option>440032  Meteorology</option>
<option>440033  Mining and Mineral Processing Engineering</option>
<option>440034  Modern Chemistry Laboratory Technology</option>
<option>440035  Mycology</option>
<option>440036  Natural Resource Management</option>
<option>440037  Nuclear Science</option>
<option>440038  Operational Hydrology</option>
<option>440039  Physics</option>
<option>440040  Renewable Energy Engineering</option>
<option>440041  Science (General)</option>
<option>440042  Science Laboratory Technology</option>
<option>440043  Soil and Water Engineering – SWEN</option>
<option>440044  Soil Science</option>
<option>440045  Wood Science & Technology</option>
<option>440046  Wood Science and Industrial Processing</option>
<option>440047  Hydrobiology</option>
<option>440048  Oceanography</option>
<option>440049  Middle Level Meteorological Technician</option>
<option> 440050 Remote Sensing and Radar Imagery Technology</option>
<option>440051  Biomass</option>
<option>440052  Integrated Soil Fertility Management</option>
<option>  </option>
<option> 46 Mathematics and Statistics</option>
<option>460001  Actuarial Science</option>
<option>460002  Applied Mathematics</option>
<option>460003  Applied Statistics</option>
<option>460004  Business Statistics</option>
<option>460005  Bioinformatics</option>
<option>460006  Biostatistics & Biometrics</option>
<option>460007  Economics & Mathematics</option>
<option>460008  Economics and Statistics</option>
<option>460009  Mathematics</option>
<option>460010  Mathematics & Informatics</option>
<option>460011  Mathematics Education</option>
<option>460012  Mathematics- Pure Mathematics</option>
<option>460013  Mathematics –Statistics</option>
<option>460014  Mathematics for Business & Economics</option>
<option>460015  Population</option>
<option>460016  Research Skills Development</option>
<option>460017  Statistics </option>
<option>460018  Valuation and Property Management</option>
<option>  </option>
<option> 48 Computing</option>
<option>  </option>
<option>480001  A+(A+)</option>
<option>480002  Accounting Packages (Quick Books, Sage, Pastel)</option>
<option>480003  Analytical Techniques</option>
<option>480004  Applied Computer Science</option>
<option>480005  Business Information Systems</option>
<option>480006  Business Information Technology</option>
<option>480007  Certified Information Security Manager® (CISM®) </option>
<option>480008  Certified Information Systems Auditor® (CISA®) </option>
<option>480009  Cisco Certified Network Associate (CCNA)</option>
<option>480010  Communication</option>
<option>480011  Communication & Media Technology</option>
<option>480012  Communication Technology</option>
<option>480013  Computer Aided Design (CAD)</option>
<option>480014  Computer and Information Systems</option>
<option>480015  Computer and Network Engineering</option>
<option>480016  Computer Application Packages</option>
<option>480017  Computer Based Records Management</option>
<option>480018  Computer Engineering</option>
<option>480019  Computer Maintenance and Network Technology.</option>
<option>480020  Computer Networking</option>
<option>480021  Computer Programming</option>
<option>480022  Computer Repair & Maintenance</option>
<option>480023  Computer Science</option>
<option>480024  Computer Science & Technology </option>
<option>480025  Computer Servicing and Maintenance </option>
<option>480026  Computer Studies </option>
<option>480027  Computer Systems Engineering and Hardware Maintenance (ABMA) </option>
<option>480028  Computer-Based Information Systems</option>
<option>480029  Computerized Accounts</option>
<option>480030  Computerized Clearing and Forwarding</option>
<option>480031  Computing and Informatics</option>
<option>480032  Data Analysis </option>
<option>480033  Data Management </option>
<option>480034  Database Administration</option>
<option>480035  Electronics and Computing Systems (City and Guilds) </option>
<option>480036  Graphics/Web Design</option>
<option>480037  Health Records and Information Technology</option>
<option>480038  ICT Management</option>
<option>480039  ICT Policy & Regulation</option>
<option>480040  Management of Information Systems (IMIS)</option>
<option>480041  Information Communication Technology</option>
<option>480042  Information Systems & Technology</option>
<option>480043  Information Technology </option>
<option>480044  Information Communication Technology (ICT)</option>
<option>480045  International Computer Driving License (ICDL)</option>
<option>480046  Micro Computer Engineering </option>
<option>480047  Microprocessor Technology & Instrumentation</option>
<option>480048  Microsoft Certified Systems Administrator (MCSA)</option>
<option>480049  Networking & Systems Administration</option>
<option>480050  Networks and Communication Systems</option>
<option>480051  Programmable Logic Control and Industrial Automation </option>
<option>480052  Servicing and Maintenance Of Electrical And Electronics Equipment (ASM) </option>
<option>480053  Software Engineering</option>
<option>480054  Statistical Package for Social Scientists (SPSS, SAS, R-Statistics)</option>
<option>480055  Strategic Business IT</option>
<option>480056  Telecommunication and Information Technology-T.I.T</option>
<option>480057  V-sat and Hub Configuration</option>

<option> 52 Engineering and Engineering Trades</option>
<option>520001  Aeronautical Engineering</option>
<option>520002  Agricultural Engineering</option>
<option>520003  Agricultural and Bio Systems Engineering</option>
<option>520004  Applied Electronics </option>
<option>520005  Auto Electrician</option>
<option>520006  Automotive Engineering</option>
<option>520007  Biomechanical and Environmental Engineering</option>
<option>520008  Biomechanical and Process Engineering</option>
<option>520009  Building and Civil Engineering</option>
<option>520010  Cell phone Technology</option>
<option>520011  Chemical and Process Engineering</option>
<option>520012  Chemical Engineering</option>
<option>520013  Civil and Structural Engineering</option>
<option>520014  Electrical & Communication Engineering</option>
<option>520015  Electrical and Electronics Engineering</option>
<option>520016  Electrical Engineering</option>
<option>520017  Electrical Installation Electrician (EIE) </option>
<option>520018  Electrical Installation Works and Engineering</option>
<option>520019  Electrical Power Engineering</option>
<option>520020  Electronic & Telecommunication Engineering</option>
<option>520021  Electronics and Automation Engineering</option>
<option>520022  Electronics Engineering</option>
<option>520023  Electronics Technician (CET) </option>
<option>520024  Energy Engineering</option>
<option>520025  Engineering</option>
<option>520026  Environmental and Biosystems Engineering</option>
<option>520027  Fashion Design & Marketing</option>
<option>520028  Fibre Optic Communications, Splicing & Termination </option>
<option>520029  Food Science & Technology</option>
<option>520030  Geomatic Engineering and Geospatial Engineering</option>
<option>520031  Geospatial Engineering</option>
<option>520032  Industrial Engineering and Management</option>
<option>520033  Instrumentation and Control Engineering</option>
<option>520034  Mechanical & Energy Engineering</option>
<option>520035  Mechanical and Production Engineering</option>
<option>520036  Mechanical Engineering</option>
<option>520037  Mechanical Engineering (Automotive Opt)</option>
<option>520038  Mechanical Engineering (Plant Opt)</option>
<option>520039  Mechanical Engineering (Production Option</option>
<option>520040  Mechatronics Engineering</option>
<option>520041  Media Science</option>
<option>520042  Medical Engineering Services</option>
<option>520043  Medical Engineering Technology</option>
<option>520044  Medical Imaging Sciences</option>
<option>520045  Optical Technology</option>
<option>520046  Production Engineering</option>
<option>520047  Refrigeration and Air Conditioning</option>
<option>520048  Renewable Energy</option>
<option>520049  Satellite Communication</option>
<option>520050  Science (Engineering)</option>
<option>520051  Software Engineering</option>
<option>520052  Sustainable Energy Engineering</option>
<option>520053  Technology -Automotive</option>
<option>520054  Technology -Electronics</option>
<option>520055  Telecommunication and Information Engineering</option>
<option>520056  Telecommunication Systems </option>
<option>520057  Telecommunications Engineering (City & Guilds)</option>
<option>520058  Telecoms and Information Engineering</option>
<option>520059  Textile Sciences and Engineering</option>
<option>520060  Water Engineering</option>
<option>520061  Engineering Design</option>
<option> 521  Craft/Vocational Trades</option>
<option> 521061 Apparel Design</option>
<option> 521062 Auto-Electrician</option>
<option> 521063 Carpentry</option>
<option> 521064 Catering</option>
<option> 521065  Dressmaking</option>
<option> 521066  Driving</option>
<option> 521067  Electrical and Electronics</option>
<option> 521068  Electrical Installation</option>
<option> 521069  Electrical Wiring</option>
<option> 521070 Electronics</option>
<option> 521071 Fabrication, Welding & Fitting</option>
<option> 521072  Fashion Design</option>
<option> 521073 Garment Making</option>
<option> 521074 Leatherwork Technology</option>
<option> 521075 Masonry</option>
<option> 521076 Metal Processing Technology</option>
<option> 521077 Motor Vehicle Mechanics</option>
<option> 521078 Painter and Sign Writer</option>
<option> 521079 Panel Beating</option>
<option> 521080 Pipefitting and Sprinkler</option>
<option> 521081 Plant and Machine Maintenance Operator</option>
<option> 521082 Plumbing & Pipe Fitting</option>
<option> 521083 Plumbing Technology</option>
<option> 521084  Refrigeration and Air Conditioning</option>
<option> 521085  Sheet Metal Working</option>
<option> 521086 Tailoring</option>
<option> 521087 Trowel Vocations</option>
<option> 521088 Welding and Fabrications</option>
<option> 521089 Apparel Design</option>
<option> 521090 Auto-Electrician</option>
<option> 521091 Carpentry</option>
<option> 521092 Catering</option>
<option> 521093  Dressmaking</option>
<option> 521094  Driving</option>
<option> 520095 Transmission Line Design</option>
<option>520096  Turner/Leather Operator</option>
<option> 54 </option>
<option>Manufacturing and Processing</option>
<option>540001  Apparel and Fashion Technology</option>
<option>540002  Bakery Technology</option>
<option>540003  Clothing and Textiles</option>
<option>540004  Clothing, Textiles and Interior Design</option>
<option>540005  Fashion Design</option>
<option>540006  Fashion Design & Marketing</option>
<option>540007  Food and Beverage Production, Sales and Service </option>
<option>540008  Food and Beverage Service </option>
<option>540009  Food Processing and Quality Assurance</option>
<option>540010  Food Processing Technology</option>
<option>540011  Food Production</option>
<option>540012  Food Science and Technology</option>
<option>540013  Clothing Technology</option>
<option>540014  Food Technology</option>
<option>540015  Pastry and Bakery</option>
<option>540016  Sugar Technology</option>
<option>540017  Textile Engineering</option>
<option>540018  Textile Science Conservation</option>
<option>540019  Textile, Apparel Design and Fashion Merchandising With IT</option>
<option>  </option>
<option> 58 Architecture and Building</option>
<option>580001  Architecture</option>
<option>580002  Building and Civil Engineering</option>
<option>580003  Building and Construction</option>
<option>580004  Building Construction</option>
<option>580005  Building Economics</option>
<option>580006  Building Technology</option>
<option>580007  Cartography</option>
<option>580008  Civil & Structural Engineering</option>
<option>580009  Civil & Water Engineering</option>
<option>580010  Civil Construction Management</option>
<option>580011  Civil Engineering</option>
<option>580012  Civil, Construction and Environmental Engineering</option>
<option>580013  Fabrication Technology</option>
<option>580014  International Programme on African Wetland Management</option>
<option>580015  Irrigation and Drainage</option>
<option>580016  Land Resource Planning and Management</option>
<option>580017  Landscape Architecture</option>
<option>580018  Landscape Planning and Conservation</option>
<option>580019  Manufacturing Engineering and Technology</option>
<option>580020  Planning</option>
<option>580021  Planning and Economics of Education</option>
<option>580022  Quantity Surveying</option>
<option>580023  Science and Technology Engineering</option>
<option>580024  Soil, Water & Environmental Engineering</option>
<option>580025  Soils and Land Use Management</option>
<option>580026  Surveying</option>
<option>580027  Urban and Regional Planning</option>
<option>580028  Urban Design</option>
<option>580029  Urban Environmental Management</option>
<option>580030  Water and Environmental Engineering</option>
<option>580031  Water and Wastewater Laboratory Technology</option>
<option>580032  Water Engineering</option>
<option>580033  Water Resources Management</option>
<option> 62 Agriculture, Forestry and Fishery</option>
<option>620001  Agribusiness Management and Trade</option>
<option>620002  Agricultural Economics</option>
<option>620003  Agricultural Economics and Resource Management</option>
<option>620004  Agricultural Entomology</option>
<option>620005  Agricultural Information and Communication Management</option>
<option>620006  Agricultural Resource Management</option>
<option>620007  Agriculture</option>
<option>620008  Agriculture and Human Ecology Extension</option>
<option>620009  Agriculture Biotechnology</option>
<option>620010  Agriculture Extension</option>
<option>620011  Agro-Forestry</option>
<option>620012  Agro Meteorology</option>
<option>620013  Agronomy</option>
<option>620014  Animal Biosystem and Management</option>
<option>620015  Animal Breeding and Genetics</option>
<option>620016  Animal Ecology</option>
<option>620017  Animal Nutrition</option>
<option>620018  Animal Nutrition and Feed Science</option>
<option>620019  Animal Physiology</option>
<option>620020  Animal Production</option>
<option>620021  Animal Production - With Breeding and Nutrition Options</option>
<option>620022  Crop Protection</option>
<option>620023  Dairy Management</option>
<option>620024  Dairy Science and Technology</option>
<option>620025  Dryland Agriculture and Enterprise Development</option>
<option>620026  Dryland Agriculture</option>
<option>620027  Farm and Resource Management</option>
<option>620028  Fish Science</option>
<option>620029  Fisheries and Aquatic Sciences</option>
<option>620030  Floriculture, Olericulture and Pomology </option>
<option>620031  Food Science and Postharvest Technology</option>
<option>620032  Forestry</option>
<option>620033  Horticulture</option>
<option>620034  Integrated Forest Resources Management</option>
<option>620035  Integrated Soil Fertility Management</option>
<option>620036  Organic Agriculture</option>
<option>620037  Plant Taxonomy</option>
<option>620038  Range Management</option>
<option>620039  Seed Science and Technology</option>
<option>620040  Soil Science</option>
<option>620041  Sustainable Agriculture</option>
<option>620042  Weed Science</option>
<option>620043  Wildlife Enterprise and Management</option>
<option>620044  Wildlife Management</option>
<option>620045  Wildlife Sanctuary Management</option>
<option> 620046 Agroprocessing</option>

<option> 64 Veterinary</option>
<option>640001  Animal Health</option>
<option>640002  Animal Health Management</option>
<option>640003  Animal Health, Production and Processing</option>
<option>640004  Animal Science</option>
<option>640005  Animal Science and Technology</option>
<option>640006  Applied Veterinary Parasitology</option>
<option>640007  Artificial Insemination</option>
<option>640008  Equine Science </option>
<option>640009  Livestock Production</option>
<option>640010  Medical and Veterinary Entomology</option>
<option>640011  Poultry Science</option>
<option>640012  Veterinary Medicine</option>
<option>640013  Veterinary Pathology and Diagnostics</option>
<option>640014  Veterinary Pathology and Microbiology</option>
<option>640015  Animal Health & Production</option>
<option>640016  Apiculture/Bee Keeping</option>
<option>640017  Rabbit Production</option>
<option>640018  Veterinary Extension</option>
<option>640019  Meat Science</option>
<option>640020  Animal Health Information Systems</option>
<option>640021  Livestock Economics and Planning</option>
<option> 72 Health</option>
<option>720001  Anaesthesia</option>
<option>720002  Anatomy</option>
<option>720003  Biomedical Research Methodology</option>
<option>720004  Biomedical Statistics</option>
<option>720005  Clinical Audiology and Public Health (OTO)</option>
<option>720006  Clinical Cytology</option>
<option>720007  Clinical Medicine</option>
<option>720008  Clinical Medicine and Surgery.</option>
<option>720009  Clinical Pharmacy</option>
<option>720010  Community Health & Development</option>
<option>720011  Community Health & Nutrition</option>
<option>720012  Community Health and HIV Management</option>
<option>720013  Community Health Nursing</option>
<option>720014  Community Nutrition </option>
<option>720015  Community Oral Health</option>
<option>720016  Dental Surgery</option>
<option>720017  Dental Technology</option>
<option>720018  Diagnostic Radiology</option>
<option>720019  Enrolled Community Health Nursing</option>
<option>720020  Epidemiology & Disease Control</option>
<option>720021  Epidemiology and Disease Surveillance</option>
<option>720022  Epidemiology and Population Health</option>
<option>720023  Food Science and Inspection</option>
<option>720024  Food Science and Nutrition</option>
<option>720025  Food Science and Technology</option>
<option>720026  Foods Nutrition & Dietetics</option>
<option>720027  General Surgery </option>
<option>720028  Health & Nutrition</option>
<option>720029  Health Education and Promotion</option>
<option>720030  Health Management  </option>
<option>720031  Health Promotion & International Health</option>
<option>720032  Health Service Management</option>
<option>720033  Home Economics and Consumer Sciences</option>
<option>720034  Human Anatomy</option>
<option>720035  Human Nutrition and Dietetics</option>
<option>720036  Human Pathology </option>
<option>720037  Epidemiology </option>
<option>720038  Infectious Disease</option>
<option>720039  Intensive Care/Critical Care Nursing </option>
<option>720040  Internal Medicine</option>
<option>720041  Laboratory Technology</option>
<option>720042  Management of Health Systems</option>
<option>720043  Medical Education (Medicine, Surgery, Imaging & Diagnostics)</option>
<option>720044  Medical Engineering</option>
<option>720045  Medical Imaging Sciences (Ultrasound)</option>
<option>720046  Medical Laboratory Science</option>
<option>720047  Medical Laboratory Technology</option>
<option>720048  Medical Microbiology</option>
<option>720049  Medical Physiology</option>
<option>720050  Medical Statistics</option>
<option>720051  Medicine</option>
<option>720052  Medicine And Surgery (Mbchb)</option>
<option>720053  Neurophysiology Technology</option>
<option>720054  Neurosurgery (MMED-NS).</option>
<option>720055  Nursing and Public Health </option>
<option>720056  Nursing</option>
<option>720057  Nutrition Health</option>
<option>720058  Nutritional Biochemistry</option>
<option>720059  Obstetrics and Gynaecology </option>
<option>720060  Occupational Health and Safety </option>
<option>720061  Occupational Therapy</option>
<option>720062  Ophthalmic Nursing </option>
<option>720063  Ophthalmology</option>
<option>720064  Orthopedic Technology</option>
<option>720065  Otorhinolaryngology-Head and Neck Surgery</option>
<option>720066  Paediatrics and Child Health</option>
<option>720067  Pharmaceutical Analysis</option>
<option>720068  Pharmaceutical Technology</option>
<option>720069  Pharmacology and Toxicology</option>
<option>720070  Pharmacy </option>
<option>720071  Physiotherapy</option>
<option>720072  Psychiatry </option>
<option>720073  Public Health  </option>
<option>720074  Rehabilitation Medicine</option>
<option>720075  Reproductive Health and HIV/AIDS Management. </option>
<option>720076  Science Laboratory Technology</option>
<option>720077  Sensory Integration</option>
<option>720078  Sexually Transmitted Infections (STI)</option>
<option>720079  Surgery </option>
<option>720080  Surgery Medicine in Oral and Maxiollofacial Surgery</option>
<option>720081  Surgery Medicine in Paediatric Dentistry</option>
<option>720082  Surgery Medicine in Periodontology</option>
<option>720083  Tropical & Infectious Diseases</option>
<option>720084  Tropical Diseases</option>
<option>720085  Ultrasound and Image Pattern Analysis (USIPA)</option>
<option> 720086 Epidemiology & Economics</option>
<option>720087  Immunology</option>
<option>720088  Hygiene/Health</option>

<option> 76 Social Services</option>
<option>760001  AIDS Co-Ordinating </option>
<option>760002  Community Development</option>
<option>760003  Community Development and Project Management </option>
<option>760004  Community Development and Social Work</option>
<option>760005  Community Development, Planning & Management</option>
<option>760006  Conduct of Meetings and Minute Writing</option>
<option>760007  Conflict Resolution and Peace Building</option>
<option>760008  Corporate Social Responsibility</option>
<option>760009  Counseling Psychology</option>
<option>760010  Education (Guidance and Counseling) </option>
<option>760011  Family Life Education </option>
<option>760012  Gender and Women Empowerment</option>
<option>760013  Gender, Poverty and Development </option>
<option>760014  Guidance and Counseling</option>
<option>760015  Medical Social Work</option>
<option>760016  Psychiatric Social Work</option>
<option>760017  Psychoactive Substance Abuse</option>
<option>760018  Psychology</option>
<option>760019  Psychotrauma Management</option>
<option>760020  Social Work & Community Development</option>
<option>760021  Co-Operative Governance</option>
<option> 81 Personal Services</option>
<option>810001  Beauty Salon Management</option>
<option>810002  Beauty Therapy</option>
<option>810003  Business Administration (MBA) In Hospitality & Tourism</option>
<option>810004  Catering & Accommodation Management</option>
<option>810005  Catering (Food and Beverage)</option>
<option>810006  Catering and Accommodation</option>
<option>810007  Cosmetology</option>
<option>810008  Cultural Tourism</option>
<option>810009  Eco-Tourism and Hospitality Management</option>
<option>810010  Eco-Tourism, Hotel & Institution Management </option>
<option>810011  Family and Consumer Sciences</option>
<option>810012  Food and Beverage Management</option>
<option>810013  Food Service Technology</option>
<option>810014  Front Office Management</option>
<option>810015  Front Office Operation with Customer</option>
<option>810016  Hairdressing</option>
<option>810017  Hair Styling and Hair Design</option>
<option>810018  Hospitality and Tourism Management</option>
<option>810019  Hospitality Management</option>
<option>810020  Hostess and Cabin Crew Duties</option>
<option>810021  Hotel and Hospitality Management</option>
<option>810022  Hotel and Restaurant Management</option>
<option>810023  Hotel Management</option>
<option>810024  Housekeeping and Laundry </option>
<option>810025  Pastry and Bakery</option>
<option>810026  Recreation & Leisure Management</option>
<option>810027  Rooms Division Management</option>
<option>810028  Tour Guiding</option>
<option>810029  Tour Guiding and Administration</option>
<option>810030  Tourism</option>
<option>810031  Tourism and Wildlife Management</option>
<option>810032  Tourism Management</option>
<option>810033  Tourism Management and Eco-Tourism Development </option>
<option>810034  Tours & Travel</option>
<option>810035  Travel and Tour Operations Management</option>
<option>810036  Travel and Tourism Management</option>
<option>810037  Travel Operations</option>
<option> 84 Transport Services</option>
<option>840001  Aeronautical Information Service</option>
<option>840002  Air, Road and Water Transportation</option>
<option>840003  Airline Pilot and Flight Crew</option>
<option>840004  Airport Operations</option>
<option>840005  Aviation</option>
<option>840006  Clearing & Forwarding</option>
<option>840007  Coxswain</option>
<option>840008  Equipment Operators</option>
<option>840009  Flight Instruction</option>
<option>840010  Freight Management (DIFM)</option>
<option>840011  Logistics and Transport Management</option>
<option>840012  Shipping </option>

<option> 85 Environmental Protection</option>
<option>850001  Environmental and Natural Disaster Management)</option>
<option>850002  Environmental Chemistry</option>
<option>850003  Environmental Conservation and Management</option>
<option>850004  Environmental Conservation and Natural Resource Management</option>
<option>850005  Environmental Education</option>
<option>850006  Environmental Geoscience</option>
<option>850007  Environmental Health</option>
<option>850008  Environmental Horticulture and Landscaping Technology</option>
<option>850009  Environmental Impact Assessment And Audit </option>
<option>850010  Environmental Planning and Management</option>
<option>850011  Environmental Science and Technology</option>
<option>850012  Environmental Sciences</option>
<option>850013  Environmental Studies (Community Development)</option>
<option>850014  Environmental Studies (Environmental Resource Conservation)</option>
<option>850015  Environmental Studies (Planning & Management)</option>
<option>850016  Environmental Studies In Agro forestry and Rural Development</option>
<option>850017  Environmental Technology</option>
<option>850018  Labour Studies & Management</option>
<option>850019  Management of Agro ecosystems & Environment</option>
<option>850020  Natural Resources Management</option>
<option> 86 Security Services</option>
<option>860001  Armed Conflict Studies In East Africa</option>
<option>860002  Criminology</option>
<option>860003  Criminology and Penology</option>
<option>860004  Criminology and Social Order</option>
<option>860005  Forensic Accounting</option>
<option>860006  Forensic Science and Technology</option>
<option>860007  Fraud Investigation and Prevention  </option>
<option>860008  Public Prosecution </option>
<option>860009  Security and Disaster Management</option>
<option>860010  Security Policing </option>
<option>860011  Armed Forces Training</option>
<option>860012  Security Guarding </option>
<option>860013  Aircraft Accident Investigation</option>

            
        </select></td>
            <td class="pt-3-half" contenteditable="false"><select name="DURATION" id="Institution Type" class=" form-control input-lg pt-3-half" style="" autocomplete="off" required="">
              <OPTION>LESS THAN A YEAR</OPTION>
              <OPTION>1-2 YEARS</OPTION>
              <OPTION>3-4 YEARS</OPTION>
              <OPTION>5-6YEARS</OPTION>
              <OPTION>OVER 6 YEARS</OPTION>
            </select></td>
            <td class="pt-3-half" contenteditable="false"  ><select name="CODE" id="Institution Type" class=" form-control input-lg pt-3-half" style="" autocomplete="off" required="">
<option>140024</option>
<option>140025</option>
<option>140026</option>
<option>140027</option>
<option>140028</option>
<option>140029</option>
<option>140030</option>
<option>140031</option>
<option>140032</option>
<option>140033</option>
<option>140034</option>
<option>140035</option>
<option>140036</option>
<option>140037</option>
<option>140038</option>
<option>140039</option>
<option>140040</option>
<option> 21</option>
<option>210001</option>
<option>210002</option>
<option>210003</option>
<option>210004</option>
<option>210005</option>
<option>210006</option>
<option>210007</option>
<option>210008</option>
<option>210009</option>
<option>210010</option>
<option>210011</option>
<option>210012</option>
<option>210013</option>
<option>210014</option>
<option>210015</option>
<option>210016</option>
<option>210017</option>
<option>210018</option>
<option>210019</option>
<option>210020</option>
<option>210021</option>
<option>210022</option>
<option>210023</option>
<option>210024</option>
<option>210025</option>
<option>210026</option>
<option>210027</option>
<option>210028</option>
<option>210029</option>
<option>210030</option>
<option>210031</option>
<option>210032</option>
<option>210033</option>
<option>210034</option>
<option></option>
<option> 22</option>
<option>220001</option>
<option>220002</option>
<option>220003</option>
<option>220004</option>
<option>220005</option>
<option>220006</option>
<option>220007</option>
<option>220008</option>
<option>220009</option>
<option>220010</option>
<option>220011</option>
<option>220012</option>
<option>220013</option>
<option>220014</option>
<option>220015</option>
<option>220016</option>
<option>220017</option>
<option>220018</option>
<option>220019</option>
<option>220020</option>
<option>220021</option>
<option>220022</option>
<option>220023</option>
<option>220024</option>
<option>220025</option>
<option>220026</option>
<option>220027</option>
<option>220028</option>
<option>220029</option>
<option>220030</option>
<option>220031</option>
<option>220032</option>
<option>220033</option>
<option>220034</option>
<option>220035</option>
<option>220036</option>
<option>220037</option>
<option>220038</option>
<option>220039</option>
<option>220040</option>
<option>220041</option>
<option>220042</option>
<option>220043</option>
<option>220044</option>
<option>220045</option>
<option>220046</option>
<option>220047</option>
<option>220048</option>
<option>220049</option>
<option>220050</option>
<option>220051</option>
<option>220052</option>
<option>220053</option>
<option>220054</option>
<option>220055</option>
<option>220056</option>
<option>220057</option>
<option>220058</option>
<option>220059</option>
<option>220060</option>
<option>220061</option>
<option>220062</option>
<option>220063</option>
<option></option>
<option></option>
<option> 31</option>
<option>310001</option>
<option>310002</option>
<option>310003</option>
<option>310004</option>
<option>310005</option>
<option>310006</option>
<option>310007</option>
<option>310008</option>
<option>310009</option>
<option>310010</option>
<option>310011</option>
<option>310012</option>
<option>310013</option>
<option>310014</option>
<option>310015</option>
<option>310016</option>
<option>310017</option>
<option>310018</option>
<option>310019</option>
<option>310020</option>
<option>310021</option>
<option>310022</option>
<option>310023</option>
<option>310024</option>
<option>310025</option>
<option>310026</option>
<option>310027</option>
<option>310028</option>
<option>310029</option>
<option>310030</option>
<option>310031</option>
<option>310032</option>
<option>310033</option>
<option>310034</option>
<option>310035</option>
<option>310036</option>
<option>310037</option>
<option>310038</option>
<option>310039</option>
<option>310040</option>
<option>310041</option>
<option>310042</option>
<option>310043</option>
<option>310044</option>
<option>310045</option>
<option>310046</option>
<option>310047</option>
<option>310048</option>
<option>310049</option>
<option>310050</option>
<option>310051</option>
<option></option>
<option> 32</option>
<option>320001</option>
<option>320002</option>
<option>320003</option>
<option>320004</option>
<option>320005</option>
<option>320006</option>
<option>320007</option>
<option>320008</option>
<option>320009</option>
<option>320010</option>
<option>320011</option>
<option>320012</option>
<option>320013</option>
<option>320014</option>
<option>320015</option>
<option>320016</option>
<option>320017</option>
<option> 320018</option>
<option>320019</option>
<option>320020</option>
<option> 34</option>
<option>340001</option>
<option>340002</option>
<option>340003</option>
<option>340004</option>
<option>340005</option>
<option>340006</option>
<option>340007</option>
<option>340008</option>
<option>340009</option>
<option>340010</option>
<option>340011</option>
<option>340012</option>
<option>340013</option>
<option>340014</option>
<option>340015</option>
<option>340016</option>
<option>340017</option>
<option>340018</option>
<option>340019</option>
<option>340020</option>
<option>340021</option>
<option>340022</option>
<option>340023</option>
<option>340024</option>
<option>340025</option>
<option>340026</option>
<option>340027</option>
<option>340028</option>
<option>340029</option>
<option>340030</option>
<option>340031</option>
<option>340032</option>
<option>340033</option>
<option>340034</option>
<option>340035</option>
<option>340036</option>
<option>340037</option>
<option>340038</option>
<option>340039</option>
<option>340040</option>
<option>340041</option>
<option>340042</option>
<option>340043</option>
<option>340044</option>
<option>340045</option>
<option>340046</option>
<option>340047</option>
<option>340048</option>
<option>340049</option>
<option>340050</option>
<option>340051</option>
<option>340052</option>
<option>340053</option>
<option>340054</option>
<option>340055</option>
<option>340056</option>
<option>340057</option>
<option>340058</option>
<option>340059</option>
<option>340060</option>
<option>340061</option>
<option>340062</option>
<option>340063</option>
<option>340064</option>
<option>340065</option>
<option>340066</option>
<option>340067</option>
<option>340068</option>
<option>340069</option>
<option>340070</option>
<option>340071</option>
<option>340072</option>
<option>340073</option>
<option>340074</option>
<option>340075</option>
<option>340076</option>
<option>340077</option>
<option>340078</option>
<option>340079</option>
<option>340080</option>
<option>340081</option>
<option>340082</option>
<option> 38</option>
<option></option>
<option>380001</option>
<option></option>
<option> 42</option>
<option>420001</option>
<option>420002</option>
<option>420003</option>
<option>420004</option>
<option>420005</option>
<option>420006</option>
<option>420007</option>
<option>420008</option>
<option>420009</option>
<option>420010</option>
<option>420011</option>
<option>420012</option>
<option>420013</option>
<option>420014</option>
<option>420015</option>
<option>420016</option>
<option>420017</option>
<option>420018</option>
<option>420019</option>
<option>420020</option>
<option>420021</option>
<option>420022</option>
<option>420023</option>
<option>420024</option>
<option>420025</option>
<option>420026</option>
<option>420027</option>
<option>420028</option>
<option>420029</option>
<option>420030</option>
<option>420031</option>
<option>420032</option>
<option>420033</option>
<option>420034</option>
<option>420035</option>
<option>420036</option>
<option>420037</option>
<option>420038</option>
<option>420039</option>
<option>420040</option>
<option>420041</option>
<option>420042</option>
<option>420043</option>
<option>420044</option>
<option>420045</option>
<option>420046</option>
<option>420047</option>
<option>420048</option>
<option>420049</option>
<option>420050</option>
<option>420051</option>
<option>420052</option>
<option>420053</option>
<option> 44</option>
<option>440001</option>
<option>440002</option>
<option>440003</option>
<option>440004</option>
<option>440005</option>
<option>440006</option>
<option>440007</option>
<option>440008</option>
<option>440009</option>
<option>440010</option>
<option>440011</option>
<option>440012</option>
<option>440013</option>
<option>440014</option>
<option>440015</option>
<option>440016</option>
<option>440017</option>
<option>440018</option>
<option>440019</option>
<option>440020</option>
<option>440021</option>
<option>440022</option>
<option>440023</option>
<option>440024</option>
<option>440025</option>
<option>440026</option>
<option>440027</option>
<option>440028</option>
<option>440029</option>
<option>440030</option>
<option>440031</option>
<option>440032</option>
<option>440033</option>
<option>440034</option>
<option>440035</option>
<option>440036</option>
<option>440037</option>
<option>440038</option>
<option>440039</option>
<option>440040</option>
<option>440041</option>
<option>440042</option>
<option>440043</option>
<option>440044</option>
<option>440045</option>
<option>440046</option>
<option>440047</option>
<option>440048</option>
<option>440049</option>
<option> 440050</option>
<option>440051</option>
<option>440052</option>
<option></option>
<option> 46</option>
<option>460001</option>
<option>460002</option>
<option>460003</option>
<option>460004</option>
<option>460005</option>
<option>460006</option>
<option>460007</option>
<option>460008</option>
<option>460009</option>
<option>460010</option>
<option>460011</option>
<option>460012</option>
<option>460013</option>
<option>460014</option>
<option>460015</option>
<option>460016</option>
<option>460017</option>
<option>460018</option>
<option></option>
<option> 48</option>
<option></option>
<option>480001</option>
<option>480002</option>
<option>480003</option>
<option>480004</option>
<option>480005</option>
<option>480006</option>
<option>480007</option>
<option>480008</option>
<option>480009</option>
<option>480010</option>
<option>480011</option>
<option>480012</option>
<option>480013</option>
<option>480014</option>
<option>480015</option>
<option>480016</option>
<option>480017</option>
<option>480018</option>
<option>480019</option>
<option>480020</option>
<option>480021</option>
<option>480022</option>
<option>480023</option>
<option>480024</option>
<option>480025</option>
<option>480026</option>
<option>480027</option>
<option>480028</option>
<option>480029</option>
<option>480030</option>
<option>480031</option>
<option>480032</option>
<option>480033</option>
<option>480034</option>
<option>480035</option>
<option>480036</option>
<option>480037</option>
<option>480038</option>
<option>480039</option>
<option>480040</option>
<option>480041</option>
<option>480042</option>
<option>480043</option>
<option>480044</option>
<option>480045</option>
<option>480046</option>
<option>480047</option>
<option>480048</option>
<option>480049</option>
<option>480050</option>
<option>480051</option>
<option>480052</option>
<option>480053</option>
<option>480054</option>
<option>480055</option>
<option>480056</option>
<option>480057</option>
<option></option>
<option> 52</option>
<option>520001</option>
<option>520002</option>
<option>520003</option>
<option>520004</option>
<option>520005</option>
<option>520006</option>
<option>520007</option>
<option>520008</option>
<option>520009</option>
<option>520010</option>
<option>520011</option>
<option>520012</option>
<option>520013</option>
<option>520014</option>
<option>520015</option>
<option>520016</option>
<option>520017</option>
<option>520018</option>
<option>520019</option>
<option>520020</option>
<option>520021</option>
<option>520022</option>
<option>520023</option>
<option>520024</option>
<option>520025</option>
<option>520026</option>
<option>520027</option>
<option>520028</option>
<option>520029</option>
<option>520030</option>
<option>520031</option>
<option>520032</option>
<option>520033</option>
<option>520034</option>
<option>520035</option>
<option>520036</option>
<option>520037</option>
<option>520038</option>
<option>520039</option>
<option>520040</option>
<option>520041</option>
<option>520042</option>
<option>520043</option>
<option>520044</option>
<option>520045</option>
<option>520046</option>
<option>520047</option>
<option>520048</option>
<option>520049</option>
<option>520050</option>
<option>520051</option>
<option>520052</option>
<option>520053</option>
<option>520054</option>
<option>520055</option>
<option>520056</option>
<option>520057</option>
<option>520058</option>
<option>520059</option>
<option>520060</option>
<option>520061</option>
<option> 521</option>
<option> 521061</option>
<option> 521062</option>
<option> 521063</option>
<option> 521064</option>
<option> 521065</option>
<option> 521066</option>
<option> 521067</option>
<option> 521068</option>
<option> 521069</option>
<option> 521070</option>
<option> 521071</option>
<option> 521072</option>
<option> 521073</option>
<option> 521074</option>
<option> 521075</option>
<option> 521076</option>
<option> 521077</option>
<option> 521078</option>
<option> 521079</option>
<option> 521080</option>
<option> 521081</option>
<option> 521082</option>
<option> 521083</option>
<option> 521084</option>
<option> 521085</option>
<option> 521086</option>
<option> 521087</option>
<option> 521088</option>
<option> 521089</option>
<option> 521090</option>
<option> 521091</option>
<option> 521092</option>
<option> 521093</option>
<option> 521094</option>
<option> 520095</option>
<option>520096</option>
<option> 54</option>
<option>540001</option>
<option>540002</option>
<option>540003</option>
<option>540004</option>
<option>540005</option>
<option>540006</option>
<option>540007</option>
<option>540008</option>
<option>540009</option>
<option>540010</option>
<option>540011</option>
<option>540012</option>
<option>540013</option>
<option>540014</option>
<option>540015</option>
<option>540016</option>
<option>540017</option>
<option>540018</option>
<option>540019</option>
<option></option>
<option> 58</option>
<option>580001</option>
<option>580002</option>
<option>580003</option>
<option>580004</option>
<option>580005</option>
<option>580006</option>
<option>580007</option>
<option>580008</option>
<option>580009</option>
<option>580010</option>
<option>580011</option>
<option>580012</option>
<option>580013</option>
<option>580014</option>
<option>580015</option>
<option>580016</option>
<option>580017</option>
<option>580018</option>
<option>580019</option>
<option>580020</option>
<option>580021</option>
<option>580022</option>
<option>580023</option>
<option>580024</option>
<option>580025</option>
<option>580026</option>
<option>580027</option>
<option>580028</option>
<option>580029</option>
<option>580030</option>
<option>580031</option>
<option>580032</option>
<option>580033</option>
<option> 62</option>
<option>620001</option>
<option>620002</option>
<option>620003</option>
<option>620004</option>
<option>620005</option>
<option>620006</option>
<option>620007</option>
<option>620008</option>
<option>620009</option>
<option>620010</option>
<option>620011</option>
<option>620012</option>
<option>620013</option>
<option>620014</option>
<option>620015</option>
<option>620016</option>
<option>620017</option>
<option>620018</option>
<option>620019</option>
<option>620020</option>
<option>620021</option>
<option>620022</option>
<option>620023</option>
<option>620024</option>
<option>620025</option>
<option>620026</option>
<option>620027</option>
<option>620028</option>
<option>620029</option>
<option>620030</option>
<option>620031</option>
<option>620032</option>
<option>620033</option>
<option>620034</option>
<option>620035</option>
<option>620036</option>
<option>620037</option>
<option>620038</option>
<option>620039</option>
<option>620040</option>
<option>620041</option>
<option>620042</option>
<option>620043</option>
<option>620044</option>
<option>620045</option>
<option> 620046</option>
<option></option>
<option> 64</option>
<option>640001</option>
<option>640002</option>
<option>640003</option>
<option>640004</option>
<option>640005</option>
<option>640006</option>
<option>640007</option>
<option>640008</option>
<option>640009</option>
<option>640010</option>
<option>640011</option>
<option>640012</option>
<option>640013</option>
<option>640014</option>
<option>640015</option>
<option>640016</option>
<option>640017</option>
<option>640018</option>
<option>640019</option>
<option>640020</option>
<option>640021</option>
<option> 72</option>
<option>720001</option>
<option>720002</option>
<option>720003</option>
<option>720004</option>
<option>720005</option>
<option>720006</option>
<option>720007</option>
<option>720008</option>
<option>720009</option>
<option>720010</option>
<option>720011</option>
<option>720012</option>
<option>720013</option>
<option>720014</option>
<option>720015</option>
<option>720016</option>
<option>720017</option>
<option>720018</option>
<option>720019</option>
<option>720020</option>
<option>720021</option>
<option>720022</option>
<option>720023</option>
<option>720024</option>
<option>720025</option>
<option>720026</option>
<option>720027</option>
<option>720028</option>
<option>720029</option>
<option>720030</option>
<option>720031</option>
<option>720032</option>
<option>720033</option>
<option>720034</option>
<option>720035</option>
<option>720036</option>
<option>720037</option>
<option>720038</option>
<option>720039</option>
<option>720040</option>
<option>720041</option>
<option>720042</option>
<option>720043</option>
<option>720044</option>
<option>720045</option>
<option>720046</option>
<option>720047</option>
<option>720048</option>
<option>720049</option>
<option>720050</option>
<option>720051</option>
<option>720052</option>
<option>720053</option>
<option>720054</option>
<option>720055</option>
<option>720056</option>
<option>720057</option>
<option>720058</option>
<option>720059</option>
<option>720060</option>
<option>720061</option>
<option>720062</option>
<option>720063</option>
<option>720064</option>
<option>720065</option>
<option>720066</option>
<option>720067</option>
<option>720068</option>
<option>720069</option>
<option>720070</option>
<option>720071</option>
<option>720072</option>
<option>720073</option>
<option>720074</option>
<option>720075</option>
<option>720076</option>
<option>720077</option>
<option>720078</option>
<option>720079</option>
<option>720080</option>
<option>720081</option>
<option>720082</option>
<option>720083</option>
<option>720084</option>
<option>720085</option>
<option> 720086</option>
<option>720087</option>
<option>720088</option>
<option></option>
<option> 76</option>
<option>760001</option>
<option>760002</option>
<option>760003</option>
<option>760004</option>
<option>760005</option>
<option>760006</option>
<option>760007</option>
<option>760008</option>
<option>760009</option>
<option>760010</option>
<option>760011</option>
<option>760012</option>
<option>760013</option>
<option>760014</option>
<option>760015</option>
<option>760016</option>
<option>760017</option>
<option>760018</option>
<option>760019</option>
<option>760020</option>
<option>760021</option>
<option> 81</option>
<option>810001</option>
<option>810002</option>
<option>810003</option>
<option>810004</option>
<option>810005</option>
<option>810006</option>
<option>810007</option>
<option>810008</option>
<option>810009</option>
<option>810010</option>
<option>810011</option>
<option>810012</option>
<option>810013</option>
<option>810014</option>
<option>810015</option>
<option>810016</option>
<option>810017</option>
<option>810018</option>
<option>810019</option>
<option>810020</option>
<option>810021</option>
<option>810022</option>
<option>810023</option>
<option>810024</option>
<option>810025</option>
<option>810026</option>
<option>810027</option>
<option>810028</option>
<option>810029</option>
<option>810030</option>
<option>810031</option>
<option>810032</option>
<option>810033</option>
<option>810034</option>
<option>810035</option>
<option>810036</option>
<option>810037</option>
<option> 84</option>
<option>840001</option>
<option>840002</option>
<option>840003</option>
<option>840004</option>
<option>840005</option>
<option>840006</option>
<option>840007</option>
<option>840008</option>
<option>840009</option>
<option>840010</option>
<option>840011</option>
<option>840012</option>
<option></option>
<option> 85</option>
<option>850001</option>
<option>850002</option>
<option>850003</option>
<option>850004</option>
<option>850005</option>
<option>850006</option>
<option>850007</option>
<option>850008</option>
<option>850009</option>
<option>850010</option>
<option>850011</option>
<option>850012</option>
<option>850013</option>
<option>850014</option>
<option>850015</option>
<option>850016</option>
<option>850017</option>
<option>850018</option>
<option>850019</option>
<option>850020</option>
<option> 86</option>
<option>860001</option>
<option>860002</option>
<option>860003</option>
<option>860004</option>
<option>860005</option>
<option>860006</option>
<option>860007</option>
<option>860008</option>
<option>860009</option>
<option>860010</option>
<option>860011</option>
<option>860012</option>
<option>860013</option>
<option></option>
<option>99</option>
<option></option>
<option>990099</option>


            </select> </td>
            <td class="pt-3-half" contenteditable="false"><input type="text" class=" form-control input-lg pt-3-half" name="MALE"  placeholder="NO." required=""></td>
           <td class="pt-3-half" contenteditable="false"  > <input type="text" class=" form-control input-lg pt-3-half" name="FEMALE"  placeholder="NO." required=""></td>
           <td class="pt-3-half" contenteditable="false"  ><input type="text" class=" form-control input-lg pt-3-half" name="YEAR"  placeholder="YEAR" required=""> </td>


             <td class="pt-3-half" contenteditable="false"> <input type="label" class=" form-control input-lg pt-3-half" name="Institution" style="background-color: grey;"  value="<?php echo $you;?>" readonly></td>
             <td class="pt-3-half" contenteditable="false"> <input type="label" class=" form-control input-lg pt-3-half" name="date" style="background-color: grey;"  value="<?php echo $date;?>" readonly></td>
          </tr>
          <!-- This is our clonable table line -->
          
          
        </tbody>
      </table>
       <input type="submit" value="submit data"  class="btn btn-danger" /><br>
    </div>
  </div>
</div>

<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a href="pagefive.php"><button type="button" class="btn btn-primary">Proceed to next page</button></a>
      </div>
    </div>
<p  align="center"><i>indicate for example, Bachelors Degree in Pharmacy, Certificate in Pharmacy, Diploma in Automotive Engineering, Cert in C.P.A 1,etc</i></p>
<!-- Editable table -->
</form>
     <script type="text/javascript" charset="utf-8">
      
     </script>

</body>
</html>
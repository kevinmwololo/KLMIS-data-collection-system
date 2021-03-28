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
   <p><i><b>Once you have filled data on the available row,click "submit data" which will capture your data &  provide you with a new row to add any other additional information.Once you have submitted all the data, return to Homepage.Make sure to submit data before proceeding to next page.</b></i></p>
  </div>
</div>





<form action="data3.php" method="POST">
<!-- Editable table -->
<div class="card">
  <h7 class="card-header text-center font-weight-bold text-uppercase py-4"><i>CURRENT NUMBER OF ACADEMIC STAFF</i></h7>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success">
        </a></span>

      <table class="table table-bordered table-responsive-md table-striped text-center">

        <thead>
          <tr>
            <th class="text-center">S/NO</th>
            <th class="text-center">SKILL</th>
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
            <td class="pt-3-half" contenteditable="false"><select name="type" id="Institution Type" class=" form-control input-lg pt-3-half" style="" autocomplete="off" required="">
              <OPTION>PHD</OPTION>
              <OPTION>MASTERS</OPTION>
              <OPTION>POST GRADUATE DIPLOMA</OPTION>
              <OPTION>FIRST DEGREE</OPTION>
              <OPTION>HIGHER DIPLOMA</OPTION>
              <OPTION>DIPLOMA</OPTION>
              <OPTION>CERTIFICATE</OPTION>
              <OPTION>NO CERTIFICATE</OPTION>
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
<option></option>

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
        <a href="pageone.php"><button type="button" class="btn btn-primary">Return to homepage</button></a>
      </div>
    </div>
  </form>
<p  align="center"><i><B>THANK YOU FOR PARTCIPATING IN THIS EXERCISE</B></i></p>
<!-- Editable table -->
     <script type="text/javascript" charset="utf-8">
      
     </script>

</body>
</html>
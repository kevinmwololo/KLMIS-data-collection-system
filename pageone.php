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

  
    </style> 
<body>
<!--navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><figure><img src="logo1.png" height="70" width="100" > <br>
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

     

<form action="data4.php" method="POST">


	<p>
        <div class="span9 btn-block">

  <a class="btn btn-large btn-block btn-primary"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    CLICK FOR INSTRUCTIONS ON COMPLETING QUESTIONNAIRE
  </a>
  </div>
</p>
<div class="collapse navbar-collapse" id="collapseExample">
  <div class="card card-body">
   <p><i><b> 1. Fill in all the spaces with the correct details.<br>
    2. The information will be treated with strict confidentiality and used for planning purposes only.<br>
3. Once done proceed to the next page</b></i></p>
  </div>
</div>
   

   <br>
   <fieldset class="scheduler-border">
    <legend align="center" class="scheduler-border" ><i>Proceed to fill in the details</i></legend>
   



   <br>
   <b>
<div class="form-group">

<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Person filling Questionnaire">Person filling Questionnaire:</label>
    </div>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="Name" placeholder="Name" name="Name" required="" /> 
    </div>
</div>


</div><br>

<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Designation">Designation:</label>
    </div>
    <div class="col-lg-6">
        <input type="text" class="form-control" id="Designation" placeholder="Designation" name="Designation" required=""> 
    </div>
</div><br>





<div class="form-group">
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Date">Date:</label>
    </div>
    <div class="col-lg-6">
       <input type="text" class="form-control" id="date" placeholder="date" name="date" required="">  
    </div>


    </div>
   
      
</div>

</b>
</div><br>
</fieldset>
<br>
<br>

<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a ><button type="submit" class="btn btn-primary">Proceed to the next page</button></a>
      </div>
    </div>
  </form>
</div>



 </div>

</form>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</html>
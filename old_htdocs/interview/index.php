<?php

$url = 'https://www.cbar.az/currencies/15.03.2021.xml';
$xml = simplexml_load_file($url) or die("feed not loading");

// Qisa valyuta ucun  $key->attributes()->Code

$bank_metallari=$xml->ValType[0];
$xarici_valyutalar=$xml->ValType[1];

?>


<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>

	<form id="form">
		
       <input type="number" name="mebleg" id="mebleg" placeholder="Meblegi daxil et..." /> 
       <span id="convert_mebleg"></span><br><br>
     
       <label for="mezenne">Mezenneni sec:</label><br>

		<select id="mezenne">
		
			  <optgroup label="<?php echo $bank_metallari->attributes()->Type; ?>">

			  	 <?php foreach($bank_metallari->Valute as $bank_metali) { ?>

				    <option  value="<?php echo $bank_metali->Value ;  ?>"><?php echo $bank_metali->Name ; ?></option>

			     <?php } ;?>

			  </optgroup>


			   <optgroup label="<?php echo $xarici_valyutalar->attributes()->Type; ?>">

			  	 <?php foreach($xarici_valyutalar->Valute as $xarici_valyuta) { ?>

				    <option  value="<?php echo $xarici_valyuta->Value ;  ?>"><?php echo $xarici_valyuta->attributes()->Code ; ?></option>

			     <?php } ;?>

			  </optgroup>
		 
		</select>

	</form>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<script type="text/javascript">

	$(document).on('change','#mezenne',function(){

          let value=parseFloat(this.value);
          let mebleg=parseFloat($("#mebleg").val());
          let result =mebleg/value;
          let short_valute=$('option:selected',this).text();

          $("#convert_mebleg").text(result+' '+short_valute);
	})

</script>
</html>
<?php
	include "connexion.php";

	if(isset($_REQUEST['block'])){
		 $block = $_REQUEST['block'];
		 }
	else{
		$block = 'none';
	}
	  
	switch ($block) {
	case 'pr1':
		 echo pr1();
		 break;
	
	case 'auto_pr1':
		 echo auto_pr1();
		 break;
	
	case 'pr2':
		 echo pr2();
		 break;
		 
	case 'auto_pr2':
		 echo auto_pr2();
		 break;
		 
	case 'pr3':
		 echo pr3();
		 break;
		 
	case 'pr4':
		 echo pr4();
		 break;
		 
	case 'pr5':
		 echo pr5();
		 break;
	
	case 'pr6':
		 echo pr6();
		 break;
		 
	case 'prA':
		 echo prA();
		 break;
         
    case 'prB':
		 echo prB();
		 break;
		 
	case 'prC':
		 echo prC();
		 break;
		 
	case 'prD':
		 echo prD();
		 break;
       
    case 'prE':
		 echo prE();
		 break;
        
    case 'autonome':
		 echo autonome();
		 break;
	
	case 'volet_lucie_haut':
		 echo volet_lucie_haut();
		 break;
		 
	case 'volet_lucie_bas':
		 echo volet_lucie_bas();
		 break;
		 
	case 'volet_lucie_stop':
		 echo volet_lucie_stop();
		 break;
	}
	 
	function emetteur($led, $on_off, $nb){
		global $bdd;
		$url="http://xx.xxx.xx.xx:85/?" . $led . "=" . $on_off;
		
		for ($i=0; $i<$nb; $i++){
			$h = @fopen($url, "rb");	
		}
		$sql= "UPDATE Position_prise SET  Valeur_Prise ='". $on_off . "' WHERE  N_Prise ='" . $led . "'";
		$bdd->exec($sql);
	}
	
	function pr1(){
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED1'");
		$Temp = $reponse->fetch();
		$prise1 = $Temp[0];


		if ($prise1=="ON"){
			$imageled1 = "bouton/BoutonOFF.gif";
			$imageled1M = "bouton/BoutonOFF-ON.gif";
		}
		else{
			$imageled1 = "bouton/BoutonON.gif";
			$imageled1M = "bouton/BoutonON-OFF.gif";
		}
		
		if (isset($_POST["LED1"])){
			$LED1= $_POST["LED1"];
		}
		else{
			$LED1="";
		}

		if ($LED1 == "OFF"){
			emetteur("LED1", "ON", 2);
			$imageled1 = "bouton/BoutonOFF.gif";
			$imageled1M = "bouton/BoutonOFF-ON.gif";
			$prise1= "ON";
		}
		else if ($LED1 == "ON"){
			emetteur("LED1", "OFF", 2);
			$imageled1 = "bouton/BoutonON.gif";
			$imageled1M = "bouton/BoutonON-OFF.gif";
			$prise1 = "OFF";
		}
		$html .='<form action="#" method="post" name="led1" id="formbouton1">';
		$html .='<input type="hidden" name="LED1" value="' . $prise1 . '">';
		$html .='<input  type="image" id="pr1" 
				onmouseover="src=\'' . $imageled1M . '\'" 
				onmouseout="src=\'' . $imageled1 . '\'" 
				src="' . $imageled1 . '"></form>';

		return $html;
	}

	function auto_pr1(){
		
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select AUTO from Position_prise where N_Prise = 'LED1'");
		$Temp = $reponse->fetch();
		$auto_prise1 = $Temp[0];


		if ($auto_prise1=="ON"){
			$auto_imageled1 = "bouton/ON-VERT.gif";
			
		}
		else{
			$auto_imageled1 = "bouton/OFF-ROUGE.gif";
		}
		
		if (isset($_POST["auto_LED1"])){
			 $auto_LED1= $_POST["auto_LED1"];
		}
		else{
			$auto_LED1="";
		}
	
		if ($auto_LED1 == "OFF"){
			$auto_imageled1 = "bouton/ON-VERT.gif";
			$bdd->exec("UPDATE Position_prise SET  AUTO =  'ON' WHERE  N_Prise = 'LED1'");
			$auto_prise1 = "ON";
		}
		else if ($auto_LED1 == "ON"){
			$auto_imageled1 = "bouton/OFF-ROUGE.gif";
			$bdd->exec("UPDATE Position_prise SET  AUTO =  'OFF' WHERE  N_Prise = 'LED1'");
			$auto_prise1 ="OFF";
		}

		$html .='<form action="#" method="post" name="auto_led1" id="auto_formbouton1">';
		$html .='<input type="hidden" name="auto_LED1" value="' . $auto_prise1 . '">';
		$html .='<input  type="image" id="auto_pr1" 
				src="' . $auto_imageled1 . '"></form>';

		return $html;
	}
	
	function pr2(){
		
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED2'");
		$Temp = $reponse->fetch();
		$prise2 = $Temp[0];


		if ($prise2=="ON"){
			$imageled2 = "bouton/BoutonOFF.gif";
			$imageled2M = "bouton/BoutonOFF-ON.gif";
		}
		else{
			$imageled2 = "bouton/BoutonON.gif";
			$imageled2M = "bouton/BoutonON-OFF.gif";
		}
		
		if (isset($_POST["LED2"])){
			 $LED2= $_POST["LED2"];
		}
		else{
			$LED2="";
		}

		if ($LED2 == "OFF"){
			emetteur("LED2", "ON", 2);
			$imageled2 = "bouton/BoutonOFF.gif";
			$imageled2M = "bouton/BoutonOFF-ON.gif";
			$prise2 = "ON";
		}
		else if ($LED2 == "ON"){
			emetteur("LED2", "OFF" ,2);
			$imageled2 = "bouton/BoutonON.gif";
			$imageled2M = "bouton/BoutonON-OFF.gif";
			$prise2 ="OFF";
		}

		$html .='<form action="#" method="post" name="led2" id="formbouton2">';
		$html .='<input type="hidden" name="LED2" value="' . $prise2 . '">';
		$html .='<input  type="image" id="pr2" 
				onmouseover="src=\'' . $imageled2M . '\'" 
				onmouseout="src=\'' . $imageled2 . '\'" 
				src="' . $imageled2 . '"></form>';

		return $html;
	}
	
	function auto_pr2(){
		
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select AUTO from Position_prise where N_Prise = 'LED2'");
		$Temp = $reponse->fetch();
		$auto_prise2 = $Temp[0];


		if ($auto_prise2=="ON"){
			$auto_imageled2 = "bouton/ON-VERT.gif";
			
		}
		else{
			$auto_imageled2 = "bouton/OFF-ROUGE.gif";
		}
		
		if (isset($_POST["auto_LED2"])){
			 $auto_LED2= $_POST["auto_LED2"];
		}
		else{
			$auto_LED2="";
		}
	
		if ($auto_LED2 == "OFF"){
			$auto_imageled2 = "bouton/ON-VERT.gif";
			$bdd->exec("UPDATE Position_prise SET  AUTO =  'ON' WHERE  N_Prise = 'LED2'");
			$auto_prise2 = "ON";
		}
		else if ($auto_LED2 == "ON"){
			$auto_imageled2 = "bouton/OFF-ROUGE.gif";
			$bdd->exec("UPDATE Position_prise SET  AUTO =  'OFF' WHERE  N_Prise = 'LED2'");
			$auto_prise2 ="OFF";
		}

		$html .='<form action="#" method="post" name="auto_led2" id="auto_formbouton2">';
		$html .='<input type="hidden" name="auto_LED2" value="' . $auto_prise2 . '">';
		$html .='<input  type="image" id="auto_pr2" 
				src="' . $auto_imageled2 . '"></form>';

		return $html;
	}

	function pr3(){
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED3'");
		$Temp = $reponse->fetch();
		$prise3 = $Temp[0];


		if ($prise3=="ON"){
			$imageled3 = "bouton/BoutonOFF.gif";
			$imageled3M = "bouton/BoutonOFF-ON.gif";
		}
		else{
			$imageled3 = "bouton/BoutonON.gif";
			$imageled3M = "bouton/BoutonON-OFF.gif";
		}
		
		if (isset($_POST["LED3"])){
			 $LED3= $_POST["LED3"];
		}
		else{
			$LED3="";
		}

		if ($LED3 == "OFF"){
			emetteur("LED3", "ON", 2);
			$imageled3 = "bouton/BoutonOFF.gif";
			$imageled3M = "bouton/BoutonOFF-ON.gif";
			$prise3 = "ON";
		}
		else if ($LED3 == "ON"){
			emetteur("LED3", "OFF", 2);
			$imageled3 = "bouton/BoutonON.gif";
			$imageled3M = "bouton/BoutonON-OFF.gif";
			$prise3 = "OFF";
		}

		$html .='<form action="#" method="post" name="led3" id="formbouton3">';
		$html .='<input type="hidden" name="LED3" value="' . $prise3 . '">';
		$html .='<input  type="image" id="pr3" 
				onmouseover="src=\'' . $imageled3M . '\'" 
				onmouseout="src=\'' . $imageled3 . '\'" 
				src="' . $imageled3 . '"></form>';

		return $html;
	}
	
	function pr4(){
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED4'");
		$Temp = $reponse->fetch();
		$prise4 = $Temp[0];


		if ($prise4=="ON"){
			$imageled4 = "bouton/BoutonOFF.gif";
			$imageled4M = "bouton/BoutonOFF-ON.gif";
		}
		else{
			$imageled4 = "bouton/BoutonON.gif";
			$imageled4M = "bouton/BoutonON-OFF.gif";
		}
		
		if (isset($_POST["LED4"])){
			 $LED4= $_POST["LED4"];
		}
		else{
			$LED4="";
		}

		if ($LED4 == "OFF"){
			exec('python /home/final/onoffdashscreen/onoffdashscreen.py ON');
            $sql= "UPDATE Position_prise SET  Valeur_Prise ='ON' WHERE  N_Prise ='LED4'";
            $bdd->exec($sql);
            //emetteur("LED4", "ON", 2);
			$imageled4 = "bouton/BoutonOFF.gif";
			$imageled4M = "bouton/BoutonOFF-ON.gif";
			$prise4 = "ON";
		}
		else if ($LED4 == "ON"){
            exec('python /home/final/onoffdashscreen/onoffdashscreen.py OFF');
            $sql= "UPDATE Position_prise SET  Valeur_Prise ='OFF' WHERE  N_Prise ='LED4'";
            $bdd->exec($sql);
			//emetteur("LED4", "OFF", 2);
			$imageled4 = "bouton/BoutonON.gif";
			$imageled4M = "bouton/BoutonON-OFF.gif";
			$prise4 = "OFF";
		}

		$html .='<form action="#" method="post" name="led4" id="formbouton4">';
		$html .='<input type="hidden" name="LED4" value="' . $prise4 . '">';
		$html .='<input  type="image" id="pr4" 
				onmouseover="src=\'' . $imageled4M . '\'" 
				onmouseout="src=\'' . $imageled4 . '\'" 
				src="' . $imageled4 . '"></form>';

		return $html;
	}
	
	function pr5(){
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED5'");
		$Temp = $reponse->fetch();
		$prise5 = $Temp[0];


		if ($prise5=="ON"){
			$imageled5 = "bouton/BoutonON.gif";
			$imageled5M = "bouton/BoutonON-OFF.gif";
		}
		else{
			$imageled5 = "bouton/BoutonOFF.gif";
			$imageled5M = "bouton/BoutonOFF-ON.gif";
		}
		
		if (isset($_POST["LED5"])){
			 $LED5= $_POST["LED5"];
		}
		else{
			$LED5="";
		}
		// MONTAGE INVERSE
		if ($LED5 == "OFF"){
			emetteur("LED5", "ON", 2);
			$imageled5 = "bouton/BoutonON.gif";
			$imageled5M = "bouton/BoutonON-OFF.gif";
			$prise5 = "ON";
		}
		else if ($LED5 == "ON"){
			emetteur("LED5", "OFF", 2);
			$imageled5 = "bouton/BoutonOFF.gif";
			$imageled5M = "bouton/BoutonOFF-ON.gif";
			$prise5 = "OFF";
		}

		$html .='<form action="#" method="post" name="led5" id="formbouton5">';
		$html .='<input type="hidden" name="LED5" value="' . $prise5 . '">';
		$html .='<input  type="image" id="pr5" 
				onmouseover="src=\'' . $imageled5M . '\'" 
				onmouseout="src=\'' . $imageled5 . '\'" 
				src="' . $imageled5 . '"></form>';

		return $html;
	}
	
	function pr6(){
		$html       = '';
		global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LED6'");
		$Temp = $reponse->fetch();
		$prise6 = $Temp[0];


		if ($prise6=="ON"){
			$imageled6 = "bouton/BoutonOFF.gif";
			$imageled6M = "bouton/BoutonOFF-ON.gif";
		}
		else{
			$imageled6 = "bouton/BoutonON.gif";
			$imageled6M = "bouton/BoutonON-OFF.gif";
		}
		
		if (isset($_POST["LED6"])){
			 $LED6= $_POST["LED6"];
		}
		else{
			$LED6="";
		}

		if ($LED6 == "OFF"){
			emetteur("LED6", "ON", 2);
			$imageled6 = "bouton/BoutonOFF.gif";
			$imageled6M = "bouton/BoutonOFF-ON.gif";
			$prise6 = "ON";
		}
		else if ($LED6 == "ON"){
			emetteur("LED6", "OFF", 2);
			$imageled6 = "bouton/BoutonON.gif";
			$imageled6M = "bouton/BoutonON-OFF.gif";
			$prise6 = "OFF";
		}

		$html .='<form action="#" method="post" name="led6" id="formbouton6">';
		$html .='<input type="hidden" name="LED6" value="' . $prise6 . '">';
		$html .='<input  type="image" id="pr6" 
				onmouseover="src=\'' . $imageled6M . '\'" 
				onmouseout="src=\'' . $imageled6 . '\'" 
				src="' . $imageled6 . '"></form>';

		return $html;
	}

	function prA(){
		$html       = '';
        global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LEDA'");
		$Temp = $reponse->fetch();
		$priseA = $Temp[0];
        
        if ($priseA=="ON"){
			$imageledA = "bouton/bouton-On.gif";
			$imageledAM = "bouton/bouton-On_M.gif";
		}
		else{
			$imageledA = "bouton/bouton-On-Off.gif";
			$imageledAM = "bouton/bouton-On-Off_M.gif";
		}
        
        if (isset($_POST["LEDA"])){
			 $LEDA= $_POST["LEDA"];
		}
		else{
			$LEDA="";
		}

		if ($LEDA == "OFF"){
			emetteur("LEDA", "ON", 2);
            $imageledA = "bouton/bouton-On.gif";
			$imageledAM = "bouton/bouton-On_M.gif";
			$priseA = "ON";
		}
		else if ($LEDA == "ON"){
			emetteur("LEDA", "OFF", 2);
            $imageledA = "bouton/bouton-On-Off.gif";
			$imageledAM = "bouton/bouton-On-Off_M.gif";
			$priseA = "OFF";
		}

		$html .='<form action="#" method="post" name="ledA" id="formboutonA">';
		$html .='<input type="hidden" name="LEDA" value="' . $priseA . '">';
		$html .='<input  type="image" id="prA" 
				onmouseover="src=\'' . $imageledAM . '\'" 
				onmouseout="src=\'' . $imageledA . '\'" 
				src="' . $imageledA . '"></form>';

		return $html;
	}
	
    function prB(){
		$html       = '';
        global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LEDB'");
		$Temp = $reponse->fetch();
		$priseB = $Temp[0];
	
		if ($priseB=="ON"){
            $imageledB = "bouton/bouton-On.gif";
			$imageledBM = "bouton/bouton-On_M.gif";
		}
		else{
			$imageledB = "bouton/bouton-On-Off.gif";
			$imageledBM = "bouton/bouton-On-Off_M.gif";
		}
        
        if (isset($_POST["LEDB"])){
			 $LEDB= $_POST["LEDB"];
		}
		else{
			$LEDB="";
		}

		if ($LEDB == "OFF"){
			emetteur("LEDB", "ON", 2);
             $imageledB = "bouton/bouton-On.gif";
			$imageledBM = "bouton/bouton-On_M.gif";
			$priseB = "ON";
		}
		else if ($LEDB == "ON"){
			emetteur("LEDB", "OFF", 2);
            $imageledB = "bouton/bouton-On-Off.gif";
			$imageledBM = "bouton/bouton-On-Off_M.gif";
			$priseB = "OFF";
		}
		

		$html .='<form action="#" method="post" name="ledB" id="formboutonB">';
		$html .='<input type="hidden" name="LEDB" value="' . $priseB . '">';
		$html .='<input  type="image" id="prB" 
				onmouseover="src=\'' . $imageledBM . '\'" 
				onmouseout="src=\'' . $imageledB . '\'" 
				src="' . $imageledB . '"></form>';

		return $html;
	}
    
	function prC(){
		$html       = '';
        global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LEDC'");
		$Temp = $reponse->fetch();
		$priseC = $Temp[0];
	
		if ($priseC=="ON"){
			
            $imageledC = "bouton/bouton-On.gif";
			$imageledCM = "bouton/bouton-On_M.gif";
		}
		else{
			$imageledC = "bouton/bouton-On-Off.gif";
			$imageledCM = "bouton/bouton-On-Off_M.gif";
		}
        
        if (isset($_POST["LEDC"])){
			 $LEDC= $_POST["LEDC"];
		}
		else{
			$LEDC="";
		}

		if ($LEDC == "OFF"){
			emetteur("LEDC", "ON", 2);
             $imageledC = "bouton/bouton-On.gif";
			$imageledCM = "bouton/bouton-On_M.gif";
			$priseC = "ON";
		}
		else if ($LEDC == "ON"){
			emetteur("LEDC", "OFF", 2);
            $imageledC = "bouton/bouton-On-Off.gif";
			$imageledCM = "bouton/bouton-On-Off_M.gif";
			$priseC = "OFF";
		}
		

		$html .='<form action="#" method="post" name="ledC" id="formboutonC">';
		$html .='<input type="hidden" name="LEDC" value="' . $priseC . '">';
		$html .='<input  type="image" id="prC" 
				onmouseover="src=\'' . $imageledCM . '\'" 
				onmouseout="src=\'' . $imageledC . '\'" 
				src="' . $imageledC . '"></form>';

		return $html;
	}
	
	function prD(){
		$html       = '';
        global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LEDD'");
		$Temp = $reponse->fetch();
		$priseD = $Temp[0];
	
		if ($priseD=="ON"){
            $imageledD = "bouton/bouton-On.gif";
			$imageledDM = "bouton/bouton-On_M.gif";
		}
		else{
			$imageledD = "bouton/bouton-On-Off.gif";
			$imageledDM = "bouton/bouton-On-Off_M.gif";
		}
        
        if (isset($_POST["LEDD"])){
			 $LEDD= $_POST["LEDD"];
		}
		else{
			$LEDD="";
		}

		if ($LEDD == "OFF"){
			emetteur("LEDD", "ON", 2);
             $imageledD = "bouton/bouton-On.gif";
			$imageledDM = "bouton/bouton-On_M.gif";
			$priseD = "ON";
		}
		else if ($LEDD == "ON"){
			emetteur("LEDD", "OFF", 2);
            $imageledD = "bouton/bouton-On-Off.gif";
			$imageledDM = "bouton/bouton-On-Off_M.gif";
			$priseD = "OFF";
		}
		

		$html .='<form action="#" method="post" name="ledD" id="formboutonD">';
		$html .='<input type="hidden" name="LEDD" value="' . $priseD . '">';
		$html .='<input  type="image" id="prD" 
				onmouseover="src=\'' . $imageledDM . '\'" 
				onmouseout="src=\'' . $imageledD . '\'" 
				src="' . $imageledD . '"></form>';

		return $html;
	}
    
    function prE(){
		$html       = '';
        global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'LEDE'");
		$Temp = $reponse->fetch();
		$priseE = $Temp[0];
	
		if ($priseE=="ON"){
            $imageledE = "bouton/bouton-On.gif";
			$imageledEM = "bouton/bouton-On_M.gif";
		}
		else{
			$imageledE = "bouton/bouton-On-Off.gif";
			$imageledEM = "bouton/bouton-On-Off_M.gif";
		}
        
        if (isset($_POST["LEDE"])){
			 $LEDE= $_POST["LEDE"];
		}
		else{
			$LEDE="";
		}

		if ($LEDE == "OFF"){
			emetteur("LEDE", "ON", 2);
             $imageledE = "bouton/bouton-On.gif";
			$imageledEM = "bouton/bouton-On_M.gif";
			$priseE = "ON";
		}
		else if ($LEDE == "ON"){
			emetteur("LEDE", "OFF", 2);
            $imageledE = "bouton/bouton-On-Off.gif";
			$imageledEM = "bouton/bouton-On-Off_M.gif";
			$priseE = "OFF";
		}
		
		$html .='<form action="#" method="post" name="ledE" id="formboutonE">';
		$html .='<input type="hidden" name="LEDE" value="' . $priseE . '">';
		$html .='<input  type="image" id="prE" 
				onmouseover="src=\'' . $imageledEM . '\'" 
				onmouseout="src=\'' . $imageledE . '\'" 
				src="' . $imageledE . '"></form>';

		return $html;
	}
    
    function autonome(){
        global $bdd;
		$html       = '';
        global $bdd;
		$reponse = $bdd->query("select Autonome from Autonome");
		$Temp = $reponse->fetch();
		$prise = $Temp[0];
	
		if ($prise=="ON"){
            $imageled = "bouton/BoutonOFF.gif";
			$imageledM = "bouton/BoutonOFF-ON.gif";
		}
		else{
			$imageled = "bouton/BoutonON.gif";
			$imageledM = "bouton/BoutonON-OFF.gif";
		}
        
        if (isset($_POST["autonome_LED"])){
			 $autonome_LED= $_POST["autonome_LED"];
		}
		else{
			$autonome_LED="";
		}

		if ($autonome_LED == "OFF"){
            $sql= "UPDATE Autonome SET  Autonome ='ON'";
            $bdd->exec($sql);
             $imageled = "bouton/BoutonOFF.gif";
			$imageledM = "bouton/BoutonOFF-ON.gif";
			$prise = "ON";
		}
		else if ($autonome_LED == "ON"){
             $sql= "UPDATE Autonome SET  Autonome ='OFF'";
            $bdd->exec($sql);
            $imageled = "bouton/BoutonON.gif";
			$imageledM = "bouton/BoutonON-OFF.gif";
			$prise = "OFF";
		}
		

		$html .='<form action="#" method="post" name="autonome" id="formautonome">';
		$html .='<input type="hidden" name="autonome_LED" value="' . $prise . '">';
		$html .='<input  type="image" id="pr" 
				onmouseover="src=\'' . $imageledM . '\'" 
				onmouseout="src=\'' . $imageled . '\'" 
				src="' . $imageled . '"></form>';

		return $html;
	}
    
	function volet_lucie_haut(){
		$html       = '';
        
        global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'VOLETLU'");
		$Temp = $reponse->fetch();
		$posVolet = $Temp[0];
		if ($posVolet == "MON"){
            $imageledvolet_lucie = "bouton/haut_on.gif";
            $imageledvolet_lucieM = "bouton/hautM_on.gif";
        }
        else{   
            $imageledvolet_lucie = "bouton/haut.gif";
            $imageledvolet_lucieM = "bouton/hautM.gif";
		}
        
		if (isset($_POST["VOLETLUM"])){
			emetteur("VOLETLU", "MON", 2);
		}

        
		$html .='<form action="#" method="post" name="ledvolet_lucie_haut" id="formvolet_lucie_haut">';
		$html .='<input type="hidden" name="VOLETLUM" value="ON">';
		$html .='<input  type="image" id="volet_lucie_haut" 
				onmouseover="src=\'' . $imageledvolet_lucieM . '\'" 
				onmouseout="src=\'' . $imageledvolet_lucie . '\'" 
				src="' . $imageledvolet_lucie . '"></form>';

		return $html;
	}
	
	function volet_lucie_stop(){
		$html       = '';
		
         global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'VOLETLU'");
		$Temp = $reponse->fetch();
		$posVolet = $Temp[0];
		if ($posVolet == "STO"){
           $imageledvolet_lucie = "bouton/Stop_Volet_on.gif";
           $imageledvolet_lucieM = "bouton/Stop_VoletM_on.gif";
        }
        else{   
           $imageledvolet_lucie = "bouton/Stop_Volet.gif";
           $imageledvolet_lucieM = "bouton/Stop_VoletM.gif";
		}
        
		if (isset($_POST["VOLETLUS"])){
			emetteur("VOLETLU", "STO", 2);
		}
		
		$html .='<form action="#" method="post" name="ledvolet_lucie_stop" id="formvolet_lucie_stop">';
		$html .='<input type="hidden" name="VOLETLUS" value="ON">';
		$html .='<input  type="image" id="volet_lucie_stop" 
				onmouseover="src=\'' . $imageledvolet_lucieM . '\'" 
				onmouseout="src=\'' . $imageledvolet_lucie . '\'" 
				src="' . $imageledvolet_lucie . '"></form>';

		return $html;
	}
	
	function volet_lucie_bas(){
		$html       = '';
		
        global $bdd;
		$reponse = $bdd->query("select Valeur_Prise from Position_prise where N_Prise = 'VOLETLU'");
		$Temp = $reponse->fetch();
		$posVolet = $Temp[0];
		if ($posVolet == "DES"){
            $imageledvolet_lucie = "bouton/bas_on.gif";
            $imageledvolet_lucieM = "bouton/basM_on.gif";
        }
        else{   
            $imageledvolet_lucie = "bouton/bas.gif";
            $imageledvolet_lucieM = "bouton/basM.gif";
		}
        
		if (isset($_POST["VOLETLUD"])){
			emetteur("VOLETLU", "DES", 2);
		}
		
		$html .='<form action="#" method="post" name="ledvolet_lucie_bas" id="formvolet_lucie_bas">';
		$html .='<input type="hidden" name="VOLETLUD" value="ON">';
		$html .='<input  type="image" id="volet_lucie_bas" 
				onmouseover="src=\'' . $imageledvolet_lucieM . '\'" 
				onmouseout="src=\'' . $imageledvolet_lucie . '\'" 
				src="' . $imageledvolet_lucie . '"></form>';

		return $html;
	}
?>

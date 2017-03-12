	$(document).ready(function() {
		bouton1();
		bouton2();
		bouton3();
		bouton4();
		bouton5();
		bouton6();
		boutonA();
        boutonB();
		boutonC();
		boutonD();
        boutonE();
			
		auto_bouton1();
		auto_bouton2();
        
        autonome();
		
		volet_lucie_haut();
		volet_lucie_bas();
		volet_lucie_stop();
		
		$('#bouton1').bind('click',function(){ 
			led1 = $('#formbouton1').find("input[name=LED1]").val();
			$.post("ajax_unique.php",{block: "pr1", LED1: led1},function(data){
				$("#bouton1").html(data);
			});
			return false;
		});
		
		 $('#bouton2').bind('click',function(){ 
			led2 = $('#formbouton2').find("input[name=LED2]").val();
			$.post("ajax_unique.php",{block: "pr2" ,LED2: led2},function(data){
				$("#bouton2").html(data);
			});
			return false;
		});
		
		$('#bouton3').bind('click',function(){ 
			led3 = $('#formbouton3').find("input[name=LED3]").val();
			$.post("ajax_unique.php",{block: "pr3", LED3: led3},function(data){
				$("#bouton3").html(data);
			});
			return false;
		});
		
		$('#bouton4').bind('click',function(){ 
			led4 = $('#formbouton4').find("input[name=LED4]").val();
			$.post("ajax_unique.php",{block: "pr4", LED4: led4},function(data){
				$("#bouton4").html(data);
			});
			return false;
		});
		
		$('#bouton5').bind('click',function(){ 
			led5 = $('#formbouton5').find("input[name=LED5]").val();
			$.post("ajax_unique.php",{block: "pr5", LED5: led5},function(data){
				$("#bouton5").html(data);
			});
			return false;
		});
		
		$('#bouton6').bind('click',function(){ 
			led6 = $('#formbouton6').find("input[name=LED6]").val();
			$.post("ajax_unique.php",{block: "pr6", LED6: led6},function(data){
				$("#bouton6").html(data);
			});
			return false;
		});
		
		$('#boutonA').bind('click',function(){ 
			ledA = $('#formboutonA').find("input[name=LEDA]").val();
			$.post("ajax_unique.php",{block: "prA", LEDA: ledA},function(data){
				$("#boutonA").html(data);
			});
			return false;
		});
		
        $('#boutonB').bind('click',function(){ 
			ledB = $('#formboutonB').find("input[name=LEDB]").val();
			$.post("ajax_unique.php",{block: "prB", LEDB: ledB},function(data){
				$("#boutonB").html(data);
			});
			return false;
		});
        
		$('#boutonC').bind('click',function(){ 
			ledC = $('#formboutonC').find("input[name=LEDC]").val();
			$.post("ajax_unique.php",{block: "prC", LEDC: ledC},function(data){
				$("#boutonC").html(data);
			});
			return false;
		});
		
		$('#boutonD').bind('click',function(){ 
			ledD = $('#formboutonD').find("input[name=LEDD]").val();
			$.post("ajax_unique.php",{block: "prD", LEDD: ledD},function(data){
				$("#boutonD").html(data);
			});
			return false;
		});
        
        $('#boutonE').bind('click',function(){ 
			ledE = $('#formboutonE').find("input[name=LEDE]").val();
			$.post("ajax_unique.php",{block: "prE", LEDE: ledE},function(data){
				$("#boutonE").html(data);
			});
			return false;
		});
		
		$('#auto_bouton1').bind('click',function(){ 
			auto_led1 = $('#auto_formbouton1').find("input[name=auto_LED1]").val();
			$.post("ajax_unique.php",{block: "auto_pr1", auto_LED1: auto_led1},function(data){
				$("#auto_bouton1").html(data);
			});
			return false;
		});
		
		$('#auto_bouton2').bind('click',function(){ 
			auto_led2 = $('#auto_formbouton2').find("input[name=auto_LED2]").val();
			$.post("ajax_unique.php",{block: "auto_pr2", auto_LED2: auto_led2},function(data){
				$("#auto_bouton2").html(data);
			});
			return false;
		});
        
		$('#autonome').bind('click',function(){ 
			autonome_led = $('#autonome').find("input[name=autonome_LED]").val();
			$.post("ajax_unique.php",{block: "autonome", autonome_LED: autonome_led},function(data){
				$("#autonome").html(data);
			});
			return false;
		});
        
		$('#volet_lucie_haut').bind('click',function(){ 
			voletlum = $('#formvolet_lucie_haut').find("input[name=VOLETLUM]").val();
			$.post("ajax_unique.php",{block: "volet_lucie_haut", VOLETLUM: voletlum},function(data){
				$("#volet_lucie_haut").html(data);
			});
			return false;
		});
		
		$('#volet_lucie_stop').bind('click',function(){ 
			voletlus = $('#formvolet_lucie_stop').find("input[name=VOLETLUS]").val();
			$.post("ajax_unique.php",{block: "volet_lucie_stop", VOLETLUS: voletlus},function(data){
				$("#volet_lucie_stop").html(data);
			});
			return false;
		});
		
		$('#volet_lucie_bas').bind('click',function(){ 
			voletlud = $('#formvolet_lucie_bas').find("input[name=VOLETLUD]").val();
			$.post("ajax_unique.php",{block: "volet_lucie_bas", VOLETLUD: voletlud},function(data){
				$("#volet_lucie_bas").html(data);
			});
			return false;
		});
	});
	
	var temp_bouton1;
	function bouton1(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=pr1",
			success: function(code_html, statut){
				$("#bouton1").html(code_html);
			}
		});
		temp_bouton1 = setTimeout("bouton1()", 5000);
	};
	
	var temp_auto_bouton1;
	function auto_bouton1(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType : "html",
		    data: "block=auto_pr1",
			success: function(code_html, statut){
				$("#auto_bouton1").html(code_html);
			}
		});
		temp_auto_bouton1 = setTimeout("auto_bouton1()", 5000);
	};
	
	var temp_bouton2;
	function bouton2(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType : "html",
		    data: "block=pr2",
			success: function(code_html, statut){
				$("#bouton2").html(code_html);
			}
		});
		temp_bouton2 = setTimeout("bouton2()", 5000);
	};
	
	var temp_auto_bouton2;
	function auto_bouton2(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType : "html",
		    data: "block=auto_pr2",
			success: function(code_html, statut){
				$("#auto_bouton2").html(code_html);
			}
		});
		temp_auto_bouton2 = setTimeout("auto_bouton2()", 5000);
	};
	
	var temp_bouton3;
	function bouton3(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=pr3",
			success: function(code_html, statut){
				$("#bouton3").html(code_html);
			}
		});
		temp_bouton3 = setTimeout("bouton3()", 5000);
	};
	
	var temp_bouton4;
	function bouton4(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=pr4",
			success: function(code_html, statut){
				$("#bouton4").html(code_html);
			}
		});
		temp_bouton4 = setTimeout("bouton4()", 5000);
	};
	
	var temp_bouton5;
	function bouton5(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=pr5",
			success: function(code_html, statut){
				$("#bouton5").html(code_html);
			}
		});
		temp_bouton5 = setTimeout("bouton5()", 5000);
	};
	
	var temp_bouton6;
	function bouton6(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=pr6",
			success: function(code_html, statut){
				$("#bouton6").html(code_html);
			}
		});
		temp_bouton6 = setTimeout("bouton6()", 5000);
	};
	
    var temp_boutonA;
	function boutonA(){
		$.ajax({
			url : "ajax_unique.php",
			async : false,
			type: "GET",
			dataType : "html",
		    data: "block=prA",
			success : function(code_html, statut){
				$("#boutonA").html(code_html);
			}
		});
        temp_boutonA = setTimeout("boutonA()", 5000);
	};
	
    var temp_boutonB;
    function boutonB(){
		$.ajax({
			url : "ajax_unique.php",
			async : false,
			type: "GET",
			dataType : "html",
		    data: "block=prB",
			success : function(code_html, statut){
				$("#boutonB").html(code_html);
			}
		});
        temp_boutonB = setTimeout("boutonB()", 5000);
	};
    
    var temp_boutonC;
	function boutonC(){
		$.ajax({
			url : "ajax_unique.php",
			async : false,
			type: "GET",
			dataType : "html",
		    data: "block=prC",
			success : function(code_html, statut){
				$("#boutonC").html(code_html);
			}
		});
        temp_boutonC = setTimeout("boutonC()", 5000);
	};
	
    var temp_boutonD;
	function boutonD(){
		$.ajax({
			url : "ajax_unique.php",
			async : false,
			type: "GET",
			dataType : "html",
		    data: "block=prD",
			success : function(code_html, statut){
				$("#boutonD").html(code_html);
			}
		});
        temp_boutonD = setTimeout("boutonD()", 5000);
	};
    
    var temp_boutonE;
    function boutonE(){
		$.ajax({
			url : "ajax_unique.php",
			async : false,
			type: "GET",
			dataType : "html",
		    data: "block=prE",
			success : function(code_html, statut){
				$("#boutonE").html(code_html);
			}
		});
        temp_boutonE = setTimeout("boutonE()", 5000);
	};
	
    var temp_autonome;
    function autonome(){
		$.ajax({
			url : "ajax_unique.php",
			async : false,
			type: "GET",
			dataType : "html",
		    data: "block=autonome",
			success : function(code_html, statut){
				$("#autonome").html(code_html);
			}
		});
        temp_autonome = setTimeout("autonome()", 5000);
	};
	
    var temp_voletHaut;
	function volet_lucie_haut(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=volet_lucie_haut",
			success: function(code_html, statut){
				$("#volet_lucie_haut").html(code_html);
			}
		});
        temp_voletHaut = setTimeout("volet_lucie_haut()", 5000);
	};
	
    var temp_voletStop;
	function volet_lucie_stop(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=volet_lucie_stop",
			success: function(code_html, statut){
				$("#volet_lucie_stop").html(code_html);
			}
		});
        temp_voletStop = setTimeout("volet_lucie_stop()", 5000);
	};
	
    var temp_voletDesc;
	function volet_lucie_bas(){
		$.ajax({
			url: "ajax_unique.php",
			async: false,
			type: "GET",
			dataType: "html",
		    data: "block=volet_lucie_bas",
			success: function(code_html, statut){
				$("#volet_lucie_bas").html(code_html);
			}
		});
        temp_voletDesc = setTimeout("volet_lucie_bas()", 5000);
	};
	
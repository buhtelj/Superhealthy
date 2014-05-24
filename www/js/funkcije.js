	function izdelek(id_izd){
		$("#izdelek").load("http://www.ekoloska-trgovina.si/do_not_delete/superhealty/izdelek.php", {id_izdelka: id_izd}, function() { 
			$('.loading').hide();
			$('#content').hide();
		});
	}

	function toggle5(showHideDiv, elem) {
			var ele = document.getElementById(showHideDiv);
		var i = document.getElementById(elem);
			if(ele.style.display == "block") {
					ele.style.display = "none";
					i.style.backgroundColor="#4C4C4C";
					i.style.textAlign="left";
			}
			else {
					ele.style.display = "block";
					i.style.backgroundColor="#F97437";
					i.style.textAlign="right";
			}
	}
	
	jQuery(document).ready(function($) {
		$('.toggle-menu').jPushMenu();
	});
	
	function exitFromApp(){
		navigator.app.exitApp();
	}
	
	
	function getQueryVariable(variable) {
		var query = window.location.search.substring(1);
		var vars = query.split("&amp;");
		for (var i=0; i<vars.length;i++) {
		  var pair = vars[i].split("=");
		  if (pair[0] == variable) {
		  return pair[1];
		}
	  }
	  alert('Query Variable ' + variable + ' not found');
	}

/* 

	User Location detector 
	Requerment --: Jquery 3.*

	just include this file below your jquery file and you find a global Array name user_location 

	Copyrights : programmingplanet

	facebook: https://www.facebook.com/codingplanet1

*/



$.ajax({
	url : 'http://www.geoplugin.net/json.gp',
	async: false,
	type: 'GET',
	data: {},
	success:function(data){
		raw = JSON.parse(data);
		user_location = [];
		for(i in raw){
			if(i==="request")
				user_location["IP"] = raw[i];
			else if(i!="geoplugin_credit")
				user_location[i.split('_')[1]] = raw[i];
		}

	}

});

console.log(user_location);
			

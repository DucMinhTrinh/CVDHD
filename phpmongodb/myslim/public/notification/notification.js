$(document).ready(function(){

	$("#sel3").change(function(){
		var select = $(this).val();
		if(select=="1"){
			$( "#sel1" ).prop( "disabled", true );
			$( "#sel2" ).prop( "disabled", true );
		}else{
			$( "#sel1" ).prop( "disabled", false );
			$( "#sel2" ).prop( "disabled", false);
		}

	});

    $("#sel1").change(function(){
    	var categoryId = $(this).val();
    	$.ajax({
		    url: 'http://api.websosanh.com/notification/ajax.php',
		    type: 'post',
		    data: {
		        'categoryId': categoryId,
		        'cmd'       : 'ok'
		    },
		    // headers: {
		    // 	'Access-Control-Allow-Origin':'http://website.godfath.com',
		    //     // 'Upgrade-Insecure-Requests': '1',   //If your header name has spaces or any other char not appropriate
		    //     // 'Referer': 'http://validateemailaddress.org/'  //for object property name, use quoted notation shown in second
		    // },
		    dataType: 'json',
		    success: function (data) {
		        alert("Outlet Created");
		    },
		    error:function(error){
				$("#sel2").empty();
				$("#sel2").append(error.responseText);	
		    }
		});

    });


    $("#public").click(function(){
    	var select = $("#sel3").val();
    	if(select=="1"){
    		var title = $("#message_title").val();
    		var body  = $("#message_body").val();
    		if( (title.length > 0) && (body.length > 0 )){

    				var data1 = JSON.stringify({
					        'to': 'AAAAFbG_DfM:APA91bHMXEZhgoZzbdIAKFzFFuTc9NsscAa2wdjDHcL3Q6zR8Tp1NIPQKcI7OqRAfICr0nRfeDDqLM1jwIOv_6CrG8CiNc-BBDbN55ujeifAzym84SooCQ2LWir_r20PvH0U7Z6KptkD'
					        ,'data'       : {
					        	'id'     : '100'
					        },
					        'notification':{
					        	'body':body,
					        	'title':title,
					        	'priority':'high',
					        	'sound':'default'
					        }
					    });

    				$.ajax({
					  type: "POST",
					  beforeSend: function(request) {
					  	request.setRequestHeader("Authorization", "key=AIzaSyAiuwCHgoeLOMLB0SciKXztfTXw19aMQXU");
					  	request.setRequestHeader("Content-Type", "application/json");
					  	request.setRequestHeader("Host", "fcm.googleapis.com");
					  },
					  url: "https://fcm.googleapis.com/fcm/send",
					  data: data1,
					  processData: false,
					  success: function(msg) {
					    $("#thongbao").show();
					  }
					});

    	}else{


    	}


    }else{

    }
    });
});



function PrintElem(elem)
    {
        Popup($(elem).html());
    }

function Popup(data) 
{
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

  return true;
}

$(function(){

      $('.toggle-login-recovery').click(function(e){
	Admin.toggleLoginRecovery();
	e.preventDefault();
       });
      

	    

});


function show_reserve(id,room_no,price)
{
 
  
 $('#res_in').html('<mark>'+$('#date_in').val()+'</mark>'); 
 $('#res_out').html('<mark>'+$('#date_out').val()+'</mark>');
 $('#res_id').text(id);  
 
 $('#res_room').html('<mark>'+room_no+'</mark>'); 
 $('#res_price').html('<mark>'+price+'$</mark>'); 
 
 $('#reserve').modal('show'); 
}

function none_all()
{
  $('#profile').fadeOut(500);
  $('#search').fadeOut(500);
  $('#bookings').fadeOut(500);
}

  $(document).ready(function(){  
     
            $("#btn_profile").click(function () {
	      none_all();
	      $('#profile').fadeIn(500);
	    })
	    
	    $("#btn_search").click(function () {
	      none_all();
	      $('#search').fadeIn(500);
	    })
	    
	    $("#btn_manage").click(function () {
	      none_all();
	      $('#bookings').fadeIn(500);
	    })
	    
	    $('#btn_room_search').on('click', function () {
	      var $btn = $(this).button('loading')
	      $btn.button('reset')
	    })
    
       $("#btn_room_search").click(function()
       {
                dataString = $("#frm_room_search").serialize();  
                $.ajax({
                 type: "Get",
	        	 dataType : 'json',
                 url: "http://127.0.0.1/member/search",
                 data: dataString,
                 async:false,
                 success: function (result) {
		   try{
			 $("#tblresult").find("tr:gt(0)").remove();
			 for(i=0;i<result[0].length;i++)
			 {
				   
			  $('#tblresult tr:last').after('<tr style="text-align:center;"><td style="text-align:center;">' + (i+1) + '</td><td style="text-align:center;">' + result[0][i].room_no + '</td><td style="text-align:center;">' + result[0][i].type + '</td><td style="text-align:center;">' + result[0][i].price + ' $</td><td style="text-align:center;">' + result[0][i].note + ' </td><td style="text-align:center;"><button type="button" class="btn  btn-success btn-sm" onclick="javascript:show_reserve(' + result[0][i].id + ' , \'' + result[0][i].room_no + '\' , \'' + result[0][i].price  + '\' );">Reserve</button></td></tr>');
			  }
			  
			  
			  
		    }catch(e) {		
			alert('Exception while request..');
		    }
			
			
		  },
		  error: function (request, textStatus, errorThrown) {
			  
			     //var err = eval("(" + request.responseText + ")");
			     // alert(err.Message);
			
				alert ("Sorry Noting Found!");
			}
			
		   });
	        return false;  
         });
 
  
  
  
  
     ////////////////////////////////////////////////////////


       
        $("#btn_reserve").click(function()
       {
                dataString = { Customer_id : $('#customer_id').text() , room_id : $('#res_id').text() , date_in : $('#res_in').text() , date_out : $('#res_out').text()} ;  
                $.ajax({
                 type: "POST",
		 dataType : 'json',
                 url: "http://127.0.0.1/member/reservation/add",
                 data: dataString,
                 async:false,
                 success: function (result) {
		   try{
			
			alert ("success add new reservation !")   ;
			  
		    }catch(e) {		
			alert('Exception while request..');
		    }
			
			
		  },
		  error: function (request, textStatus, errorThrown) {
			  
			     //var err = eval("(" + request.responseText + ")");
			     // alert(err.Message);
			
				alert ("success add new reservation !")   ;
			}
			
		   });
	        return false;  
         });
	

	
	   
	

  
      });
  
    
  
  

  
  

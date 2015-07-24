var Admin = {

  toggleLoginRecovery: function(){
    var is_login_visible = $('#modal-login').is(':visible');
    (is_login_visible ? $('#modal-login') : $('#modal-recovery')).slideUp(300, function(){
      (is_login_visible ? $('#modal-recovery') : $('#modal-login')).slideDown(300, function(){
        $(this).find('input:text:first').focus();
      });
    });
  }
   
};


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



function verify(id)
{
	
         $.ajax({
		 type: "POST",
		 dataType : 'json',
         url: "http://127.0.0.1/admin/customer/verify",
         data: {cus_id : id},
         async:false,
         success: function (result) {
		   try{
			    $('#' + id).removeClass('label label-danger').addClass('label label-success');
			    $('#' + id).text("Verified") ;
				alert("Success verifyed !");
		    }catch(e) {		
			alert('Exception while request..');
		    }			
		  },
		  error: function (request, textStatus, errorThrown) {			  
			     var err = eval("(" + request.responseText + ")");
			     alert(err.Message);
			}
			
		   });
	
}


function reserv_confirm(id)
{
	
         $.ajax({
		 type: "POST",
		 dataType : 'json',
         url: "http://127.0.0.1/admin/reservation/confirm",
         data: {reserv_id : id},
         async:false,
         success: function (result) {
		   try{
			    $('#' + id).removeClass('label label-danger').addClass('label label-success');
			    $('#' + id).text("Confirmed") ;
				alert("Success Confirmed !");
		    }catch(e) {		
			alert('Exception while request..');
		    }			
		  },
		  error: function (request, textStatus, errorThrown) {			  
			     var err = eval("(" + request.responseText + ")");
			     alert(err.Message);
			}
			
		   });
	
}

$(function(){

  $('.toggle-login-recovery').click(function(e){
    Admin.toggleLoginRecovery();
    e.preventDefault();
  });

});

function  set_customer(id,family,gender,passport)
{
 
  $("#customer_id").val(id);
  $("#Family").val(family);
  $("#Passport").val(passport);
  $("#Gender").val(gender);
  $('#search').modal('hide')
  
}


function calc(){

	if($('#Price').val() != 0 )
	{  
	  $('#per_day').val((parseInt($('#Price').val()) + parseInt($('#extra_charge').val())));
	  var total = parseInt($('#per_day').val()) * parseInt($('#staying').val());
	  
	  if($('#discount').val() != 0 )
	  {
	   var fl = total *  parseInt($('#discount').val()) / 100 ;
	   $('#total').val( (total - parseInt(fl) ) );
	  }
	  else
	  {
	    $('#total').val(total);
	  }
	  
	}
	else
	{
	  // alert ('Please Choose the room type !');
	 return false ;
	}
}


//Customer Search function 
  $(document).ready(function(){  
    
    
    
      $('#staying').focusout(function() { 
      
      var checkin = new Date($('#date_in').val());
      
      var dd = checkin.getDate() + parseInt($('#staying').val())  ;
      var mm = checkin.getMonth() + 1 ;
      var y = checkin.getFullYear();

      var someFormattedDate = mm + '/'+ dd + '/'+ y;
      
      $('#date_out').val(someFormattedDate);
      
      calc();
      
      });
      
      
          
      $('#extra_charge').focusout(function() { 
	
	if($('#extra_charge').val() == "" )
	{
	  $('#extra_charge').val('0');
	}
      
	calc();
	
      });
      
      $('#discount').focusout(function() { 
	
	if($('#discount').val() == "" )
	{
	  $('#discount').val('0');
	}
      
        calc();
      
      });
      
      
      
      
  
	 
   
       $("#btn-Customer-search").click(function()
       {
                dataString = $("#frm-Customer-search").serialize();  
                $.ajax({
                 type: "Get",
		 dataType : 'json',
                 url: "http://127.0.0.1/admin/customer/search",
                 data: dataString,
                 async:false,
                 success: function (result) {
		   try{
			 $("#tblresult").find("tr:gt(0)").remove();
			 for(i=0;i<result[0].length;i++)
			 {
				   
			  $('#tblresult tr:last').after('<tr style="text-align:center;"><td style="text-align:center;">' + (i+1) + '</td><td style="text-align:center;">' + result[0][i].Name + '</td><td style="text-align:center;">' + result[0][i].Family + '</td><td style="text-align:center;">' + result[0][i].Passport + ' </td><td style="text-align:center;">' + result[0][i].id + ' </td><td style="text-align:center;"><button type="button" class="btn  btn-success btn-sm" onclick="javascript:set_customer(' + result[0][i].id + ' , \'' + result[0][i].Family + '\' , \'' + result[0][i].Gender  + '\' , ' + result[0][i].Passport  +' );">Select</button></td></tr>');
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
 
  
  
  
  
  $('#roomtype').change(function() {  
  
                dataString = "room_type=" + $('#roomtype').val();
                $.ajax({
                 type: "Get",
		 dataType : 'json',
                 url: "http://127.0.0.1/admin/room/get_by_id",
                 data: dataString,
                 async:false,
                 success: function (result) {
		   try{
		      var $el = $("#room_no");
		      $el.empty(); // remove old options
		       for(i=0;i<result[0].length;i++)
			 {
		          $el.append($("<option></option>")
		          .attr("value", result[0][i].id).text(result[0][i].room_no));
			  $("#Price").val(result[0][i].price);
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
  
    
  
  });

  
  calc();

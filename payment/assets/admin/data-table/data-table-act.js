(function ($) {

 "use strict";

	var base_url=$("#baseurl").val();
 
	$(document).ready(function() {

		 $('#data-table-basic').DataTable();
         
        
     $('#viewallblogs').DataTable({
        ajax     :  base_url+"Admin/getallblog",  
           "columns"     :     [  
                {     "data"     :     "id"       },
                {     "data"     :     "topic"    },
                {     "data"     :     "blogdate" },  
                {
                 mRender: function (data, type, row)
                    {
                      
                           
                            return "<img src='"+base_url+"assets/img/blog/"+ row['coverimg'] +"' style='width:50%'>"
                        
                      
                    }
                },
                {
                mRender: function (data, type, row)
                {
                    if(row['status']=="enable"){
                         return "<div class='btn-group'>"+
  "<button type='button' class='btn btn-success dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
    "Enable"+
  "</button>"+
  "<div class='dropdown-menu'>"+
    "<a class='dropdown-item' onclick='blogstatus(\""+ row['blogid'] +"\",\"disable\")' style='cursor:pointer;' >Disable</a>"+
  "</div>"+
"</div>"
                    }
                    else{
        return "<div class='btn-group'>"+
  "<button type='button' class='btn btn-dark dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
    "Disable"+
  "</button>"+
  "<div class='dropdown-menu'>"+
    "<a class='dropdown-item' onclick='blogstatus(\""+ row['blogid'] +"\",\"enable\")' style='cursor:pointer;' >Enable</a>"+
  "</div>"+
"</div>"                
                    }
                    
                    
                    
                }
            },
            {
                mRender: function (data, type, row)
                {
                   
                         return "<button type='button' class='btn btn-primary' onclick='viewblog(\""+ row['blogid'] +"\")'>"+
    "View"+
  "</button>"
              
                }
            },
            {
                mRender: function (data, type, row)
                {
                   
                         return "<button type='button' class='btn btn-danger' onclick='deleteblog(\""+ row['blogid'] +"\",\""+ row['coverimg'] +"\")'>"+
    "Delete"+
  "</button>"
              
                }
            },    
           ]  
        });
    $('#viewallclientstories').DataTable({
        ajax     :  base_url+"Admin/getallclientstories",  
           "columns"     :     [  
                {     "data"     :     "id"       },
                {     "data"     :     "topic"    },
                {     "data"     :     "storydate" },  
                {
                 mRender: function (data, type, row)
                    {
                      
                           
                            return "<img src='"+base_url+"assets/images/clientstories/"+ row['coverimg'] +"' style='width:50%'>"
                        
                      
                    }
                },
                {
                mRender: function (data, type, row)
                {
                    if(row['status']=="enable"){
                         return "<div class='btn-group'>"+
  "<button type='button' class='btn btn-success dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
    "Enable"+
  "</button>"+
  "<div class='dropdown-menu'>"+
    "<a class='dropdown-item' onclick='storystatus(\""+ row['storyid'] +"\",\"disable\")' style='cursor:pointer;' >Disable</a>"+
  "</div>"+
"</div>"
                    }
                    else{
        return "<div class='btn-group'>"+
  "<button type='button' class='btn btn-dark dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
    "Disable"+
  "</button>"+
  "<div class='dropdown-menu'>"+
    "<a class='dropdown-item' onclick='storystatus(\""+ row['storyid'] +"\",\"enable\")' style='cursor:pointer;' >Enable</a>"+
  "</div>"+
"</div>"                
                    }
                    
                    
                    
                }
            },
            {
                mRender: function (data, type, row)
                {
                   
                         return "<button type='button' class='btn btn-primary' onclick='viewstory(\""+ row['storyid'] +"\")'>"+
    "View"+
  "</button>"
              
                }
            },
            {
                mRender: function (data, type, row)
                {
                   
                         return "<button type='button' class='btn btn-danger' onclick='deletestory(\""+ row['storyid'] +"\",\""+ row['coverimg'] +"\")'>"+
    "Delete"+
  "</button>"
              
                }
            },    
           ]  
        });
        
        
          $('#viewallcomments').DataTable({
        ajax     :  base_url+"Admin/getallcomments",  
           "columns"     :     [  
                {     "data"     :     "id"       },
                {     "data"     :     "topic"    },
                {     "data"     :     "username" },  
                {     "data"     :     "email" },
                
                {
                mRender: function (data, type, row)
                {
                    if(row['status']=="show"){
                         return "<div class='btn-group'>"+
  "<button type='button' class='btn btn-success dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
    "Show"+
  "</button>"+
  "<div class='dropdown-menu'>"+
    "<a class='dropdown-item' onclick='commentstatus(\""+ row['commentid'] +"\",\"hide\")' style='cursor:pointer;' >Hide</a>"+
  "</div>"+
"</div>"
                    }
                    else{
        return "<div class='btn-group'>"+
  "<button type='button' class='btn btn-dark dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
    "Hide"+
  "</button>"+
  "<div class='dropdown-menu'>"+
    "<a class='dropdown-item' onclick='commentstatus(\""+ row['commentid'] +"\",\"show\")' style='cursor:pointer;' >Show</a>"+
  "</div>"+
"</div>"                
                    }
                    
                    
                    
                }
            },
          
            {
                mRender: function (data, type, row)
                {
                   
                         return "<button type='button' class='btn btn-danger' onclick='deletecomment(\""+ row['commentid'] +"\")'>"+
    "Delete"+
  "</button>"
              
                }
            },    
           ]  
        });   
        
        
          $('#viewallpayments').DataTable({
        ajax     :  base_url+"Admin/getallpayments",  
           "columns"     :     [  
                {     "data"     :     "id"},
                {     "data"     :     "username"},  
                {     "data"     :     "email"},
                {     "data"     :     "phone"},
                {     "data"     :     "address"},
                {     "data"     :     "amount"},
                {     "data"     :     "location"},
                {     "data"     :     "order_id"},
                {     "data"     :     "razorpayid"},
                {     "data"     :     "paymentdate"},
             
             
           ]  
        });   
        
	});
    


	

	
  
	

	

 

})(jQuery); 
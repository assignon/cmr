
   window.addEventListener("load", function(){
    
       
       
      $(function(){
       
          $("#new").click(function(){
           
               $("#yearName").animate({
                   
                   left: 300,
                   
               },{
                
                duration: 1700,   
                easing: "easeOutElastic",                   
               })
              
               
            })
          
          
          $("#close").click(function(){
           
               $("#yearName").animate({
                   
                   left: -380,
                   
               },{
                
                duration: 1500,   
                easing: "easeOutElastic",                   
               })
              
               
            })
    
       }) 

     })


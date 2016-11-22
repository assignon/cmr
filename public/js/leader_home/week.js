window.addEventListener("load", function(){
    
    
    var addWeek = document.getElementById('newWeek');
    var close = document.getElementById('close');
    var weekForm = document.getElementById('weekForm');
    
    $(function(){
        
        
        $(addWeek).click(function(){
            
            
            $(weekForm).animate({
                
                bottom: -100,
                
            },{
                
                duration: 1000,
                easing: "easeOutBounce",
                
            })
            
        })
        
        
        $(close).click(function(){
            
            
            $(weekForm).animate({
                
                bottom: 500,
                
            },{
                
                duration: 1000,
                easing: "easeInOutBounce",
                
            })
            
        })
        
    })
    
    
})
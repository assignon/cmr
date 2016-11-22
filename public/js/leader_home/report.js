window.addEventListener("load", function(){


    var vieuwButt = document.getElementById("vieuw");
    var editButt = document.getElementById("edit");

    var vieuw = document.querySelectorAll(".view");
    //var edit = document.querySelectorAll(".edit");

    var form = document.getElementById("form");
    var report = document.getElementById("report");

    vieuwButt.addEventListener("click", function(){

        report.style.zIndex = '2';
        form.style.zIndex = "1";

        vieuw.style.backgroundColor = 'white';
        vieuw.style.color = 'crimson';
        vieuw.style.border = '1px solid crimson';

        edit.style.backgroundColor = 'crimson';
         edit.style.color = 'white';
         edit.style.border = '1px solid white';

    })

    editButt.addEventListener("click", function(){

        report.style.zIndex = '1';
        form.style.zIndex = "2";

         edit.style.backgroundColor = 'white';
         edit.style.color = 'crimson';
        edit.style.border = '1px solid crimson';

        vieuw.style.backgroundColor = 'crimson';
        vieuw.style.color = 'white';
        vieuw.style.border = '1px solid white';

    })

  /*  var weekContainer = document.getElementById("weekContainer");

    var week1 = document.createElement("div");
    week1.className = "week";

    var week2 = document.createElement("div");
    week2.className = "week";

    var week3 = document.createElement("div");
    week3.className = "week";

    var week4 = document.createElement("div");
    week4.className = "week";

    var weekName1 = document.createElement("h2");
    weekName1.className = "weekName";

    var weekName2 = document.createElement("h2");
    weekName2.className = "weekName";

    var weekName3 = document.createElement("h2");
    weekName3.className = "weekName";

    var weekName4 = document.createElement("h2");
    weekName4.className = "weekName";*/



  /*  for(var i = 0; i < vieuw.length; i++){

       var vieuwArr = vieuw[i];

       vieuwArr.addEventListener("click", function(e){

              //alert(windowH);
              var targetBottom = e.target.parentNode.offsetTop;
              var targetLeft = e.target.parentNode.offsetLeft;
              var windowH = window.pageYOffset;
      /*   week1.appendChild(weekName1);
         week2.appendChild(weekName2);
         week3.appendChild(weekName3);
         week4.appendChild(weekName4);

          weekContainer.appendChild(week1);
          weekContainer.appendChild(week2);
          weekContainer.appendChild(week3);
          weekContainer.appendChild(week4);

          weekContainer.style.top = target+"px";
          weekContainer.style.marginBottom = "-400px";*/
          //alert('Bottom:'+ targetBottom+' '+'left:'+ targetLeft+' '+'windowHeight:'+windowH);


        /*  $(function(){


            $(weekContainer).animate({

                top: windowH,
                //marginBottom: 30

              },{

                easing: 'easeOutBounce',
                duration: 1000

            })


          })



       })

    }*/





    var submit = document.getElementById("submite");

    var monthName = document.getElementById("monthName");

    var monthTheme = document.getElementById("monthTheme");

    var error = document.querySelector(".error");

    var edit = document.querySelectorAll(".edit");

    var monthEdit = document.getElementById("monthEdit");

    var month = new Array();
    month.push("january","february","march","april","mei","juny","jully","august","september","october","november","december");

   submit.addEventListener("click", function(e){
      //e.preventDefault();
for( var i = 0; i <= month.length; i++){
      if(monthName.value == "" || monthTheme.value == ""){

        var monthArr = month[i];

          e.preventDefault();
          error.innerHTML = "Fill all";

           //var monthNameLower = monthName.value.lowerCase();

        }else if(monthNameLower != monthArr){

             e.preventDefault();
             error.innerHTML = "The Month"+' '+monthName.value+' '+"Don't Exist...";

         }else{



         }


      }

   })


     monthName.addEventListener("focus", function(){

         error.innerHTML = "Give A Name To The Month ";

     })

     monthTheme.addEventListener("focus", function(){

         error.innerHTML = "Give The Theme Of The Month ";

     })




})

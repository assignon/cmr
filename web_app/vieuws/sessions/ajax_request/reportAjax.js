function sendRequest(){

    var monthName = document.getElementById("monthName").value;

    var monthTheme = document.getElementById("monthTheme").value;

    var sub = document.getElementById("submite");

    //e.preventDefault();

  //  var sendToPhp = monthTheme.' '

    var error = document.querySelector(".error");

    var xhr;

    if(window.XMLHttpRequest){

       xhr = new XMLHttpRequest();

    }else{

       xhr = new ActiveXobject("Microsoft.XMLHTTP");

    }


    xhr.onreadyStatechange = function () {

       if(this.readyState == 4 && this.status == 200){

        error.innerHTML = xhr.responseText;

       }

    }

    //xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhr.open('POST','../../web_app/vieuws/sessions/report.php',true);
    //xhr.open('POST','../../web_app/vieuws/sessions/report.php',true);
    xhr.send(monthName,monthTheme);


}

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <button type = "button" onclick = "changeTxt()"> Change content </button>
    
    <p id = "txt"> Old information </p>
    <script>
        
         function changeTxt(){
             let xhttp = new XMLHttpRequest();
             xhttp.onreadystatechange = function(){
                 if(this.readyState === 4 && this.status === 200){

                     document.getElementById("txt").innerHTML = this.responseText;
                    }
             };
             
             xhttp.open("GET", "info.txt" , true);
             xhttp.send();
         }
    
    
    </script> 
    
</body>
</html>
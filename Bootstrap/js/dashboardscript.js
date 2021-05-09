      //search table by name
      function searchByName(){
        var name= document.getElementById("name").value.trim();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
             document.getElementById("studentTable").innerHTML =this.responseText;
          }
        }
        xhttp.open("POST", "config/get_table_by_name.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("name="+name+"&name_length="+name.length);
      }

      //search table by jamb score
      function searchByJambScore(){
        var score= document.getElementById("score").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
             document.getElementById("studentTable").innerHTML =this.responseText;
          }
        }
        xhttp.open("POST", "config/get_table_by_jamb_score.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("jamb_score="+score);
      }

      // search table by admission status
      function searchByAdmissionStatus(){
        var admissionStatus = document.getElementById("admissionStatus").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             document.getElementById("studentTable").innerHTML =this.responseText;
          }
        }
        xhttp.open("POST", "config/get_table_by_admission_status.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("adm_status="+admissionStatus);
      }   
      
      // search table by gender
      function searchByGender(){
        var gender = document.getElementById("gender").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById("studentTable").innerHTML = this.responseText;
          }
        }
        xhttp.open("POST", "config/get_table_by_gender.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("gender="+gender);
      }

      // get approval by checkbox
      function getApproval(id){
        var approval= document.getElementById("approval");
        if (approval.checked) {
          var approval= document.getElementById("approval").value;
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              if (this.responseText=="yes") {
                location.reload();
              }
            }
          }
          xhttp.open("POST", "get_approval.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("approval="+approval+"&id="+id);
        }else if(approval.checked== false){
          approval ="off";
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              if (this.responseText=="no") {
                location.reload();
              }
            }
          }
          xhttp.open("POST", "get_approval.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send("approval="+approval+"&id="+id); 
        }        
      }
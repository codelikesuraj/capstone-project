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
        console.log("name length is "+name.length);
        console.log("name value is "+name);
        xhttp.send("name="+name+"&name_length="+name.length);
      }

      // search table by gender and jamb score
      function searchByGenderAndJScoree(){
        var gender = document.getElementById("gender").value;
        var score = document.getElementById("score").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             document.getElementById("studentTable").innerHTML =this.responseText;
          }
        }
        xhttp.open("POST", "get_table_by_gender_score.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("gender="+gender+"&score="+score);
      }

      // search table by admission status
      function searchByAdmissionStatuss(){
        var admissionStatus = document.getElementById("admissionStatus").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             document.getElementById("studentTable").innerHTML =this.responseText;
          }
        }
        xhttp.open("POST", "get_table_by_admission_status.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("admissionStatus="+admissionStatus);
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

      // fake duplicate functions
     // function searchByName(){
       // console.log('Search by name');
      //}
      function searchByGenderAndJScore(){
        console.log('Search by gender and jscore');
      }
      function searchByAdmissionStatus(){
        console.log('Search by admission status');
      }
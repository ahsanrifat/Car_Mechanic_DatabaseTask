
function setTheDate(){
      var myDiv = document.getElementById("select-date");

      //creating date array
      var d=new Date();
      var s=d.toDateString();
      var dateArray=new Array(3);
      dateArray[0]=s;
      for(var i=1;i<3;i++){
             d.setDate(d.getDate()+1);
             s=d.toDateString();
             dateArray[i]=s;            
      }
      console.log(dateArray);
      //creating select option


      var selectList = document.createElement("select");
      selectList.id = "mySelect";
      selectList.name="date";
      myDiv.appendChild(selectList);

    for (var i =-1; i < dateArray.length; i++) {

      if(i==-1){
           var option = document.createElement("option");
            option.value = "null";
            option.text = "Select";
            selectList.appendChild(option); 
      }
     else{
      var option = document.createElement("option");
      option.value = dateArray[i];
      option.text = dateArray[i];
      selectList.appendChild(option);
}
}
}
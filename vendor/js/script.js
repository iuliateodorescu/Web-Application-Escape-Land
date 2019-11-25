function selectOptionAdmin( opt )
{
  var control;
  for (control = 1; control<=4; control++)
  {
    if (control==opt) {
      document.getElementById('optionAdmin'+control).style.display="block";
    }else{
      document.getElementById('optionAdmin'+control).style.display="none";
    }
  }
}

function UploadClick() {
  document.getElementById("PhotoUP").click(); // Click on the checkbox
}

function validation(x){
      var elem=document.getElementById('PhotoUP').files[0];
      var parents = document.getElementById('AreaUploadPhoto');
      var rm = document.getElementById('ig');
      var imag = document.createElement('img');

      var atrr = document.createAttribute('class');
      atrr.value="imgt";
      imag.setAttributeNode(atrr);

      var atrr = document.createAttribute('id');
      atrr.value="ig";
      imag.setAttributeNode(atrr);

      var atrr = document.createAttribute('onload');
      atrr.value="shower(x)";
      imag.setAttributeNode(atrr);

      imag.src=window.URL.createObjectURL(elem);
      parents.removeChild(rm);
      parents.appendChild(imag);
      document.getElementById('SizePhotoUP').innerHTML=(elem.size/1024).toFixed(1)+'KB';

    return false;
  }
  function shower(x){//x=playlist or subplaylist
      var el=document.getElementsByClassName('imgt')[0];
      document.getElementById('NamePhotoUP').innerHTML='.png';
      document.getElementById('HeightPhotoUP').innerHTML=el.height+'px';
      document.getElementById('WidthPhotoUP').innerHTML=el.width+'px';

      document.getElementById('StatusPhotoUP').innerHTML="OK";
      document.getElementById('StatusPhotoUP').style.color="green";

      document.getElementsByClassName('imgt')[0].style.height=55+'px';
      document.getElementsByClassName('imgt')[0].style.width=100+'px';
      document.getElementsByClassName('imgt')[0].style.borderRadius="4px";
      document.getElementById('TablePhotoUP').style.display="block";
      validateForm();
  }


  function validateForm(){

  	  var imgRoom=document.getElementById('StatusPhotoUP').innerHTML;

      var EnName=document.getElementById('EnNameRoom').value;
      var EnTitle=document.getElementById('EnTitleRoom').value;
      var EnDescriere=document.getElementById('EnDescription').value;

      var RoName=document.getElementById('RoNameRoom').value;
      var RoTitle=document.getElementById('RoTitleRoom').value;
      var RoDescriere=document.getElementById('RoDescription').value;

  	   if(imgRoom=="OK" && EnName.length > 2 && EnTitle.length > 2 && EnDescriere.length > 2 && RoName.length > 2 && RoTitle.length >2 && RoDescriere.length >2 ){
  		   document.getElementById('submitServici').style.display="block";
         return true;
  	   }else{

  		   document.getElementById('submitServici').style.display="none";
         return false;
  	   }
}

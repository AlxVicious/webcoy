var title=document.getElementById("title").value;
var check=document.querySelector(".check");
check.addEventListener('click',idioma);

function idioma(){
  let id=check.checked;

  if(id==true){
    location.href="../en-us/" + title;
  }
  else{
    location.href="../es-mx/" + title;
  }
}

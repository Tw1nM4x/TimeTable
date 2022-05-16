function Open(block,hgt1,hgt2,id){
  if(document.getElementById(id).style.display == 'block'){
      document.getElementById(id).style.display = 'none';
      document.getElementById(block).style.height = hgt1;
  }
  else{
      document.getElementById(id).style.display = 'block';
      document.getElementById(block).style.height = hgt2;
  }
}

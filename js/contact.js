  function validate()
  {
  var val=document.getElementById('contact').value;
  var pcode=document.getElementById('pcode').value;
  var plen=parseInt(pcode.length);
  var len=parseInt(val.length);
  if(isNaN(val))	{
  alert('Please Enter Numeric Value Only');
  document.getElementById('contact').focus();
  return false;
  					}	
  else if(len != 10){					
  alert('Please Enter 10 Digit Only');
  document.getElementById('contact').focus();
  return false;						
				    }								
   else if(isNaN(pcode))	{
  alert('Please Enter Numeric Value Only');
  document.getElementById('pcode').focus();
  return false;
  							}	
  else if(plen != 6)		{					
  alert('Please Enter 6 Digit Only');
  document.getElementById('pcode').focus();
  return false;						
						    }								
  }
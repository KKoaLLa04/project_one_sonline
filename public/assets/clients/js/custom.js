function Inint_AJAX() {
try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
alert("XMLHttpRequest not supported");
return null;
};
function download(path,val) {
var req = Inint_AJAX();
req.open("GET", path+"download.php?val="+val); //make connection
//req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1"); // set Header
req.send(null); //send value
req.onreadystatechange = function () {
 if (req.readyState==4) {
      if (req.status==200) {

      }
 }
};

}
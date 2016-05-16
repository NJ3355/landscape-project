var i = 0;
var path = new Array();
 
path[0] = "images/landheader.jpg";
path[1] = "images/images/landheader2.jpg";
path[2] = "landheader3.jpg";

function swapImage()
{
   document.slide.src = path[i];
   if(i < path.length - 1) i++; else i = 0;
   setTimeout("swapImage()",4000);
}
window.onload=swapImage;






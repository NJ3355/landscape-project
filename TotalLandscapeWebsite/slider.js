var slider = function(target, slides) {
  var currentSlide =0;

  
  
  
  
  var updateImage = function() {
     var img = $('<img>').attr('src', slides[currentSlide]);
        target.find('.sliderImage').empty().append(img);
  }

   updateImage();
  
  
  target.find('.next').click(function() {
   currentSlide++;
    if(currentSlide >= slides.length)
      {
        currentSlide = 0;
      }
  
   updateImage();
  
  });
  
  target.find('.previous').click(function() {
  --currentSlide;
    if(currentSlide < 0) {
    currentSlide = slides.length - 1;
  }
      
  updateImage();
    
  });
};

var mySlides = new Array();
mySlides[0] = "landheader.jpg";
mySlides[1] = "landheader2.jpg";
mySlides[2] = "landheader3.jpg";




$(function() {
  new slider($('.slider'), mySlides);
});

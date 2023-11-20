// script.js
document.addEventListener('DOMContentLoaded', function (){
    // Use GSAP to create a simple animation
    gsap.to("#animatedElement", { duration: 2, x: 200, y: 100, rotation: 360, ease: "power1.out" });


  
    // Check visibility and toggle ribbon container
    window.addEventListener('scroll', function() {
      var ribbonContainer = document.querySelector('.ribbon-container');
      var homeSection = document.getElementById('Home');
  
      var rect = homeSection.getBoundingClientRect();
      var isVisible = (rect.top >= 0) && (rect.bottom <= window.innerHeight);
  
      if (isVisible) {
        ribbonContainer.style.display = 'block';
      } else {
        ribbonContainer.style.display = 'none';
      }
    });
  });
  


window.addEventListener('DOMContentLoaded', function () {
    // Replace 'your_api_key' with your actual Remove.bg API key
    new RemoveBg('ewk714z6wVCvGmchCg1LsR2E');
  });
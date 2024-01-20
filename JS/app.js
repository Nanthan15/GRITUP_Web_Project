var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000
  });
  var textWrapper = document.querySelector('.ml9 .letterss');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000
  });
  
    document.addEventListener("DOMContentLoaded", function() {
      var preloader = document.getElementById("preloader");

      setTimeout(function() {
        preloader.style.display = "none";
      }, 1800); // Display preloader for 2 seconds
    });
    document.addEventListener("DOMContentLoaded", function() {
      var preloade = document.getElementById("preloade");

      setTimeout(function() {
        preloader.style.display = "none";
      }, 1100); // Display preloader for 2 seconds
    });
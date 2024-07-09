// Use the conventional $ prefix for variables that hold jQuery objects.
var $slider;

// If the only purpose of the windowWidth() function is to set the slide variables,

const diagnostico=document.querySelector(".diagnostico");
diagnostico.addEventListener("click",()=>{
  window.location="http://cedidentdigital.com/diagnostico/"
})

const laboratorio=document.querySelector(".laboratorio");
laboratorio.addEventListener("click",()=>{
  window.location="http://cedidentdigital.com/laboratorio/"
})
// it can be renamed and rewritten to supply the full configuration object instead.
function buildSliderConfiguration() {
  // When possible, you should cache calls to jQuery functions to improve performance.
  var windowWidth = $(window).width();
  var numberOfVisibleSlides;

  if (windowWidth < 420) {
    numberOfVisibleSlides = 1;
  }
  else if (windowWidth < 768) {
    numberOfVisibleSlides = 2;
  }
  else if (windowWidth < 1200) {
    numberOfVisibleSlides = 3;
  }
  else {
    numberOfVisibleSlides = 3;
  }

  return {
    pager: false,
    controls: false,
    auto: true,
    oneToOneTouch:true,
    slideWidth: 5000,
    startSlide: 0,
    nextText: ' ',
    prevText: ' ',
    adaptiveHeight: true,
    moveSlides: 1,
    slideMargin: 20,
    autoStart:true,
    wrapperClass:'slidercarusel',
    minSlides: numberOfVisibleSlides,
    maxSlides: numberOfVisibleSlides
  };
}

// This function can be called either to initialize the slider for the first time
// or to reload the slider when its size changes.
function configureSlider() {
  var config = buildSliderConfiguration();

  if ($slider && $slider.reloadSlider) {
    // If the slider has already been initialized, reload it.
    $slider.reloadSlider(config);
  }
  else {
    // Otherwise, initialize the slider.
    $slider = $('.slider2').bxSlider(config);
  }
}
configureSlider();



/*Slider 3*/ 

var $slider2;

// If the only purpose of the windowWidth() function is to set the slide variables,
// it can be renamed and rewritten to supply the full configuration object instead.
function buildSliderConfiguration2() {
  // When possible, you should cache calls to jQuery functions to improve performance.
  var windowWidth2 = $(window).width();
  var numberOfVisibleSlides2;

  if (windowWidth2 < 420) {
    numberOfVisibleSlides2 = 1;
  }
  else if (windowWidth2 < 768) {
    numberOfVisibleSlides2 = 2;
  }
  else if (windowWidth2 < 1200) {
    numberOfVisibleSlides2 = 3;
  }
  else {
    numberOfVisibleSlides2 = 4;
  }

  return {
    pager: false,
    autoStart:true,
    controls: false,
    auto: true,
    oneToOneTouch:true,
    slideWidth: 5000,
    startSlide: 0,
    nextText: ' ',
    prevText: ' ',
    adaptiveHeight: true,
    moveSlides: 1,
    slideMargin: 20,
    wrapperClass:'slidercarusel',
    minSlides: numberOfVisibleSlides2,
    maxSlides: numberOfVisibleSlides2
  };
}

// This function can be called either to initialize the slider for the first time
// or to reload the slider when its size changes.
function configureSlider2() {
  var config2 = buildSliderConfiguration2();

  if ($slider2 && $slider2.reloadSlider) {
    // If the slider has already been initialized, reload it.
    $slider2.reloadSlider(config2);
  }
  else {
    // Otherwise, initialize the slider.
    $slider2 = $('.slider3').bxSlider(config2);
  }
}
configureSlider2();

/*Slider 4*/ 


var $slider3;

// If the only purpose of the windowWidth() function is to set the slide variables,
// it can be renamed and rewritten to supply the full configuration object instead.
function buildSliderConfiguration3() {
  // When possible, you should cache calls to jQuery functions to improve performance.
  var windowWidth3 = $(window).width();
  var numberOfVisibleSlides3;

  if (windowWidth3 < 420) {
    numberOfVisibleSlides3 = 1;
  }
  else if (windowWidth3 < 768) {
    numberOfVisibleSlides3 = 2;
  }
  else if (windowWidth3 < 1200) {
    numberOfVisibleSlides3 = 3;
  }
  else {
    numberOfVisibleSlides3 = 6;
  }

  return {
    pager: false,
    autoStart:true,
    controls: false,
    auto: true,
    oneToOneTouch:true,
    slideWidth: 5000,
    startSlide: 0,
    nextText: ' ',
    prevText: ' ',
    adaptiveHeight: true,
    moveSlides: 1,
    slideMargin: 20,
    wrapperClass:'slidercarusel',
    minSlides: numberOfVisibleSlides3,
    maxSlides: numberOfVisibleSlides3
  };
}

// This function can be called either to initialize the slider for the first time
// or to reload the slider when its size changes.
function configureSlider3() {
  var config3 = buildSliderConfiguration2();

  if ($slider3 && $slider3.reloadSlider) {
    // If the slider has already been initialized, reload it.
    $slider3.reloadSlider(config3);
  }
  else {
    // Otherwise, initialize the slider.
    $slider3 = $('.slider4').bxSlider(config3);
  }
}
configureSlider3();

/**/

/***/ 
jQuery(document).ready($=>{
    $(document).ready(function(){
        $('.slider1').bxSlider({
            auto:true,
            oneToOneTouch:true,
            pager:false,
            minSlides: 1,
            maxSlides: 1,
        slideMargin:10,
        controls:false,
        wrapperClass:'slidercarusel'
        });
      });
      $(document).ready(function(){
        $('.slidersingle').bxSlider({
            auto:true,
            oneToOneTouch:true,
            pager:false,
            minSlides: 1,
            maxSlides: 1,
        slideMargin:10,
        controls:false,
        wrapperClass:'slidercarusel'
        });
      });


    const map=L.map("mapid").setView([-12.0402300,-76.9878500],14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom:18,
    }).addTo(map);
    
    

    const markers=new L.LayerGroup();
            const globo=L.popup().setContent(`<p>Av.Petit Thouars 2686,Lince- Lima</p><p>(01) 4226797</p>`);
            const marker=new L.marker([

                parseFloat(-12.090196),
                parseFloat(-77.032529)
            ],).bindPopup(globo);
            
            markers.addLayer(marker);


        
        const globo2=L.popup().setContent(`<p>Jr. Abutardas 362, Santa Anita - Lima</p><p>(01) 3631308</p>`);
        const marker2=new L.marker([
            parseFloat(-12.049213),
            parseFloat(-76.965715)
        ],).bindPopup(globo2);
        
        markers.addLayer(marker2);


        const globo3=L.popup().setContent(`<p>Av. Prolongacion Javier Prado Mz B lte 13,Ate Vitarte - Lima</p><p>(01) 480 5644</p>`);
        const marker3=new L.marker([
            parseFloat(-12.034605),
            parseFloat(-76.925121)
        ],).bindPopup(globo3);
        
        markers.addLayer(marker3);

        const globo4=L.popup().setContent(`<p>Jr. 28 de Julio 1265, Huánuco - Huánuco</p><p>(062) 514365</p>`);
        const marker4=new L.marker([
            parseFloat(-9.926810),
            parseFloat(-76.237469)
        ],).bindPopup(globo4);
        
        markers.addLayer(marker4);




    markers.addTo(map);



    
     
})

window.onscroll=(e)=>{
  const header=document.querySelector('.header_nav_con');
  const headerheight=header.clientHeight;
  const y=window.scrollY;
  if(y>headerheight){
      header.classList.add('menu-sticker');

  }else{
      header.classList.remove('menu-sticker');

  }

}

var btnContainer = document.querySelector(".navbar-light");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
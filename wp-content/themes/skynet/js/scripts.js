headerLinksOptions = {
  init : function () {
    $("a.toscroll").on('click',function(e) {
      var url = e.target.href;
      var hash = url.substring(url.indexOf("#")+1);
      $('html, body').animate({
        scrollTop: $('#'+hash).offset().top - 120
      }, 500);
      return false;
    });
  }
}
headerMenuOptions = {
  init : function () {
    $('.skynet_hamburger').on('click',function () {
      $(this).toggleClass('active');
      if($('.skynet_header_menu_list').css('max-height') == '0px'){
        $('.skynet_header_menu_list').css('max-height','1000px');
      }
      else{
        $('.skynet_header_menu_list').css('max-height','')
      }
    })
  }
}
mainBannerOptions = {
  init : function () {
    $('.banner_layout_slider').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });
  }
}



$(document).ready(function () {
  mainBannerOptions.init();
  headerMenuOptions.init();
  AOS.init();
});










particlesJS("particles-js", {
  particles: {
    number: { value: 70, density: { enable: true, value_area: 800 } },
    color: { value: "#000000" },
    shape: {
      type: "triangle",
      stroke: { width: 8, color: "#000000" },
      polygon: { nb_sides: 5 },
      image: { src: "img/github.svg", width: 100, height: 100 }
    },
    opacity: {
      value: 0.5,
      random: false,
      anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false }
    },
    size: {
      value: 0,
      random: true,
      anim: {
        enable: false,
        speed: 24.345709068776642,
        size_min: 0,
        sync: false
      }
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#ffffff",
      opacity: 0.4,
      width: 1
    },
    move: {
      enable: true,
      speed: 4.807230074031347,
      direction: "top-right",
      random: false,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: { enable: false, rotateX: 600, rotateY: 1200 }
    }
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: true, mode: "repulse" },
      onclick: { enable: true, mode: "push" },
      resize: true
    },
    modes: {
      grab: { distance: 400, line_linked: { opacity: 1 } },
      bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
      repulse: { distance: 200, duration: 0.4 },
      push: { particles_nb: 4 },
      remove: { particles_nb: 2 }
    }
  },
  retina_detect: true
});
var count_particles, stats, update;
stats = new Stats();
stats.setMode(0);
stats.domElement.style.position = "absolute";
stats.domElement.style.left = "0px";
stats.domElement.style.top = "0px";
stats.domElement.style.display = 'none'
document.body.appendChild(stats.domElement);
count_particles = document.querySelector(".js-count-particles");
update = function () {
  stats.begin();
  stats.end();

  requestAnimationFrame(update);
};
requestAnimationFrame(update);



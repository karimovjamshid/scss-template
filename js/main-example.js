jQuery(document).ready(function ($) {
  // Sticky navbar
  let header = $("#header");
  let scrollPos = $(window).scrollTop();

  $(window).on("scroll load resize", function () {
    let headerH = header.innerHeight();
    scrollPos = $(this).scrollTop();
    if (scrollPos > headerH) {
      header.addClass("fixed");
    } else {
      header.removeClass("fixed");
    }
  });
  // Swiper slider
  let autoplay2 = 4000;
  const gallerySwiper = new Swiper(".gallery-slider", {
    loop: false,
    slidesPerView: 1,
    direction: "horizontal",
    speed: 1000,
    spaceBetween: 17,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    pagination: {
      el: ".quote-box-slider__pag",
      clickable: true,
    },
    mousewheel: {
      invert: false,
    },
    speed: 1000,
    navigation: {
      nextEl: ".gallery-next",
      prevEl: ".gallery-prev",
    },
    breakpoints: {
      420: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      576: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
    },
    autoplay: {
      delay: autoplay2,
    },
    watchSlidesProgress: true,
    onProgress: move(),
  });

  // Timing progress bar for gallery slider
  gallerySwiper.on("slideChange", function () {
    move();
  });

  function move() {
    let elem = document.getElementById("about-slider__bar");
    let width = 1;
    let autoplayTime = autoplay2 / 100;
    let id = setInterval(frame, autoplayTime);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
  // Burger
  const headerMenu = document.querySelector(".header__content");
  const burgerBtn = document.querySelector(".burger");
  const closeBtn = document.querySelector(".header-close");

  burgerBtn.addEventListener("click", function () {
    headerMenu.classList.add("active");
  });
  closeBtn.addEventListener("click", function () {
    headerMenu.classList.remove("active");
  });
  // Mobile submenu
  const subMenuIcon = jQuery(".sub-menu-icon");
  subMenuIcon.on("click", function () {
    jQuery(this).parents("li").find("ul").toggleClass("active");
  });

  // Year
  const yearSpan = document.getElementById("year");
  yearSpan.innerText = new Date().getFullYear();

  // Custom select
  jQuery("select").selectric();
  // Match height
  if (jQuery(".featured-card__text")) {
    jQuery(".featured-card__text").matchHeight({ property: "min-height" });
  }

  // Parallax Space Person project
  var s = skrollr.init({
    smoothScrolling: true,
  });
  if (s.isMobile()) {
    s.destroy();
  }
  // FAQs
  const faqQuestion = $(".faqs__item");
  if (faqQuestion) {
    faqQuestion.on("click", function (e) {
      jQuery(this).find(".faqs__icon").toggleClass("active");
      jQuery(this).find(".faqs__answer").slideToggle();
      jQuery(this).siblings().find(".faqs__answer").slideUp();
    });
  }

  // Smooth scroll
  $("[data-scroll]").on("click", function (event) {
    event.preventDefault();
    let elemID = $(this).data("scroll");
    let elemOffSet = $(elemID).offset().top;
    $("html, body").animate({
      scrollTop: elemOffSet - 0,
    });
  });

  // Fancy box
  Fancybox.bind('[data-fancybox="gallery-grid"]', {
    Image: {
      zoom: false,
    },
    loop: true,
    keyboard: true,
    buttons: ["zoom", "slideShow", "download", "close"],
  });
  // Play video
  let playButton = jQuery(".coloured-content__video");
  let videoNumber = 0;
  let videoId = "";
  // Event listener for the play/pause button of video. Vertual project
  playButton.on("click", function () {
    let video = jQuery(".coloured-content__vid").get(videoNumber);
    console.log(videoNumber);
    if (video.paused == true) {
      // Play the video
      video.play();
      jQuery(".coloured-content__videotop").css({
        opacity: "0",
        "pointer-events": "none",
      });
      jQuery(".coloured-content__play").css("opacity", "0");
    } else {
      // Pause the video
      video.pause();
      jQuery(".coloured-content__videotop").css({
        opacity: "1",
        "pointer-events": "auto",
      });
      jQuery(".coloured-content__play").css("opacity", "1");
    }
  });
  // Tabs. Vertual project
  jQuery(".ed-platform-tabs__title").on("click", function () {
    var target = $(this).attr("data-rel");
    jQuery(".ed-platform-tabs__title").removeClass("active");
    jQuery(this).addClass("active");
    jQuery("#" + target)
      .fadeIn("slow")
      .siblings(".ed-platform-tabs__main")
      .hide();
    return false;
  });
  // AOS
  AOS.init();
  // Browser compatibility
  // Identify OS. This code adds "mac" class to body tag if user's OS is mac, and "pc" if it is windows
  if (navigator.userAgent.indexOf("Mac OS X") != -1) {
    jQuery("body").addClass("mac");
  } else {
    jQuery("body").addClass("pc");
  }

  // Adds class "chrome" if user's browser is chrome
  var isChrome =
    /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  if (isChrome) {
    jQuery("body").addClass("chrome");
  }
});

<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include_once('headertitle.php')?>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/lightgallery.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
</head>

<body>
   <?php include_once('header.php')?>

    
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="<?php echo base_url(); ?>assets/img/breadcrumb-bg01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Videos</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url(); ?>">Home</a>
                            <a href="<?php echo base_url(); ?>results">Results</a>
                            <span>Videos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    
<section id="videogallery" class="pt-5 pb-5">
    <div class="container">
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 mt-3 mb-3">
                <iframe src="https://www.youtube.com/embed/SfN-sE-Frf8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <iframe src="https://www.youtube.com/embed/9yGIxCjhfI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <iframe src="https://www.youtube.com/embed/l_QKOnWf8ZE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <iframe src="https://www.youtube.com/embed/r-e6grG-Q3E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
             <div class="col-md-6 mt-3 mb-3">
                <iframe src="https://www.youtube.com/embed/MKl0mJyk4TQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <iframe src="https://www.youtube.com/embed/c2p4_xxYYd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div></div>
    </div>
</section>
    
    
   <?php include_once('footer.php')?>

<!-- Js Plugins -->
<script>
    let lazyImages = [...document.querySelectorAll('.lazy-image')];
let inAdvance = 300;

function lazyLoad() {
  lazyImages.forEach(image => {
    if (image.offsetTop < window.innerHeight + window.pageYOffset + inAdvance) {
      image.src = image.dataset.src;
      image.onload = () => image.classList.add('loaded');
    }
  });

  // if all loaded removeEventListener
}

lazyLoad();

window.addEventListener('scroll', _.throttle(lazyLoad, 16));
window.addEventListener('resize', _.throttle(lazyLoad, 16));
</script>
    <script type="text/javascript">
        $(document).ready(function(){
           $('.gallery1').lightGallery();
        });
        </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
     <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>     
  <script src="<?php echo base_url();?>assets/plugins/js/lightgallery-all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<script>
    (function () {
        var Util
            , __bind = function (fn, me) {
                return function () {
                    return fn.apply(me, arguments);
                };
            };
        Util = (function () {
            function Util() {}
            Util.prototype.extend = function (custom, defaults) {
                var key, value;
                for (key in custom) {
                    value = custom[key];
                    if (value != null) {
                        defaults[key] = value;
                    }
                }
                return defaults;
            };
            Util.prototype.isMobile = function (agent) {
                return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
            };
            return Util;
        })();
        this.WOW = (function () {
            WOW.prototype.defaults = {
                boxClass: 'wow'
                , animateClass: 'animated'
                , offset: 0
                , mobile: true
            };

            function WOW(options) {
                if (options == null) {
                    options = {};
                }
                this.scrollCallback = __bind(this.scrollCallback, this);
                this.scrollHandler = __bind(this.scrollHandler, this);
                this.start = __bind(this.start, this);
                this.scrolled = true;
                this.config = this.util().extend(options, this.defaults);
            }
            WOW.prototype.init = function () {
                var _ref;
                this.element = window.document.documentElement;
                if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
                    return this.start();
                }
                else {
                    return document.addEventListener('DOMContentLoaded', this.start);
                }
            };
            WOW.prototype.start = function () {
                var box, _i, _len, _ref;
                this.boxes = this.element.getElementsByClassName(this.config.boxClass);
                if (this.boxes.length) {
                    if (this.disabled()) {
                        return this.resetStyle();
                    }
                    else {
                        _ref = this.boxes;
                        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                            box = _ref[_i];
                            this.applyStyle(box, true);
                        }
                        window.addEventListener('scroll', this.scrollHandler, false);
                        window.addEventListener('resize', this.scrollHandler, false);
                        return this.interval = setInterval(this.scrollCallback, 50);
                    }
                }
            };
            WOW.prototype.stop = function () {
                window.removeEventListener('scroll', this.scrollHandler, false);
                window.removeEventListener('resize', this.scrollHandler, false);
                if (this.interval != null) {
                    return clearInterval(this.interval);
                }
            };
            WOW.prototype.show = function (box) {
                this.applyStyle(box);
                return box.className = "" + box.className + " " + this.config.animateClass;
            };
            WOW.prototype.applyStyle = function (box, hidden) {
                var delay, duration, iteration;
                duration = box.getAttribute('data-wow-duration');
                delay = box.getAttribute('data-wow-delay');
                iteration = box.getAttribute('data-wow-iteration');
                return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
            };
            WOW.prototype.resetStyle = function () {
                var box, _i, _len, _ref, _results;
                _ref = this.boxes;
                _results = [];
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    box = _ref[_i];
                    _results.push(box.setAttribute('style', 'visibility: visible;'));
                }
                return _results;
            };
            WOW.prototype.customStyle = function (hidden, duration, delay, iteration) {
                var style;
                style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
                if (duration) {
                    style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
                }
                if (delay) {
                    style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
                }
                if (iteration) {
                    style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
                }
                return style;
            };
            WOW.prototype.scrollHandler = function () {
                return this.scrolled = true;
            };
            WOW.prototype.scrollCallback = function () {
                var box;
                if (this.scrolled) {
                    this.scrolled = false;
                    this.boxes = (function () {
                        var _i, _len, _ref, _results;
                        _ref = this.boxes;
                        _results = [];
                        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                            box = _ref[_i];
                            if (!(box)) {
                                continue;
                            }
                            if (this.isVisible(box)) {
                                this.show(box);
                                continue;
                            }
                            _results.push(box);
                        }
                        return _results;
                    }).call(this);
                    if (!this.boxes.length) {
                        return this.stop();
                    }
                }
            };
            WOW.prototype.offsetTop = function (element) {
                var top;
                top = element.offsetTop;
                while (element = element.offsetParent) {
                    top += element.offsetTop;
                }
                return top;
            };
            WOW.prototype.isVisible = function (box) {
                var bottom, offset, top, viewBottom, viewTop;
                offset = box.getAttribute('data-wow-offset') || this.config.offset;
                viewTop = window.pageYOffset;
                viewBottom = viewTop + this.element.clientHeight - offset;
                top = this.offsetTop(box);
                bottom = top + box.clientHeight;
                return top <= viewBottom && bottom >= viewTop;
            };
            WOW.prototype.util = function () {
                return this._util || (this._util = new Util());
            };
            WOW.prototype.disabled = function () {
                return !this.config.mobile && this.util().isMobile(navigator.userAgent);
            };
            return WOW;
        })();
    }).call(this);
    wow = new WOW({
        animateClass: 'animated'
        , offset: 100
    });
    wow.init();
</script>
</body>

</html>
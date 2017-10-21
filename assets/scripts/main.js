/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.

  var Creatur = {
    addClass: function (el, clname) {
      if(el.className.indexOf(clname) !== -1){
        return; // Classname already added
      }
      el.className += " " + clname;
    },
    removeClass: function(el, clname){
      var index = el.className.indexOf(clname),
          end = index + clname.length,
          className = el.className;

      if(index === -1){
        return; // No need, classname not found
      }
      if(index > 0){
        index--; // Remove space before classname
      }
      el.className = className.substr(0, index) + className.substr(end, className.length);
    },
    toggleClass: function(el, clname){
      if(el.className.indexOf(clname) === -1){
        Creatur.addClass(el, clname);
      }else{
        Creatur.removeClass(el, clname);
      }
    }
  };
  var Skjema = {
    initialiser: function (klasse) {
      if(typeof klasse === 'undefined' || empty(klasse)){
        klasse = ".gform_wrapper form";
      }
      var skjemaer = document.querySelectorAll(klasse);
      if(skjemaer){
        for(var i = 0; i < skjemaer.length; i++){
          // Sett inn reset knapp etter submit knapp
          var inputs = skjemaer[i].querySelectorAll(".gfield input, .gfield textarea");
          for(var j = 0; j < inputs.length; j++){
            inputs[j].addEventListener('focus', Skjema.inputFocus);
            inputs[j].addEventListener('blur', Skjema.inputBlur);
          }
        }
      }
    },
    inputBlur: function(e){
      if(! this.value || this.value.length === 0){ // Skjema er tomt
        Creatur.removeClass(this.parentNode.parentNode, 'gfield--active'); 
      }
    },
    inputFocus: function(e){
      Creatur.addClass(this.parentNode.parentNode, 'gfield--active'); 
    }
  };

  var foredragsModal = {
    title: '#foredragsmodal__tittel',
    content: '#foredragsmodal__innhold',
    image: '#foredragsmodal__bilde',
    target: false,
    setupModal: function (id){
      var data = window.localStorage.getItem(id);
      data = JSON.parse(data);
      foredragsModal.target.className += " fullskjerm--lastet";
      console.log(data);
      document.querySelector(this.title).innerHTML = data.title;
      document.querySelector(this.image).style.backgroundImage = "url("+data.image+")";
      document.querySelector(this.content).innerHTML = data.content;
    },
    storeData: function(rawData){
      var data = JSON.parse(rawData);
      var id = "foredragsholder_" + data.id;
      delete data.id;
      window.localStorage.setItem(id, JSON.stringify(data));
      foredragsModal.setupModal(id);
    },
    fetchData: function(foredragsholder){
        var foredragsholder_id = foredragsholder.substr(foredragsholder.indexOf('_') + 1);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', ajax.ajax_url, true);
        xhr.onreadystatechange = function () {
          var DONE = 4; // readyState 4 means the request is done.
          var OK = 200; // status 200 is a successful return.
          if (xhr.readyState === DONE) {
            if (xhr.status === OK){
              foredragsModal.storeData(xhr.responseText);
            } else {
              console.log('Error: ' + xhr.status); // An error occurred during the request.
            }
          }
        };
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('action=hent_foredragsholder&foredragsholder='+foredragsholder_id);
    },
    aktiverModal: function (e){
      e.preventDefault();
      if(!foredragsModal.target){
        foredragsModal.target = document.querySelector('#foredragsmodal');
      }
      var holder = this.getAttribute("data-target");
      foredragsModal.target.className += " fullskjerm--aktiv";
      if(window.localStorage.getItem(holder)){
        foredragsModal.setupModal(holder);
      }else{
        foredragsModal.fetchData(holder);
      }
    },
    deaktiverModal: function(e){
    e.preventDefault();
      if(!foredragsModal.target){
        foredragsModal.target = document.querySelector('#foredragsmodal');
      }
      foredragsModal.target.className = foredragsModal.target.className.replace(' fullskjerm--aktiv', '');
      foredragsModal.target.className = foredragsModal.target.className.replace(' fullskjerm--lastet', '');
    }
  };
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        var menyknapp = document.querySelector('.navknapp'),
            meny      = document.querySelector('.navmeny');
        menyknapp.addEventListener('click', function () {
          if(meny.className.indexOf('navmeny--aktiv') === -1){
            meny.className += " navmeny--aktiv";
            menyknapp.className += " navknapp--aktiv";
          }else{
            meny.className = "navmeny";
            menyknapp.className = "navknapp";
          }
        });


        var lenker = document.querySelectorAll(".mangefelt a");
        for(var i = 0; i < lenker.length; i++){
          lenker[i].addEventListener('click', foredragsModal.aktiverModal);
        }
        var knapper = document.querySelectorAll(".fullskjerm__lukk");
        if(knapper){
          for(var j = 0; j < knapper.length; j++){
            knapper[j].addEventListener("click", foredragsModal.deaktiverModal);
          }
        }


      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
        Skjema.initialiser(); // Sett opp blur/fokus klasser
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

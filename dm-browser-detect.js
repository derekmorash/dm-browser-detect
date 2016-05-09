var dmDetectBrowser = (function() {
  var userBrowser = navigator.userAgent.toLowerCase();
  var hideEl = document.querySelectorAll('.dm-browser-detect-hide');
  var showEl = document.querySelectorAll('.dm-browser-detect-show');

  var hideAll = function() {
    //loop through each element
    [].forEach.call(hideEl, function(el) {
      // get the selected browsers in the data attribute
      var selectedBrowsers = el.dataset.dmDetectBrowsers
        .toLowerCase().split(" ");

      //loop through each slected browser
      selectedBrowsers.forEach(function(thisBrowser) {

        // if the browser is one of the elements attributes
        if(userBrowser.indexOf(thisBrowser) > -1 && thisBrowser != 'safari' && thisBrowser != 'ios') {
            el.className += ' dm-detect-hidden';
        } else if(thisBrowser === 'safari' &&
        userBrowser.indexOf(thisBrowser) &&
        userBrowser.indexOf('ipad') < 0 &&
        userBrowser.indexOf('ipod') < 0 &&
        userBrowser.indexOf('iphone') < 0) {
          //if the slected browser is safari, but the current browser isnt a mobile ios device
          el.className += ' dm-detect-hidden';
        } else if(thisBrowser === 'ios' &&
        userBrowser.indexOf('ipad') > -1 ||
        userBrowser.indexOf('ipod') > -1 ||
        userBrowser.indexOf('iphone') > -1 &&
        userBrowser.indexOf(!window.MSStream) > -1) {
          //if the selected browser is ios
          el.className += ' dm-detect-hidden';
        }

      }); //foreach selected browser
    }); //foreach el
  }; //hideAll

  var showAll = function() {
    //loop through each element
    [].forEach.call(showEl, function(el) {
      //set the element to hidden by default
      el.className += ' dm-detect-hidden';
      // get the selected browsers in the data attribute
      var selectedBrowsers = el.dataset.dmDetectBrowsers
        .toLowerCase().split(" ");

      //loop through each slected browser
      selectedBrowsers.forEach(function(thisBrowser) {
        // if the browser is one of the elements attributes
        if(userBrowser.indexOf(thisBrowser) > -1 && thisBrowser != 'safari' && thisBrowser != 'ios') {
            el.className = el.className.replace('dm-detect-hidden', '');
        } else if(thisBrowser === 'safari' &&
        userBrowser.indexOf(thisBrowser) &&
        userBrowser.indexOf('ipad') < 0 &&
        userBrowser.indexOf('ipod') < 0 &&
        userBrowser.indexOf('iphone')< 0 ) {
          //if the slected browser is safari, but the current browser isnt a mobile ios device
          el.className = el.className.replace('dm-detect-hidden', '');
        } else if(thisBrowser === 'ios' &&
        userBrowser.indexOf('ipad') > -1 ||
        userBrowser.indexOf('ipod') > -1 ||
        userBrowser.indexOf('iphone') > -1 &&
        userBrowser.indexOf(!window.MSStream) > -1) {
          //if the selected browser is ios
          el.className = el.className.replace('dm-detect-hidden', '');
        }
      }); //foreach selected browser
    }); //foreach el
  }; //hideAll

  return {
    run: function() {
      if(hideEl.length > 0) {
        hideAll();
      }
      if(showEl.length > 0) {
        showAll();
      }
    }
  };
})();

dmDetectBrowser.run();

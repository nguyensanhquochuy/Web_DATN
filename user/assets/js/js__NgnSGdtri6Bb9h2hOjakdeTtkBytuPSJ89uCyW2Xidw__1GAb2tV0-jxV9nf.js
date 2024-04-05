Drupal.locale = { 'strings': {"":{"Please wait...":"Xin vui l\u00f2ng ch\u1edd trong gi\u00e2y l\u00e1t...","Close":"\u0110\u00f3ng","All":"T\u1ea5t c\u1ea3","Edit":"S\u1eeda","Jan":"Th1"}} };
;/*})'"*/
;/*})'"*/
/**
 * @file
 *
 * CTools flexible AJAX responder object.
 */

(function ($) {
  Drupal.CTools = Drupal.CTools || {};
  Drupal.CTools.AJAX = Drupal.CTools.AJAX || {};
  /**
   * Grab the response from the server and store it.
   *
   * @todo restore the warm cache functionality
   */
  Drupal.CTools.AJAX.warmCache = function () {
    // Store this expression for a minor speed improvement.
    $this = $(this);
    var old_url = $this.attr('href');
    // If we are currently fetching, or if we have fetched this already which is
    // ideal for things like pagers, where the previous page might already have
    // been seen in the cache.
    if ($this.hasClass('ctools-fetching') || Drupal.CTools.AJAX.commandCache[old_url]) {
      return false;
    }

    // Grab all the links that match this url and add the fetching class.
    // This allows the caching system to grab each url once and only once
    // instead of grabbing the url once per <a>.
    var $objects = $('a[href="' + old_url + '"]')
    $objects.addClass('ctools-fetching');
    try {
      url = old_url.replace(/\/nojs(\/|$)/g, '/ajax$1');
      $.ajax({
        type: "POST",
        url: url,
        data: { 'js': 1, 'ctools_ajax': 1},
        global: true,
        success: function (data) {
          Drupal.CTools.AJAX.commandCache[old_url] = data;
          $objects.addClass('ctools-cache-warmed').trigger('ctools-cache-warm', [data]);
        },
        complete: function() {
          $objects.removeClass('ctools-fetching');
        },
        dataType: 'json'
      });
    }
    catch (err) {
      $objects.removeClass('ctools-fetching');
      return false;
    }

    return false;
  };

  /**
   * Cachable click handler to fetch the commands out of the cache or from url.
   */
  Drupal.CTools.AJAX.clickAJAXCacheLink = function () {
    $this = $(this);
    if ($this.hasClass('ctools-fetching')) {
      $this.bind('ctools-cache-warm', function (event, data) {
        Drupal.CTools.AJAX.respond(data);
      });
      return false;
    }
    else {
      if ($this.hasClass('ctools-cache-warmed') && Drupal.CTools.AJAX.commandCache[$this.attr('href')]) {
        Drupal.CTools.AJAX.respond(Drupal.CTools.AJAX.commandCache[$this.attr('href')]);
        return false;
      }
      else {
        return Drupal.CTools.AJAX.clickAJAXLink.apply(this);
      }
    }
  };

  /**
   * Find a URL for an AJAX button.
   *
   * The URL for this gadget will be composed of the values of items by
   * taking the ID of this item and adding -url and looking for that
   * class. They need to be in the form in order since we will
   * concat them all together using '/'.
   */
  Drupal.CTools.AJAX.findURL = function(item) {
    var url = '';
    var url_class = '.' + $(item).attr('id') + '-url';
    $(url_class).each(
      function() {
        var $this = $(this);
        if (url && $this.val()) {
          url += '/';
        }
        url += $this.val();
      });
    return url;
  };

  // Hide these in a ready to ensure that Drupal.ajax is set up first.
  $(function() {
    Drupal.ajax.prototype.commands.attr = function(ajax, data, status) {
      $(data.selector).attr(data.name, data.value);
    };


    Drupal.ajax.prototype.commands.redirect = function(ajax, data, status) {
      if (data.delay > 0) {
        setTimeout(function () {
          location.href = data.url;
        }, data.delay);
      }
      else {
        location.href = data.url;
      }
    };

    Drupal.ajax.prototype.commands.reload = function(ajax, data, status) {
      location.reload();
    };

    Drupal.ajax.prototype.commands.submit = function(ajax, data, status) {
      $(data.selector).submit();
    }
  });
})(jQuery);

;/*})'"*/
;/*})'"*/
$ = jQuery ;
function get_topic_subject(subject, topic_selected){
    $.ajax({
        url:"/ajax/get-taxonomy-topic",
        method:"POST",
        data:{subject:subject},
        dataType:"json",
        success:function(data)
        { 
          $('#edit-topic').html(data); 
          $('#edit-topic').val(topic_selected);
      
        }
      });
}

$( document ).ready(function() {
//
//	$(".link-login").click(function(){
//		$("#form-login-tab1 a").trigger('click');
//    console.log('test');
//		$("#login").addClass("active in");
//		if($( "#form-login-tab2" ).hasClass( "active" )){
//			$("#form-login-tab2").removeClass("active");
//			$("#register").removeClass("active in");
//		}
//
//	});

  
  //
//  $(".teacher-register").click(function(){
//		$("#form-login-tab2").addClass("active");
//		$("#register").addClass("active in");
//    $("#edit-field-user-type-und-1").checked = true;
//		if($( "#form-login-tab1" ).hasClass( "active" )){
//			$("#form-login-tab1").removeClass("active");
//			$("#login").removeClass("active in");
//		}
//
//	});
	

});

function show_required_label_email() {
  var $value = jQuery('#blacasa-account-register .form-radios input[name="type_acc"]:checked').val();
  //console.log($value);
   if ($value == 1) {
     jQuery('#blacasa-account-register #edit-email').attr('placeholder','Nhập Email * (bắt buộc)');
   }
   else{
     jQuery('#blacasa-account-register #edit-email').attr('placeholder','Nhập Email (tùy chọn)');
   }
}

(function ($) {
  Drupal.behaviors.blacasa_account = {
    attach: function (context, settings) {
       //Login, Register  
       show_required_label_email();
           
       $(".link-login").click(function(){
      		$("#form-login-tab1 a").trigger('click');
      	});
        
   	  $(".link-register").click(function(){
      		$("#form-login-tab2 a").trigger('click');
      		if($(this).hasClass( "register-teacher" )){
      			$("#blacasa-register-form #edit-type-acc-1").prop("checked", true);
      		}
      	});
        //
      $('#blacasa-account-register .form-radios input').click(function(){
        show_required_label_email(); 
      });
     //
      $("#blacasa-account-login #password_login_form").keypress(function (e) {
        if (e.which == 13) {
          e.preventDefault();
          $("#blacasa-account-login .ajax-processed").mousedown();
        }
      });
    
    //
      if ($('#edit-subject').length > 0) {
        var subject = $('#edit-subject').val();
        var topic_selected = $('#edit-topic').val();
        get_topic_subject(subject, topic_selected);
        
        $('#edit-subject').change(function() {
          var subject = $(this).val();
          var topic_selected = $('#edit-topic').val();
          get_topic_subject(subject, topic_selected); 
        });
      }
      
    
    }//end attach
  };
}(jQuery));


;/*})'"*/
;/*})'"*/
!function(a){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=a();else if("function"==typeof define&&define.amd)define([],a);else{var b;b="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,b.ProgressBar=a()}}(function(){var a;return function a(b,c,d){function e(g,h){if(!c[g]){if(!b[g]){var i="function"==typeof require&&require;if(!h&&i)return i(g,!0);if(f)return f(g,!0);var j=new Error("Cannot find module '"+g+"'");throw j.code="MODULE_NOT_FOUND",j}var k=c[g]={exports:{}};b[g][0].call(k.exports,function(a){var c=b[g][1][a];return e(c?c:a)},k,k.exports,a,b,c,d)}return c[g].exports}for(var f="function"==typeof require&&require,g=0;g<d.length;g++)e(d[g]);return e}({1:[function(b,c,d){(function(){var b=this||Function("return this")(),e=function(){"use strict";function e(){}function f(a,b){var c;for(c in a)Object.hasOwnProperty.call(a,c)&&b(c)}function g(a,b){return f(b,function(c){a[c]=b[c]}),a}function h(a,b){f(b,function(c){"undefined"==typeof a[c]&&(a[c]=b[c])})}function i(a,b,c,d,e,f,g){var h,i,k,l=a<f?0:(a-f)/e;for(h in b)b.hasOwnProperty(h)&&(i=g[h],k="function"==typeof i?i:o[i],b[h]=j(c[h],d[h],k,l));return b}function j(a,b,c,d){return a+(b-a)*c(d)}function k(a,b){var c=n.prototype.filter,d=a._filterArgs;f(c,function(e){"undefined"!=typeof c[e][b]&&c[e][b].apply(a,d)})}function l(a,b,c,d,e,f,g,h,j,l,m){v=b+c+d,w=Math.min(m||u(),v),x=w>=v,y=d-(v-w),a.isPlaying()&&(x?(j(g,a._attachment,y),a.stop(!0)):(a._scheduleId=l(a._timeoutHandler,s),k(a,"beforeTween"),w<b+c?i(1,e,f,g,1,1,h):i(w,e,f,g,d,b+c,h),k(a,"afterTween"),j(e,a._attachment,y)))}function m(a,b){var c={},d=typeof b;return"string"===d||"function"===d?f(a,function(a){c[a]=b}):f(a,function(a){c[a]||(c[a]=b[a]||q)}),c}function n(a,b){this._currentState=a||{},this._configured=!1,this._scheduleFunction=p,"undefined"!=typeof b&&this.setConfig(b)}var o,p,q="linear",r=500,s=1e3/60,t=Date.now?Date.now:function(){return+new Date},u="undefined"!=typeof SHIFTY_DEBUG_NOW?SHIFTY_DEBUG_NOW:t;p="undefined"!=typeof window?window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||window.mozCancelRequestAnimationFrame&&window.mozRequestAnimationFrame||setTimeout:setTimeout;var v,w,x,y;return n.prototype.tween=function(a){return this._isTweening?this:(void 0===a&&this._configured||this.setConfig(a),this._timestamp=u(),this._start(this.get(),this._attachment),this.resume())},n.prototype.setConfig=function(a){a=a||{},this._configured=!0,this._attachment=a.attachment,this._pausedAtTime=null,this._scheduleId=null,this._delay=a.delay||0,this._start=a.start||e,this._step=a.step||e,this._finish=a.finish||e,this._duration=a.duration||r,this._currentState=g({},a.from||this.get()),this._originalState=this.get(),this._targetState=g({},a.to||this.get());var b=this;this._timeoutHandler=function(){l(b,b._timestamp,b._delay,b._duration,b._currentState,b._originalState,b._targetState,b._easing,b._step,b._scheduleFunction)};var c=this._currentState,d=this._targetState;return h(d,c),this._easing=m(c,a.easing||q),this._filterArgs=[c,this._originalState,d,this._easing],k(this,"tweenCreated"),this},n.prototype.get=function(){return g({},this._currentState)},n.prototype.set=function(a){this._currentState=a},n.prototype.pause=function(){return this._pausedAtTime=u(),this._isPaused=!0,this},n.prototype.resume=function(){return this._isPaused&&(this._timestamp+=u()-this._pausedAtTime),this._isPaused=!1,this._isTweening=!0,this._timeoutHandler(),this},n.prototype.seek=function(a){a=Math.max(a,0);var b=u();return this._timestamp+a===0?this:(this._timestamp=b-a,this.isPlaying()||(this._isTweening=!0,this._isPaused=!1,l(this,this._timestamp,this._delay,this._duration,this._currentState,this._originalState,this._targetState,this._easing,this._step,this._scheduleFunction,b),this.pause()),this)},n.prototype.stop=function(a){return this._isTweening=!1,this._isPaused=!1,this._timeoutHandler=e,(b.cancelAnimationFrame||b.webkitCancelAnimationFrame||b.oCancelAnimationFrame||b.msCancelAnimationFrame||b.mozCancelRequestAnimationFrame||b.clearTimeout)(this._scheduleId),a&&(k(this,"beforeTween"),i(1,this._currentState,this._originalState,this._targetState,1,0,this._easing),k(this,"afterTween"),k(this,"afterTweenEnd"),this._finish.call(this,this._currentState,this._attachment)),this},n.prototype.isPlaying=function(){return this._isTweening&&!this._isPaused},n.prototype.setScheduleFunction=function(a){this._scheduleFunction=a},n.prototype.dispose=function(){var a;for(a in this)this.hasOwnProperty(a)&&delete this[a]},n.prototype.filter={},n.prototype.formula={linear:function(a){return a}},o=n.prototype.formula,g(n,{now:u,each:f,tweenProps:i,tweenProp:j,applyFilter:k,shallowCopy:g,defaults:h,composeEasingObject:m}),"function"==typeof SHIFTY_DEBUG_NOW&&(b.timeoutHandler=l),"object"==typeof d?c.exports=n:"function"==typeof a&&a.amd?a(function(){return n}):"undefined"==typeof b.Tweenable&&(b.Tweenable=n),n}();!function(){e.shallowCopy(e.prototype.formula,{easeInQuad:function(a){return Math.pow(a,2)},easeOutQuad:function(a){return-(Math.pow(a-1,2)-1)},easeInOutQuad:function(a){return(a/=.5)<1?.5*Math.pow(a,2):-.5*((a-=2)*a-2)},easeInCubic:function(a){return Math.pow(a,3)},easeOutCubic:function(a){return Math.pow(a-1,3)+1},easeInOutCubic:function(a){return(a/=.5)<1?.5*Math.pow(a,3):.5*(Math.pow(a-2,3)+2)},easeInQuart:function(a){return Math.pow(a,4)},easeOutQuart:function(a){return-(Math.pow(a-1,4)-1)},easeInOutQuart:function(a){return(a/=.5)<1?.5*Math.pow(a,4):-.5*((a-=2)*Math.pow(a,3)-2)},easeInQuint:function(a){return Math.pow(a,5)},easeOutQuint:function(a){return Math.pow(a-1,5)+1},easeInOutQuint:function(a){return(a/=.5)<1?.5*Math.pow(a,5):.5*(Math.pow(a-2,5)+2)},easeInSine:function(a){return-Math.cos(a*(Math.PI/2))+1},easeOutSine:function(a){return Math.sin(a*(Math.PI/2))},easeInOutSine:function(a){return-.5*(Math.cos(Math.PI*a)-1)},easeInExpo:function(a){return 0===a?0:Math.pow(2,10*(a-1))},easeOutExpo:function(a){return 1===a?1:-Math.pow(2,-10*a)+1},easeInOutExpo:function(a){return 0===a?0:1===a?1:(a/=.5)<1?.5*Math.pow(2,10*(a-1)):.5*(-Math.pow(2,-10*--a)+2)},easeInCirc:function(a){return-(Math.sqrt(1-a*a)-1)},easeOutCirc:function(a){return Math.sqrt(1-Math.pow(a-1,2))},easeInOutCirc:function(a){return(a/=.5)<1?-.5*(Math.sqrt(1-a*a)-1):.5*(Math.sqrt(1-(a-=2)*a)+1)},easeOutBounce:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},easeInBack:function(a){var b=1.70158;return a*a*((b+1)*a-b)},easeOutBack:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},easeInOutBack:function(a){var b=1.70158;return(a/=.5)<1?.5*(a*a*(((b*=1.525)+1)*a-b)):.5*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},elastic:function(a){return-1*Math.pow(4,-8*a)*Math.sin((6*a-1)*(2*Math.PI)/2)+1},swingFromTo:function(a){var b=1.70158;return(a/=.5)<1?.5*(a*a*(((b*=1.525)+1)*a-b)):.5*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},swingFrom:function(a){var b=1.70158;return a*a*((b+1)*a-b)},swingTo:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},bounce:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},bouncePast:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?2-(7.5625*(a-=1.5/2.75)*a+.75):a<2.5/2.75?2-(7.5625*(a-=2.25/2.75)*a+.9375):2-(7.5625*(a-=2.625/2.75)*a+.984375)},easeFromTo:function(a){return(a/=.5)<1?.5*Math.pow(a,4):-.5*((a-=2)*Math.pow(a,3)-2)},easeFrom:function(a){return Math.pow(a,4)},easeTo:function(a){return Math.pow(a,.25)}})}(),function(){function a(a,b,c,d,e,f){function g(a){return((n*a+o)*a+p)*a}function h(a){return((q*a+r)*a+s)*a}function i(a){return(3*n*a+2*o)*a+p}function j(a){return 1/(200*a)}function k(a,b){return h(m(a,b))}function l(a){return a>=0?a:0-a}function m(a,b){var c,d,e,f,h,j;for(e=a,j=0;j<8;j++){if(f=g(e)-a,l(f)<b)return e;if(h=i(e),l(h)<1e-6)break;e-=f/h}if(c=0,d=1,e=a,e<c)return c;if(e>d)return d;for(;c<d;){if(f=g(e),l(f-a)<b)return e;a>f?c=e:d=e,e=.5*(d-c)+c}return e}var n=0,o=0,p=0,q=0,r=0,s=0;return p=3*b,o=3*(d-b)-p,n=1-p-o,s=3*c,r=3*(e-c)-s,q=1-s-r,k(a,j(f))}function b(b,c,d,e){return function(f){return a(f,b,c,d,e,1)}}e.setBezierFunction=function(a,c,d,f,g){var h=b(c,d,f,g);return h.displayName=a,h.x1=c,h.y1=d,h.x2=f,h.y2=g,e.prototype.formula[a]=h},e.unsetBezierFunction=function(a){delete e.prototype.formula[a]}}(),function(){function a(a,b,c,d,f,g){return e.tweenProps(d,b,a,c,1,g,f)}var b=new e;b._filterArgs=[],e.interpolate=function(c,d,f,g,h){var i=e.shallowCopy({},c),j=h||0,k=e.composeEasingObject(c,g||"linear");b.set({});var l=b._filterArgs;l.length=0,l[0]=i,l[1]=c,l[2]=d,l[3]=k,e.applyFilter(b,"tweenCreated"),e.applyFilter(b,"beforeTween");var m=a(c,i,d,f,k,j);return e.applyFilter(b,"afterTween"),m}}(),function(a){function b(a,b){var c,d=[],e=a.length;for(c=0;c<e;c++)d.push("_"+b+"_"+c);return d}function c(a){var b=a.match(v);return b?(1===b.length||a.charAt(0).match(u))&&b.unshift(""):b=["",""],b.join(A)}function d(b){a.each(b,function(a){var c=b[a];"string"==typeof c&&c.match(z)&&(b[a]=e(c))})}function e(a){return i(z,a,f)}function f(a){var b=g(a);return"rgb("+b[0]+","+b[1]+","+b[2]+")"}function g(a){return a=a.replace(/#/,""),3===a.length&&(a=a.split(""),a=a[0]+a[0]+a[1]+a[1]+a[2]+a[2]),B[0]=h(a.substr(0,2)),B[1]=h(a.substr(2,2)),B[2]=h(a.substr(4,2)),B}function h(a){return parseInt(a,16)}function i(a,b,c){var d=b.match(a),e=b.replace(a,A);if(d)for(var f,g=d.length,h=0;h<g;h++)f=d.shift(),e=e.replace(A,c(f));return e}function j(a){return i(x,a,k)}function k(a){for(var b=a.match(w),c=b.length,d=a.match(y)[0],e=0;e<c;e++)d+=parseInt(b[e],10)+",";return d=d.slice(0,-1)+")"}function l(d){var e={};return a.each(d,function(a){var f=d[a];if("string"==typeof f){var g=r(f);e[a]={formatString:c(f),chunkNames:b(g,a)}}}),e}function m(b,c){a.each(c,function(a){for(var d=b[a],e=r(d),f=e.length,g=0;g<f;g++)b[c[a].chunkNames[g]]=+e[g];delete b[a]})}function n(b,c){a.each(c,function(a){var d=b[a],e=o(b,c[a].chunkNames),f=p(e,c[a].chunkNames);d=q(c[a].formatString,f),b[a]=j(d)})}function o(a,b){for(var c,d={},e=b.length,f=0;f<e;f++)c=b[f],d[c]=a[c],delete a[c];return d}function p(a,b){C.length=0;for(var c=b.length,d=0;d<c;d++)C.push(a[b[d]]);return C}function q(a,b){for(var c=a,d=b.length,e=0;e<d;e++)c=c.replace(A,+b[e].toFixed(4));return c}function r(a){return a.match(w)}function s(b,c){a.each(c,function(a){var d,e=c[a],f=e.chunkNames,g=f.length,h=b[a];if("string"==typeof h){var i=h.split(" "),j=i[i.length-1];for(d=0;d<g;d++)b[f[d]]=i[d]||j}else for(d=0;d<g;d++)b[f[d]]=h;delete b[a]})}function t(b,c){a.each(c,function(a){var d=c[a],e=d.chunkNames,f=e.length,g=b[e[0]],h=typeof g;if("string"===h){for(var i="",j=0;j<f;j++)i+=" "+b[e[j]],delete b[e[j]];b[a]=i.substr(1)}else b[a]=g})}var u=/(\d|\-|\.)/,v=/([^\-0-9\.]+)/g,w=/[0-9.\-]+/g,x=new RegExp("rgb\\("+w.source+/,\s*/.source+w.source+/,\s*/.source+w.source+"\\)","g"),y=/^.*\(/,z=/#([0-9]|[a-f]){3,6}/gi,A="VAL",B=[],C=[];a.prototype.filter.token={tweenCreated:function(a,b,c,e){d(a),d(b),d(c),this._tokenData=l(a)},beforeTween:function(a,b,c,d){s(d,this._tokenData),m(a,this._tokenData),m(b,this._tokenData),m(c,this._tokenData)},afterTween:function(a,b,c,d){n(a,this._tokenData),n(b,this._tokenData),n(c,this._tokenData),t(d,this._tokenData)}}}(e)}).call(null)},{}],2:[function(a,b,c){var d=a("./shape"),e=a("./utils"),f=function(a,b){this._pathTemplate="M 50,50 m 0,-{radius} a {radius},{radius} 0 1 1 0,{2radius} a {radius},{radius} 0 1 1 0,-{2radius}",this.containerAspectRatio=1,d.apply(this,arguments)};f.prototype=new d,f.prototype.constructor=f,f.prototype._pathString=function(a){var b=a.strokeWidth;a.trailWidth&&a.trailWidth>a.strokeWidth&&(b=a.trailWidth);var c=50-b/2;return e.render(this._pathTemplate,{radius:c,"2radius":2*c})},f.prototype._trailString=function(a){return this._pathString(a)},b.exports=f},{"./shape":7,"./utils":9}],3:[function(a,b,c){var d=a("./shape"),e=a("./utils"),f=function(a,b){this._pathTemplate="M 0,{center} L 100,{center}",d.apply(this,arguments)};f.prototype=new d,f.prototype.constructor=f,f.prototype._initializeSvg=function(a,b){a.setAttribute("viewBox","0 0 100 "+b.strokeWidth),a.setAttribute("preserveAspectRatio","none")},f.prototype._pathString=function(a){return e.render(this._pathTemplate,{center:a.strokeWidth/2})},f.prototype._trailString=function(a){return this._pathString(a)},b.exports=f},{"./shape":7,"./utils":9}],4:[function(a,b,c){b.exports={Line:a("./line"),Circle:a("./circle"),SemiCircle:a("./semicircle"),Square:a("./square"),Path:a("./path"),Shape:a("./shape"),utils:a("./utils")}},{"./circle":2,"./line":3,"./path":5,"./semicircle":6,"./shape":7,"./square":8,"./utils":9}],5:[function(a,b,c){var d=a("shifty"),e=a("./utils"),f={easeIn:"easeInCubic",easeOut:"easeOutCubic",easeInOut:"easeInOutCubic"},g=function a(b,c){if(!(this instanceof a))throw new Error("Constructor was called without new keyword");c=e.extend({duration:800,easing:"linear",from:{},to:{},step:function(){}},c);var d;d=e.isString(b)?document.querySelector(b):b,this.path=d,this._opts=c,this._tweenable=null;var f=this.path.getTotalLength();this.path.style.strokeDasharray=f+" "+f,this.set(0)};g.prototype.value=function(){var a=this._getComputedDashOffset(),b=this.path.getTotalLength(),c=1-a/b;return parseFloat(c.toFixed(6),10)},g.prototype.set=function(a){this.stop(),this.path.style.strokeDashoffset=this._progressToOffset(a);var b=this._opts.step;if(e.isFunction(b)){var c=this._easing(this._opts.easing),d=this._calculateTo(a,c),f=this._opts.shape||this;b(d,f,this._opts.attachment)}},g.prototype.stop=function(){this._stopTween(),this.path.style.strokeDashoffset=this._getComputedDashOffset()},g.prototype.animate=function(a,b,c){b=b||{},e.isFunction(b)&&(c=b,b={});var f=e.extend({},b),g=e.extend({},this._opts);b=e.extend(g,b);var h=this._easing(b.easing),i=this._resolveFromAndTo(a,h,f);this.stop(),this.path.getBoundingClientRect();var j=this._getComputedDashOffset(),k=this._progressToOffset(a),l=this;this._tweenable=new d,this._tweenable.tween({from:e.extend({offset:j},i.from),to:e.extend({offset:k},i.to),duration:b.duration,easing:h,step:function(a){l.path.style.strokeDashoffset=a.offset;var c=b.shape||l;b.step(a,c,b.attachment)},finish:function(a){e.isFunction(c)&&c()}})},g.prototype._getComputedDashOffset=function(){var a=window.getComputedStyle(this.path,null);return parseFloat(a.getPropertyValue("stroke-dashoffset"),10)},g.prototype._progressToOffset=function(a){var b=this.path.getTotalLength();return b-a*b},g.prototype._resolveFromAndTo=function(a,b,c){return c.from&&c.to?{from:c.from,to:c.to}:{from:this._calculateFrom(b),to:this._calculateTo(a,b)}},g.prototype._calculateFrom=function(a){return d.interpolate(this._opts.from,this._opts.to,this.value(),a)},g.prototype._calculateTo=function(a,b){return d.interpolate(this._opts.from,this._opts.to,a,b)},g.prototype._stopTween=function(){null!==this._tweenable&&(this._tweenable.stop(),this._tweenable=null)},g.prototype._easing=function(a){return f.hasOwnProperty(a)?f[a]:a},b.exports=g},{"./utils":9,shifty:1}],6:[function(a,b,c){var d=a("./shape"),e=a("./circle"),f=a("./utils"),g=function(a,b){this._pathTemplate="M 50,50 m -{radius},0 a {radius},{radius} 0 1 1 {2radius},0",this.containerAspectRatio=2,d.apply(this,arguments)};g.prototype=new d,g.prototype.constructor=g,g.prototype._initializeSvg=function(a,b){a.setAttribute("viewBox","0 0 100 50")},g.prototype._initializeTextContainer=function(a,b,c){a.text.style&&(c.style.top="auto",c.style.bottom="0",a.text.alignToBottom?f.setStyle(c,"transform","translate(-50%, 0)"):f.setStyle(c,"transform","translate(-50%, 50%)"))},g.prototype._pathString=e.prototype._pathString,g.prototype._trailString=e.prototype._trailString,b.exports=g},{"./circle":2,"./shape":7,"./utils":9}],7:[function(a,b,c){var d=a("./path"),e=a("./utils"),f="Object is destroyed",g=function a(b,c){if(!(this instanceof a))throw new Error("Constructor was called without new keyword");if(0!==arguments.length){this._opts=e.extend({color:"#555",strokeWidth:1,trailColor:null,trailWidth:null,fill:null,text:{style:{color:null,position:"absolute",left:"50%",top:"50%",padding:0,margin:0,transform:{prefix:!0,value:"translate(-50%, -50%)"}},autoStyleContainer:!0,alignToBottom:!0,value:null,className:"progressbar-text"},svgStyle:{display:"block",width:"100%"},warnings:!1},c,!0),e.isObject(c)&&void 0!==c.svgStyle&&(this._opts.svgStyle=c.svgStyle),e.isObject(c)&&e.isObject(c.text)&&void 0!==c.text.style&&(this._opts.text.style=c.text.style);var f,g=this._createSvgView(this._opts);if(f=e.isString(b)?document.querySelector(b):b,!f)throw new Error("Container does not exist: "+b);this._container=f,this._container.appendChild(g.svg),this._opts.warnings&&this._warnContainerAspectRatio(this._container),this._opts.svgStyle&&e.setStyles(g.svg,this._opts.svgStyle),this.svg=g.svg,this.path=g.path,this.trail=g.trail,this.text=null;var h=e.extend({attachment:void 0,shape:this},this._opts);this._progressPath=new d(g.path,h),e.isObject(this._opts.text)&&null!==this._opts.text.value&&this.setText(this._opts.text.value)}};g.prototype.animate=function(a,b,c){if(null===this._progressPath)throw new Error(f);this._progressPath.animate(a,b,c)},g.prototype.stop=function(){if(null===this._progressPath)throw new Error(f);void 0!==this._progressPath&&this._progressPath.stop()},g.prototype.destroy=function(){if(null===this._progressPath)throw new Error(f);this.stop(),this.svg.parentNode.removeChild(this.svg),this.svg=null,this.path=null,this.trail=null,this._progressPath=null,null!==this.text&&(this.text.parentNode.removeChild(this.text),this.text=null)},g.prototype.set=function(a){if(null===this._progressPath)throw new Error(f);this._progressPath.set(a)},g.prototype.value=function(){if(null===this._progressPath)throw new Error(f);return void 0===this._progressPath?0:this._progressPath.value()},g.prototype.setText=function(a){if(null===this._progressPath)throw new Error(f);null===this.text&&(this.text=this._createTextContainer(this._opts,this._container),this._container.appendChild(this.text)),e.isObject(a)?(e.removeChildren(this.text),this.text.appendChild(a)):this.text.innerHTML=a},g.prototype._createSvgView=function(a){var b=document.createElementNS("http://www.w3.org/2000/svg","svg");this._initializeSvg(b,a);var c=null;(a.trailColor||a.trailWidth)&&(c=this._createTrail(a),b.appendChild(c));var d=this._createPath(a);return b.appendChild(d),{svg:b,path:d,trail:c}},g.prototype._initializeSvg=function(a,b){a.setAttribute("viewBox","0 0 100 100")},g.prototype._createPath=function(a){var b=this._pathString(a);return this._createPathElement(b,a)},g.prototype._createTrail=function(a){var b=this._trailString(a),c=e.extend({},a);return c.trailColor||(c.trailColor="#eee"),c.trailWidth||(c.trailWidth=c.strokeWidth),c.color=c.trailColor,c.strokeWidth=c.trailWidth,c.fill=null,this._createPathElement(b,c)},g.prototype._createPathElement=function(a,b){var c=document.createElementNS("http://www.w3.org/2000/svg","path");return c.setAttribute("d",a),c.setAttribute("stroke",b.color),c.setAttribute("stroke-width",b.strokeWidth),b.fill?c.setAttribute("fill",b.fill):c.setAttribute("fill-opacity","0"),c},g.prototype._createTextContainer=function(a,b){var c=document.createElement("div");c.className=a.text.className;var d=a.text.style;return d&&(a.text.autoStyleContainer&&(b.style.position="relative"),e.setStyles(c,d),d.color||(c.style.color=a.color)),this._initializeTextContainer(a,b,c),c},g.prototype._initializeTextContainer=function(a,b,c){},g.prototype._pathString=function(a){throw new Error("Override this function for each progress bar")},g.prototype._trailString=function(a){throw new Error("Override this function for each progress bar")},g.prototype._warnContainerAspectRatio=function(a){if(this.containerAspectRatio){var b=window.getComputedStyle(a,null),c=parseFloat(b.getPropertyValue("width"),10),d=parseFloat(b.getPropertyValue("height"),10);e.floatEquals(this.containerAspectRatio,c/d)||(console.warn("Incorrect aspect ratio of container","#"+a.id,"detected:",b.getPropertyValue("width")+"(width)","/",b.getPropertyValue("height")+"(height)","=",c/d),console.warn("Aspect ratio of should be",this.containerAspectRatio))}},b.exports=g},{"./path":5,"./utils":9}],8:[function(a,b,c){var d=a("./shape"),e=a("./utils"),f=function(a,b){this._pathTemplate="M 0,{halfOfStrokeWidth} L {width},{halfOfStrokeWidth} L {width},{width} L {halfOfStrokeWidth},{width} L {halfOfStrokeWidth},{strokeWidth}",this._trailTemplate="M {startMargin},{halfOfStrokeWidth} L {width},{halfOfStrokeWidth} L {width},{width} L {halfOfStrokeWidth},{width} L {halfOfStrokeWidth},{halfOfStrokeWidth}",d.apply(this,arguments)};f.prototype=new d,f.prototype.constructor=f,f.prototype._pathString=function(a){var b=100-a.strokeWidth/2;return e.render(this._pathTemplate,{width:b,strokeWidth:a.strokeWidth,halfOfStrokeWidth:a.strokeWidth/2})},f.prototype._trailString=function(a){var b=100-a.strokeWidth/2;return e.render(this._trailTemplate,{width:b,strokeWidth:a.strokeWidth,halfOfStrokeWidth:a.strokeWidth/2,startMargin:a.strokeWidth/2-a.trailWidth/2})},b.exports=f},{"./shape":7,"./utils":9}],9:[function(a,b,c){function d(a,b,c){a=a||{},b=b||{},c=c||!1;for(var e in b)if(b.hasOwnProperty(e)){var f=a[e],g=b[e];c&&l(f)&&l(g)?a[e]=d(f,g,c):a[e]=g}return a}function e(a,b){var c=a;for(var d in b)if(b.hasOwnProperty(d)){var e=b[d],f="\\{"+d+"\\}",g=new RegExp(f,"g");c=c.replace(g,e)}return c}function f(a,b,c){for(var d=a.style,e=0;e<p.length;++e){var f=p[e];d[f+h(b)]=c}d[b]=c}function g(a,b){m(b,function(b,c){null!==b&&void 0!==b&&(l(b)&&b.prefix===!0?f(a,c,b.value):a.style[c]=b)})}function h(a){return a.charAt(0).toUpperCase()+a.slice(1)}function i(a){return"string"==typeof a||a instanceof String}function j(a){return"function"==typeof a}function k(a){return"[object Array]"===Object.prototype.toString.call(a)}function l(a){if(k(a))return!1;var b=typeof a;return"object"===b&&!!a}function m(a,b){for(var c in a)if(a.hasOwnProperty(c)){var d=a[c];b(d,c)}}function n(a,b){return Math.abs(a-b)<q}function o(a){for(;a.firstChild;)a.removeChild(a.firstChild)}var p="Webkit Moz O ms".split(" "),q=.001;b.exports={extend:d,render:e,setStyle:f,setStyles:g,capitalize:h,isString:i,isFunction:j,isObject:l,forEachObject:m,floatEquals:n,removeChildren:o}},{}]},{},[4])(4)});

;/*})'"*/
;/*})'"*/
(function ($) {
  Drupal.behaviors.blacasa_feedback = {
    attach: function (context, settings) {
      if ($('.popup-modal').size()) {
        $('.popup-modal').magnificPopup({
          type: 'inline',
          preloader: false,
          focus: '#username',
          modal: true
        });
        $(document).on('click', '.popup-modal-dismiss, .close-popup', function (e) {
          e.preventDefault();
          $.magnificPopup.close();
        });  
      }     
      //
      
      $('.Review-comments .Review-comment .Review-comment-helpful-button').click(function () {
        var $data_type = $(this).attr('data-type');
        var $parent = $(this).closest('.Review-comment');
        var $data_id = $parent.attr('data-id');
        var $element_id = $parent.attr('id');
        $.ajax({
          'url': '/review-helpful',
          'type': 'POST',
          'dataType': 'html',
          'data': {helpful:$data_type, id: $data_id},
          'success': function(data) {
            $('#'+$element_id+' .Review-comment-helpful').html('<span>Cảm ơn phản hồi của bạn!</span>');
          }
        });
      });
      //Phe duyet
      var $rows = $(".view.review-approve table tbody tr", context);
      $.each($rows,  function(index, element){
        var $td = $("td", element);
        var $approve = $td.last();
        $('button', $td).click(function() {
           var $data_value = $(this).attr('data-type');
           var $data_id = $(this).attr('data-id');
           var $object_type = $(this).attr('object-type');
           var $object_id = $(this).attr('object-id');
           $.ajax({
              'url': '/review-approve',
              'type': 'POST', 
              'dataType': 'html',
              'data': {approve_value:$data_value, id: $data_id, object_type:$object_type, object_id:$object_id},
              'success': function(data) {
                var obj = jQuery.parseJSON(data);
                if (obj.approved == 1) {
                  var $output = '<span>Đồng ý</span>';
                }else{
                  var $output = '<span>Từ chối</span>';
                }
                
                $approve.html($output);
              }
          });
        })
      });
    //
    $('.tab-review .tab-pane').each(function () {
      if ($('.ProgressBarCircle', $(this)).size()) 
      {
        $('.ProgressBarCircle:not(.cricle-process)', $(this)).each(function () {
            var idcircle = $(this).attr('id');
            var bar = new ProgressBar.Circle('#'+idcircle, {
            strokeWidth:5,
            easing: 'easeInOut',
            duration: 1400,
            color: '#069d86',
            trailColor: '#cfcfcf',
            trailWidth: 5,
            svgStyle: null,
            });
            var score = Math.round($('#'+ idcircle +' .Review-SummaryScore').text());
            bar.animate(score/10);  // Number from 0.0 to 1.0 
        }).addClass('cricle-process')
       
      }
      //Process Line
      if ($('.ProgressLine', $(this)).size()) {
        $('.ProgressLine .Review-Criteria:not(.line-process)', $(this)).each(function () {
          var idline = $(this).attr('id');
          var bar = new ProgressBar.Line('#'+idline+' .Review-Criteria-Line', {
          strokeWidth: 2,
          easing: 'easeInOut',
          duration: 1400,
          color: '#069d86',
          trailColor: '#cfcfcf',
          trailWidth: 2,
          svgStyle: {width: '100%', height: '100%'},
          });
          bar.animate($('#'+idline+' .Review-SummaryScore').text()/10);  // Number from 0.0 to 1.0
        }).addClass('line-process');
          
      }
      
    });//end foreach tab-pabe
     
     
     
     
     
      
    }
  };
}(jQuery));
;/*})'"*/
;/*})'"*/

function addCommas(nStr) {
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

(function ($) {
  Drupal.behaviors.blacasa_marketing = {
    attach: function (context, settings) {
      //Hien thi popup trang moi ban be
      if ($('.popup-background-overlay').size()){
        $('#invite-contact-gmail-link').trigger('click');
      }
      
      //Search Form moi ban be tu gmail
      $('.referral-filter').on('keyup', function() {
        var query = $(this).val();
        $('.form-checkboxes input.form-checkbox').each(function(i, elem) {
            var elem_val = $(this).val();
            if (elem_val.indexOf(query) != -1) {
                $(this).closest('.form-type-checkbox').show();
            }else{
                $(this).closest('.form-type-checkbox').hide();
            }
        });
      });
      
     //Check all   
     $('#invite-friend-form #check-all:not(.checkbox-process)').bind('click', function(){
          $('#invite-friend-form .form-checkboxes input').prop('checked', $(this).prop("checked"));
     }).addClass('checkbox-process');
     
     //check process  
       if ($('#invite-friend-form .form-checkboxes').size()) {
         var number_checkbox =  $('#invite-friend-form .form-checkboxes input').size();
         var number_checked = 0;
         var progress_status = 0;
         var number_money = 0; 
         $('#invite-friend-form input').change(function() {
            number_checked =  $('#invite-friend-form .form-checkboxes input:checked').length;
            progress_status = number_checked/number_checkbox*100;
            number_money = number_checked * 35000;
            number_money = addCommas(number_money);
            $('#invite-contact-gmail .progress-status').css('width', progress_status + '%');
            $('#invite-contact-gmail .referrals-value span').text(number_money);
            $('#invite-contact-gmail .form-submit').prop('value', 'Gửi '+ number_checked+' lời mời');
            
         });
       }
     
     //
     
     //
      
    }
  };
}(jQuery));

    
;/*})'"*/
;/*})'"*/
(function ($) {

/**
 * A progressbar object. Initialized with the given id. Must be inserted into
 * the DOM afterwards through progressBar.element.
 *
 * method is the function which will perform the HTTP request to get the
 * progress bar state. Either "GET" or "POST".
 *
 * e.g. pb = new progressBar('myProgressBar');
 *      some_element.appendChild(pb.element);
 */
Drupal.progressBar = function (id, updateCallback, method, errorCallback) {
  var pb = this;
  this.id = id;
  this.method = method || 'GET';
  this.updateCallback = updateCallback;
  this.errorCallback = errorCallback;

  // The WAI-ARIA setting aria-live="polite" will announce changes after users
  // have completed their current activity and not interrupt the screen reader.
  this.element = $('<div class="progress" aria-live="polite"></div>').attr('id', id);
  this.element.html('<div class="bar"><div class="filled"></div></div>' +
                    '<div class="percentage"></div>' +
                    '<div class="message">&nbsp;</div>');
};

/**
 * Set the percentage and status message for the progressbar.
 */
Drupal.progressBar.prototype.setProgress = function (percentage, message) {
  if (percentage >= 0 && percentage <= 100) {
    $('div.filled', this.element).css('width', percentage + '%');
    $('div.percentage', this.element).html(percentage + '%');
  }
  $('div.message', this.element).html(message);
  if (this.updateCallback) {
    this.updateCallback(percentage, message, this);
  }
};

/**
 * Start monitoring progress via Ajax.
 */
Drupal.progressBar.prototype.startMonitoring = function (uri, delay) {
  this.delay = delay;
  this.uri = uri;
  this.sendPing();
};

/**
 * Stop monitoring progress via Ajax.
 */
Drupal.progressBar.prototype.stopMonitoring = function () {
  clearTimeout(this.timer);
  // This allows monitoring to be stopped from within the callback.
  this.uri = null;
};

/**
 * Request progress data from server.
 */
Drupal.progressBar.prototype.sendPing = function () {
  if (this.timer) {
    clearTimeout(this.timer);
  }
  if (this.uri) {
    var pb = this;
    // When doing a post request, you need non-null data. Otherwise a
    // HTTP 411 or HTTP 406 (with Apache mod_security) error may result.
    $.ajax({
      type: this.method,
      url: this.uri,
      data: '',
      dataType: 'json',
      success: function (progress) {
        // Display errors.
        if (progress.status == 0) {
          pb.displayError(progress.data);
          return;
        }
        // Update display.
        pb.setProgress(progress.percentage, progress.message);
        // Schedule next timer.
        pb.timer = setTimeout(function () { pb.sendPing(); }, pb.delay);
      },
      error: function (xmlhttp) {
        pb.displayError(Drupal.ajaxError(xmlhttp, pb.uri));
      }
    });
  }
};

/**
 * Display errors on the page.
 */
Drupal.progressBar.prototype.displayError = function (string) {
  var error = $('<div class="messages error"></div>').html(string);
  $(this.element).before(error).hide();

  if (this.errorCallback) {
    this.errorCallback(this);
  }
};

})(jQuery);

;/*})'"*/
;/*})'"*/
/**
 * @file
 *
 * Implement a modal form.
 *
 * @see modal.inc for documentation.
 *
 * This javascript relies on the CTools ajax responder.
 */

(function ($) {
  // Make sure our objects are defined.
  Drupal.CTools = Drupal.CTools || {};
  Drupal.CTools.Modal = Drupal.CTools.Modal || {};

  /**
   * Display the modal
   *
   * @todo -- document the settings.
   */
  Drupal.CTools.Modal.show = function(choice) {
    var opts = {};

    if (choice && typeof choice == 'string' && Drupal.settings[choice]) {
      // This notation guarantees we are actually copying it.
      $.extend(true, opts, Drupal.settings[choice]);
    }
    else if (choice) {
      $.extend(true, opts, choice);
    }

    var defaults = {
      modalTheme: 'CToolsModalDialog',
      throbberTheme: 'CToolsModalThrobber',
      animation: 'show',
      animationSpeed: 'fast',
      modalSize: {
        type: 'scale',
        width: .8,
        height: .8,
        addWidth: 0,
        addHeight: 0,
        // How much to remove from the inner content to make space for the
        // theming.
        contentRight: 25,
        contentBottom: 45
      },
      modalOptions: {
        opacity: .55,
        background: '#fff'
      },
      modalClass: 'default'
    };

    var settings = {};
    $.extend(true, settings, defaults, Drupal.settings.CToolsModal, opts);

    if (Drupal.CTools.Modal.currentSettings && Drupal.CTools.Modal.currentSettings != settings) {
      Drupal.CTools.Modal.modal.remove();
      Drupal.CTools.Modal.modal = null;
    }

    Drupal.CTools.Modal.currentSettings = settings;

    var resize = function(e) {
      // When creating the modal, it actually exists only in a theoretical
      // place that is not in the DOM. But once the modal exists, it is in the
      // DOM so the context must be set appropriately.
      var context = e ? document : Drupal.CTools.Modal.modal;

      if (Drupal.CTools.Modal.currentSettings.modalSize.type == 'scale') {
        var width = $(window).width() * Drupal.CTools.Modal.currentSettings.modalSize.width;
        var height = $(window).height() * Drupal.CTools.Modal.currentSettings.modalSize.height;
      }
      else {
        var width = Drupal.CTools.Modal.currentSettings.modalSize.width;
        var height = Drupal.CTools.Modal.currentSettings.modalSize.height;
      }

      // Use the additionol pixels for creating the width and height.
      $('div.ctools-modal-content', context).css({
        'width': width + Drupal.CTools.Modal.currentSettings.modalSize.addWidth + 'px',
        'height': height + Drupal.CTools.Modal.currentSettings.modalSize.addHeight + 'px'
      });
      $('div.ctools-modal-content .modal-content', context).css({
        'width': (width - Drupal.CTools.Modal.currentSettings.modalSize.contentRight) + 'px',
        'height': (height - Drupal.CTools.Modal.currentSettings.modalSize.contentBottom) + 'px'
      });
    }

    if (!Drupal.CTools.Modal.modal) {
      Drupal.CTools.Modal.modal = $(Drupal.theme(settings.modalTheme));
      if (settings.modalSize.type == 'scale') {
        $(window).bind('resize', resize);
      }
    }

    resize();

    $('span.modal-title', Drupal.CTools.Modal.modal).html(Drupal.CTools.Modal.currentSettings.loadingText);
    Drupal.CTools.Modal.modalContent(Drupal.CTools.Modal.modal, settings.modalOptions, settings.animation, settings.animationSpeed, settings.modalClass);
    $('#modalContent .modal-content').html(Drupal.theme(settings.throbberTheme)).addClass('ctools-modal-loading');

    // Position autocomplete results based on the scroll position of the modal.
    $('#modalContent .modal-content').delegate('input.form-autocomplete', 'keyup', function() {
      $('#autocomplete').css('top', $(this).position().top + $(this).outerHeight() + $(this).offsetParent().filter('#modal-content').scrollTop());
    });
  };

  /**
   * Hide the modal
   */
  Drupal.CTools.Modal.dismiss = function() {
    if (Drupal.CTools.Modal.modal) {
      Drupal.CTools.Modal.unmodalContent(Drupal.CTools.Modal.modal);
    }
  };

  /**
   * Provide the HTML to create the modal dialog.
   */
  Drupal.theme.prototype.CToolsModalDialog = function () {
    var html = ''
    html += '<div id="ctools-modal">'
    html += '  <div class="ctools-modal-content">' // panels-modal-content
    html += '    <div class="modal-header">';
    html += '      <a class="close" href="#">';
    html +=          Drupal.CTools.Modal.currentSettings.closeText + Drupal.CTools.Modal.currentSettings.closeImage;
    html += '      </a>';
    html += '      <span id="modal-title" class="modal-title">&nbsp;</span>';
    html += '    </div>';
    html += '    <div id="modal-content" class="modal-content">';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    return html;
  }

  /**
   * Provide the HTML to create the throbber.
   */
  Drupal.theme.prototype.CToolsModalThrobber = function () {
    var html = '';
    html += '<div id="modal-throbber">';
    html += '  <div class="modal-throbber-wrapper">';
    html +=      Drupal.CTools.Modal.currentSettings.throbber;
    html += '  </div>';
    html += '</div>';

    return html;
  };

  /**
   * Figure out what settings string to use to display a modal.
   */
  Drupal.CTools.Modal.getSettings = function (object) {
    var match = $(object).attr('class').match(/ctools-modal-(\S+)/);
    if (match) {
      return match[1];
    }
  }

  /**
   * Click function for modals that can be cached.
   */
  Drupal.CTools.Modal.clickAjaxCacheLink = function () {
    Drupal.CTools.Modal.show(Drupal.CTools.Modal.getSettings(this));
    return Drupal.CTools.AJAX.clickAJAXCacheLink.apply(this);
  };

  /**
   * Handler to prepare the modal for the response
   */
  Drupal.CTools.Modal.clickAjaxLink = function () {
    Drupal.CTools.Modal.show(Drupal.CTools.Modal.getSettings(this));
    return false;
  };

  /**
   * Submit responder to do an AJAX submit on all modal forms.
   */
  Drupal.CTools.Modal.submitAjaxForm = function(e) {
    var $form = $(this);
    var url = $form.attr('action');

    setTimeout(function() { Drupal.CTools.AJAX.ajaxSubmit($form, url); }, 1);
    return false;
  }

  /**
   * Bind links that will open modals to the appropriate function.
   */
  Drupal.behaviors.ZZCToolsModal = {
    attach: function(context) {
      // Bind links
      // Note that doing so in this order means that the two classes can be
      // used together safely.
      /*
       * @todo remimplement the warm caching feature
       $('a.ctools-use-modal-cache', context).once('ctools-use-modal', function() {
         $(this).click(Drupal.CTools.Modal.clickAjaxCacheLink);
         Drupal.CTools.AJAX.warmCache.apply(this);
       });
        */

      $('area.ctools-use-modal, a.ctools-use-modal', context).once('ctools-use-modal', function() {
        var $this = $(this);
        $this.click(Drupal.CTools.Modal.clickAjaxLink);
        // Create a drupal ajax object
        var element_settings = {};
        if ($this.attr('href')) {
          element_settings.url = $this.attr('href');
          element_settings.event = 'click';
          element_settings.progress = { type: 'throbber' };
        }
        var base = $this.attr('href');
        Drupal.ajax[base] = new Drupal.ajax(base, this, element_settings);
      });

      // Bind buttons
      $('input.ctools-use-modal, button.ctools-use-modal', context).once('ctools-use-modal', function() {
        var $this = $(this);
        $this.click(Drupal.CTools.Modal.clickAjaxLink);
        var button = this;
        var element_settings = {};

        // AJAX submits specified in this manner automatically submit to the
        // normal form action.
        element_settings.url = Drupal.CTools.Modal.findURL(this);
        if (element_settings.url == '') {
          element_settings.url = $(this).closest('form').attr('action');
        }
        element_settings.event = 'click';
        element_settings.setClick = true;

        var base = $this.attr('id');
        Drupal.ajax[base] = new Drupal.ajax(base, this, element_settings);

        // Make sure changes to settings are reflected in the URL.
        $('.' + $(button).attr('id') + '-url').change(function() {
          Drupal.ajax[base].options.url = Drupal.CTools.Modal.findURL(button);
        });
      });

      // Bind our custom event to the form submit
      $('#modal-content form', context).once('ctools-use-modal', function() {
        var $this = $(this);
        var element_settings = {};

        element_settings.url = $this.attr('action');
        element_settings.event = 'submit';
        element_settings.progress = { 'type': 'throbber' }
        var base = $this.attr('id');

        Drupal.ajax[base] = new Drupal.ajax(base, this, element_settings);
        Drupal.ajax[base].form = $this;

        $('input[type=submit], button', this).click(function(event) {
          Drupal.ajax[base].element = this;
          this.form.clk = this;
          // Stop autocomplete from submitting.
          if (Drupal.autocompleteSubmit && !Drupal.autocompleteSubmit()) {
            return false;
          }
          // An empty event means we were triggered via .click() and
          // in jquery 1.4 this won't trigger a submit.
          // We also have to check jQuery version to prevent
          // IE8 + jQuery 1.4.4 to break on other events
          // bound to the submit button.
          if (jQuery.fn.jquery === '1.4' && typeof event.bubbles === "undefined") {
            $(this.form).trigger('submit');
            return false;
          }
        });
      });

      // Bind a click handler to allow elements with the 'ctools-close-modal'
      // class to close the modal.
      $('.ctools-close-modal', context).once('ctools-close-modal')
        .click(function() {
          Drupal.CTools.Modal.dismiss();
          return false;
        });
    }
  };

  // The following are implementations of AJAX responder commands.

  /**
   * AJAX responder command to place HTML within the modal.
   */
  Drupal.CTools.Modal.modal_display = function(ajax, response, status) {
    if ($('#modalContent').length == 0) {
      Drupal.CTools.Modal.show(Drupal.CTools.Modal.getSettings(ajax.element));
    }
    $('#modal-title').html(response.title);
    // Simulate an actual page load by scrolling to the top after adding the
    // content. This is helpful for allowing users to see error messages at the
    // top of a form, etc.
    $('#modal-content').html(response.output).scrollTop(0);

    // Attach behaviors within a modal dialog.
    var settings = response.settings || ajax.settings || Drupal.settings;
    Drupal.attachBehaviors('#modalContent', settings);

    if ($('#modal-content').hasClass('ctools-modal-loading')) {
      $('#modal-content').removeClass('ctools-modal-loading');
    }
    else {
      // If the modal was already shown, and we are simply replacing its
      // content, then focus on the first focusable element in the modal.
      // (When first showing the modal, focus will be placed on the close
      // button by the show() function called above.)
      $('#modal-content :focusable:first').focus();
    }
  }

  /**
   * AJAX responder command to dismiss the modal.
   */
  Drupal.CTools.Modal.modal_dismiss = function(command) {
    Drupal.CTools.Modal.dismiss();
    $('link.ctools-temporary-css').remove();
  }

  /**
   * Display loading
   */
  //Drupal.CTools.AJAX.commands.modal_loading = function(command) {
  Drupal.CTools.Modal.modal_loading = function(command) {
    Drupal.CTools.Modal.modal_display({
      output: Drupal.theme(Drupal.CTools.Modal.currentSettings.throbberTheme),
      title: Drupal.CTools.Modal.currentSettings.loadingText
    });
  }

  /**
   * Find a URL for an AJAX button.
   *
   * The URL for this gadget will be composed of the values of items by
   * taking the ID of this item and adding -url and looking for that
   * class. They need to be in the form in order since we will
   * concat them all together using '/'.
   */
  Drupal.CTools.Modal.findURL = function(item) {
    var url = '';
    var url_class = '.' + $(item).attr('id') + '-url';
    $(url_class).each(
      function() {
        var $this = $(this);
        if (url && $this.val()) {
          url += '/';
        }
        url += $this.val();
      });
    return url;
  };


  /**
   * modalContent
   * @param content string to display in the content box
   * @param css obj of css attributes
   * @param animation (fadeIn, slideDown, show)
   * @param speed (valid animation speeds slow, medium, fast or # in ms)
   * @param modalClass class added to div#modalContent
   */
  Drupal.CTools.Modal.modalContent = function(content, css, animation, speed, modalClass) {
    // If our animation isn't set, make it just show/pop
    if (!animation) {
      animation = 'show';
    }
    else {
      // If our animation isn't "fadeIn" or "slideDown" then it always is show
      if (animation != 'fadeIn' && animation != 'slideDown') {
        animation = 'show';
      }
    }

    if (!speed) {
      speed = 'fast';
    }

    // Build our base attributes and allow them to be overriden
    css = jQuery.extend({
      position: 'absolute',
      left: '0px',
      margin: '0px',
      background: '#000',
      opacity: '.55'
    }, css);

    // Add opacity handling for IE.
    css.filter = 'alpha(opacity=' + (100 * css.opacity) + ')';
    content.hide();

    // If we already have modalContent, remove it.
    if ($('#modalBackdrop').length) $('#modalBackdrop').remove();
    if ($('#modalContent').length) $('#modalContent').remove();

    // position code lifted from http://www.quirksmode.org/viewport/compatibility.html
    if (self.pageYOffset) { // all except Explorer
    var wt = self.pageYOffset;
    } else if (document.documentElement && document.documentElement.scrollTop) { // Explorer 6 Strict
      var wt = document.documentElement.scrollTop;
    } else if (document.body) { // all other Explorers
      var wt = document.body.scrollTop;
    }

    // Get our dimensions

    // Get the docHeight and (ugly hack) add 50 pixels to make sure we dont have a *visible* border below our div
    var docHeight = $(document).height() + 50;
    var docWidth = $(document).width();
    var winHeight = $(window).height();
    var winWidth = $(window).width();
    if( docHeight < winHeight ) docHeight = winHeight;

    // Create our divs
    $('body').append('<div id="modalBackdrop" class="backdrop-' + modalClass + '" style="z-index: 1000; display: none;"></div><div id="modalContent" class="modal-' + modalClass + '" style="z-index: 1001; position: absolute;">' + $(content).html() + '</div>');

    // Get a list of the tabbable elements in the modal content.
    var getTabbableElements = function () {
      var tabbableElements = $('#modalContent :tabbable'),
          radioButtons = tabbableElements.filter('input[type="radio"]');

      // The list of tabbable elements from jQuery is *almost* right. The
      // exception is with groups of radio buttons. The list from jQuery will
      // include all radio buttons, when in fact, only the selected radio button
      // is tabbable, and if no radio buttons in a group are selected, then only
      // the first is tabbable.
      if (radioButtons.length > 0) {
        // First, build up an index of which groups have an item selected or not.
        var anySelected = {};
        radioButtons.each(function () {
          var name = this.name;

          if (typeof anySelected[name] === 'undefined') {
            anySelected[name] = radioButtons.filter('input[name="' + name + '"]:checked').length !== 0;
          }
        });

        // Next filter out the radio buttons that aren't really tabbable.
        var found = {};
        tabbableElements = tabbableElements.filter(function () {
          var keep = true;

          if (this.type == 'radio') {
            if (anySelected[this.name]) {
              // Only keep the selected one.
              keep = this.checked;
            }
            else {
              // Only keep the first one.
              if (found[this.name]) {
                keep = false;
              }
              found[this.name] = true;
            }
          }

          return keep;
        });
      }

      return tabbableElements.get();
    };

    // Keyboard and focus event handler ensures only modal elements gain focus.
    modalEventHandler = function( event ) {
      target = null;
      if ( event ) { //Mozilla
        target = event.target;
      } else { //IE
        event = window.event;
        target = event.srcElement;
      }

      var parents = $(target).parents().get();
      for (var i = 0; i < parents.length; ++i) {
        var position = $(parents[i]).css('position');
        if (position == 'absolute' || position == 'fixed') {
          return true;
        }
      }

      if ($(target).is('#modalContent, body') || $(target).filter('*:visible').parents('#modalContent').length) {
        // Allow the event only if target is a visible child node
        // of #modalContent.
        return true;
      }
      else {
        getTabbableElements()[0].focus();
      }

      event.preventDefault();
    };
    $('body').bind( 'focus', modalEventHandler );
    $('body').bind( 'keypress', modalEventHandler );

    // Keypress handler Ensures you can only TAB to elements within the modal.
    // Based on the psuedo-code from WAI-ARIA 1.0 Authoring Practices section
    // 3.3.1 "Trapping Focus".
    modalTabTrapHandler = function (evt) {
      // We only care about the TAB key.
      if (evt.which != 9) {
        return true;
      }

      var tabbableElements = getTabbableElements(),
          firstTabbableElement = tabbableElements[0],
          lastTabbableElement = tabbableElements[tabbableElements.length - 1],
          singleTabbableElement = firstTabbableElement == lastTabbableElement,
          node = evt.target;

      // If this is the first element and the user wants to go backwards, then
      // jump to the last element.
      if (node == firstTabbableElement && evt.shiftKey) {
        if (!singleTabbableElement) {
          lastTabbableElement.focus();
        }
        return false;
      }
      // If this is the last element and the user wants to go forwards, then
      // jump to the first element.
      else if (node == lastTabbableElement && !evt.shiftKey) {
        if (!singleTabbableElement) {
          firstTabbableElement.focus();
        }
        return false;
      }
      // If this element isn't in the dialog at all, then jump to the first
      // or last element to get the user into the game.
      else if ($.inArray(node, tabbableElements) == -1) {
        // Make sure the node isn't in another modal (ie. WYSIWYG modal).
        var parents = $(node).parents().get();
        for (var i = 0; i < parents.length; ++i) {
          var position = $(parents[i]).css('position');
          if (position == 'absolute' || position == 'fixed') {
            return true;
          }
        }

        if (evt.shiftKey) {
          lastTabbableElement.focus();
        }
        else {
          firstTabbableElement.focus();
        }
      }
    };
    $('body').bind('keydown', modalTabTrapHandler);

    // Create our content div, get the dimensions, and hide it
    var modalContent = $('#modalContent').css('top','-1000px');
    var mdcTop = wt + ( winHeight / 2 ) - (  modalContent.outerHeight() / 2);
    var mdcLeft = ( winWidth / 2 ) - ( modalContent.outerWidth() / 2);
    $('#modalBackdrop').css(css).css('top', 0).css('height', docHeight + 'px').css('width', docWidth + 'px').show();
    modalContent.css({top: mdcTop + 'px', left: mdcLeft + 'px'}).hide()[animation](speed);

    // Bind a click for closing the modalContent
    modalContentClose = function(){close(); return false;};
    $('.close').bind('click', modalContentClose);

    // Bind a keypress on escape for closing the modalContent
    modalEventEscapeCloseHandler = function(event) {
      if (event.keyCode == 27) {
        close();
        return false;
      }
    };

    $(document).bind('keydown', modalEventEscapeCloseHandler);

    // Per WAI-ARIA 1.0 Authoring Practices, initial focus should be on the
    // close button, but we should save the original focus to restore it after
    // the dialog is closed.
    var oldFocus = document.activeElement;
    $('.close').focus();

    // Close the open modal content and backdrop
    function close() {
      // Unbind the events
      $(window).unbind('resize',  modalContentResize);
      $('body').unbind( 'focus', modalEventHandler);
      $('body').unbind( 'keypress', modalEventHandler );
      $('body').unbind( 'keydown', modalTabTrapHandler );
      $('.close').unbind('click', modalContentClose);
      $('body').unbind('keypress', modalEventEscapeCloseHandler);
      $(document).trigger('CToolsDetachBehaviors', $('#modalContent'));

      // Set our animation parameters and use them
      if ( animation == 'fadeIn' ) animation = 'fadeOut';
      if ( animation == 'slideDown' ) animation = 'slideUp';
      if ( animation == 'show' ) animation = 'hide';

      // Close the content
      modalContent.hide()[animation](speed);

      // Remove the content
      $('#modalContent').remove();
      $('#modalBackdrop').remove();

      // Restore focus to where it was before opening the dialog
      $(oldFocus).focus();
    };

    // Move and resize the modalBackdrop and modalContent on window resize.
    modalContentResize = function(){

      // Reset the backdrop height/width to get accurate document size.
      $('#modalBackdrop').css('height', '').css('width', '');

      // Position code lifted from:
      // http://www.quirksmode.org/viewport/compatibility.html
      if (self.pageYOffset) { // all except Explorer
      var wt = self.pageYOffset;
      } else if (document.documentElement && document.documentElement.scrollTop) { // Explorer 6 Strict
        var wt = document.documentElement.scrollTop;
      } else if (document.body) { // all other Explorers
        var wt = document.body.scrollTop;
      }

      // Get our heights
      var docHeight = $(document).height();
      var docWidth = $(document).width();
      var winHeight = $(window).height();
      var winWidth = $(window).width();
      if( docHeight < winHeight ) docHeight = winHeight;

      // Get where we should move content to
      var modalContent = $('#modalContent');
      var mdcTop = wt + ( winHeight / 2 ) - ( modalContent.outerHeight() / 2);
      var mdcLeft = ( winWidth / 2 ) - ( modalContent.outerWidth() / 2);

      // Apply the changes
      $('#modalBackdrop').css('height', docHeight + 'px').css('width', docWidth + 'px').show();
      modalContent.css('top', mdcTop + 'px').css('left', mdcLeft + 'px').show();
    };
    $(window).bind('resize', modalContentResize);
  };

  /**
   * unmodalContent
   * @param content (The jQuery object to remove)
   * @param animation (fadeOut, slideUp, show)
   * @param speed (valid animation speeds slow, medium, fast or # in ms)
   */
  Drupal.CTools.Modal.unmodalContent = function(content, animation, speed)
  {
    // If our animation isn't set, make it just show/pop
    if (!animation) { var animation = 'show'; } else {
      // If our animation isn't "fade" then it always is show
      if (( animation != 'fadeOut' ) && ( animation != 'slideUp')) animation = 'show';
    }
    // Set a speed if we dont have one
    if ( !speed ) var speed = 'fast';

    // Unbind the events we bound
    $(window).unbind('resize', modalContentResize);
    $('body').unbind('focus', modalEventHandler);
    $('body').unbind('keypress', modalEventHandler);
    $('body').unbind( 'keydown', modalTabTrapHandler );
    $('.close').unbind('click', modalContentClose);
    $('body').unbind('keypress', modalEventEscapeCloseHandler);
    $(document).trigger('CToolsDetachBehaviors', $('#modalContent'));

    // jQuery magic loop through the instances and run the animations or removal.
    content.each(function(){
      if ( animation == 'fade' ) {
        $('#modalContent').fadeOut(speed, function() {
          $('#modalBackdrop').fadeOut(speed, function() {
            $(this).remove();
          });
          $(this).remove();
        });
      } else {
        if ( animation == 'slide' ) {
          $('#modalContent').slideUp(speed,function() {
            $('#modalBackdrop').slideUp(speed, function() {
              $(this).remove();
            });
            $(this).remove();
          });
        } else {
          $('#modalContent').remove();
          $('#modalBackdrop').remove();
        }
      }
    });
  };

$(function() {
  Drupal.ajax.prototype.commands.modal_display = Drupal.CTools.Modal.modal_display;
  Drupal.ajax.prototype.commands.modal_dismiss = Drupal.CTools.Modal.modal_dismiss;
});

})(jQuery);

;/*})'"*/
;/*})'"*/
function class_suggest_teachers(next_page,limit){
		//console.log(type,"next_page",limit);
		var dia_diem = $('#suggest-criteria').attr('data-place');
    var mon_hoc = $('#suggest-criteria').attr('data-subject');
    var teaching_type = $('#suggest-criteria').attr('data-teaching-type');
    
    var lat =  $('#suggest-criteria').attr('data-lat');
    var lng =  $('#suggest-criteria').attr('data-lng');
    var agency =  $('#suggest-criteria').attr('data-agency');
    var gender =  $('#suggest-criteria').attr('data-gender');
    var tags =  $('#suggest-criteria').attr('data-tags');
    var time_active = $('#suggest-criteria').attr('data-time');
    var distance = $('#suggest-criteria').attr('data-distance');
    var teacher_type = $('#suggest-criteria').attr('data-teacher-type');
     
    if(!dia_diem){
			dia_diem = null;
		}
		if(!lat){
			lat = null;
		}
		if(!lng){
			lng = null;
		}
    
		$("body").append( "<div class='loading'></div>" );
		
		$.ajax({
            type: 'POST',
            url: '/ajax-class-sugest-teacher',
            data: {'dia_diem': dia_diem,
            		'mon_hoc':mon_hoc,
            		'teaching_type': teaching_type,
            		'lat':lat,
            		'lng':lng,
            		'next_page':next_page,
            		'limit':limit,
                'agency':agency,
                'gender': gender,
                'tags': tags,
                'time_active' : time_active,
                'distance': distance,
                'teacher_type': teacher_type
            	},
            dataType: 'html',
            success: function (data) {
            	$(".suggest-result").html(data);
              Drupal.attachBehaviors($(".suggest-result"));
            	if($(".loading").size()){
	                $(".loading").remove();
	            }
            },
            error: function (data) {
                console.log('An error occurred.');;
            },
        });
}

function get_crm_product(provider){
  $.ajax({
    url:"/crm/ajax/get-product",
    method:"POST",
    data:{provider:provider},
    dataType:"json",
    success:function(data)
    { 
      $('#edit-product').html(data);
         
    }
  });
}

$( document ).ready(function() {

     //Suggest teacher load more
   $('.suggest-form-tag button').click(function () {
     var tag = $('.suggest-form-tag input').val();
     if (tag) {
        var tags_string =  $('#suggest-list-tags').html();
        $('.suggest-form-tag input').val('');
        $('#suggest-list-tags').html(tags_string+'<div class="tag-item"><i class="fa fa-tag"></i> <span>'+tag+'</span> <i title="Xoá tag" class=" fa fa-minus-circle filter-tag-remove"></i></div>');
        Drupal.attachBehaviors($("#suggest-list-tags"));
        var spans =  document.getElementById('suggest-list-tags').getElementsByTagName('span');
        var tags = '';
        for(var i = 0, l = spans.length; i < l; i++){
            tags = tags +','+ spans[i].textContent;
        }
        $('#suggest-criteria').attr('data-tags', tags);
        class_suggest_teachers(1,12);
     }
   });
   
	//Suggest teacher filter time active
  $('.filter-select-boxes select#sb-filter-time').on('change', function() {
    var _val = $(this).val();
    $('#suggest-criteria').attr('data-time', _val);
    class_suggest_teachers(1,12);
		
  });
	
	//Suggest teacher: teaching type
  $('.filter-select-boxes select#sb-filter-teaching-type').on('change', function() {
    var _val = $(this).val();
    $('#suggest-criteria').attr('data-teaching-type', _val);
		$('#sb-filter-distance').val("-1");
    if(_val==1)
		{
			$('#sb-filter-distance').attr('disabled','disabled');
			$('#sb-filter-distance').css("background-color", "#b9b4b4");
			$('#sb-filter-distance').css("color", "gray");
		}else if(_val==0){
			$('#sb-filter-distance').removeAttr('disabled');
			$('#sb-filter-distance').css("background-color", "#fff");
			$('#sb-filter-distance').css("color", "#000");
		}
		class_suggest_teachers(1,12);		
		
  });
	
  //Suggest teacher filter distance
  $('.filter-select-boxes select#sb-filter-distance').on('change', function() {
    var _val = $(this).val();
    $('#suggest-criteria').attr('data-distance', _val);
    class_suggest_teachers(1,12);
  }).addClass('distance-proccess'); 

	//Suggest teacher filter agency
  $('.filter-select-boxes select#sb-filter-agency').on('change', function() {
    var _val = $(this).val();
    $('#suggest-criteria').attr('data-agency', _val);
    class_suggest_teachers(1,12);
  }); 
  //Suggest teacher filter teacher type
  $('.filter-select-boxes select#sb-filter-teacher-type').on('change', function() {
    var _val = $(this).val();
    $('#suggest-criteria').attr('data-teacher-type', _val);
    class_suggest_teachers(1,12);
  });
  //
});

(function ($) {
  Drupal.behaviors.blacasa_nhom_hoc = {
    attach: function (context, settings) {
       //Get ward from district from quan ly lop
       $('#blacasa-nhom-hoc-admin-class-manager-form  #edit-district').change(function() {
         $('#edit-ward').val('');
         var _val = $(this).val();
         if ( _val != '') {
            $.ajax({
                url:"/crm/ajax/get-option",
                method:"POST",
                data:{type:'place-district-ward', filter2:_val},
                dataType:"json",
                success:function(data)
                { 
                  $('#edit-ward').html(data);
                }
            });
         }
       });
       
       //Class transfer CRM
       $('#transfer-contact-crm #edit-provider').change(function() {
         $('#edit-product').val('');
         if ($(this).val() != '') {
            get_crm_product($(this).val());
         }
       });
        //Suggest teacher remove tag
       $('#suggest-list-tags .tag-item i').click(function () {
          var parent_i = $(this).parent();
          parent_i.remove();
          var spans =  document.getElementById('suggest-list-tags').getElementsByTagName('span');
          var tags = '';
          for(var i = 0, l = spans.length; i < l; i++){
              tags = tags +','+ spans[i].textContent;
          }
         $('#suggest-criteria').attr('data-tags', tags);
         class_suggest_teachers(1,12);
          
       });
  
       //Login
       var method_login = $('.not-logged-in .form-nhom-hoc .row-login input[name="method_login"]:checked').val();
       $('.not-logged-in .form-nhom-hoc .row-login input[name="method_login"]').click(function () {
         var method_login = $(this).val();
         if (method_login == 'mail') {
           $('.not-logged-in .form-nhom-hoc .row-login input[name="email_phone_login"]').attr('placeholder', 'Nhập Email*');
           $('.not-logged-in .form-nhom-hoc .row-login input[name="email_phone_login"]').val('');
         }
         else{
            $('.not-logged-in .form-nhom-hoc .row-login input[name="email_phone_login"]').attr('placeholder', 'Nhập số điện thoại *');
         }
       });
       //validate number phone class
       $('.logged-in #phone_class').on('change', function() {
          var number_phone = $(this).val();
          $.ajax({
            type: "GET",
            url: "/ajax-validate-number-phone/"+number_phone,                                                
            success: function (result) {
              if(result.result == "error"){
                  $("#phone_class").val("");
                  setTimeout(function() {
                    alert("Số điện thoại này đã được đăng ký trên hệ thống. Bạn vui lòng nhập số điện thoại khác !");
                  },10);                                    
              }
            }
          }); 
        });
        
        $('.not-logged-in #phone_class').on('change', function (){
          var number_phone = $(this).val();
          $('.not-logged-in .form-nhom-hoc .row-register input[name="number_phone"]').val(number_phone);
          $('.not-logged-in .form-nhom-hoc .row-login input[name="email_phone_login"]').val(number_phone);
        });

      $(document).on('click', '.proccess-request button.close-popup', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
      });
        
       //Button accepted. canceled
       $('.proccess-request button.btn-primary:not(.button-proccess)').click(function () { 
            var $cancel_reason = '';
            var $parents_id = $(this).parents('.proccess-request').attr('id');
            var $request_id = $('#'+$parents_id+' .box-messages').attr('data-id');
            var $object_id = $('#'+$parents_id+' .box-messages').attr('data-object');
            if ($('#'+$parents_id+' .box-messages .form-textarea-wrapper').size()) {
              $cancel_reason = $('#'+$parents_id+' .box-messages .form-textarea-wrapper textarea').val();
              if ($cancel_reason == '') {
                $('#'+$parents_id+' .box-messages ').before('<div class="messages error">Bạn phải nhập lý do hủy.</div>')
                return false;
              }
            }
            $('body').append('<div class="loading"></div>');
            $(".mfp-content").hide();
            $(".mfp-bg").hide();
            var $action = $(this).attr('data-type');
            $.ajax({
              'url': '/process-request',
              'type': 'POST',
              'dataType': 'json',
              'data': {request_id:$request_id, action: $action, object_id:$object_id, cancel_reason: $cancel_reason},
              'success': function(data) {
                 if (data.result == 1) {
                   $('.loading').remove();
                   if (data.action == 'accepted' || data.action == 'reconnect') {
                     $(location).attr('href', '/offer/'+$request_id);
                   }
                   else if (data.action == 'canceled') {
                     $(location).attr('href', data.url_redirect);
                   }
                   else{
                     location.reload();
                   }
                    
                 }
                 
              }
            });
       }).addClass('button-proccess');   
      //
      
    //Moi giáo viên cho 1 lớp cụ thể
    $('button.invitation:not(.button-proccess)').click(function () {
      var $teacher_id = $(this).attr('data-object');
      var $object_id  = $(this).attr('data-studygroup');
      var $element = $(this);
      $.ajax({
        url:"/ajax-invitation-teacher-object",
        method:"POST",
        data:{teacher_id:$teacher_id, object_id:$object_id},
        dataType:"json",
        success:function(data)
        { 
           $($element).html('Đã mời');    
        }
      });
    }).addClass('button-proccess');

     // JS Moi day auto tinh phi //new     
//    $("#edit-bid").change(function(){
//      var price = $(this).val();
//      var price_number =  Number(price.replace(/[^0-9\.-]+/g,""));
//      var duration =  parseFloat($(".bp-connectionfee-rate").attr('data-duration'));
//      var bp_connectionfee_rate = parseFloat($(".bp-connectionfee-rate").attr('data-rate'));
//      //console.log(duration,price_number);
//      var connection_fee = Math.ceil((price_number/duration)*bp_connectionfee_rate);
//      connection_fee = Math.round(connection_fee/1000);
//      var fee_connect = connection_fee.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
//      $(".connection-fee").text(fee_connect);
//    });

    //JS HOVER SHOW BOXVIEW
    if($('.col-popover').size() && window.innerWidth >= 1000){ 
      return;
    var timer,timer2;
    var check = 0;
    $('.col-popover .view-content .col .box-content').each(function(index, element){
        $(this).popover({ 
            trigger: "manual" , 
            html: true, 
            animation:false,
            placement:function(tip,element){
            	var left = $(element).offset().left;
            	var windowWidth = $(window).width();
            	if(left < windowWidth/2){
            		return 'right';
            	}else{
            		return 'left';
            	}
            },
            content: function() {
              return "Loading...";
            }
          })
          .on("mouseenter", function () {
                clearTimeout(timer);
                var _this = $(this);
                var object_id =  $('.tile-v-12 .btn-bottom .btn-data', $(this)).attr('data-object');
             	  var object_type = $('.tile-v-12 .btn-bottom .btn-data', $(this)).attr('data-type');
                //$(this).attr("data-placement","left";
                //clearTimeout(timer2);
                // Close all other Popovers
                $('.col .box-content').not(_this).popover('hide');
                var left = $(this).offset().left;
                var windowWidth = $(window).width();
                var width = this.offsetWidth;
                var position = 0;
                var arrow = "";
                if(left < windowWidth/2){
                	position = -10;
                	arrow = "left-arrow";
                }else{
                	position = -215;
                	arrow = "right-arrow";
                }
                var height = this.offsetHeight/2;
                timer2 = setTimeout(function(){

                  if($(_this).is(':hover'))
                  {		
                  	$.ajax({
	                  'url': '/ajax-fetch-data-hover',
	                  'type': 'POST',
	                  'dataType': 'json',
	                  'data': { object_id: object_id, object_type : object_type},
	                  'success': function(data) {
	                    console.log(data.data);
	                  	$(".popover-content").empty();
	                  	$(".popover-content").append(data.data);
	                    //$(elem).
	                    $('#quick-view-box .tooltiptext').addClass(arrow);
	                    $('#quick-view-box').css('top', -height);
	                    $('#quick-view-box').css('left', position);
	                    // $('#quick-view-box').fadeIn("slow");
	                  }
	                });       
                      $(_this).popover("show");
                  }
                  $(".popover").on("mouseleave", function () {
                      $('.col .box-content').popover('hide');
                  });
                }, 500);
                // $(".popover").on("mouseleave", function () {
                //     $(_this).popover('hide');
                // });
                  
            
          }).on("mouseleave", function () {
              clearTimeout(timer2);
              var _this = this;
              setTimeout(function () {
                  if (!$(".popover:hover").length) {
                      $(_this).popover("hide");
                  }
              }, 200);
      });
    }); 
  }
     //endif 
  }//
  };
}(jQuery));

    
;/*})'"*/
;/*})'"*/
function load_unseen_notification(view_type = ''){
  jQuery('.dropdown.notification-info .list').html('<div style="text-align: center;"><i class="fa fa-spinner" aria-hidden="true"></i></div>');
  jQuery.ajax({
    url:"/fetch-notification",
    method:"POST",
    data:{view:view_type},
    dataType:"json",
    success:function(data)
    {
      //Hien thi th�ng bao so luong neu co
     if(data.unseen_notification > 0){
       var $number = '<span class="num">'+data.unseen_notification+'</span>';
       jQuery('.notification-info .count').html($number);
     }
     if(data.unseen_message > 0){
       var $number = '<span class="num">'+data.unseen_message+'</span>';
       jQuery('.message-info .count').html($number);
     }
     
     //Hien thi du lieu data
     jQuery('.dropdown.notification-info .list').html(data.notification);
     jQuery('.dropdown.message-info .list').html(data.message);
     
     jQuery('.notification .item-list li').each(function () {
     jQuery(this).click(function () {
       var $id = jQuery('.text a.hidden', jQuery(this)).attr('data-id');
       var $href = jQuery('.text a.hidden', jQuery(this)).attr('href');
       var $data_type = jQuery('.text a.hidden', jQuery(this)).attr('data-type');
       update_seen_notification($id, $data_type);
       window.open($href,"_self");
     });
     });
     
    
    }
  });
}

function update_seen_notification(notification_id = '', notification_type){
  jQuery.ajax({
    url:"/notification-update-status",
    method:"POST",
    data:{notification_id:notification_id, notification_type:notification_type},
    dataType:"json",
    success:function(data){
    
    }
  });
}

(function ($) {
  Drupal.behaviors.blacasa_notification ={
    attach: function (context, settings) {
       
       
  }
 };
}(jQuery));

jQuery(window).bind("load", function() {
  jQuery = $;
  if ($('body.logged-in').size()) {
     load_unseen_notification();
     // load new notifications
     $('.notification .dropdown-toggle').on('click', function(){
       var $type = $(this).attr('data-type');
       $('.count', $(this)).html('');
       load_unseen_notification($type);
     });         
     //setInterval(function(){
      // load_unseen_notification();;
     //}, 300000);
    }
});
;/*})'"*/
;/*})'"*/

var config = {
    apiKey: "AIzaSyDPk2q2B-tMtqIwejetJ-tIMMHUgIrxht8",
    authDomain: "blacasavn-f262e.firebaseapp.com",
    databaseURL: "https://blacasavn-f262e.firebaseio.com",
    projectId: "blacasavn-f262e",
    storageBucket: "blacasavn-f262e.appspot.com",
    messagingSenderId: "402398352805"
  };
if (typeof firebase !== 'undefined'){
firebase.initializeApp(config);
const  messaging = firebase.messaging();
messaging.usePublicVapidKey("BIoO_RZ-hblcoPNNwP3KlV8R4rOazevi7Qg_pgAhaJrOYHMM5OJSSVb97G6oTzlCIm1ObtfF22JcOqGIcl6Dr28");

messaging.requestPermission()
.then(function() {
  //console.log('Permission is granted');
  //var token = document.getElementById('token-push-fb').innerText;
  
  //if(!token) {
    getReToken2();
  //}
  
})
.catch(function(err) {
  //console.log('Unable to get permission to notify.', err);
});
 
  
//function firebaseToken(argument) {
//  messaging.requestPermission()
//  .then(function() {
//    console.log('Permission is granted');
//    getReToken2(argument);
//  })
//  .catch(function(err) {
//    console.log('Unable to get permission to notify.', err);
//  });
//}
  
messaging.onMessage(function(payload) {
  var notificationTitle = decodeURIComponent(payload.data.title);
  var notificationOptions = {
    body: decodeURIComponent(payload.data.body),
    icon: payload.data.icon
  };
  var notification = new Notification(notificationTitle, notificationOptions);
    notification.onclick = function(event) {
    event.preventDefault(); // prevent the browser from focusing the Notification's tab
    window.open(payload.notification.click_action , '_blank');
    notification.close();
   }
});
  
function getReToken2() {
  messaging.getToken()
  .then(function (token) {
    if (token) {
      //alert(token);
      saveToken(token);
    }
    else{
      //console.log('No Instance ID token available. Request permission to generate one.');
    }
  })
  .catch(function (err) {
    //console.log('An error occurred while retrieving token. ', err);
  });
}
  
  
  
function saveToken(token, argument) {
  $.ajax({
    url: '/push-token',
    type: 'POST',
    data: {'token': token, 'uid': argument}
  }).done(function(result){
  });
}
  
(function($, Drupal)
  {
  	// Our function name is prototyped as part of the Drupal.ajax namespace, adding to the commands:
  	Drupal.ajax.prototype.commands.firebasegetTokenlogin = function(ajax, response, status)
  	{
  		// The value we passed in our Ajax callback function will be available inside the
  		// response object. Since we defined it as selectedValue in our callback, it will be
  		// available in response.selectedValue. Usually we would not use an alert() function
  		// as we could use ajax_command_alert() to do it without having to define a custom
  		// ajax command, but for the purpose of demonstration, we will use an alert() function
  		// here:
      //alert(response.argument);
      getReToken2(response.argument);
      //firebaseToken(response.argument);
  	};
  }(jQuery, Drupal));
}
;/*})'"*/
;/*})'"*/
/*@summary: lấy gia strij các option theo category (type) và các filters
* @param: type: kiểu option category
* @param: filter1: bộ lọc cấp 1
* @param: filter 2: bộ lọc cấp 2
*/
function get_place_option(type, filter1, filter2){
  $.ajax({
    url:"/crm/ajax/get-option",
    method:"POST",
    data:{type:type, filter1:filter1, filter2:filter2},
    dataType:"json",
    success:function(data)
    { 
      if (type == 'place-district'){
        $('#district').html(data);
      }
      else if (type == 'place-district-ward'){
        $('#ward').html(data);
      }
    }
  });
}

(function ($) {
  Drupal.behaviors.custom = {
    attach: function (context, settings) {
      
      if ($('.custom-datepicker').size()) {
        $('.custom-datepicker').datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: "-50:+0",
          dateFormat: 'dd-mm-yy',
          todayHighlight: true,
          autoclose: true,
        });
      }//e: custom-datepicker

      
  }//
  };
}(jQuery));


;/*})'"*/
;/*})'"*/
(function ($) {

Drupal.googleanalytics = {};

$(document).ready(function() {

  // Attach mousedown, keyup, touchstart events to document only and catch
  // clicks on all elements.
  $(document.body).bind("mousedown keyup touchstart", function(event) {

    // Catch the closest surrounding link of a clicked element.
    $(event.target).closest("a,area").each(function() {

      // Is the clicked URL internal?
      if (Drupal.googleanalytics.isInternal(this.href)) {
        // Skip 'click' tracking, if custom tracking events are bound.
        if ($(this).is('.colorbox') && (Drupal.settings.googleanalytics.trackColorbox)) {
          // Do nothing here. The custom event will handle all tracking.
          //console.info("Click on .colorbox item has been detected.");
        }
        // Is download tracking activated and the file extension configured for download tracking?
        else if (Drupal.settings.googleanalytics.trackDownload && Drupal.googleanalytics.isDownload(this.href)) {
          // Download link clicked.
          ga("send", {
            "hitType": "event",
            "eventCategory": "Downloads",
            "eventAction": Drupal.googleanalytics.getDownloadExtension(this.href).toUpperCase(),
            "eventLabel": Drupal.googleanalytics.getPageUrl(this.href),
            "transport": "beacon"
          });
        }
        else if (Drupal.googleanalytics.isInternalSpecial(this.href)) {
          // Keep the internal URL for Google Analytics website overlay intact.
          ga("send", {
            "hitType": "pageview",
            "page": Drupal.googleanalytics.getPageUrl(this.href),
            "transport": "beacon"
          });
        }
      }
      else {
        if (Drupal.settings.googleanalytics.trackMailto && $(this).is("a[href^='mailto:'],area[href^='mailto:']")) {
          // Mailto link clicked.
          ga("send", {
            "hitType": "event",
            "eventCategory": "Mails",
            "eventAction": "Click",
            "eventLabel": this.href.substring(7),
            "transport": "beacon"
          });
        }
        else if (Drupal.settings.googleanalytics.trackOutbound && this.href.match(/^\w+:\/\//i)) {
          if (Drupal.settings.googleanalytics.trackDomainMode !== 2 || (Drupal.settings.googleanalytics.trackDomainMode === 2 && !Drupal.googleanalytics.isCrossDomain(this.hostname, Drupal.settings.googleanalytics.trackCrossDomains))) {
            // External link clicked / No top-level cross domain clicked.
            ga("send", {
              "hitType": "event",
              "eventCategory": "Outbound links",
              "eventAction": "Click",
              "eventLabel": this.href,
              "transport": "beacon"
            });
          }
        }
      }
    });
  });

  // Track hash changes as unique pageviews, if this option has been enabled.
  if (Drupal.settings.googleanalytics.trackUrlFragments) {
    window.onhashchange = function() {
      ga("send", {
        "hitType": "pageview",
        "page": location.pathname + location.search + location.hash
      });
    };
  }

  // Colorbox: This event triggers when the transition has completed and the
  // newly loaded content has been revealed.
  if (Drupal.settings.googleanalytics.trackColorbox) {
    $(document).bind("cbox_complete", function () {
      var href = $.colorbox.element().attr("href");
      if (href) {
        ga("send", {
          "hitType": "pageview",
          "page": Drupal.googleanalytics.getPageUrl(href)
        });
      }
    });
  }

});

/**
 * Check whether the hostname is part of the cross domains or not.
 *
 * @param string hostname
 *   The hostname of the clicked URL.
 * @param array crossDomains
 *   All cross domain hostnames as JS array.
 *
 * @return boolean
 */
Drupal.googleanalytics.isCrossDomain = function (hostname, crossDomains) {
  /**
   * jQuery < 1.6.3 bug: $.inArray crushes IE6 and Chrome if second argument is
   * `null` or `undefined`, http://bugs.jquery.com/ticket/10076,
   * https://github.com/jquery/jquery/commit/a839af034db2bd934e4d4fa6758a3fed8de74174
   *
   * @todo: Remove/Refactor in D8
   */
  if (!crossDomains) {
    return false;
  }
  else {
    return $.inArray(hostname, crossDomains) > -1 ? true : false;
  }
};

/**
 * Check whether this is a download URL or not.
 *
 * @param string url
 *   The web url to check.
 *
 * @return boolean
 */
Drupal.googleanalytics.isDownload = function (url) {
  var isDownload = new RegExp("\\.(" + Drupal.settings.googleanalytics.trackDownloadExtensions + ")([\?#].*)?$", "i");
  return isDownload.test(url);
};

/**
 * Check whether this is an absolute internal URL or not.
 *
 * @param string url
 *   The web url to check.
 *
 * @return boolean
 */
Drupal.googleanalytics.isInternal = function (url) {
  var isInternal = new RegExp("^(https?):\/\/" + window.location.host, "i");
  return isInternal.test(url);
};

/**
 * Check whether this is a special URL or not.
 *
 * URL types:
 *  - gotwo.module /go/* links.
 *
 * @param string url
 *   The web url to check.
 *
 * @return boolean
 */
Drupal.googleanalytics.isInternalSpecial = function (url) {
  var isInternalSpecial = new RegExp("(\/go\/.*)$", "i");
  return isInternalSpecial.test(url);
};

/**
 * Extract the relative internal URL from an absolute internal URL.
 *
 * Examples:
 * - http://mydomain.com/node/1 -> /node/1
 * - http://example.com/foo/bar -> http://example.com/foo/bar
 *
 * @param string url
 *   The web url to check.
 *
 * @return string
 *   Internal website URL
 */
Drupal.googleanalytics.getPageUrl = function (url) {
  var extractInternalUrl = new RegExp("^(https?):\/\/" + window.location.host, "i");
  return url.replace(extractInternalUrl, '');
};

/**
 * Extract the download file extension from the URL.
 *
 * @param string url
 *   The web url to check.
 *
 * @return string
 *   The file extension of the passed url. e.g. "zip", "txt"
 */
Drupal.googleanalytics.getDownloadExtension = function (url) {
  var extractDownloadextension = new RegExp("\\.(" + Drupal.settings.googleanalytics.trackDownloadExtensions + ")([\?#].*)?$", "i");
  var extension = extractDownloadextension.exec(url);
  return (extension === null) ? '' : extension[1];
};

})(jQuery);

;/*})'"*/
;/*})'"*/

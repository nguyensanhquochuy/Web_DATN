
/*BUTTON LIÊN HẸ*/
function arCuGetCookie(t) {
    return document.cookie.length > 0 && (c_start = document.cookie.indexOf(t + "="), -1 != c_start) ? (c_start = c_start + t.length + 1, c_end = document.cookie.indexOf(";", c_start), -1 == c_end && (c_end = document.cookie.length), unescape(document.cookie.substring(c_start, c_end))) : 0
}

function arCuCreateCookie(t, e, s) {
    var n;
    if (s) {
        var i = new Date;
        i.setTime(i.getTime() + 24 * s * 60 * 60 * 1e3), n = "; expires=" + i.toGMTString()
    } else n = "";
    document.cookie = t + "=" + e + n + "; path=/"
}

function arCuShowMessage(t) {
    if (arCuPromptClosed) return !1;
    void 0 !== arCuMessages[t] ? (jQuery("#arcontactus").contactUs("showPromptTyping"), _arCuTimeOut = setTimeout(function() {
        if (arCuPromptClosed) return !1;
        jQuery("#arcontactus").contactUs("showPrompt", {
            content: arCuMessages[t]
        }), t++, _arCuTimeOut = setTimeout(function() {
            if (arCuPromptClosed) return !1;
            arCuShowMessage(t)
        }, arCuMessageTime)
    }, arCuTypingTime)) : (arCuCloseLastMessage && jQuery("#arcontactus").contactUs("hidePrompt"), arCuLoop && arCuShowMessage(0))
}

function arCuShowMessages() {
    setTimeout(function() {
        clearTimeout(_arCuTimeOut), arCuShowMessage(0)
    }, arCuDelayFirst)
}! function(t) {
    function e(s, n) {
        this._initialized = !1, this.settings = null, this.options = t.extend({}, e.Defaults, n), this.$element = t(s), this.init(), this.x = 0, this.y = 0, this._interval, this._menuOpened = !1, this._callbackOpened = !1, this.countdown = null
    }
    e.Defaults = {
        align: "right",
        countdown: 0,
        drag: !1,
        buttonText: "Liên hệ",
        buttonSize: "large",
        menuSize: "normal",
        items: [],
        iconsAnimationSpeed: 1200,
        theme: "#FF961E",
        buttonIcon: '<svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"/></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"/></defs></svg>',
        closeIcon: '<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-4087 108)"><g id="Vector"><use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use></g></g><defs><path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path></defs></svg>'
    }, e.prototype.init = function() {
        this.destroy(), this.settings = t.extend({}, this.options), this.$element.addClass("arcontactus-widget").addClass("arcontactus-message"), "left" === this.settings.align ? this.$element.addClass("left") : this.$element.addClass("right"), this.settings.items.length ? (this._initCallbackBlock(), this._initMessengersBlock(), this._initMessageButton(), this._initPrompt(), this._initEvents(), this.startAnimation(), this.$element.addClass("active")) : console.info("jquery.contactus:no items"), this._initialized = !0, this.$element.trigger("arcontactus.init")
    }, e.prototype.destroy = function() {
        if (!this._initialized) return !1;
        this.$element.html(""), this._initialized = !1, this.$element.trigger("arcontactus.destroy")
    }, e.prototype._initCallbackBlock = function() {}, e.prototype._initMessengersBlock = function() {
        var e = t("<div>", {
            class: "messangers-block"
        });
        "normal" !== this.settings.menuSize && "large" !== this.settings.menuSize || e.addClass("lg"), "small" === this.settings.menuSize && e.addClass("sm"), this._appendMessengerIcons(e), this.$element.append(e)
    }, e.prototype._appendMessengerIcons = function(e) {
        t.each(this.settings.items, function(s) {
            if ("callback" == this.href) var n = t("<div>", {
                class: "messanger call-back " + (this.class ? this.class : "")
            });
            else if (n = t("<a>", {
                    class: "messanger " + (this.class ? this.class : ""),
                    id: this.id ? this.id : null,
                    href: this.href,
                    target: this.target ? this.target : "_blank"
                }), this.onClick) {
                var i = this;
                n.on("click", function(t) {
                    i.onClick(t)
                })
            }
            var a = t("<span>", {
                style: this.color ? "background-color:" + this.color : null
            });
            a.append(this.icon), n.append(a), n.append("<p>" + this.title + "</p>"), e.append(n)
        })
    }, e.prototype._initMessageButton = function() {
        var e = this,
            s = t("<div>", {
                class: "arcontactus-message-button",
                style: this._backgroundStyle()
            });
        "large" === this.settings.buttonSize && this.$element.addClass("lg"), "medium" === this.settings.buttonSize && this.$element.addClass("md"), "small" === this.settings.buttonSize && this.$element.addClass("sm");
        var n = t("<div>", {
            class: "static"
        });
        n.append(this.settings.buttonIcon), !1 !== this.settings.buttonText ? n.append("<p>" + this.settings.buttonText + "</p>") : s.addClass("no-text");
        var i = t("<div>", {
            class: "callback-state",
            style: e._colorStyle()
        });
        i.append(this.settings.callbackStateIcon);
        var a = t("<div>", {
                class: "icons hide"
            }),
            o = t("<div>", {
                class: "icons-line"
            });
        t.each(this.settings.items, function(s) {
            var n = t("<span>", {
                style: e._colorStyle()
            });
            n.append(this.icon), o.append(n)
        }), a.append(o);
        var r = t("<div>", {
            class: "arcontactus-close"
        });
        r.append(this.settings.closeIcon);
        var c = t("<div>", {
                class: "pulsation",
                style: e._backgroundStyle()
            }),
            l = t("<div>", {
                class: "pulsation",
                style: e._backgroundStyle()
            });
        s.append(n).append(i).append(a).append(r).append(c).append(l), this.$element.append(s)
    }, e.prototype._initPrompt = function() {
        var e = t("<div>", {
                class: "arcontactus-prompt"
            }),
            s = t("<div>", {
                class: "arcontactus-prompt-close",
                style: this._colorStyle()
            });
        s.append(this.settings.closeIcon);
        var n = t("<div>", {
            class: "arcontactus-prompt-inner"
        });
        e.append(s).append(n), this.$element.append(e)
    }, e.prototype._initEvents = function() {
        var e = this.$element,
            s = this;
        e.find(".arcontactus-message-button").on("mousedown", function(t) {
            s.x = t.pageX, s.y = t.pageY
        }).on("mouseup", function(t) {
            t.pageX === s.x && t.pageY === s.y && (s.toggleMenu(), t.preventDefault())
        }), this.settings.drag && (e.draggable(), e.get(0).addEventListener("touchmove", function(t) {
            var s = t.targetTouches[0];
            e.get(0).style.left = s.pageX - 25 + "px", e.get(0).style.top = s.pageY - 25 + "px", t.preventDefault()
        }, !1)), t(document).on("click", function(t) {
            s.closeMenu()
        }), e.on("click", function(t) {
            t.stopPropagation()
        }), e.find(".call-back").on("click", function() {
            s.openCallbackPopup()
        }), e.find(".callback-countdown-block-close").on("click", function() {
            null != s.countdown && (clearInterval(s.countdown), s.countdown = null), s.closeCallbackPopup()
        }), e.find(".arcontactus-prompt-close").on("click", function() {
            s.hidePrompt()
        })
    }, e.prototype.show = function() {
        this.$element.addClass("active"), this.$element.trigger("arcontactus.show")
    }, e.prototype.hide = function() {
        this.$element.removeClass("active"), this.$element.trigger("arcontactus.hide")
    }, e.prototype.openMenu = function() {
        var t = this.$element;
        t.find(".messangers-block").hasClass("show-messageners-block") || (this.stopAnimation(), t.find(".messangers-block, .arcontactus-close").addClass("show-messageners-block"), t.find(".icons, .static").addClass("hide"), t.find(".pulsation").addClass("stop"), this._menuOpened = !0, this.$element.trigger("arcontactus.openMenu"))
    }, e.prototype.closeMenu = function() {
        var t = this.$element;
        t.find(".messangers-block").hasClass("show-messageners-block") && (t.find(".messangers-block, .arcontactus-close").removeClass("show-messageners-block"), t.find(".icons, .static").removeClass("hide"), t.find(".pulsation").removeClass("stop"), this.startAnimation(), this._menuOpened = !1, this.$element.trigger("arcontactus.closeMenu"))
    }, e.prototype.toggleMenu = function() {
        var t = this.$element;
        if (this.hidePrompt(), t.find(".callback-countdown-block").hasClass("display-flex")) return !1;
        t.find(".messangers-block").hasClass("show-messageners-block") ? this.closeMenu() : this.openMenu(), this.$element.trigger("arcontactus.toggleMenu")
    }, e.prototype.openCallbackPopup = function() {
        var t = this.$element;
        t.addClass("opened"), this.closeMenu(), this.stopAnimation(), t.find(".icons, .static").addClass("hide"), t.find(".pulsation").addClass("stop"), t.find(".callback-countdown-block").addClass("display-flex"), this._callbackOpened = !0, this.$element.trigger("arcontactus.openCallbackPopup")
    }, e.prototype.closeCallbackPopup = function() {
        var t = this.$element;
        t.removeClass("opened"), t.find(".messangers-block").removeClass("show-messageners-block"), t.find(".arcontactus-close").removeClass("show-messageners-block"), t.find(".icons, .static").removeClass("hide"), this.startAnimation(), this._callbackOpened = !1, this.$element.trigger("arcontactus.closeCallbackPopup")
    }, e.prototype.startAnimation = function() {
        var t = this.$element,
            e = t.find(".icons-line"),
            s = t.find(".static"),
            n = t.find(".icons-line>span:first-child").width() + 40;
        if ("large" === this.settings.buttonSize) var i = 2,
            a = 0;
        "medium" === this.settings.buttonSize && (i = 4, a = -2), "small" === this.settings.buttonSize && (i = 4, a = -2);
        var o = t.find(".icons-line>span").length,
            r = 0;
        if (this.stopAnimation(), 0 === this.settings.iconsAnimationSpeed) return !1;
        this._interval = setInterval(function() {
            0 === r && (e.parent().removeClass("hide"), s.addClass("hide"));
            var t = "translate(" + -(n * r + i) + "px, " + a + "px)";
            e.css({
                "-webkit-transform": t,
                "-ms-transform": t,
                transform: t
            }), ++r > o && (r > o + 1 && (r = 0), e.parent().addClass("hide"), s.removeClass("hide"), t = "translate(" + -i + "px, " + a + "px)", e.css({
                "-webkit-transform": t,
                "-ms-transform": t,
                transform: t
            }))
        }, this.settings.iconsAnimationSpeed)
    }, e.prototype.stopAnimation = function() {
        clearInterval(this._interval);
        var t = this.$element,
            e = t.find(".icons-line"),
            s = t.find(".static");
        e.parent().addClass("hide"), s.removeClass("hide");
        var n = "translate(-2px, 0px)";
        e.css({
            "-webkit-transform": n,
            "-ms-transform": n,
            transform: n
        })
    }, e.prototype.showPrompt = function(t) {
        var e = this.$element.find(".arcontactus-prompt");
        t && t.content && e.find(".arcontactus-prompt-inner").html(t.content), e.addClass("active"), this.$element.trigger("arcontactus.showPrompt")
    }, e.prototype.hidePrompt = function() {
        this.$element.find(".arcontactus-prompt").removeClass("active"), this.$element.trigger("arcontactus.hidePrompt")
    }, e.prototype.showPromptTyping = function() {
        this.$element.find(".arcontactus-prompt").find(".arcontactus-prompt-inner").html(""), this._insertPromptTyping(), this.showPrompt({}), this.$element.trigger("arcontactus.showPromptTyping")
    }, e.prototype._insertPromptTyping = function() {
        var e = this.$element.find(".arcontactus-prompt-inner"),
            s = t("<div>", {
                class: "arcontactus-prompt-typing"
            }),
            n = t("<div>");
        s.append(n), s.append(n.clone()), s.append(n.clone()), e.append(s)
    }, e.prototype.hidePromptTyping = function() {
        this.$element.find(".arcontactus-prompt").removeClass("active"), this.$element.trigger("arcontactus.hidePromptTyping")
    }, e.prototype._backgroundStyle = function() {
        return "background-color: " + this.settings.theme
    }, e.prototype._colorStyle = function() {
        return "color: " + this.settings.theme
    }, t.fn.contactUs = function(s) {
        var n = Array.prototype.slice.call(arguments, 1);
        return this.each(function() {
            var i = t(this),
                a = i.data("ar.contactus");
            a || (a = new e(this, "object" == typeof s && s), i.data("ar.contactus", a)), "string" == typeof s && "_" !== s.charAt(0) && a[s].apply(a, n)
        })
    }, t.fn.contactUs.Constructor = e
}(jQuery);


var arCuMessages = ["Gia sư Blacasa xin chào!"];
var arCuLoop = false;
var arCuCloseLastMessage = false;
var arCuPromptClosed = false;
var _arCuTimeOut = null;
var arCuDelayFirst = 2000;
var arCuTypingTime = 2000;
var arCuMessageTime = 4000;
var arCuClosedCookie = 0;
var arcItems = [];
window.addEventListener('load', function() {
    arCuClosedCookie = arCuGetCookie('arcu-closed');
    jQuery('#arcontactus').on('arcontactus.init', function() {
        if (arCuClosedCookie) {
            return false;
        }
        arCuShowMessages();
    });
    jQuery('#arcontactus').on('arcontactus.openMenu', function() {
        clearTimeout(_arCuTimeOut);
        arCuPromptClosed = true;
        jQuery('#contact').contactUs('hidePrompt');
        arCuCreateCookie('arcu-closed', 1, 30);
    });
    jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
        clearTimeout(_arCuTimeOut);
        arCuPromptClosed = true;
        arCuCreateCookie('arcu-closed', 1, 30);
    });

    var arcItem = {};
    arcItem.id = 'msg-item-1';
    arcItem.class = 'msg-item-facebook-messenger';
    arcItem.title = 'Facebook Messenger';
    arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
    arcItem.href = 'https://m.me/BlacasaEducation';
    arcItem.color = '#567AFF';
    arcItems.push(arcItem);

    var arcItem = {};
    arcItem.id = 'msg-item-2';
    arcItem.class = 'msg-item-zalo';
    arcItem.title = 'Zalo Blacasa OA';
    arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path></svg>';
    arcItem.href = 'https://zalo.me/4166284432248305011';
    arcItem.color = '#2EA8FF';
    arcItems.push(arcItem);

    var arcItem = {};
    arcItem.id = 'msg-item-6';
    arcItem.class = 'msg-item-sms';
    arcItem.title = 'Gửi tin nhắn SMS 0898704869';
    arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M128 216c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 384c-28.3 0-56.3-4.3-83.2-12.8l-15.2-4.8-13 9.2c-23 16.3-58.5 35.3-102.6 39.6 12-15.1 29.8-40.4 40.8-69.6l7.1-18.7-13.7-14.6C47.3 313.7 32 277.6 32 240c0-97 100.5-176 224-176s224 79 224 176-100.5 176-224 176z"></path></svg>';
    arcItem.href = 'sms:0989704869';
    arcItem.color = '#1C9CC5';
    arcItems.push(arcItem);

    var arcItem = {};
    arcItem.id = 'msg-item-7';
    arcItem.class = 'msg-item-envelope';
    arcItem.title = 'Gửi Email Contact@blacasa.vn';
    arcItem.icon = '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
    arcItem.href = 'mailto:contact@blacasa.vn';
    arcItem.color = '#FF643A';
    arcItems.push(arcItem);

    var arcItem = {};
    arcItem.id = 'msg-item-8';
    arcItem.class = 'msg-item-phone';
    arcItem.title = 'Gọi Ngay 0989.704.869';
    arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
    arcItem.href = 'tel:0989704869';
    arcItem.color = '#4EB625';
    arcItems.push(arcItem);

    jQuery('#arcontactus').contactUs({
        items: arcItems
    });
});

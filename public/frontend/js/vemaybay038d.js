var Base64, isEqual;
if (typeof Travel == "undefined" && (Travel = { Version: "1.0.0.6", RequestTimeout: 9e4 }), typeof Travel.Embed == "undefined") { var ftlLang = vemaybay.language,
        ftlPath = vemaybay.path,
        ftlVesion = vemaybay.version;
    String.prototype.endsWith || (String.prototype.endsWith = function(n, t) { var i = this.toString(),
            r; return (typeof t != "number" || !isFinite(t) || Math.floor(t) !== t || t > i.length) && (t = i.length), t -= n.length, r = i.indexOf(n, t), r !== -1 && r === t });
    Base64 = { _keyStr: "VEMAYBAYABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01234567900022", encode: function(n) { var n, i, e, r, u, s, h, o, f, t; for (typeof n == "undefined" && (n = ""), i = "", t = 0, n = Base64._utf8_encode(n); t < n.length;) e = n.charCodeAt(t++), r = n.charCodeAt(t++), u = n.charCodeAt(t++), s = e >> 2, h = (e & 3) << 4 | r >> 4, o = (r & 15) << 2 | u >> 6, f = u & 63, isNaN(r) ? o = f = 64 : isNaN(u) && (f = 64), i = i + this._keyStr.charAt(s) + this._keyStr.charAt(h) + this._keyStr.charAt(o) + this._keyStr.charAt(f); return i }, decode: function(n) { var n, t, e, o, s, h, u, r, f, i; for (typeof n == "undefined" && (n = ""), t = "", i = 0, n = n.replace(/[^A-Za-z0-9\+\/\=]/g, ""); i < n.length;) h = this._keyStr.indexOf(n.charAt(i++)), u = this._keyStr.indexOf(n.charAt(i++)), r = this._keyStr.indexOf(n.charAt(i++)), f = this._keyStr.indexOf(n.charAt(i++)), e = h << 2 | u >> 4, o = (u & 15) << 4 | r >> 2, s = (r & 3) << 6 | f, t = t + String.fromCharCode(e), r != 64 && (t = t + String.fromCharCode(o)), f != 64 && (t = t + String.fromCharCode(s)); return Base64._utf8_decode(t) }, _utf8_encode: function(n) { var i, r, t; for (n = n.replace(/\r\n/g, "\n"), i = "", r = 0; r < n.length; r++) t = n.charCodeAt(r), t < 128 ? i += String.fromCharCode(t) : t > 127 && t < 2048 ? (i += String.fromCharCode(t >> 6 | 192), i += String.fromCharCode(t & 63 | 128)) : (i += String.fromCharCode(t >> 12 | 224), i += String.fromCharCode(t >> 6 & 63 | 128), i += String.fromCharCode(t & 63 | 128)); return i }, _utf8_decode: function(n) { for (var r = "", t = 0, i = c1 = c2 = 0; t < n.length;) i = n.charCodeAt(t), i < 128 ? (r += String.fromCharCode(i), t++) : i > 191 && i < 224 ? (c2 = n.charCodeAt(t + 1), r += String.fromCharCode((i & 31) << 6 | c2 & 63), t += 2) : (c2 = n.charCodeAt(t + 1), c3 = n.charCodeAt(t + 2), r += String.fromCharCode((i & 15) << 12 | (c2 & 63) << 6 | c3 & 63), t += 3); return r } };
    Travel.Connect = {};
    Travel.Embed = { Todo: function() { Travel.Embed.LoadCss(ftlPath.concat("/Resources/Styles/font-awesome.min.css"));
            Travel.Embed.LoadCss(ftlPath.concat("/Resources/Styles/vemaybay.min.css"));
            Travel.Embed.LoadJsBody(ftlPath.concat("/Resources/Js/luna.min.js"), function() { Travel.Embed.LoadJsBody(ftlPath.concat("/Resources/Js/geocode.min.js"), function() { Travel.Embed.LoadJsBody(ftlPath.concat("/Resources/Js/datepicker.min.js"), function() { Travel.Embed.LoadJsBody(ftlPath.concat("/Resources/Js/range.min.js"), function() { Travel.Embed.LoadJsBody(ftlPath.concat("/Resources/Js/language.min.js"), function() { Travel.Embed.LoadJsBody(ftlPath.concat("/Resources/Js/script.min.js"), function() { Travel.Embed.LoadJsBody(ftlPath.concat("/Resources/Js/embed.min.js"), function() { if ($("#vmbSearch").length > 0) Travel.Search.Form(), Travel.Func.PageOnload("search");
                                        else if ($("#vmbResult").length > 0) { var n = Travel.Result.Init();
                                            n && Travel.Func.PageOnload("result");
                                            Travel.Result.Waiting() }
                                        Travel.Date.CalendarVi();
                                        Travel.Func.Modal() }) }) }) }) }) }) }) }, LoadJsBody: function(n, t) { var r = [],
                u, i;
            $.isArray(n) ? r = n : r.push(n);
            typeof t == "undefined" && (t = function() {});
            u = r.length;
            i = 0;
            $.each(r, function(n, r) { var e, o, f;
                r = r.lastIndexOf("?") == -1 ? r + "?v=" + Travel.Version : r + "&v=" + Travel.Version;
                e = Base64.encode(r);
                document.getElementById(e) ? (i++, i == u && t()) : (o = document.getElementsByTagName("body"), f = document.createElement("script"), f.type = "text/javascript", f.async = !0, f.src = r, f.onload = f.onreadystatechange = function() { i++;
                    i == u && t() }, f.onerror = function() { i++;
                    i == u && t() }, document.body.appendChild(f)) }) }, LoadJsHeader: function(n, t) { typeof t == "undefined" && (t = function() {}); var r = document.getElementsByTagName("head")[0],
                i = document.createElement("script");
            i.type = "text/javascript";
            i.src = n;
            i.async = !0;
            r.appendChild(i) }, LoadCss: function(n, t) { var r = [],
                u, i;
            $.isArray(n) ? r = n : r.push(n);
            typeof t == "undefined" && (t = function() {});
            u = r.length;
            i = 0;
            $.each(r, function(n, r) { var e, o, f;
                r = r.lastIndexOf("?") == -1 ? r + "?v=" + Travel.Version : r + "&v=" + Travel.Version;
                e = Base64.encode(r);
                document.getElementById(e) ? (i++, i == u && t()) : (o = document.getElementsByTagName("head")[0], f = document.createElement("link"), f.id = e, f.rel = "stylesheet", f.type = "text/css", f.href = r, f.onload = f.onreadystatechange = function() { i++;
                    i == u && t() }, f.onerror = function() { i++;
                    i == u && t() }, f.media = "all", o.appendChild(f)) }) } };
    typeof jQuery == "undefined" ? Travel.Embed.LoadJsHeader(ftlPath.concat("/Resources/Js/jquery.js"), function() { var n = !1;
        n = $ == jQuery;
        $ = jQuery = jQuery.noConflict();
        n && ($ = jQuery);
        Travel.Embed.Todo() }) : (isEqual = !1, isEqual = $ == jQuery, $ = jQuery = jQuery.noConflict(), isEqual && ($ = jQuery), $(function() { Travel.Embed.Todo() })) }
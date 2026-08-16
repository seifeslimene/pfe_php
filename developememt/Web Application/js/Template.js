if (function(t, e) {
        "object" == typeof module && "object" == typeof module.exports ? module.exports = t.document ? e(t, !0) : function(t) {
            if (!t.document) throw new Error("jQuery requires a window with a document");
            return e(t)
        } : e(t)
    }("undefined" != typeof window ? window : this, function(t, e) {
            function n(t) {
                var e = t.length,
                    n = oe.type(t);
                return "function" === n || oe.isWindow(t) ? !1 : 1 === t.nodeType && e ? !0 : "array" === n || 0 === e || "number" == typeof e && e > 0 && e - 1 in t
            }

            function i(t, e, n) {
                if (oe.isFunction(e)) return oe.grep(t, function(t, i) {
                    return !!e.call(t, i, t) !== n
                });
                if (e.nodeType) return oe.grep(t, function(t) {
                    return t === e !== n
                });
                if ("string" == typeof e) {
                    if (fe.test(e)) return oe.filter(e, t, n);
                    e = oe.filter(e, t)
                }
                return oe.grep(t, function(t) {
                    return oe.inArray(t, e) >= 0 !== n
                })
            }

            function s(t, e) {
                do t = t[e]; while (t && 1 !== t.nodeType);
                return t
            }

            function o(t) {
                var e = xe[t] = {};
                return oe.each(t.match(we) || [], function(t, n) {
                    e[n] = !0
                }), e
            }

            function a() {
                ge.addEventListener ? (ge.removeEventListener("DOMContentLoaded", r, !1), t.removeEventListener("load", r, !1)) : (ge.detachEvent("onreadystatechange", r), t.detachEvent("onload", r))
            }

            function r() {
                (ge.addEventListener || "load" === event.type || "complete" === ge.readyState) && (a(), oe.ready())
            }

            function l(t, e, n) {
                if (void 0 === n && 1 === t.nodeType) {
                    var i = "data-" + e.replace(_e, "-$1").toLowerCase();
                    if (n = t.getAttribute(i), "string" == typeof n) {
                        try {
                            n = "true" === n ? !0 : "false" === n ? !1 : "null" === n ? null : +n + "" === n ? +n : ke.test(n) ? oe.parseJSON(n) : n
                        } catch (s) {}
                        oe.data(t, e, n)
                    } else n = void 0
                }
                return n
            }

            function c(t) {
                var e;
                for (e in t)
                    if (("data" !== e || !oe.isEmptyObject(t[e])) && "toJSON" !== e) return !1;
                return !0
            }

            function h(t, e, n, i) {
                if (oe.acceptData(t)) {
                    var s, o, a = oe.expando,
                        r = t.nodeType,
                        l = r ? oe.cache : t,
                        c = r ? t[a] : t[a] && a;
                    if (c && l[c] && (i || l[c].data) || void 0 !== n || "string" != typeof e) return c || (c = r ? t[a] = X.pop() || oe.guid++ : a), l[c] || (l[c] = r ? {} : {
                        toJSON: oe.noop
                    }), ("object" == typeof e || "function" == typeof e) && (i ? l[c] = oe.extend(l[c], e) : l[c].data = oe.extend(l[c].data, e)), o = l[c], i || (o.data || (o.data = {}), o = o.data), void 0 !== n && (o[oe.camelCase(e)] = n), "string" == typeof e ? (s = o[e], null == s && (s = o[oe.camelCase(e)])) : s = o, s
                }
            }

            function u(t, e, n) {
                if (oe.acceptData(t)) {
                    var i, s, o = t.nodeType,
                        a = o ? oe.cache : t,
                        r = o ? t[oe.expando] : oe.expando;
                    if (a[r]) {
                        if (e && (i = n ? a[r] : a[r].data)) {
                            oe.isArray(e) ? e = e.concat(oe.map(e, oe.camelCase)) : e in i ? e = [e] : (e = oe.camelCase(e), e = e in i ? [e] : e.split(" ")), s = e.length;
                            for (; s--;) delete i[e[s]];
                            if (n ? !c(i) : !oe.isEmptyObject(i)) return
                        }(n || (delete a[r].data, c(a[r]))) && (o ? oe.cleanData([t], !0) : ie.deleteExpando || a != a.window ? delete a[r] : a[r] = null)
                    }
                }
            }

            function d() {
                return !0
            }

            function f() {
                return !1
            }

            function p() {
                try {
                    return ge.activeElement
                } catch (t) {}
            }

            function g(t) {
                var e = He.split("|"),
                    n = t.createDocumentFragment();
                if (n.createElement)
                    for (; e.length;) n.createElement(e.pop());
                return n
            }

            function m(t, e) {
                var n, i, s = 0,
                    o = typeof t.getElementsByTagName !== De ? t.getElementsByTagName(e || "*") : typeof t.querySelectorAll !== De ? t.querySelectorAll(e || "*") : void 0;
                if (!o)
                    for (o = [], n = t.childNodes || t; null != (i = n[s]); s++) !e || oe.nodeName(i, e) ? o.push(i) : oe.merge(o, m(i, e));
                return void 0 === e || e && oe.nodeName(t, e) ? oe.merge([t], o) : o
            }

            function v(t) {
                Ne.test(t.type) && (t.defaultChecked = t.checked)
            }

            function b(t, e) {
                return oe.nodeName(t, "table") && oe.nodeName(11 !== e.nodeType ? e : e.firstChild, "tr") ? t.getElementsByTagName("tbody")[0] || t.appendChild(t.ownerDocument.createElement("tbody")) : t
            }

            function y(t) {
                return t.type = (null !== oe.find.attr(t, "type")) + "/" + t.type, t
            }

            function w(t) {
                var e = Xe.exec(t.type);
                return e ? t.type = e[1] : t.removeAttribute("type"), t
            }

            function x(t, e) {
                for (var n, i = 0; null != (n = t[i]); i++) oe._data(n, "globalEval", !e || oe._data(e[i], "globalEval"))
            }

            function C(t, e) {
                if (1 === e.nodeType && oe.hasData(t)) {
                    var n, i, s, o = oe._data(t),
                        a = oe._data(e, o),
                        r = o.events;
                    if (r) {
                        delete a.handle, a.events = {};
                        for (n in r)
                            for (i = 0, s = r[n].length; s > i; i++) oe.event.add(e, n, r[n][i])
                    }
                    a.data && (a.data = oe.extend({}, a.data))
                }
            }

            function S(t, e) {
                var n, i, s;
                if (1 === e.nodeType) {
                    if (n = e.nodeName.toLowerCase(), !ie.noCloneEvent && e[oe.expando]) {
                        s = oe._data(e);
                        for (i in s.events) oe.removeEvent(e, i, s.handle);
                        e.removeAttribute(oe.expando)
                    }
                    "script" === n && e.text !== t.text ? (y(e).text = t.text, w(e)) : "object" === n ? (e.parentNode && (e.outerHTML = t.outerHTML), ie.html5Clone && t.innerHTML && !oe.trim(e.innerHTML) && (e.innerHTML = t.innerHTML)) : "input" === n && Ne.test(t.type) ? (e.defaultChecked = e.checked = t.checked, e.value !== t.value && (e.value = t.value)) : "option" === n ? e.defaultSelected = e.selected = t.defaultSelected : ("input" === n || "textarea" === n) && (e.defaultValue = t.defaultValue)
                }
            }

            function D(e, n) {
                var i = oe(n.createElement(e)).appendTo(n.body),
                    s = t.getDefaultComputedStyle ? t.getDefaultComputedStyle(i[0]).display : oe.css(i[0], "display");
                return i.detach(), s
            }

            function k(t) {
                var e = ge,
                    n = tn[t];
                return n || (n = D(t, e), "none" !== n && n || (Qe = (Qe || oe("<iframe frameborder='0' width='0' height='0'/>")).appendTo(e.documentElement), e = (Qe[0].contentWindow || Qe[0].contentDocument).document, e.write(), e.close(), n = D(t, e), Qe.detach()), tn[t] = n), n
            }

            function _(t, e) {
                return {
                    get: function() {
                        var n = t();
                        if (null != n) return n ? void delete this.get : (this.get = e).apply(this, arguments)
                    }
                }
            }

            function T(t, e) {
                if (e in t) return e;
                for (var n = e.charAt(0).toUpperCase() + e.slice(1), i = e, s = pn.length; s--;)
                    if (e = pn[s] + n, e in t) return e;
                return i
            }

            function M(t, e) {
                for (var n, i, s, o = [], a = 0, r = t.length; r > a; a++) i = t[a], i.style && (o[a] = oe._data(i, "olddisplay"), n = i.style.display, e ? (o[a] || "none" !== n || (i.style.display = ""), "" === i.style.display && Ee(i) && (o[a] = oe._data(i, "olddisplay", k(i.nodeName)))) : o[a] || (s = Ee(i), (n && "none" !== n || !s) && oe._data(i, "olddisplay", s ? n : oe.css(i, "display"))));
                for (a = 0; r > a; a++) i = t[a], i.style && (e && "none" !== i.style.display && "" !== i.style.display || (i.style.display = e ? o[a] || "" : "none"));
                return t
            }

            function E(t, e, n) {
                var i = hn.exec(e);
                return i ? Math.max(0, i[1] - (n || 0)) + (i[2] || "px") : e
            }

            function F(t, e, n, i, s) {
                for (var o = n === (i ? "border" : "content") ? 4 : "width" === e ? 1 : 0, a = 0; 4 > o; o += 2) "margin" === n && (a += oe.css(t, n + Me[o], !0, s)), i ? ("content" === n && (a -= oe.css(t, "padding" + Me[o], !0, s)), "margin" !== n && (a -= oe.css(t, "border" + Me[o] + "Width", !0, s))) : (a += oe.css(t, "padding" + Me[o], !0, s), "padding" !== n && (a += oe.css(t, "border" + Me[o] + "Width", !0, s)));
                return a
            }

            function N(t, e, n) {
                var i = !0,
                    s = "width" === e ? t.offsetWidth : t.offsetHeight,
                    o = en(t),
                    a = ie.boxSizing() && "border-box" === oe.css(t, "boxSizing", !1, o);
                if (0 >= s || null == s) {
                    if (s = nn(t, e, o), (0 > s || null == s) && (s = t.style[e]), on.test(s)) return s;
                    i = a && (ie.boxSizingReliable() || s === t.style[e]), s = parseFloat(s) || 0
                }
                return s + F(t, e, n || (a ? "border" : "content"), i, o) + "px"
            }

            function A(t, e, n, i, s) {
                return new A.prototype.init(t, e, n, i, s)
            }

            function I() {
                return setTimeout(function() {
                    gn = void 0
                }), gn = oe.now()
            }

            function L(t, e) {
                var n, i = {
                        height: t
                    },
                    s = 0;
                for (e = e ? 1 : 0; 4 > s; s += 2 - e) n = Me[s], i["margin" + n] = i["padding" + n] = t;
                return e && (i.opacity = i.width = t), i
            }

            function P(t, e, n) {
                for (var i, s = (xn[e] || []).concat(xn["*"]), o = 0, a = s.length; a > o; o++)
                    if (i = s[o].call(n, e, t)) return i
            }

            function O(t, e, n) {
                var i, s, o, a, r, l, c, h, u = this,
                    d = {},
                    f = t.style,
                    p = t.nodeType && Ee(t),
                    g = oe._data(t, "fxshow");
                n.queue || (r = oe._queueHooks(t, "fx"), null == r.unqueued && (r.unqueued = 0, l = r.empty.fire, r.empty.fire = function() {
                    r.unqueued || l()
                }), r.unqueued++, u.always(function() {
                    u.always(function() {
                        r.unqueued--, oe.queue(t, "fx").length || r.empty.fire()
                    })
                })), 1 === t.nodeType && ("height" in e || "width" in e) && (n.overflow = [f.overflow, f.overflowX, f.overflowY], c = oe.css(t, "display"), h = k(t.nodeName), "none" === c && (c = h), "inline" === c && "none" === oe.css(t, "float") && (ie.inlineBlockNeedsLayout && "inline" !== h ? f.zoom = 1 : f.display = "inline-block")), n.overflow && (f.overflow = "hidden", ie.shrinkWrapBlocks() || u.always(function() {
                    f.overflow = n.overflow[0], f.overflowX = n.overflow[1], f.overflowY = n.overflow[2]
                }));
                for (i in e)
                    if (s = e[i], vn.exec(s)) {
                        if (delete e[i], o = o || "toggle" === s, s === (p ? "hide" : "show")) {
                            if ("show" !== s || !g || void 0 === g[i]) continue;
                            p = !0
                        }
                        d[i] = g && g[i] || oe.style(t, i)
                    }
                if (!oe.isEmptyObject(d)) {
                    g ? "hidden" in g && (p = g.hidden) : g = oe._data(t, "fxshow", {}), o && (g.hidden = !p), p ? oe(t).show() : u.done(function() {
                        oe(t).hide()
                    }), u.done(function() {
                        var e;
                        oe._removeData(t, "fxshow");
                        for (e in d) oe.style(t, e, d[e])
                    });
                    for (i in d) a = P(p ? g[i] : 0, i, u), i in g || (g[i] = a.start, p && (a.end = a.start, a.start = "width" === i || "height" === i ? 1 : 0))
                }
            }

            function H(t, e) {
                var n, i, s, o, a;
                for (n in t)
                    if (i = oe.camelCase(n), s = e[i], o = t[n], oe.isArray(o) && (s = o[1], o = t[n] = o[0]), n !== i && (t[i] = o, delete t[n]), a = oe.cssHooks[i], a && "expand" in a) {
                        o = a.expand(o), delete t[i];
                        for (n in o) n in t || (t[n] = o[n], e[n] = s)
                    } else e[i] = s
            }

            function R(t, e, n) {
                var i, s, o = 0,
                    a = wn.length,
                    r = oe.Deferred().always(function() {
                        delete l.elem
                    }),
                    l = function() {
                        if (s) return !1;
                        for (var e = gn || I(), n = Math.max(0, c.startTime + c.duration - e), i = n / c.duration || 0, o = 1 - i, a = 0, l = c.tweens.length; l > a; a++) c.tweens[a].run(o);
                        return r.notifyWith(t, [c, o, n]), 1 > o && l ? n : (r.resolveWith(t, [c]), !1)
                    },
                    c = r.promise({
                        elem: t,
                        props: oe.extend({}, e),
                        opts: oe.extend(!0, {
                            specialEasing: {}
                        }, n),
                        originalProperties: e,
                        originalOptions: n,
                        startTime: gn || I(),
                        duration: n.duration,
                        tweens: [],
                        createTween: function(e, n) {
                            var i = oe.Tween(t, c.opts, e, n, c.opts.specialEasing[e] || c.opts.easing);
                            return c.tweens.push(i), i
                        },
                        stop: function(e) {
                            var n = 0,
                                i = e ? c.tweens.length : 0;
                            if (s) return this;
                            for (s = !0; i > n; n++) c.tweens[n].run(1);
                            return e ? r.resolveWith(t, [c, e]) : r.rejectWith(t, [c, e]), this
                        }
                    }),
                    h = c.props;
                for (H(h, c.opts.specialEasing); a > o; o++)
                    if (i = wn[o].call(c, t, h, c.opts)) return i;
                return oe.map(h, P, c), oe.isFunction(c.opts.start) && c.opts.start.call(t, c), oe.fx.timer(oe.extend(l, {
                    elem: t,
                    anim: c,
                    queue: c.opts.queue
                })), c.progress(c.opts.progress).done(c.opts.done, c.opts.complete).fail(c.opts.fail).always(c.opts.always)
            }

            function z(t) {
                return function(e, n) {
                    "string" != typeof e && (n = e, e = "*");
                    var i, s = 0,
                        o = e.toLowerCase().match(we) || [];
                    if (oe.isFunction(n))
                        for (; i = o[s++];) "+" === i.charAt(0) ? (i = i.slice(1) || "*", (t[i] = t[i] || []).unshift(n)) : (t[i] = t[i] || []).push(n)
                }
            }

            function $(t, e, n, i) {
                function s(r) {
                    var l;
                    return o[r] = !0, oe.each(t[r] || [], function(t, r) {
                        var c = r(e, n, i);
                        return "string" != typeof c || a || o[c] ? a ? !(l = c) : void 0 : (e.dataTypes.unshift(c), s(c), !1)
                    }), l
                }
                var o = {},
                    a = t === qn;
                return s(e.dataTypes[0]) || !o["*"] && s("*")
            }

            function j(t, e) {
                var n, i, s = oe.ajaxSettings.flatOptions || {};
                for (i in e) void 0 !== e[i] && ((s[i] ? t : n || (n = {}))[i] = e[i]);
                return n && oe.extend(!0, t, n), t
            }

            function W(t, e, n) {
                for (var i, s, o, a, r = t.contents, l = t.dataTypes;
                    "*" === l[0];) l.shift(), void 0 === s && (s = t.mimeType || e.getResponseHeader("Content-Type"));
                if (s)
                    for (a in r)
                        if (r[a] && r[a].test(s)) {
                            l.unshift(a);
                            break
                        }
                if (l[0] in n) o = l[0];
                else {
                    for (a in n) {
                        if (!l[0] || t.converters[a + " " + l[0]]) {
                            o = a;
                            break
                        }
                        i || (i = a)
                    }
                    o = o || i
                }
                return o ? (o !== l[0] && l.unshift(o), n[o]) : void 0
            }

            function B(t, e, n, i) {
                var s, o, a, r, l, c = {},
                    h = t.dataTypes.slice();
                if (h[1])
                    for (a in t.converters) c[a.toLowerCase()] = t.converters[a];
                for (o = h.shift(); o;)
                    if (t.responseFields[o] && (n[t.responseFields[o]] = e), !l && i && t.dataFilter && (e = t.dataFilter(e, t.dataType)), l = o, o = h.shift())
                        if ("*" === o) o = l;
                        else if ("*" !== l && l !== o) {
                    if (a = c[l + " " + o] || c["* " + o], !a)
                        for (s in c)
                            if (r = s.split(" "), r[1] === o && (a = c[l + " " + r[0]] || c["* " + r[0]])) {
                                a === !0 ? a = c[s] : c[s] !== !0 && (o = r[0], h.unshift(r[1]));
                                break
                            }
                    if (a !== !0)
                        if (a && t["throws"]) e = a(e);
                        else try {
                            e = a(e)
                        } catch (u) {
                            return {
                                state: "parsererror",
                                error: a ? u : "No conversion from " + l + " to " + o
                            }
                        }
                }
                return {
                    state: "success",
                    data: e
                }
            }

            function U(t, e, n, i) {
                var s;
                if (oe.isArray(e)) oe.each(e, function(e, s) {
                    n || Gn.test(t) ? i(t, s) : U(t + "[" + ("object" == typeof s ? e : "") + "]", s, n, i)
                });
                else if (n || "object" !== oe.type(e)) i(t, e);
                else
                    for (s in e) U(t + "[" + s + "]", e[s], n, i)
            }

            function q() {
                try {
                    return new t.XMLHttpRequest
                } catch (e) {}
            }

            function Y() {
                try {
                    return new t.ActiveXObject("Microsoft.XMLHTTP")
                } catch (e) {}
            }

            function V(t) {
                return oe.isWindow(t) ? t : 9 === t.nodeType ? t.defaultView || t.parentWindow : !1
            }
            var X = [],
                G = X.slice,
                J = X.concat,
                K = X.push,
                Z = X.indexOf,
                Q = {},
                te = Q.toString,
                ee = Q.hasOwnProperty,
                ne = "".trim,
                ie = {},
                se = "1.11.0",
                oe = function(t, e) {
                    return new oe.fn.init(t, e)
                },
                ae = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
                re = /^-ms-/,
                le = /-([\da-z])/gi,
                ce = function(t, e) {
                    return e.toUpperCase()
                };
            oe.fn = oe.prototype = {
                jquery: se,
                constructor: oe,
                selector: "",
                length: 0,
                toArray: function() {
                    return G.call(this)
                },
                get: function(t) {
                    return null != t ? 0 > t ? this[t + this.length] : this[t] : G.call(this)
                },
                pushStack: function(t) {
                    var e = oe.merge(this.constructor(), t);
                    return e.prevObject = this, e.context = this.context, e
                },
                each: function(t, e) {
                    return oe.each(this, t, e)
                },
                map: function(t) {
                    return this.pushStack(oe.map(this, function(e, n) {
                        return t.call(e, n, e)
                    }))
                },
                slice: function() {
                    return this.pushStack(G.apply(this, arguments))
                },
                first: function() {
                    return this.eq(0)
                },
                last: function() {
                    return this.eq(-1)
                },
                eq: function(t) {
                    var e = this.length,
                        n = +t + (0 > t ? e : 0);
                    return this.pushStack(n >= 0 && e > n ? [this[n]] : [])
                },
                end: function() {
                    return this.prevObject || this.constructor(null)
                },
                push: K,
                sort: X.sort,
                splice: X.splice
            }, oe.extend = oe.fn.extend = function() {
                var t, e, n, i, s, o, a = arguments[0] || {},
                    r = 1,
                    l = arguments.length,
                    c = !1;
                for ("boolean" == typeof a && (c = a, a = arguments[r] || {}, r++), "object" == typeof a || oe.isFunction(a) || (a = {}), r === l && (a = this, r--); l > r; r++)
                    if (null != (s = arguments[r]))
                        for (i in s) t = a[i], n = s[i], a !== n && (c && n && (oe.isPlainObject(n) || (e = oe.isArray(n))) ? (e ? (e = !1, o = t && oe.isArray(t) ? t : []) : o = t && oe.isPlainObject(t) ? t : {}, a[i] = oe.extend(c, o, n)) : void 0 !== n && (a[i] = n));
                return a
            }, oe.extend({
                expando: "jQuery" + (se + Math.random()).replace(/\D/g, ""),
                isReady: !0,
                error: function(t) {
                    throw new Error(t)
                },
                noop: function() {},
                isFunction: function(t) {
                    return "function" === oe.type(t)
                },
                isArray: Array.isArray || function(t) {
                    return "array" === oe.type(t)
                },
                isWindow: function(t) {
                    return null != t && t == t.window
                },
                isNumeric: function(t) {
                    return t - parseFloat(t) >= 0
                },
                isEmptyObject: function(t) {
                    var e;
                    for (e in t) return !1;
                    return !0
                },
                isPlainObject: function(t) {
                    var e;
                    if (!t || "object" !== oe.type(t) || t.nodeType || oe.isWindow(t)) return !1;
                    try {
                        if (t.constructor && !ee.call(t, "constructor") && !ee.call(t.constructor.prototype, "isPrototypeOf")) return !1
                    } catch (n) {
                        return !1
                    }
                    if (ie.ownLast)
                        for (e in t) return ee.call(t, e);
                    for (e in t);
                    return void 0 === e || ee.call(t, e)
                },
                type: function(t) {
                    return null == t ? t + "" : "object" == typeof t || "function" == typeof t ? Q[te.call(t)] || "object" : typeof t
                },
                globalEval: function(e) {
                    e && oe.trim(e) && (t.execScript || function(e) {
                        t.eval.call(t, e)
                    })(e)
                },
                camelCase: function(t) {
                    return t.replace(re, "ms-").replace(le, ce)
                },
                nodeName: function(t, e) {
                    return t.nodeName && t.nodeName.toLowerCase() === e.toLowerCase()
                },
                each: function(t, e, i) {
                    var s, o = 0,
                        a = t.length,
                        r = n(t);
                    if (i) {
                        if (r)
                            for (; a > o && (s = e.apply(t[o], i), s !== !1); o++);
                        else
                            for (o in t)
                                if (s = e.apply(t[o], i), s === !1) break
                    } else if (r)
                        for (; a > o && (s = e.call(t[o], o, t[o]), s !== !1); o++);
                    else
                        for (o in t)
                            if (s = e.call(t[o], o, t[o]), s === !1) break; return t
                },
                trim: ne && !ne.call("\ufeff\xa0") ? function(t) {
                    return null == t ? "" : ne.call(t)
                } : function(t) {
                    return null == t ? "" : (t + "").replace(ae, "")
                },
                makeArray: function(t, e) {
                    var i = e || [];
                    return null != t && (n(Object(t)) ? oe.merge(i, "string" == typeof t ? [t] : t) : K.call(i, t)), i
                },
                inArray: function(t, e, n) {
                    var i;
                    if (e) {
                        if (Z) return Z.call(e, t, n);
                        for (i = e.length, n = n ? 0 > n ? Math.max(0, i + n) : n : 0; i > n; n++)
                            if (n in e && e[n] === t) return n
                    }
                    return -1
                },
                merge: function(t, e) {
                    for (var n = +e.length, i = 0, s = t.length; n > i;) t[s++] = e[i++];
                    if (n !== n)
                        for (; void 0 !== e[i];) t[s++] = e[i++];
                    return t.length = s, t
                },
                grep: function(t, e, n) {
                    for (var i, s = [], o = 0, a = t.length, r = !n; a > o; o++) i = !e(t[o], o), i !== r && s.push(t[o]);
                    return s
                },
                map: function(t, e, i) {
                    var s, o = 0,
                        a = t.length,
                        r = n(t),
                        l = [];
                    if (r)
                        for (; a > o; o++) s = e(t[o], o, i), null != s && l.push(s);
                    else
                        for (o in t) s = e(t[o], o, i), null != s && l.push(s);
                    return J.apply([], l)
                },
                guid: 1,
                proxy: function(t, e) {
                    var n, i, s;
                    return "string" == typeof e && (s = t[e], e = t, t = s), oe.isFunction(t) ? (n = G.call(arguments, 2), i = function() {
                        return t.apply(e || this, n.concat(G.call(arguments)))
                    }, i.guid = t.guid = t.guid || oe.guid++, i) : void 0
                },
                now: function() {
                    return +new Date
                },
                support: ie
            }), oe.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(t, e) {
                Q["[object " + e + "]"] = e.toLowerCase()
            });
            var he = function(t) {
                    function e(t, e, n, i) {
                        var s, o, a, r, l, c, u, p, g, m;
                        if ((e ? e.ownerDocument || e : $) !== A && N(e), e = e || A, n = n || [], !t || "string" != typeof t) return n;
                        if (1 !== (r = e.nodeType) && 9 !== r) return [];
                        if (L && !i) {
                            if (s = be.exec(t))
                                if (a = s[1]) {
                                    if (9 === r) {
                                        if (o = e.getElementById(a), !o || !o.parentNode) return n;
                                        if (o.id === a) return n.push(o), n
                                    } else if (e.ownerDocument && (o = e.ownerDocument.getElementById(a)) && R(e, o) && o.id === a) return n.push(o), n
                                } else {
                                    if (s[2]) return Q.apply(n, e.getElementsByTagName(t)), n;
                                    if ((a = s[3]) && S.getElementsByClassName && e.getElementsByClassName) return Q.apply(n, e.getElementsByClassName(a)), n
                                }
                            if (S.qsa && (!P || !P.test(t))) {
                                if (p = u = z, g = e, m = 9 === r && t, 1 === r && "object" !== e.nodeName.toLowerCase()) {
                                    for (c = d(t), (u = e.getAttribute("id")) ? p = u.replace(we, "\\$&") : e.setAttribute("id", p), p = "[id='" + p + "'] ", l = c.length; l--;) c[l] = p + f(c[l]);
                                    g = ye.test(t) && h(e.parentNode) || e, m = c.join(",")
                                }
                                if (m) try {
                                    return Q.apply(n, g.querySelectorAll(m)), n
                                } catch (v) {} finally {
                                    u || e.removeAttribute("id")
                                }
                            }
                        }
                        return x(t.replace(le, "$1"), e, n, i)
                    }

                    function n() {
                        function t(n, i) {
                            return e.push(n + " ") > D.cacheLength && delete t[e.shift()], t[n + " "] = i
                        }
                        var e = [];
                        return t
                    }

                    function i(t) {
                        return t[z] = !0, t
                    }

                    function s(t) {
                        var e = A.createElement("div");
                        try {
                            return !!t(e)
                        } catch (n) {
                            return !1
                        } finally {
                            e.parentNode && e.parentNode.removeChild(e), e = null
                        }
                    }

                    function o(t, e) {
                        for (var n = t.split("|"), i = t.length; i--;) D.attrHandle[n[i]] = e
                    }

                    function a(t, e) {
                        var n = e && t,
                            i = n && 1 === t.nodeType && 1 === e.nodeType && (~e.sourceIndex || X) - (~t.sourceIndex || X);
                        if (i) return i;
                        if (n)
                            for (; n = n.nextSibling;)
                                if (n === e) return -1;
                        return t ? 1 : -1
                    }

                    function r(t) {
                        return function(e) {
                            var n = e.nodeName.toLowerCase();
                            return "input" === n && e.type === t
                        }
                    }

                    function l(t) {
                        return function(e) {
                            var n = e.nodeName.toLowerCase();
                            return ("input" === n || "button" === n) && e.type === t
                        }
                    }

                    function c(t) {
                        return i(function(e) {
                            return e = +e, i(function(n, i) {
                                for (var s, o = t([], n.length, e), a = o.length; a--;) n[s = o[a]] && (n[s] = !(i[s] = n[s]))
                            })
                        })
                    }

                    function h(t) {
                        return t && typeof t.getElementsByTagName !== V && t
                    }

                    function u() {}

                    function d(t, n) {
                        var i, s, o, a, r, l, c, h = U[t + " "];
                        if (h) return n ? 0 : h.slice(0);
                        for (r = t, l = [], c = D.preFilter; r;) {
                            (!i || (s = ce.exec(r))) && (s && (r = r.slice(s[0].length) || r), l.push(o = [])), i = !1, (s = he.exec(r)) && (i = s.shift(), o.push({
                                value: i,
                                type: s[0].replace(le, " ")
                            }), r = r.slice(i.length));
                            for (a in D.filter) !(s = pe[a].exec(r)) || c[a] && !(s = c[a](s)) || (i = s.shift(), o.push({
                                value: i,
                                type: a,
                                matches: s
                            }), r = r.slice(i.length));
                            if (!i) break
                        }
                        return n ? r.length : r ? e.error(t) : U(t, l).slice(0)
                    }

                    function f(t) {
                        for (var e = 0, n = t.length, i = ""; n > e; e++) i += t[e].value;
                        return i
                    }

                    function p(t, e, n) {
                        var i = e.dir,
                            s = n && "parentNode" === i,
                            o = W++;
                        return e.first ? function(e, n, o) {
                            for (; e = e[i];)
                                if (1 === e.nodeType || s) return t(e, n, o)
                        } : function(e, n, a) {
                            var r, l, c = [j, o];
                            if (a) {
                                for (; e = e[i];)
                                    if ((1 === e.nodeType || s) && t(e, n, a)) return !0
                            } else
                                for (; e = e[i];)
                                    if (1 === e.nodeType || s) {
                                        if (l = e[z] || (e[z] = {}), (r = l[i]) && r[0] === j && r[1] === o) return c[2] = r[2];
                                        if (l[i] = c, c[2] = t(e, n, a)) return !0
                                    }
                        }
                    }

                    function g(t) {
                        return t.length > 1 ? function(e, n, i) {
                            for (var s = t.length; s--;)
                                if (!t[s](e, n, i)) return !1;
                            return !0
                        } : t[0]
                    }

                    function m(t, e, n, i, s) {
                        for (var o, a = [], r = 0, l = t.length, c = null != e; l > r; r++)(o = t[r]) && (!n || n(o, i, s)) && (a.push(o), c && e.push(r));
                        return a
                    }

                    function v(t, e, n, s, o, a) {
                        return s && !s[z] && (s = v(s)), o && !o[z] && (o = v(o, a)), i(function(i, a, r, l) {
                            var c, h, u, d = [],
                                f = [],
                                p = a.length,
                                g = i || w(e || "*", r.nodeType ? [r] : r, []),
                                v = !t || !i && e ? g : m(g, d, t, r, l),
                                b = n ? o || (i ? t : p || s) ? [] : a : v;
                            if (n && n(v, b, r, l), s)
                                for (c = m(b, f), s(c, [], r, l), h = c.length; h--;)(u = c[h]) && (b[f[h]] = !(v[f[h]] = u));
                            if (i) {
                                if (o || t) {
                                    if (o) {
                                        for (c = [], h = b.length; h--;)(u = b[h]) && c.push(v[h] = u);
                                        o(null, b = [], c, l)
                                    }
                                    for (h = b.length; h--;)(u = b[h]) && (c = o ? ee.call(i, u) : d[h]) > -1 && (i[c] = !(a[c] = u))
                                }
                            } else b = m(b === a ? b.splice(p, b.length) : b), o ? o(null, a, b, l) : Q.apply(a, b)
                        })
                    }

                    function b(t) {
                        for (var e, n, i, s = t.length, o = D.relative[t[0].type], a = o || D.relative[" "], r = o ? 1 : 0, l = p(function(t) {
                                return t === e
                            }, a, !0), c = p(function(t) {
                                return ee.call(e, t) > -1
                            }, a, !0), h = [function(t, n, i) {
                                return !o && (i || n !== M) || ((e = n).nodeType ? l(t, n, i) : c(t, n, i))
                            }]; s > r; r++)
                            if (n = D.relative[t[r].type]) h = [p(g(h), n)];
                            else {
                                if (n = D.filter[t[r].type].apply(null, t[r].matches), n[z]) {
                                    for (i = ++r; s > i && !D.relative[t[i].type]; i++);
                                    return v(r > 1 && g(h), r > 1 && f(t.slice(0, r - 1).concat({
                                        value: " " === t[r - 2].type ? "*" : ""
                                    })).replace(le, "$1"), n, i > r && b(t.slice(r, i)), s > i && b(t = t.slice(i)), s > i && f(t))
                                }
                                h.push(n)
                            }
                        return g(h)
                    }

                    function y(t, n) {
                        var s = n.length > 0,
                            o = t.length > 0,
                            a = function(i, a, r, l, c) {
                                var h, u, d, f = 0,
                                    p = "0",
                                    g = i && [],
                                    v = [],
                                    b = M,
                                    y = i || o && D.find.TAG("*", c),
                                    w = j += null == b ? 1 : Math.random() || .1,
                                    x = y.length;
                                for (c && (M = a !== A && a); p !== x && null != (h = y[p]); p++) {
                                    if (o && h) {
                                        for (u = 0; d = t[u++];)
                                            if (d(h, a, r)) {
                                                l.push(h);
                                                break
                                            }
                                        c && (j = w)
                                    }
                                    s && ((h = !d && h) && f--, i && g.push(h))
                                }
                                if (f += p, s && p !== f) {
                                    for (u = 0; d = n[u++];) d(g, v, a, r);
                                    if (i) {
                                        if (f > 0)
                                            for (; p--;) g[p] || v[p] || (v[p] = K.call(l));
                                        v = m(v)
                                    }
                                    Q.apply(l, v), c && !i && v.length > 0 && f + n.length > 1 && e.uniqueSort(l)
                                }
                                return c && (j = w, M = b), g
                            };
                        return s ? i(a) : a
                    }

                    function w(t, n, i) {
                        for (var s = 0, o = n.length; o > s; s++) e(t, n[s], i);
                        return i
                    }

                    function x(t, e, n, i) {
                        var s, o, a, r, l, c = d(t);
                        if (!i && 1 === c.length) {
                            if (o = c[0] = c[0].slice(0), o.length > 2 && "ID" === (a = o[0]).type && S.getById && 9 === e.nodeType && L && D.relative[o[1].type]) {
                                if (e = (D.find.ID(a.matches[0].replace(xe, Ce), e) || [])[0], !e) return n;
                                t = t.slice(o.shift().value.length)
                            }
                            for (s = pe.needsContext.test(t) ? 0 : o.length; s-- && (a = o[s], !D.relative[r = a.type]);)
                                if ((l = D.find[r]) && (i = l(a.matches[0].replace(xe, Ce), ye.test(o[0].type) && h(e.parentNode) || e))) {
                                    if (o.splice(s, 1), t = i.length && f(o), !t) return Q.apply(n, i), n;
                                    break
                                }
                        }
                        return T(t, c)(i, e, !L, n, ye.test(t) && h(e.parentNode) || e), n
                    }
                    var C, S, D, k, _, T, M, E, F, N, A, I, L, P, O, H, R, z = "sizzle" + -new Date,
                        $ = t.document,
                        j = 0,
                        W = 0,
                        B = n(),
                        U = n(),
                        q = n(),
                        Y = function(t, e) {
                            return t === e && (F = !0), 0
                        },
                        V = "undefined",
                        X = 1 << 31,
                        G = {}.hasOwnProperty,
                        J = [],
                        K = J.pop,
                        Z = J.push,
                        Q = J.push,
                        te = J.slice,
                        ee = J.indexOf || function(t) {
                            for (var e = 0, n = this.length; n > e; e++)
                                if (this[e] === t) return e;
                            return -1
                        },
                        ne = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                        ie = "[\\x20\\t\\r\\n\\f]",
                        se = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
                        oe = se.replace("w", "w#"),
                        ae = "\\[" + ie + "*(" + se + ")" + ie + "*(?:([*^$|!~]?=)" + ie + "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" + oe + ")|)|)" + ie + "*\\]",
                        re = ":(" + se + ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" + ae.replace(3, 8) + ")*)|.*)\\)|)",
                        le = new RegExp("^" + ie + "+|((?:^|[^\\\\])(?:\\\\.)*)" + ie + "+$", "g"),
                        ce = new RegExp("^" + ie + "*," + ie + "*"),
                        he = new RegExp("^" + ie + "*([>+~]|" + ie + ")" + ie + "*"),
                        ue = new RegExp("=" + ie + "*([^\\]'\"]*?)" + ie + "*\\]", "g"),
                        de = new RegExp(re),
                        fe = new RegExp("^" + oe + "$"),
                        pe = {
                            ID: new RegExp("^#(" + se + ")"),
                            CLASS: new RegExp("^\\.(" + se + ")"),
                            TAG: new RegExp("^(" + se.replace("w", "w*") + ")"),
                            ATTR: new RegExp("^" + ae),
                            PSEUDO: new RegExp("^" + re),
                            CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + ie + "*(even|odd|(([+-]|)(\\d*)n|)" + ie + "*(?:([+-]|)" + ie + "*(\\d+)|))" + ie + "*\\)|)", "i"),
                            bool: new RegExp("^(?:" + ne + ")$", "i"),
                            needsContext: new RegExp("^" + ie + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + ie + "*((?:-\\d)?\\d*)" + ie + "*\\)|)(?=[^-]|$)", "i")
                        },
                        ge = /^(?:input|select|textarea|button)$/i,
                        me = /^h\d$/i,
                        ve = /^[^{]+\{\s*\[native \w/,
                        be = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                        ye = /[+~]/,
                        we = /'|\\/g,
                        xe = new RegExp("\\\\([\\da-f]{1,6}" + ie + "?|(" + ie + ")|.)", "ig"),
                        Ce = function(t, e, n) {
                            var i = "0x" + e - 65536;
                            return i !== i || n ? e : 0 > i ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320)
                        };
                    try {
                        Q.apply(J = te.call($.childNodes), $.childNodes), J[$.childNodes.length].nodeType
                    } catch (Se) {
                        Q = {
                            apply: J.length ? function(t, e) {
                                Z.apply(t, te.call(e))
                            } : function(t, e) {
                                for (var n = t.length, i = 0; t[n++] = e[i++];);
                                t.length = n - 1
                            }
                        }
                    }
                    S = e.support = {}, _ = e.isXML = function(t) {
                            var e = t && (t.ownerDocument || t).documentElement;
                            return e ? "HTML" !== e.nodeName : !1
                        }, N = e.setDocument = function(t) {
                            var e, n = t ? t.ownerDocument || t : $,
                                i = n.defaultView;
                            return n !== A && 9 === n.nodeType && n.documentElement ? (A = n, I = n.documentElement, L = !_(n), i && i !== i.top && (i.addEventListener ? i.addEventListener("unload", function() {
                                        N()
                                    }, !1) : i.attachEvent && i.attachEvent("onunload", function() {
                                        N()
                                    })), S.attributes = s(function(t) {
                                        return t.className = "i", !t.getAttribute("className")
                                    }), S.getElementsByTagName = s(function(t) {
                                        return t.appendChild(n.createComment("")), !t.getElementsByTagName("*").length
                                    }), S.getElementsByClassName = ve.test(n.getElementsByClassName) && s(function(t) {
                                            return t.innerHTML = "<div class='a'></div><div class='a i'></div>", t.firstChild.className = "i", 2 === t 
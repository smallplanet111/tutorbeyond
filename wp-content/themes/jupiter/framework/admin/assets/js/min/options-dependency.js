!function(e){"use strict";var t=function(e){this.el=e};t.prototype={init:function(){this.cacheElements(),this.bindEvents()},cacheElements:function(){this.$child=e(this.el),this.vals=this.$child.data("dependency-value");var t=this.$child.data("dependency-mother");this.$mother=e("#"+t)},bindEvents:function(){var t=this;this.$mother.on("change",this.resolveDependency.bind(this)),this.$mother.attrchange({callback:t.resolveDependency.bind(t)}),e(window).on("load",function(){setTimeout(t.resolveDependency.bind(t),100)})},resolveDependency:function(){var e=this.$mother.val();this.hasValue(e)?this.show():this.hide()},hasValue:function(e){return-1!==this.vals.indexOf(e)},show:function(){this.$child.show()},hide:function(){this.$child.hide()}};var n=e("[data-dependency-mother]");n.each(function(){var e=new t(this);e.init()})}(jQuery);
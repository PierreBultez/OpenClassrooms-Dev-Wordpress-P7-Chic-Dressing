!function(o){"use strict";o(document).ready(function(){o(".mp-select-sort").on({sort:function(){o(this).each(function(e,t){var n=o(t),r=n.children("option");r.detach().sort(function(e,t){return 0===parseInt(o(e).data("sort"),10)||0===parseInt(o(t).data("skip"),10)?0:"NA"===e.innerHTML?1:"NA"===t.innerHTML?-1:e.innerHTML.toLowerCase()>t.innerHTML.toLowerCase()?1:-1}).appendTo(n),r.filter("[selected]").eq(0).prop("selected",!0)})}}).trigger("sort")})}(jQuery.noConflict(),_);
var main = (function () {
    doConstruct = function () {
        this.init_callbacks = [];
    };
    doConstruct.prototype = {
        add_init_callback : function (func) {
            if (typeof(func) == 'function') {
                this.init_callbacks.push(func);
                return true;
            }
            else {
                return false;
            }
        }
    };
    return new doConstruct;
})();
$(document).ready(function () {
    $.each(main.init_callbacks, function (index, func) {
        func();
    });
});
var news = (function () {
    var doConstruct = function () {
        main.add_init_callback(this.accordian_active);
    };
    doConstruct.prototype = {
        accordian_active: function () {
            //$('#firstLink').collapse('show');
        }
    };
    return new doConstruct;
})();


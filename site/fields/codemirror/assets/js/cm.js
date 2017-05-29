(function($){
    $.fn.cm = function () {
        return this.each(function () {
            var cm;
            cm = CodeMirror.fromTextArea(this, {
                indentUnit: 4
            });
            cm.on('changes', function () {
                cm.save();
            });
        });
    };
}(jQuery));
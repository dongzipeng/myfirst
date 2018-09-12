var util = function () {
    return {

        $G:function (id) {
            return document.getElementById(id)
        },

        getStyleValue:function(ele,attr){
            var doc=document;
            var style=ele.currentStyle||doc.defaultView.getComputedStyle(ele,null);
            return parseInt(style[attr].replace(/px/g,""));
        },

    };


}();
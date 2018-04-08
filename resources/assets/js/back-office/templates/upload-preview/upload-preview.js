/* Example accounting/refund-from-wallet
 * usage:
 * var uploadOption = {
        width: '95px',
        height: '95px',
        backgroundSize: 'cover',
        fontSize: '24px',
        borderRadius: '5px',
        border: '3px solid #dedede',
        lang: 'ngin'
    };

    $('.upload-preview').uploadPreview(uploadOption);
 */
;!function (e, i, t, n) {
    var a = function (i, t) {
        this.$element = i, this.defaults = {
            width: '95px',
            height: '95px',
            backgroundSize: 'cover',
            backgroundColor: '#eee',
            fontSize: '24px',
            borderRadius: '5px',
            border: '3px solid #dedede',
            lang: 'ngin'
        }, this.options = e.extend({}, this.defaults, t)
    };
    a.prototype = {
        preview: function () {
            return o({
                $element: this.$element,
                width: this.options.width,
                height: this.options.height,
                backgroundSize: this.options.backgroundSize,
                backgroundColor: this.options.backgroundColor,
                fontSize: this.options.fontSize,
                borderRadius: this.options.borderRadius,
                border: this.options.border,
                lang: this.options.lang
            }), r(this.$element, this.$element.children("input")), this.$element
        }
    };
    var o = function (i) {
        switch (i.lang) {
            case"en":
                i.$element.append('<span>click to choose a pic</span><div class="up_again">click again<br>to choose another</div>');
                break;
            case"ngin":
                i.$element.append('<span><i class="fa fa-camera"></i></span><div class="up_again"><i class="fa fa-refresh"></i></div>');
                break;
            case"ngin-plus":
                i.$element.append('<span><i class="fa fa-plus-circle" style="color:#eee"></i></span><div class="up_again"><i class="fa fa-refresh"></i></div>');
                break; 
            default:
                i.$element.append('<span>click here to choose pic</span><div class="up_again">click again<br>choose pic</div>');
        }
        var t = i.$element.attr("class").trim(), n = t.indexOf(" ");
        // convert %, * to explicit px for table-cell display in class up_again
        if (i.width.endsWith('%')) i.width = i.$element.width() + 'px';
        if (i.height.endsWith('%')) i.height = i.$element.height() + 'px';
        if (i.height == '*') i.height = i.width;
        if (i.width == '*') i.width = i.height;
        -1 !== n && (t = t.substr(0, n)), e("head").append("<style>." + t + " { font-size: " + i.fontSize + "; width: " + i.width + "; height: " + i.height + "; border-radius: " + i.borderRadius + ";border: " + i.border + "; position: relative; overflow: hidden; background-color: " + i.backgroundColor +"; background-size: " + i.backgroundSize + "; background-repeat: no-repeat; background-position: center; -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC);}." + t + " span { display: block; padding: 0; line-height: " + i.height + "; text-align: center; }." + t + ' input { position: absolute; font-size: 2000px; z-index: 200; top: 0; right: 0; opacity: 0; -ms-filter: "alpha(opacity=0)"; cursor: pointer; }.' + t + " .up_again { display: table-cell; vertical-align: middle; text-align: center; width: " + i.width + "; height: " + i.height + "; opacity: 0; color: #fff; transition: 0.3s ease-in-out; -moz-transition: 0.3s ease-in-out; -webkit-transition: 0.3s ease-in-out; -o-transition: 0.3s ease-in-out; line-height: 1.6; }." + t + ":hover .up_again { opacity: 1; background: rgba(0, 0, 0, 0.5); }</style>")
    }, s = function (i, t) {
        if (t.files && t.files[0]) {
            var n = new FileReader;
            n.onload = function (e) {
                i.css("background-image", "url(" + e.target.result + ")")
            }, n.readAsDataURL(t.files[0]), e(t).next("span").hide()
        }
    }, r = function (e, i) {
        i.change(function () {
            s(e, this)
        })
    };
    e.fn.uploadPreview = function (e) {
        return $.map(this, function(el) {
            var i = new a($(el), e);
            i.preview();
        });
    }
}(jQuery, window, document);
/*!
 * jQuery Image Magnifier
 */

var imageZoom = function(effect, popup, thumbnail) {
  var borderWidth = 4;
  var effects = [ "blur", "inner", "tint" ];
  for (var x = 0; x < 3; x++) {
    if (typeof(effect[effects[x]]) == "undefined")
      effect[effects[x]] = false;
  }
  var css = {
    background: "background-image : url('" + thumbnail["src"].replace(/\'/g, "\\\'") + "');",
    "background-large": "background-image : url('" + popup["src"].replace(/\'/g, "\\\'") + "');",
    dimensions: "height : " + thumbnail["height"] + "px; width : " + thumbnail["width"] + "px;"
  };
  var ratio = {
    height: popup["height"] / thumbnail["height"],
    width: popup["width"] / thumbnail["width"]
  };
  css["thumbnail"] = css["background"] + " " + css["dimensions"];
  if (effect["inner"]) {
    document.write(
      '<div class="image-zoom inner">' +
      '<div class="thumbnail" rel="' + popup["width"] + '-' + popup["height"] + '_' + thumbnail["width"] + '-' + thumbnail["height"] + '_' + borderWidth + '" style="' + css["thumbnail"] + '">' +
      '<div class="popup" style="' + css["background-large"] + " " + css["dimensions"] + '">' +
      '<\/div><\/div><\/div>'
    );
    $("div.image-zoom:last div.popup").fadeTo(0, 0);
    $("div.image-zoom:last div.thumbnail")
      .mouseenter(function(e) {
        $(this).children("div.popup").fadeTo(333, 1);
      })
      .mouseleave(function() {
        $(this).children("div.popup").fadeTo(333, 0);
      })
      .mousemove(function(e) {
        var dimensions = $(this).attr("rel").split(/_/);
        var offset = $(this).offset();
        dimensions[0] = dimensions[0].split(/\-/);
        dimensions[1] = dimensions[1].split(/\-/);
        dimensions[2] = parseInt(dimensions[2], 10);
        var ratio = {
          height: parseInt(dimensions[0][1], 10) / parseInt(dimensions[1][1], 10),
          width: parseInt(dimensions[0][0], 10) / parseInt(dimensions[1][0], 10)
        };
        var x = e.pageX - offset.left - dimensions[2];
        var y = e.pageY - offset.top - dimensions[2];
        if (x < 0)
          x = 0;
        if (x > dimensions[1][0])
          x = dimensions[1][0];
        if (y < 0)
          y = 0;
        if (y > dimensions[1][1])
          y = dimensions[1][1];
        $(this).children("div.popup")
          .css(
            "background-position",
            (x > 0 ? "-" + (x * ratio["width"] - dimensions[1][0] * x / dimensions[1][0]) + "px" : 0) + " " +
            (y > 0 ? "-" + (y * ratio["height"] - dimensions[1][1] * y / dimensions[1][1]) + "px" : 0)
          );
      });
  }
  else {
    document.write(
      '<div class="image-zoom' + (effect["blur"] ? " blur" : "") + (effect["tint"] ? " tint" : "") + '">' +
      '<div class="thumbnail" style="' + css["thumbnail"] + '">' +
      (effect["blur"] ? '<div class="blur"><div style="' + css["thumbnail"] + '"><div style="' + css["thumbnail"] + '"><div style="' + css["thumbnail"] + '"><div style="' + css["thumbnail"] + '">' : '') +
      (effect["tint"] ? '<div class="tint" style="background-color : ' + effect["tint"] + '; ' + css["dimensions"] + '">' : '') +
      (effect["tint"] ? '<\/div>' : '') +
      (effect["blur"] ? '<\/div><\/div><\/div><\/div><\/div>' : '') +
      '<div class="box" style="' + css["background"] + ' height : ' + Math.round(thumbnail["height"] / ratio["height"]) + 'px; top : -' + thumbnail["height"] + 'px; width : ' + Math.round(thumbnail["width"] / ratio["width"]) + 'px;"><\/div>' +
      '<\/div>' +
      '<div class="popup" rel="' + popup["width"] + 'x' + popup["height"] + '/' + thumbnail["width"] + 'x' + thumbnail["height"] + '/' + borderWidth + '" style="' + css["background-large"] + ' margin-right : -' + (thumbnail["width"] + borderWidth) + 'px; margin-bottom : -' + (thumbnail["height"] + borderWidth) + 'px; ' + css["dimensions"] + '"><\/div>' +
      '<\/div>'
    );
    $("div.image-zoom:last div.blur div, div.image-zoom:last div.box, div.image-zoom:last div.tint, div.image-zoom:last div.popup").fadeTo(0, 0);
    $("div.image-zoom:last div.thumbnail")
      .mouseenter(function() {
        $(this).children("div.box").fadeTo(333, 1);
        $(this).find("div.tint").fadeTo(333, 0.5);
        $(this).find("div.blur div:not(div.tint)").fadeTo(333, 0.8);
        $(this).parent().children("div.popup").css("display", "block").fadeTo(333, 1);
      })
      .mouseleave(function() {
        $(this).children("div.box").fadeTo(333, 0);
        $(this).find("div.tint").fadeTo(333, 0);
        $(this).find("div.blur div").fadeTo(333, 0);
        $(this).parent().children("div.popup").css("display", "none").fadeTo(333, 0);
      })
      .mousemove(function(e) {
        var dimensions = $(this).parent().children("div.popup").attr("rel").split(/\//);
        var offset = $(this).parent().offset();
        dimensions[0] = dimensions[0].split(/x/);
        dimensions[1] = dimensions[1].split(/x/);
        dimensions[2] = parseInt(dimensions[2], 10);
        var ratio = {
          height: parseInt(dimensions[0][1], 10) / parseInt(dimensions[1][1], 10),
          width: parseInt(dimensions[0][0], 10) / parseInt(dimensions[1][0], 10)
        };
        var x = e.pageX - offset.left;
        var y = e.pageY - offset.top;
        x = x - $(this).width() / ratio["width"] / 2;
        y = y - $(this).height() / ratio["height"] / 2;
        if (x < 0)
          x = 0;
        if (x > $(this).width() - $(this).width() / ratio["width"])
          x = $(this).width() - $(this).width() / ratio["width"];
        if (y < 0)
          y = 0;
        if (y > $(this).height() - $(this).height() / ratio["height"])
          y = $(this).height() - $(this).height() / ratio["height"];
        x = Math.round(x);
        y = Math.round(y - $(this).height() - dimensions[2]);
        $(this).children("div.box").css({
          backgroundPosition:
            (x > 0 ? "-" + x + "px" : 0) + " " +
            (y > 0 - $(this).height() - dimensions[2] ? '-' + (y + $(this).height() + dimensions[2]) + "px" : 0),
          left: (x - dimensions[2]) + "px",
          top: y + "px"
        });
        $(this).parent().children("div.popup")
          .css(
            "background-position",
            (x > 0 ? "-" + (x * ratio["width"] - 1) + "px" : 0) + " " +
            (y > 0 - $(this).height() - dimensions[2] ? '-' + ((y + $(this).height() + dimensions[2]) * ratio["width"] - 1) + "px" : 0)
          );
      });
  }
};



function carousel({element, loop = true, nav = true, margin = 20, responsive = {0: {items: 1}}}) {
  $(element).owlCarousel({
    loop,
    nav,
    margin,
    onInitialized: (event) => {
        if(nav){
            const navWrapper = $("<div class='navWrapper'></div>");
            const navInner = $("<div class='navInner'></div>");
            const headingText = $(event.currentTarget).parent().find(".headingText");
            const owlNavs = $(event.currentTarget).find(".owl-nav");
            const owlDots = $(event.currentTarget).find(".owl-dots");
            $(owlNavs).appendTo(navInner);
            $(owlDots).appendTo(navInner);
            $(headingText).appendTo(navWrapper);
            navInner.appendTo(navWrapper);
            navWrapper.appendTo(event.currentTarget);
        }
    },
    navText: ["&uarr;", "&darr;"],
    autoplay: false,
    autoplayHoverPause: true,
    responsive
  });
}

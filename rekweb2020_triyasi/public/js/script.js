jQuery(function ($) {

    // ----- NAVBAR SMOOTH SCROLL ----- //
  
    // MENU SCROLLING WITH ACTIVE ITEM SELECTED
  
    // Pemilih Cache
    var lastId,
      topMenu = $(".triyasi-main-nav"),
      topMenuHeight = topMenu.outerHeight() + 13,
      // Semua Daftar Bagian Item
      menuItems = topMenu.find('a[href^=\\#]'),
      // Menyesuaikan Bagian Item
      scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) {
          return item;
        }
      });
  
    // Animasi Scroll Yang Ditekan Untuk Bagian Item
    menuItems.click(function (e) {
      var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 32;
      jQuery('html, body').stop().animate({
        scrollTop: offsetTop
      }, 1500);
      jQuery('.navbar-collapse').removeClass('in');
      e.preventDefault();
    });
  
    // Proses Scroll
    jQuery(window).scroll(function () {
      // Posisi Scroll Pada Container
      var fromTop = $(this).scrollTop() + topMenuHeight;
  
      // Menyingkirkan Bagian Item Saat Ini
      var cur = scrollItems.map(function () {
        if ($(this).offset().top < fromTop)
          return this;
      });
      // Mendapat ID Yang Akan Diakses
      cur = cur[cur.length - 1];
      var id = cur && cur.length ? cur[0].id : "";
  
      if (lastId !== id) {
        lastId = id;
        // Set/remove Kelas Yang Aktif
        menuItems
          .parent().removeClass("active")
          .end().filter("[href=\\#" + id + "]").parent().addClass("active");
      }
    });
  
});
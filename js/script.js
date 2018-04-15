// Home Login jQuery
jQuery(document).ready(function($) {
  $('.home-signup-label').click(function() {
    $('.home-signup').show();
      $('.home-signup-label').css("border-bottom", "2px solid #E63462");
      $('.login-title').hide();
      $('.login-welcome').css("display", "inline-block");
      $('.login').css("background-image", "url('http://treely-app.arcadia-hewins.com/wp-content/uploads/2018/02/about2.jpg')")
    $('.home-signin').hide();
      $('.home-signin-label').css("border-bottom", "none");
  });
});
jQuery(document).ready(function($) {
  $('.home-signin-label').click(function() {
    $('.home-signin').show();
      $('.home-signin-label').css("border-bottom", "2px solid #E63462");
      $('.login-welcome').hide();
      $('.login-title').css("display", "inline-block");
      $('.login').css("background-image", "url('http://treely-app.arcadia-hewins.com/wp-content/uploads/2018/02/about1.jpg')");
    $('.home-signup').hide();
      $('.home-signup-label').css("border-bottom", "none");
  });
});

// Food Template jQuery
jQuery(document).ready(function($) {
  $('.appearance-label').click(function() {
    $('.appearance-container').show();
    $('.how-to-container').hide();
    $('.nutrition-box').hide();
  });
  $('.how-to-label').click(function() {
    $('.appearance-container').hide();
    $('.how-to-container').show();
    $('.nutrition-box').hide();
  });
  $('.nutrition-label').click(function() {
    $('.appearance-container').hide();
    $('.how-to-container').hide();
    $('.nutrition-box').show();
  });
});

// MIT Grid JS
jQuery(document).ready(function($) {
  var grid = new Muuri('.grid', {dragEnabled: true});

  Muuri.defaultOptions.showDuration = 400;
  Muuri.defaultOptions.dragSortPredicate.action = 'swap';

  var grid = new Muuri(elem, {
  dragContainer: document.body
  });

});

$(document).ready(function(){
    $('.delete-grid-item').click(function(){
        $(this).parent().remove();
        return false;
    });

});

jQuery(document).ready(function($) {
  $('.grid-no-snacks').click(function() {
    $('.item.snack').css("display", "none");
  });
});
jQuery(document).ready(function($) {
  $('.grid-snacks').click(function() {
    $('.item.snack').css("display", "block");
  });
});

jQuery(document).ready(function($) {
  var itemContainers = [].slice.call(document.querySelectorAll('.board-column-content'));
  var columnGrids = [];
  var boardGrid;

  // Define the column grids so we can drag those
  // items around.
  itemContainers.forEach(function (container) {

    // Instantiate column grid.
    var grid = new Muuri(container, {
      items: '.board-item',
      layoutDuration: 400,
      layoutEasing: 'ease',
      dragEnabled: true,
      dragSort: function () {
        return columnGrids;
      },
      dragSortInterval: 0,
      dragContainer: document.body,
      dragReleaseDuration: 400,
      dragReleaseEasing: 'ease'
    })
    .on('dragStart', function (item) {
      // Let's set fixed widht/height to the dragged item
      // so that it does not stretch unwillingly when
      // it's appended to the document body for the
      // duration of the drag.
      item.getElement().style.width = item.getWidth() + 'px';
      item.getElement().style.height = item.getHeight() + 'px';
    })
    .on('dragReleaseEnd', function (item) {
      // Let's remove the fixed width/height from the
      // dragged item now that it is back in a grid
      // column and can freely adjust to it's
      // surroundings.
      item.getElement().style.width = '';
      item.getElement().style.height = '';
      // Just in case, let's refresh the dimensions of all items
      // in case dragging the item caused some other items to
      // be different size.
      columnGrids.forEach(function (grid) {
        grid.refreshItems();
      });
    })
    .on('layoutStart', function () {
      // Let's keep the board grid up to date with the
      // dimensions changes of column grids.
      boardGrid.refreshItems().layout();
    });

    // Add the column grid reference to the column grids
    // array, so we can access it later on.
    columnGrids.push(grid);

  });

  // Instantiate the board grid so we can drag those
  // columns around.
  boardGrid = new Muuri('.board', {
    layoutDuration: 400,
    layoutEasing: 'ease',
    dragEnabled: true,
    dragSortInterval: 0,
    dragStartPredicate: {
      handle: '.board-column-header'
    },
    dragReleaseDuration: 400,
    dragReleaseEasing: 'ease'
  });
});

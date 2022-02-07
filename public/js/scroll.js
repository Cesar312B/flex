$(document).ready(function(){
    let ias = new InfiniteAjaxScroll('.container_infinite_scroll', {
        item: '.item_infinite_scroll',
        spinner: '.spinner',
        next: '.btn-link-next',
        pagination: '.pagination'
      });

      ias.on('last', function() {
        let el = document.querySelector('.no-more');
      
        el.style.opacity = '1';
      });
});
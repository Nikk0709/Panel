function shiftActiveClass() {
    const items = document.querySelectorAll('.item');
    const activeItem = document.querySelector('.item.active');
  
    // If there's no active item or the active item is the last one, make the first item active
    if (!activeItem || activeItem === items[items.length - 1]) {
      items[0].classList.add('active');
    } else {
      // Remove the active class from the current active item
      activeItem.classList.remove('active');
  
      // Add the active class to the next sibling item
      activeItem.nextElementSibling.classList.add('active');
    }
  }
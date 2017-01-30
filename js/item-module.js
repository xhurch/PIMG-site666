//item-module.js

var it = document.querySelector('.item');
it.addEventListener('mouseenter', function () {
  it.setAttribute('scale', {
    x: 4,
    y: 1,
    z: 6
  });
});
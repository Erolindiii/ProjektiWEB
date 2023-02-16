const box = document.getElementById('box');
box.addEventListener('mouseover', function handleMouseOver() {
  box.style.color = '#d40231';
});
box.addEventListener('mouseout', function handleMouseOut() {
  box.style.color = 'whitesmoke';
});
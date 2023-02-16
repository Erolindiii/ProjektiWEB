const box1 = document.getElementById('box1');
box1.addEventListener('mouseover', function handleMouseOver(){
  box1.style.color = '#d40231';
});
box1.addEventListener('mouseout', function handleMouseOut() {
  box1.style.color = 'whitesmoke';
});
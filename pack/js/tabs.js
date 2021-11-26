function changeTab(show) {
 if (show == 'home') {
  document.getElementById('home').style.display = 'block';
  document.getElementById('add').style.display = 'none';
  document.getElementById('done').style.display = 'none';
  document.getElementById('trash').style.display = 'none';
  return false;
 }
 else if (show == 'add') {
  document.getElementById('add').style.display = 'block';
  document.getElementById('home').style.display = 'none';
  document.getElementById('done').style.display = 'none';
  document.getElementById('trash').style.display = 'none';
  return false;
 }
 else if (show == 'trash') {
  document.getElementById('trash').style.display = 'block';
  document.getElementById('home').style.display = 'none';
  document.getElementById('done').style.display = 'none';
  document.getElementById('add').style.display = 'none';
  return false;
 }
 else if (show == 'done') {
  document.getElementById('done').style.display = 'block';
  document.getElementById('home').style.display = 'none';
  document.getElementById('add').style.display = 'none';
  document.getElementById('trash').style.display = 'none';
  return false;
 }
}
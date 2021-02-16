var photoCurrent = 1;
var descCurrent = 1;
showPhoto(photoCurrent); /* show photo and description as current slide value */
showDesc(descCurrent);

function changePhoto(current) { /* method to change photo and photo description, method will be binded to a left and right button click */
  showPhoto(photoCurrent += current); /* each click will change photo and description by same current parameter so photo matches desc. */
  showDesc(descCurrent += current);
}

function showPhoto(current) {
  var x = document.getElementsByClassName("galleryslides");
  if (current > x.length) {
    photoCurrent = 1
  }
  if (current < 1) {
    photoCurrent = x.length
  } ;
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none"; /*set the display for each photo in galleryslides class */
  }
  x[photoCurrent-1].style.display = "inherit"; /* set the display of photo element in first index of array */
}
function showDesc(current) {
  var x = document.getElementsByClassName("desc");
  if (current > x.length) {
    descCurrent = 1
  }
  if (current < 1) {
    descCurrent = x.length
  } ;
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[descCurrent-1].style.display = "inherit";
}

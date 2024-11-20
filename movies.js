filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

window.addEventListener('scroll',reveal);
function reveal(){
  var reveals=document.querySelectorAll('.reveal');
  for(var i;i<reveals.length;i++){
    var windowheight=window.innerHeight;
    var revealtop=reveals[i].getBoundingRect().top;
    var revealpoint=150;

    if(revealtop < windowheight -revealpoint){
      reveals[i].classList.add('active');
    }
    else{
      reveals[i].classList.remove('active');

    }
  }

}
function goToWebsite(url) {
  // Store the current page URL in session storage
  sessionStorage.setItem('initialPage', window.location.href);
  
  // Redirect to the specified URL
  window.location.href = url;
}

// Check if returning from a different website
var initialPage = sessionStorage.getItem('initialPage');
if (initialPage && initialPage !== window.location.href) {
  // Clear the session storage if returning from a different website
  sessionStorage.removeItem('initialPage');
  
  // Do something on returning to the initial page (e.g., display a message)
  alert('Welcome back to the initial page!');
}
const divs = document.querySelectorAll('.divBox');
        const container = document.querySelector('.container');

        let delay = 0;
        for (let i = 0; i < divs.length; i++) {
            setTimeout(() => {
                divs[i].style.opacity = '1';
            }, delay);

            delay += 500; // Adjust the delay (in milliseconds) between each div appearance
        }
        window.addEventListener('DOMContentLoaded', function() {
          var button = document.getElementById('myButton');
          button.dispatchEvent(new Event('click'));
        });
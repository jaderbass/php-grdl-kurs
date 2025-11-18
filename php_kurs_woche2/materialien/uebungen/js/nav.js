"use strict";

document.addEventListener("DOMContentLoaded", _=>{
  let url = window.location.pathname;
  let filename = url.substring(url.lastIndexOf('/')+1);
  let navItems = document.querySelectorAll('nav a');
  console.log(navItems);
  
  for(let i = 0; i <= navItems.length; i++) {
    // console.log(navItems[i].getAttribute('href'));
    if(filename === navItems[i].getAttribute('href')) {
      navItems[i].classList.add('active');
    } else {
      navItems[i].classList.remove('active');
    }
  }
  // console.log(url, filename);
});
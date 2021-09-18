const navBar = `
<nav class="nav">
  <button class="btn" id="btnmenu">
    <i>
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list " viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </i>
  </button>
  <div class="nav-brand"><img src="images/logo11.png" height="50" ></div>
  <ul>
    <li>
      <a href="employee" class="" id="">Our Services</a>
  

    </li>
    <li>
      <a href="employee" class="" id="">Jobs</a>
    </li>
    <li>
      <a href="#" class="" id="">manager section</a>
    </li>6
    <li>
      <a href="#" class="" id="">Personal Profile</a>
    </li>
  </ul>
  <div id="logAndSign">
  </div>
</nav>
`
const sideBarString = `
  <ul>
    <li>
      <a href="employee" class="" id="">Our Services</a>
    </li>
    <li>
      <a href="employee" class="" id="">Jobs</a>
    </li>
    <li>
      <a href="#" class="" id="">manager section</a>
    </li>
    <li>
  
 
  <a href="#" class="" id="">Personal Profile</a>
 



     
    </li>
    <li id="logAndSign">
    <button class="btn">logIn</button> 
      <button class="btn">SignUp</button>
    </li>
  </ul>
  `
const footerString = `
  <div class="teamName">
  Do IT TEAM
  </div>
  <ul>
  <li>
    <a href="#">About</a>
  </li>
  <li>
  <a href="#">Privacy</a>
  </li>
  <li>
  <a href="#">FaceBook</a>
  </li>
  <li>
  <a href="#">Contact</a>
  </li>
  </ul>
`
document.getElementById("topNavBar").innerHTML = navBar;
document.querySelector(".sidebar").innerHTML = sideBarString;
document.querySelector(".foot").innerHTML = footerString;
const menuBtn = document.querySelector("#btnmenu");
const sideBar = document.querySelector(".sidebar");
menuBtn.addEventListener("click", () => {
    sideBar.classList.toggle("active-sidebar")
})
document.querySelector(".nav-brand").addEventListener("click", () => {
    window.open("welcomePage.html")
})
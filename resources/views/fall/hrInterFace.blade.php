<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="css\hrInterFace.css">
    
  </head>
  <body>
    <div id="sidebar"></div>
    <section class="p-4 my-container">
        <div id="topNavBar"></div>
        <div class="row text-center m-3">
            <svg xmlns="http://www.w3.org/2000/svg" style=" color: white;" width="100" height="100" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
            </svg>
            <h1 class="text-light m-3">wellcome sir...here you willbe abl to addue sections and ather info</h1>
        </div>
        <div class="row m-3" id="sections"></div>
        <div class="row m-3">
            <div class="col-xl-3 col-sm-6">
                <div class="row m-3"><button id="addSection" class="btn btn-dark">Add new Section</button></div>
                <div class="row m-3 text-light"><p>click the button to show and fill the form plz</p></div>
            </div>
            <div id="addSectionForm" class="text-light">
                
            </div>
        </div>
        <div class="row m-3">
            <div class="col-xl-2 col-sm-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16" style="margin-top: 50px;color:white;">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg>
            </div>
            <div class="col-xl-10 col-sm-10 text-light" id="sectionCard">
                
            </div>
        </div>

        </div>


   
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="HRInterface.js"></script>
    <script>const navBar=`

        <nav class="top-navbar navbar-expand-md ">
            <div class="container-fluid">
              <button class="btn btn-dark" id="menuBtn">Menu</button>
              <a class="top-navbar-brand" href="#"><img src="images/Logo.jpg" hieght="80" width="100"></a>
            </div>
        </nav>
        `
        
        document.getElementById("topNavBar").innerHTML=navBar;
        const sidebar=`<nav class="navbar navbar-expand col-xs-2 d-flex flex-column align-item-start " id="sideBar">
        <a class="navbar-brand text-light mt-5" href="#">
          <div class="display-5 font-wight-blod">
            <img src="images/Logo.jpg">
          </div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
              <a class="nav-link text-light pl-4" href="HRInterface.html"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
              <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
            </svg></i>Home</a>
           </li>
           <li class="nav-item w-100">
              <a class="nav-link text-light pl-4" href="HRInterface.html"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
              <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
            </svg></i>Sections</a>
           </li>
           <li class="nav-item w-100">
              <a class="nav-link text-light pl-4" href="HRInterface.html"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
              <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
            </svg></i>Employees</a>
           </li>
           <li class="nav-item w-100">
              <a class="nav-link text-light pl-4" href="HRInterface.html"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-badge-ad" viewBox="0 0 16 16">
              <path d="m3.7 11 .47-1.542h2.004L6.644 11h1.261L5.901 5.001H4.513L2.5 11h1.2zm1.503-4.852.734 2.426H4.416l.734-2.426h.053zm4.759.128c-1.059 0-1.753.765-1.753 2.043v.695c0 1.279.685 2.043 1.74 2.043.677 0 1.222-.33 1.367-.804h.057V11h1.138V4.685h-1.16v2.36h-.053c-.18-.475-.68-.77-1.336-.77zm.387.923c.58 0 1.002.44 1.002 1.138v.602c0 .76-.396 1.2-.984 1.2-.598 0-.972-.449-.972-1.248v-.453c0-.795.37-1.24.954-1.24z"/>
              <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
            </svg></i>Jobs</a>
           </li>
           <li class="nav-item w-100">
              <a class="nav-link text-light pl-4" href="HRInterface.html"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg></i>Avications</a>
           </li>
         </ul>
        </nav>`
        document.getElementById("sidebar").innerHTML=sidebar;
        document.getElementById("topNavBar").innerHTML=navBar;
        const menuBtn=document.querySelector("#menuBtn");
        const sideBar=document.querySelector("#sideBar");
        const cont=document.querySelector(".my-container");
        menuBtn.addEventListener("click",()=>{
          sideBar.classList.toggle("active-nav")
          cont.classList.toggle("active-cont")
        })
        
        
        const Stringform=` <form  action="{{route('section.store')}}" method="POST" >
            @csrf
        <div class="row">
            <div class="col-4 m-3">
                <label for="sectionName" class="col-12">Section Name:</label>
                <input type="text" name="section_title" id="sectionName" class="col-12" >
            </div>
            <div class="col-3 m-3">
                <label for="descrebtion" class="col-12">works type:</label>
                <input type="text" id="descrebtion" class="col-12">
            </div>
        </div>
        <div class="row">
            <div class="col-4 m-3">
                <label for="numberOfEmployees" class="col-12 ">Employees number:</label>
                <input type="number" id="numberOfEmployees" class="col-12" > 
            </div>
            <div class="col-3 m-3">
                <label for="mangerName" class="col-12">Manger Name:</label>
                <input type="text" name="manager" id="mangerName" class="col-12" >
            </div>
        </div>
        <button type="submit" class="btn btn-dark m-3" id="sendInfoTOCard">submit</button>
        <button type="reset" class="btn btn-dark m-3" id="RESET">reset</button>
        </form>
        
        `
        const sectionViewCard=`
        <div class="col-5">
        <div class="card " style="width: 18rem;">
        <img src="" id="sectionCardImg">
        <form id="setImg">
        <p class="m-3">plz enter URL of Section IMG</p>
        <input type="text" id="sectionImgUrl">
        
        </form>
        <div class="card-body">
          <h1 id="section-card-title" >Birthday boddies</h1>
          <p id="section-card-text"></p>
          <p id="card-numberOfEmployees"></p>
          <button type="submit" class="btn btn-dark m-3" >Confirm</button>
          <button  class="btn btn-dark m-3" id="EDIT" >Edit</button>
        </div>
        </div>
        </div>
        <div class="col-10 m-3" id="addAnotherSection"><button class="btn btn-dark">Add Another Section</button></div>
        <div class="col-10 m-3"  id="endProcces"><a href="addEmployee.html" class="btn btn-dark">End Procces</a></div>
        `
        const showFormButton=document.getElementById("addSection");
        const form=document.getElementById("addSectionForm")
        showFormButton.addEventListener("click",()=>{
          form.innerHTML=Stringform;
        })
        document.getElementById("sendInfoTOCard").addEventListener("click",()=>{
            
            document.getElementById("sectionCard").innerHTML=sectionViewCard;
            document.getElementById("section-card-title").innerHTML=document.getElementById("sectionName").value+":";
            document.getElementById("setImg").addEventListener("submit",(e)=>{
                e.preventDefault();
                document.getElementById("sectionCardImg").setAttribute("src",document.getElementById("sectionImgUrl").value)
                document.getElementById("setImg").style.display="none";
            })
            document.getElementById("section-card-text").innerHTML="for "+document.getElementById("descrebtion").value+" works";
            document.getElementById("card-numberOfEmployees").innerHTML="number Of Employees:"+document.getElementById("numberOfEmployees").value;
            document.getElementById("addAnotherSection").addEventListener("click",()=>{
                document.getElementById("RESET").focus();
                document.getElementById("RESET").style.background="red";
            })
            document.getElementById("EDIT").addEventListener("click",()=>{
                document.getElementById("sectionName").focus();
            })
            document.getElementById("RESET").addEventListener("click",()=>{
                document.getElementById("RESET").style.background="rgb(32, 34, 34)";
                document.getElementById("sectionName").focus();
            })
        })
        </script>



    

  </body>
</html>
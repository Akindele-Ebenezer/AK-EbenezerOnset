
      <footer>
	<div id='footer'>
	 <div id='footer-nav'>
	  <ul>
		  <h1>LINKS</h1>
	    <li><a href='#'>HOME</a></li>
	    <li><a href='#wrap-about'>ABOUT</a></li>
	    <li><a href='#pg-4'>SKILLS</a></li>
	    <li><a href='#form'>CONTACT</a></li>
	    <li><a href='#main-2'>PROJECTS</a></li>
	    <li><a href='#wrapper'>SERVICES</a></li>
	  </ul>
	 </div>

	 <div id='socila-media-links'>
	  <ul id='socila-media-links'>
		  <h1>CONTACT</h1>
	    <li><a href='mailto:tobi.akindele@gmail.com' target='_blank'>Gmail</a></li>
	    <li>Github</li>
	    <li><a href='https://www.linkedin.com/in/akindele-ebenezer-566a16b8/' target='_blank'>LinkedIn</a></li>
	    <li><a href='https://www.facebook.com/akindele.ebenezer/' target='_blank'>Facebook</a></li>
	    <li><a href='https://www.instagram.com/ebenezer__/?hl=en' target='_blank'>Instagram</a></li>
	    <li><a href='https://api.whatsapp.com/send?phone=2349052757805'>Whatsapp</a></li>
	  </ul>
	 </div> 
	</div>
      </footer>
<div class='clear'> </div>
</div> 
</div>
<p id='copy'>Copyright 2021: &copy;<strong>AKINDELE EBENEZER OLUWATOBI</strong></p>
 
<div class='nav-bar-sm-screen'>
	<ul>
		<li><a href='#pg-1'>HOME</a></li>
		<li><a href='#main-2'>PROJECTS</a></li>
		<li><a href='#wrapper'>SERVICES</a></li>
		<li><a href='#pg-4'>SKILLS</a></li>
		<li><a href='#wrap-about'>ABOUT</a></li>
		<li><a href='#form'>CONTACT</a></li> 
	</ul>
</div>

</main>


<script> 
 
let load = document.querySelector('#load');
let main = document.querySelector('main'); 

function loadPage() {
	setTimeout(() => {
		load.style.display = 'none';
		main.style.display = 'block';
	}, 5000)
}
loadPage();
 
let navIcon = document.querySelector('#nav-icon');
let navBar_Sm_Screen = document.querySelector('.nav-bar-sm-screen');
let navBar_Sm_Screen_Ul = document.querySelector('.nav-bar-sm-screen ul').children;

navIcon.addEventListener('click', () => {
	navBar_Sm_Screen.classList.toggle('show'); 
});

for (let i = 0; i < navBar_Sm_Screen_Ul.length; i++) {
	navBar_Sm_Screen_Ul[i].addEventListener('click', () => {
		navBar_Sm_Screen.classList.toggle('show'); 
	})
}

 
</script>
 
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div id='whats-app' class="elfsight-app-687e7e20-b3e3-4d41-9b43-667df4de893b"></div>

</body>

</html>

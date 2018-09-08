const navBtn = document.getElementsByClassName("navbar-burger")[0];
const accordions = document.getElementsByClassName('has-submenu');
const sideNav = document.getElementById('side-nav');
function setSubmenuStyles (submenu, maxHeight, margins) {
    submenu.style.maxHeight = maxHeight
    submenu.style.marginTop = margins
    submenu.style.marginBottom = margins
}
for (var i = 0; i < accordions.length; i++) {
    if (accordions[i].classList.contains('is-active')) {
    const submenu = accordions[i].nextElementSibling
    setSubmenuStyles(submenu, submenu.scrollHeight + "px", "0.75em")
    }
    accordions[i].onclick = function () {
        this.classList.toggle('is-active')
    
        const submenu = this.nextElementSibling
        if (submenu.style.maxHeight) {
          // menu is open, we need to close it now
          setSubmenuStyles(submenu, null, null)
        } else {
          // meny is close, so we need to open it
          setSubmenuStyles(submenu, submenu.scrollHeight + "px", "0.75em")
        }
    }
}
navBtn.addEventListener('click',function(){
    sideNav.classList.toggle('is-shown');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
})
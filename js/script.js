/*Ajout de la class logoFloat*/
document.addEventListener('animationend', function() {
        const load = document.querySelector(".logo");
        load.classList.add("logoFloat");
});



/*Animation des titres au scroll*/
const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const story = entry.target.querySelector('.visible');
          
          if (entry.isIntersecting) {
            story.classList.add('title-animation');
                return; 
          }
      
          story.classList.remove('title-animation');
        });
      });
      
      observer.observe(document.querySelector('.story'));

      const watch = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const story = entry.target.querySelector('.visible');
          
          if (entry.isIntersecting) {
            story.classList.add('title-animation');
                return; 
          }
      
          story.classList.remove('title-animation');
        });
      });
      
      watch.observe(document.querySelector('#studio'));

      /*Animation des nuages section "lieu"*/
      const look = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const place = entry.target.querySelector('.visible');
          
          if (entry.isIntersecting) {
            place.classList.add('animCloud');
                return; 
          }

            place.classList.remove('animCloud');
        });
      });
      
      look.observe(document.querySelector('#place'));

      /*Menu burger*/
      icons.addEventListener("click", function() {
       nav.classList.toggle("active");
      });

      const links = document.querySelectorAll("nav li");

      icons.addEventListener("click", function() {
        banner.classList.toggle("active");
       });
       links.forEach((link) => {
        link.addEventListener("click", () => {
          nav.classList.remove("active");
        });
      });
      /*Animation des li du menu burger*/
      icons.addEventListener("click", function() {
        add.classList.toggle("animationBurger");
       });

       icons.addEventListener("click", function() {
        add1.classList.toggle("animationBurger");
       });

       icons.addEventListener("click", function() {
        add2.classList.toggle("animationBurger");
       });

       icons.addEventListener("click", function() {
        add3.classList.toggle("animationBurger");
       });

       icons.addEventListener("click", function() {
        add4.classList.toggle("animationBurger");
       });
    


















       /* animation des fleurs au scroll
const root = document.querySelector(':root');
const timer = null;
window.addEventListener('scroll', function() {
if(timer != null){
        this.clearTimeout(timer)
        root.style.setProperty('nom de variable', 'valeur augmenter')
}
timer=this.setTimeout(function(){
        root.style.setProperty('nom de variable', 'valeur initial');

},150);
});
root.style.setProperty('nom de variable', 'valeur initial')*/
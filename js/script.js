/*window.addEventListener("load", function() {
        const load = document.querySelector(".logo");
        load.classList.toggle("logoFloat");
        
});*/
document.addEventListener('animationend', function() {
        const load = document.querySelector(".logo");
        load.classList.add("logoFloat");
});

// animation des fleurs au scroll
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
root.style.setProperty('nom de variable', 'valeur initial')

const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const story = entry.target.querySelector('.visible');
          
          if (entry.isIntersecting) {
            story.classList.add('title-animation');
                return; // if we added the class, exit the function
          }
      
          // We're not intersecting, so remove the class!
          story.classList.remove('title-animation');
        });
      });
      
      observer.observe(document.querySelector('.story'));

      const watch = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const story = entry.target.querySelector('.visible');
          
          if (entry.isIntersecting) {
            story.classList.add('title-animation');
                return; // if we added the class, exit the function
          }
      
          // We're not intersecting, so remove the class!
          story.classList.remove('title-animation');
        });
      });
      
      watch.observe(document.querySelector('#studio'));


      const look = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const place = entry.target.querySelector('.visible');
          
          if (entry.isIntersecting) {
            place.classList.add('animCloud');
                return; // if we added the class, exit the function
          }
      
          // We're not intersecting, so remove the class!
          place.classList.remove('animCloud');
        });
      });
      
      look.observe(document.querySelector('#place'));
//MOBILE NAVIGATION FIX

document.addEventListener("DOMContentLoaded", function () {
    const dropdownParents = document.querySelectorAll(".nav-menu li.menu-item-has-children > a");
  
    dropdownParents.forEach(parent => {
      parent.addEventListener("click", function (e) {
        if (window.innerWidth <= 768) { // Only for mobile
          e.preventDefault();
          let submenu = this.nextElementSibling;
          if (submenu.style.display === "block") {
            submenu.style.display = "none";
          } else {
            submenu.style.display = "block";
          }
        }
      });
    });
  });

  // counter block function


  document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter');

    const startCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const increment = target / 100; // Adjust speed

      let current = 0;
      const updateCounter = () => {
        if (current < target) {
          current += increment;
          counter.textContent = Math.floor(current);
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target;
        }
      };
      updateCounter();
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          startCounter(entry.target);
          observer.unobserve(entry.target); // Stop observing after animation
        }
      });
    }, { threshold: 0.5 }); // Trigger when 50% of the element is visible

    counters.forEach(counter => observer.observe(counter));
  });


  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".button");

    buttons.forEach(button => {
        let lastX = 0, lastY = 0; // Store the last known position

        button.addEventListener("mouseenter", function (e) {
            const span = this.querySelector("span");
            const rect = this.getBoundingClientRect();
            
            // Get the mouse position relative to the button
            lastX = e.clientX - rect.left;
            lastY = e.clientY - rect.top;

            // Position the span at mouse entry
            span.style.top = `${lastY}px`;
            span.style.left = `${lastX}px`;
            span.style.transform = "translate(-50%, -50%)"; 

            // Calculate expansion size dynamically
            const maxDim = Math.max(rect.width, rect.height) * 2.5;
            span.style.width = `${maxDim}px`; 
            span.style.height = `${maxDim}px`;
        });

        button.addEventListener("mousemove", function (e) {
            // Track the last position before the mouse leaves
            const rect = this.getBoundingClientRect();
            lastX = e.clientX - rect.left;
            lastY = e.clientY - rect.top;
        });

        button.addEventListener("mouseleave", function () {
            const span = this.querySelector("span");

            // Use the last known mouse position before leaving
            span.style.top = `${lastY}px`;
            span.style.left = `${lastX}px`;
            span.style.transform = "translate(-50%, -50%)"; 

            // Shrink the ripple from the last hover position
            span.style.width = "0"; 
            span.style.height = "0";
        });
    });
});





  
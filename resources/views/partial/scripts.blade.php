 <script>
     // Mobile Menu Toggle
     document
         .getElementById("tab-work")
         .addEventListener("click", function() {
             document.getElementById("tab-work").classList.add("active");
             document.getElementById("tab-education").classList.remove("active");
             document.getElementById("work-content").classList.remove("hidden");
             document.getElementById("education-content").classList.add("hidden");
         });

     document
         .getElementById("tab-education")
         .addEventListener("click", function() {
             document.getElementById("tab-education").classList.add("active");
             document.getElementById("tab-work").classList.remove("active");
             document
                 .getElementById("education-content")
                 .classList.remove("hidden");
             document.getElementById("work-content").classList.add("hidden");
         });
     document
         .getElementById("menu-toggle")
         .addEventListener("click", function() {
             const mobileMenu = document.getElementById("mobile-menu");
             mobileMenu.classList.toggle("hidden");
         });

     // Back to Top Button
     const backToTopButton = document.getElementById("back-to-top");

     window.addEventListener("scroll", function() {
         if (window.pageYOffset > 300) {
             backToTopButton.classList.remove("opacity-0", "invisible");
             backToTopButton.classList.add("opacity-100", "visible");
         } else {
             backToTopButton.classList.remove("opacity-100", "visible");
             backToTopButton.classList.add("opacity-0", "invisible");
         }
     });

     backToTopButton.addEventListener("click", function() {
         window.scrollTo({
             top: 0,
             behavior: "smooth",
         });
     });

     // Smooth scrolling for navigation links
     document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
         anchor.addEventListener("click", function(e) {
             e.preventDefault();

             const targetId = this.getAttribute("href");
             if (targetId === "#") return;

             const targetElement = document.querySelector(targetId);
             if (targetElement) {
                 window.scrollTo({
                     top: targetElement.offsetTop - 70,
                     behavior: "smooth",
                 });

                 // Close mobile menu if open
                 const mobileMenu = document.getElementById("mobile-menu");
                 if (!mobileMenu.classList.contains("hidden")) {
                     mobileMenu.classList.add("hidden");
                 }
             }
         });
     });

     // Simple typewriter effect for hero text
     // const textElement = document.querySelector('.typewriter h1');
     // const text = textElement.textContent;
     // textElement.textContent = '';
     // let i = 0;
     // function typeWriter() {
     //     if (i < text.length) {
     //         textElement.textContent += text.charAt(i);
     //         i++;
     //         setTimeout(typeWriter, 100);
     //     }
     // }

     // // Start the typewriter effect when the page loads
     // window.addEventListener('load', typeWriter);
 </script>

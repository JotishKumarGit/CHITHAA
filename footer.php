 <!-- Footer -->
 <footer class="footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 mb-4" data-aos="fade-up">
                 <h5><i class="fas fa-seedling"></i> CITHAA</h5>
                 <p>Leading manufacturer, exporter, and supplier of premium quality coconut products. Committed to
                     delivering excellence in quality and service to clients worldwide.</p>
                 <div class="social-links mt-3">
                     <a href="#"><i class="fab fa-facebook"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-linkedin"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                     <a href="#"><i class="fab fa-whatsapp"></i></a>
                 </div>
             </div>
             <div class="col-lg-2 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                 <h5>Quick Links</h5>
                 <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="about.php">About Us</a></li>
                     <li><a href="services.php">Services</a></li>
                     <li><a href="gallery.php">Gallery</a></li>
                     <li><a href="contact.php">Contact Us</a></li>
                 </ul>
             </div>
             <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                 <h5>Our Products</h5>
                 <ul>
                     <li><a href="Green-Coconut.php">Green Coconut</a></li>
                     <li><a href="Black-Coconut.php">Black Coconut</a></li>
                     <li><a href="Copra.php">Copra</a></li>
                     <li><a href="Green-Husk.php">Green Coconut Husk</a></li>
                     <li><a href="Black-Husk.php">Black Coconut Husk</a></li>
                     <li><a href="Coconut-Shell.php">Coconut Shell</a></li>
                     <li><a href="Coconut-Leaf.php">Coconut Leaf</a></li>
                 </ul>
             </div>
             <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                 <h5>Contact Info</h5>
                 <ul>
                     <li><i class="fas fa-map-marker-alt"></i> 1/321 kallapatty post Melur Taluk Tamilnadu India
                         625106</li>
                     <li><i class="fas fa-envelope"></i> cithaacithaa933@gmail.com</li>
                     <li><i class="fas fa-clock"></i> Mon-Sat: 9AM-6PM</li>
                 </ul>
             </div>
         </div>
         <div class="footer-bottom">
             <p>&copy; 2025 CITHAA. All Rights Reserved. | Designed By <i class="fas fa-heart"
                     style="color: #ef4444;"></i> || <a href="https://trade4export.com"
                     style="color: var(--accent);">Trade4Export</a></p>
         </div>
     </div>
 </footer>

 <!-- Scroll to Top Button -->
 <div class="scroll-top" id="scrollTop">
     <i class="fas fa-arrow-up"></i>
 </div>

 <!-- Enquiry Modal -->
 <div class="modal fade" id="enquiryModal" tabindex="-1">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content" style="background: var(--dark); color: white; border-radius: 20px;">
             <div class="modal-header border-0">
                 <h5 class="modal-title"><i class="fas fa-paper-plane"></i> Quick Enquiry</h5>
                 <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
                 <form id="enquiryForm">
                     <input type="text" class="form-control mb-3" placeholder="Your Name" required>
                     <input type="email" class="form-control mb-3" placeholder="Your Email" required>
                     <input type="tel" class="form-control mb-3" placeholder="Your Phone" required>
                     <select class="form-control mb-3" required>
                         <option value="">Select Product Interest</option>
                         <option>Green Coconut</option>
                         <option>Black Coconut</option>
                         <option>Copra</option>
                         <option>Green Coconut Husk</option>
                         <option>Black Coconut Husk</option>
                         <option>Coconut Shell</option>
                         <option>Coconut Leaf</option>
                     </select>
                     <textarea class="form-control mb-3" rows="3" placeholder="Your Requirements"></textarea>
                     <button type="submit" class="whatsapp-btn">
                         <i class="fab fa-whatsapp"></i> Send Enquiry
                     </button>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <script>
     // Initialize AOS
     AOS.init({
         duration: 1000,
         once: true
     });

     // Navbar scroll effect
     window.addEventListener('scroll', function() {
         const navbar = document.querySelector('.navbar');
         if (window.scrollY > 50) {
             navbar.style.boxShadow = '0 10px 50px rgba(0,0,0,0.2)';
         } else {
             navbar.style.boxShadow = '0 5px 30px rgba(0,0,0,0.1)';
         }
     });

     // Scroll to top button
     const scrollTop = document.getElementById('scrollTop');
     window.addEventListener('scroll', function() {
         if (window.scrollY > 300) {
             scrollTop.classList.add('active');
         } else {
             scrollTop.classList.remove('active');
         }
     });

     scrollTop.addEventListener('click', function() {
         window.scrollTo({
             top: 0,
             behavior: 'smooth'
         });
     });

     // Multi-level dropdown for desktop
     document.querySelectorAll('.dropdown-submenu').forEach(function(element) {
         element.addEventListener('mouseenter', function() {
             if (window.innerWidth >= 992) {
                 const submenu = this.querySelector('.dropdown-menu');
                 if (submenu) {
                     submenu.classList.add('show');
                 }
             }
         });

         element.addEventListener('mouseleave', function() {
             if (window.innerWidth >= 992) {
                 const submenu = this.querySelector('.dropdown-menu');
                 if (submenu) {
                     submenu.classList.remove('show');
                 }
             }
         });
     });

     // Mobile dropdown toggle
     document.querySelectorAll('.offcanvas .dropdown-toggle').forEach(function(element) {
         element.addEventListener('click', function(e) {
             e.preventDefault();
             e.stopPropagation();

             const parent = this.parentElement;
             const menu = parent.querySelector('.dropdown-menu');

             if (menu) {
                 menu.classList.toggle('show');
             }
         });
     });

     // Contact Form WhatsApp Integration
     document.getElementById('contactForm').addEventListener('submit', function(e) {
         e.preventDefault();

         const name = document.getElementById('name').value;
         const email = document.getElementById('email').value;
         const phone = document.getElementById('phone').value;
         const product = document.getElementById('product').value;
         const message = document.getElementById('message').value;

         const whatsappMessage = `Hello CITHAA!%0A%0AI'm interested in your coconut products.%0A%0AName: ${name}%0AEmail: ${email}%0APhone: ${phone}%0AProduct Interest: ${product}%0AMessage: ${message}`;

         const whatsappNumber = '919344884493'; // Replace with your actual WhatsApp number
         window.open(`https://wa.me/${whatsappNumber}?text=${whatsappMessage}`, '_blank');
     });

     // Enquiry Modal Form
     document.getElementById('enquiryForm').addEventListener('submit', function(e) {
         e.preventDefault();
         const modal = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
         modal.hide();

         // Get form data
         const formData = new FormData(this);
         const data = {};
         formData.forEach((value, key) => data[key] = value);

         // Create WhatsApp message
         const whatsappMessage = `Hello CITHAA!%0A%0AQuick Enquiry:%0A%0A${Object.entries(data).map(([key, value]) => `${key}: ${value}`).join('%0A')}`;
         const whatsappNumber = '919344884493'; // Replace with your actual WhatsApp number
         window.open(`https://wa.me/${whatsappNumber}?text=${whatsappMessage}`, '_blank');
     });

     // Newsletter Form
     document.getElementById('newsletterForm').addEventListener('submit', function(e) {
         e.preventDefault();
         alert('Thank you for subscribing to our newsletter! We will keep you updated with our latest products and offers.');
         this.reset();
     });

     // Smooth scroll for navigation links
     document.querySelectorAll('a[href^="#"]').forEach(anchor => {
         anchor.addEventListener('click', function(e) {
             const href = this.getAttribute('href');
             if (href !== '#' && href.length > 1) {
                 e.preventDefault();
                 const target = document.querySelector(href);
                 if (target) {
                     target.scrollIntoView({
                         behavior: 'smooth',
                         block: 'start'
                     });

                     // Close offcanvas if open
                     const offcanvas = document.querySelector('.offcanvas');
                     if (offcanvas && offcanvas.classList.contains('show')) {
                         bootstrap.Offcanvas.getInstance(offcanvas).hide();
                     }
                 }
             }
         });
     });

     // Product card animations
     const productCards = document.querySelectorAll('.product-card');
     productCards.forEach(card => {
         card.addEventListener('mouseenter', function() {
             this.style.transform = 'translateY(-15px) scale(1.02)';
         });
         card.addEventListener('mouseleave', function() {
             this.style.transform = 'translateY(0)';
         });
     });

     // Service box animations
     const serviceBoxes = document.querySelectorAll('.service-box');
     serviceBoxes.forEach(box => {
         box.addEventListener('mouseenter', function() {
             this.style.transform = 'scale(1.05) rotate(2deg)';
         });
         box.addEventListener('mouseleave', function() {
             this.style.transform = 'scale(1) rotate(0deg)';
         });
     });

     // Gallery item animations
     const galleryItems = document.querySelectorAll('.gallery-item');
     galleryItems.forEach(item => {
         item.addEventListener('click', function() {
             // You can add lightbox functionality here
             console.log('Gallery item clicked');
         });
     });
 </script>

 </body>

 </html>
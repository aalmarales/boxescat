document.addEventListener('DOMContentLoaded', function () {
    // Preloader
    const preloader = document.querySelector('.preloader');
    
    window.addEventListener('load', function () {
        gsap.to(preloader, {
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out',
            onComplete: function () {
                preloader.style.display = 'none';
            }
        });
    });
});

    // Theme Toggle
    const themeToggle = document.querySelector('.theme-toggle');
    const body = document.body;
    
    themeToggle.addEventListener('click', function() {
        const currentTheme = body.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        body.setAttribute('data-theme', newTheme);
        
        // Guardar preferencia en localStorage
        localStorage.setItem('theme', newTheme);
        
        // Animación del botón
        gsap.from(themeToggle, {
            scale: 0.9,
            duration: 0.3,
            ease: 'back.out'
        });
    });

    // Cargar tema guardado
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        body.setAttribute('data-theme', savedTheme);
    }

    // Cursor Personalizado
    const cursor = document.querySelector('.cursor');
    const cursorFollower = document.querySelector('.cursor-follower');
    
    document.addEventListener('mousemove', function(e) {
        gsap.to(cursor, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.1,
            ease: 'power2.out'
        });
        
        gsap.to(cursorFollower, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.6,
            ease: 'power2.out'
        });
    });

    // Efecto Magnetic en botones
    const magneticElements = document.querySelectorAll('.magnetic');
    
    magneticElements.forEach(element => {
        element.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const distanceX = x - centerX;
            const distanceY = y - centerY;
            
            gsap.to(this, {
                x: distanceX * 0.2,
                y: distanceY * 0.2,
                duration: 0.5,
                ease: 'power2.out'
            });
        });
        
        element.addEventListener('mouseleave', function() {
            gsap.to(this, {
                x: 0,
                y: 0,
                duration: 0.5,
                ease: 'elastic.out(1, 0.5)'
            });
        });
    });

    // Animación del Navbar al hacer scroll
    const navbar = document.querySelector('.glass-nav');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(15, 15, 26, 0.9)';
            navbar.style.padding = '15px 0';
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.2)';
        } else {
            navbar.style.background = 'rgba(15, 15, 26, 0.7)';
            navbar.style.padding = '20px 0';
            navbar.style.boxShadow = 'none';
        }
    });

    // Mobile Menu Toggle
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        navLinks.classList.toggle('active');
        
        if (navLinks.classList.contains('active')) {
            gsap.from(navLinks.querySelectorAll('li'), {
                x: -50,
                opacity: 0,
                stagger: 0.1,
                duration: 0.5,
                ease: 'power2.out'
            });
        }
    });

    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
                
                // Cerrar menú móvil si está abierto
                if (navLinks.classList.contains('active')) {
                    hamburger.classList.remove('active');
                    navLinks.classList.remove('active');
                }
            }
        });
    });

    // Efecto Parallax en imagen del hero
    const parallaxImg = document.querySelector('.parallax-img');
    
    if (parallaxImg) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            parallaxImg.style.transform = `translateY(${scrollPosition * 0.3}px)`;
        });
    };

    // Animación de texto con Splitting.js
    if (typeof Splitting === 'function') {
        Splitting();
        
        // Animación de palabras en el título del hero
        const heroTitleWords = document.querySelectorAll('.hero-title .word span');
        
        if (heroTitleWords.length > 0) {
            gsap.from(heroTitleWords, {
                y: 100,
                opacity: 0,
                stagger: 0.05,
                duration: 1,
                ease: 'power3.out',
                delay: 0.5
            });
        }
        
        // Animación de caracteres en los títulos de sección
        document.querySelectorAll('[data-splitting]').forEach(element => {
            const chars = element.querySelectorAll('.char');
            
            if (chars.length > 0) {
                gsap.from(chars, {
                    y: 50,
                    opacity: 0,
                    stagger: 0.02,
                    duration: 0.6,
                    ease: 'back.out',
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                });
            }
        });
    }

    // Slider de productos con Splide
    if (typeof Splide === 'function') {
        new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: '30px',
            pagination: false,
            breakpoints: {
                1200: {
                    perPage: 2
                },
                768: {
                    perPage: 1
                }
            }
        }).mount();
    }

    // Video Showcase
    const videoShowcase = document.querySelector('.video-showcase');
    const video = videoShowcase.querySelector('video');
    const playButton = videoShowcase.querySelector('.play-button');
    const canvas = videoShowcase.querySelector('.video-distortion');
    
    if (video && playButton && canvas) {
        let isPlaying = false;
        
        playButton.addEventListener('click', function() {
            if (isPlaying) {
                video.pause();
                this.innerHTML = '<i class="fas fa-play"></i>';
            } else {
                video.play();
                this.innerHTML = '<i class="fas fa-pause"></i>';
            }
            isPlaying = !isPlaying;
        });
        
        // Efecto de distorsión en el video
        const ctx = canvas.getContext('2d');
        
        function resizeCanvas() {
            canvas.width = videoShowcase.offsetWidth;
            canvas.height = videoShowcase.offsetHeight;
        }
        
        function drawFrame() {
            if (video.paused || video.ended) return;
            
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const data = imageData.data;
            
            for (let i = 0; i < data.length; i += 4) {
                if (Math.random() > 0.95) {
                    data[i] = 255 - data[i]; // R
                    data[i + 1] = 255 - data[i + 1]; // G
                    data[i + 2] = 255 - data[i + 2]; // B
                }
            }
            
            ctx.putImageData(imageData, 0, 0);
            requestAnimationFrame(drawFrame);
        }
        
        video.addEventListener('play', function() {
            resizeCanvas();
            drawFrame();
        });
        
        window.addEventListener('resize', resizeCanvas);
    }

    // Animaciones con GSAP ScrollTrigger
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        
        // Animación de las feature cards
        gsap.from('.feature-card', {
            y: 50,
            opacity: 0,
            stagger: 0.1,
            duration: 0.8,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.features',
                start: 'top 80%',
                toggleActions: 'play none none none'
            }
        });
        
        // Animación de los testimonios
        gsap.from('.testimonial-card', {
            x: -50,
            opacity: 0,
            stagger: 0.2,
            duration: 0.8,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.testimonials',
                start: 'top 80%',
                toggleActions: 'play none none none'
            }
        });
        
        // Animación del formulario de contacto
        gsap.from('.contact-form', {
            x: 50,
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.contact',
                start: 'top 80%',
                toggleActions: 'play none none none'
            }
        });
    }

    // Efecto de partículas
    function initParticles(canvasId, color) {
        const canvas = document.getElementById(canvasId);
        if (!canvas) return;
        
        const ctx = canvas.getContext('2d');
        let particles = [];
        
        function resizeCanvas() {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
            initParticlesArray();
        }
        
        function initParticlesArray() {
            particles = [];
            const particleCount = Math.floor(canvas.width * canvas.height / 10000);
            
            for (let i = 0; i < particleCount; i++) {
                particles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    size: Math.random() * 2 + 1,
                    speedX: Math.random() * 1 - 0.5,
                    speedY: Math.random() * 1 - 0.5
                });
            }
        }
        
        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            for (let i = 0; i < particles.length; i++) {
                const p = particles[i];
                
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fillStyle = color || 'rgba(255, 255, 255, 0.5)';
                ctx.fill();
                
                p.x += p.speedX;
                p.y += p.speedY;
                
                if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
                if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;
                
                // Conectar partículas cercanas
                for (let j = i + 1; j < particles.length; j++) {
                    const p2 = particles[j];
                    const dx = p.x - p2.x;
                    const dy = p.y - p2.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    
                    if (distance < 100) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(255, 255, 255, ${1 - distance / 100})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(p2.x, p2.y);
                        ctx.stroke();
                    }
                }
            }
            
            requestAnimationFrame(animateParticles);
        }
        
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();
        animateParticles();
    }
    
    initParticles('particles', 'rgba(108, 77, 255, 0.5)');
    initParticles('footer-particles', 'rgba(255, 255, 255, 0.2)');

    // Formulario de contacto
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const formValues = Object.fromEntries(formData.entries());
            
            // Aquí iría la lógica para enviar el formulario
            console.log('Formulario enviado:', formValues);
            
            // Mostrar notificación de éxito
            showNotification('¡Mensaje enviado!', 'Nos pondremos en contacto contigo pronto.');
            
            // Resetear formulario
            this.reset();
        });
    }

    // Notificación de carrito
    function showNotification(title, message) {
        const notification = document.querySelector('.cart-notification');
        const notificationTitle = notification.querySelector('h4');
        const notificationMessage = notification.querySelector('p');
        
        notificationTitle.textContent = title;
        notificationMessage.textContent = message;
        
        notification.classList.add('show');
        
        setTimeout(() => {
            notification.classList.remove('show');
        }, 5000);
    }
    
    // Botón de añadir al carrito
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            const productName = productCard.querySelector('h3').textContent;
            
            showNotification('¡Producto añadido!', `${productName} se ha añadido a tu carrito.`);
        });
    });
    
    // Cerrar notificación
    document.querySelector('.notification-close').addEventListener('click', function() {
        this.closest('.cart-notification').classList.remove('show');
    });

    // Quick View Modal
    const quickViewButtons = document.querySelectorAll('.quick-view');
    const quickViewModal = document.querySelector('.quick-view-modal');
    const modalClose = quickViewModal.querySelector('.modal-close');
    
    quickViewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            const productClone = productCard.cloneNode(true);
            
            quickViewModal.querySelector('.modal-product').innerHTML = '';
            quickViewModal.querySelector('.modal-product').appendChild(productClone);
            
            quickViewModal.classList.add('active');
        });
    });
    
    modalClose.addEventListener('click', function() {
        quickViewModal.classList.remove('active');
    });
    
    quickViewModal.querySelector('.modal-overlay').addEventListener('click', function() {
        quickViewModal.classList.remove('active');
    });

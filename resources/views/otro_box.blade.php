<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NebulaCat | Cajas Intergalácticas para Gatos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <link rel="stylesheet" href="{{ asset('css/otro.css') }}">
</head>
<body>
    <!-- Cursor Personalizado -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Theme Toggle -->
    <button class="theme-toggle">
        <i class="fas fa-moon"></i>
        <i class="fas fa-sun"></i>
    </button>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
            <span class="loader-text">Cargando universo felino...</span>
        </div>
    </div>

    <!-- Navbar Glassmorphism -->
    <nav class="glass-nav">
        <div class="container">
            <a href="#" class="logo" data-splitting>NebulaCat</a>
            <div class="nav-right">
                <ul class="nav-links">
                    <li><a href="#features" data-hover="Características">Características</a></li>
                    <li><a href="#products" data-hover="Modelos">Modelos</a></li>
                    <li><a href="#testimonials" data-hover="Clientes">Clientes</a></li>
                    <li><a href="#contact" data-hover="Contacto">Contacto</a></li>

                    <li><a href="{{ route('login') }}" data-hover="Contacto">Login</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section con Partículas -->
    <section class="hero">
        <canvas id="particles"></canvas>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title" data-splitting>
                    <span class="word">Cajas</span>
                    <span class="word">que</span>
                    <span class="word">despiertan</span>
                    <span class="word">su</span>
                    <span class="word">naturaleza</span>
                    <span class="word">curiosa</span>
                </h1>
                <p class="hero-subtitle">Diseño futurista para los exploradores intergalácticos felinos</p>
                <div class="hero-buttons">
                    <a href="#products" class="cta-button magnetic">
                        <span class="button-text">Explorar modelos</span>
                        <span class="button-icon"><i class="fas fa-chevron-right"></i></span>
                    </a>
                    <a href="#features" class="cta-button secondary magnetic">
                        <span class="button-icon"><i class="fas fa-play"></i></span>
                        <span class="button-text">Ver video</span>
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1686&q=80" alt="Gato en caja futurista" class="parallax-img">
                    <div class="shape-overlay"></div>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div class="arrows">
                <span></span>
                <span></span>
            </div>
        </div>
    </section>

    <!-- Features Section con Grid Animado -->
    <section id="features" class="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" data-splitting>Diseñado para <span>conquistadores</span> de dimensiones</h2>
                <p class="section-subtitle">Tecnología felina de última generación</p>
            </div>
            <div class="features-grid">
                <div class="feature-card neumorphic">
                    <div class="feature-icon">
                        <svg class="icon-shape" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" class="shape-circle"></circle>
                        </svg>
                        <i class="fas fa-atom"></i>
                    </div>
                    <h3>Tecnología Cuántica</h3>
                    <p>Materiales que se adaptan a la temperatura corporal de tu gato en tiempo real.</p>
                    <div class="feature-number">01</div>
                </div>
                <div class="feature-card neumorphic">
                    <div class="feature-icon">
                        <svg class="icon-shape" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" class="shape-circle"></circle>
                        </svg>
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Campo de Protección</h3>
                    <p>Sistema antiestrés que crea una burbuja de seguridad para tu felino.</p>
                    <div class="feature-number">02</div>
                </div>
                <div class="feature-card neumorphic">
                    <div class="feature-icon">
                        <svg class="icon-shape" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" class="shape-circle"></circle>
                        </svg>
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>IA Felina</h3>
                    <p>Reconoce los patrones de sueño y juego de tu gato para adaptarse automáticamente.</p>
                    <div class="feature-number">03</div>
                </div>
                <div class="feature-card neumorphic">
                    <div class="feature-icon">
                        <svg class="icon-shape" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" class="shape-circle"></circle>
                        </svg>
                        <i class="fas fa-infinity"></i>
                    </div>
                    <h3>Energía Infinita</h3>
                    <p>Auto-recarga solar para los sistemas integrados de entretenimiento.</p>
                    <div class="feature-number">04</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Slider con Splide -->
    <section id="products" class="products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" data-splitting>Colección <span>Galáctica</span></h2>
                <p class="section-subtitle">Elige la nave espacial de tu felino</p>
            </div>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="product-card neumorphic">
                                <div class="product-badge">Best Seller</div>
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1591769225440-811ad7d6eab2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80" alt="NebulaCat X1">
                                    <div class="product-overlay">
                                        <button class="quick-view magnetic">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3>NebulaCat X1</h3>
                                    <p class="product-description">Edición estándar con tecnología cuántica básica</p>
                                    <div class="product-price">$129<span>.99</span></div>
                                    <button class="add-to-cart magnetic">
                                        <span>Añadir al carrito</span>
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="product-card neumorphic">
                                <div class="product-badge">Nuevo</div>
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1617182545423-bcabd1de8a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80" alt="NebulaCat X2 Pro">
                                    <div class="product-overlay">
                                        <button class="quick-view magnetic">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3>NebulaCat X2 Pro</h3>
                                    <p class="product-description">Tecnología IA felina y campo de protección</p>
                                    <div class="product-price">$199<span>.99</span></div>
                                    <button class="add-to-cart magnetic">
                                        <span>Añadir al carrito</span>
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="product-card neumorphic">
                                <div class="product-badge">Limitado</div>
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1596854407944-b2c8e5c0f1f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80" alt="NebulaCat Quantum">
                                    <div class="product-overlay">
                                        <button class="quick-view magnetic">
                                            <i class="fas fa-expand"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3>NebulaCat Quantum</h3>
                                    <p class="product-description">Edición premium con todos los sistemas integrados</p>
                                    <div class="product-price">$299<span>.99</span></div>
                                    <button class="add-to-cart magnetic">
                                        <span>Añadir al carrito</span>
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section con Efecto Distorsión -->
    <section class="video-showcase">
        <div class="video-container">
            <div class="video-wrapper">
                <video loop muted playsinline>
                    <source src="https://assets.mixkit.co/videos/preview/mixkit-cat-playing-with-a-cardboard-box-12455-large.mp4" type="video/mp4">
                </video>
                <canvas class="video-distortion"></canvas>
            </div>
            <div class="video-content">
                <h2 data-splitting>Experimenta la <span>revolución</span> felina</h2>
                <button class="play-button magnetic">
                    <i class="fas fa-play"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section 3D -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" data-splitting>Exploradores <span>intergalácticos</span> felices</h2>
                <p class="section-subtitle">Lo que dicen nuestros clientes humanos</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card neumorphic">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Mi gato Pixel pasó de ignorar todas las camas a vivir en su NebulaCat. ¡La tecnología IA es increíble!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="María González">
                        </div>
                        <div class="author-info">
                            <h4>María González</h4>
                            <span>Dueña de Pixel</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card neumorphic">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>"Compré tres modelos diferentes y cada gato eligió la suya. El diseño es tan bueno que combina con nuestra decoración futurista."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Carlos Martínez">
                        </div>
                        <div class="author-info">
                            <h4>Carlos Martínez</h4>
                            <span>Dueño de Neo, Trinity y Morpheus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section con Efecto Holográfico -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <div class="cta-text">
                    <h2 data-splitting>Únete a la <span>revolución</span> felina</h2>
                    <p>Envío interestelar gratuito en pedidos superiores a $150</p>
                </div>
                <div class="cta-buttons">
                    <a href="#products" class="cta-button primary magnetic">
                        <span class="button-text">Explorar modelos</span>
                        <span class="button-icon"><i class="fas fa-chevron-right"></i></span>
                    </a>
                    <a href="#contact" class="cta-button secondary magnetic">
                        <span class="button-icon"><i class="fas fa-comment-dots"></i></span>
                        <span class="button-text">Contactar</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="holographic-effect"></div>
    </section>

    <!-- Contact Section con Formulario Interactivo -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2 class="section-title" data-splitting>Contacto <span>Interdimensional</span></h2>
                    <p>¿Preguntas sobre nuestros productos? Nuestro equipo de soporte galáctico está aquí para ayudarte.</p>
                    
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="method-info">
                                <h4>Comunicación Subespacial</h4>
                                <span>+1 234 567 890</span>
                            </div>
                        </div>
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="method-info">
                                <h4>Mensajería Cuántica</h4>
                                <span>hola@nebulacat.com</span>
                            </div>
                        </div>
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="method-info">
                                <h4>Base Terrestre</h4>
                                <span>Vía Láctea 123, Sistema Solar</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" class="magnetic"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="magnetic"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="magnetic"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="magnetic"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="contactForm" class="neumorphic">
                        <div class="form-group">
                            <input type="text" id="name" required>
                            <label for="name">Nombre</label>
                            <div class="underline"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" required>
                            <label for="email">Email</label>
                            <div class="underline"></div>
                        </div>
                        <div class="form-group">
                            <textarea id="message" required></textarea>
                            <label for="message">Mensaje</label>
                            <div class="underline"></div>
                        </div>
                        <button type="submit" class="submit-button magnetic">
                            <span>Enviar mensaje</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer con Efecto de Partículas -->
    <footer>
        <canvas id="footer-particles"></canvas>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="#" class="logo" data-splitting>NebulaCat</a>
                    <p>Tecnología felina para conquistadores interdimensionales</p>
                </div>
                
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Explorar</h4>
                        <ul>
                            <li><a href="#" class="magnetic">Modelos</a></li>
                            <li><a href="#" class="magnetic">Tecnología</a></li>
                            <li><a href="#" class="magnetic">Galería</a></li>
                            <li><a href="#" class="magnetic">Testimonios</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Compañía</h4>
                        <ul>
                            <li><a href="#" class="magnetic">Sobre nosotros</a></li>
                            <li><a href="#" class="magnetic">Blog</a></li>
                            <li><a href="#" class="magnetic">Carreras</a></li>
                            <li><a href="#" class="magnetic">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Soporte</h4>
                        <ul>
                            <li><a href="#" class="magnetic">FAQ</a></li>
                            <li><a href="#" class="magnetic">Envíos</a></li>
                            <li><a href="#" class="magnetic">Devoluciones</a></li>
                            <li><a href="#" class="magnetic">Guías</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 NebulaCat. Todos los derechos reservados en todas las dimensiones conocidas.</p>
                <div class="legal-links">
                    <a href="#" class="magnetic">Términos</a>
                    <a href="#" class="magnetic">Privacidad</a>
                    <a href="#" class="magnetic">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cart Notification -->
    <div class="cart-notification">
        <div class="notification-content">
            <div class="notification-icon">
                <i class="fas fa-check"></i>
            </div>
            <div class="notification-text">
                <h4>¡Producto añadido!</h4>
                <p>Tu NebulaCat está lista para viaje interdimensional</p>
            </div>
            <button class="notification-close magnetic">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <!-- Quick View Modal -->
    <div class="quick-view-modal">
        <div class="modal-overlay"></div>
        <div class="modal-content neumorphic">
            <button class="modal-close magnetic">
                <i class="fas fa-times"></i>
            </button>
            <div class="modal-product">
                <!-- Contenido dinámico -->
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>

    <script src="{{ asset('js/otro.js') }}"></script>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</body>
</html>
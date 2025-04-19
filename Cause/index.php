<!DOCTYPE html>
    <!-- Метаданни и външни стилове -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="../Cause/Images/Logo1.png">
    <title>Ride and Help</title>
    <?php include 'ContactFunction.php'; ?>
    <?php include 'AcademyFunction.php'; ?>
</head>
<body>
<body> 
  <!-- НАВИГАЦИЯ -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Лого -->
            <a class="navbar-brand d-lg-none logo-text" href="#section1">Ride & Help</a>
    
            <!-- Toggler бутона вдясно -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Менюто -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex align-items-center">
                    <!-- Left side links -->
                    <li class="nav-item"><a class="nav-link" href="#section1">Начало</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section2">За нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section3">Мисии</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section4">Академия</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section5">Доброволци</a></li>
    
                    <!-- Center logo text -->
                    <li class="nav-item mx-3">
                        <a class="nav-link logo-text" href="#section1">Ride & Help</a>
                    </li>
    
                    <!-- Right side links -->
                    <li class="nav-item"><a class="nav-link" href="#section6">Магазин</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section7">Партньори</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section8">Въпроси</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section9">Контакти</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section10">Влез</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main>
       <!-- HERO СЕКЦИЯ (Начало) -->
        <section id="section1">
            <div class="main">
                <video autoplay loop muted id="video" playsinline>
                    <source src="../Cause/Videos/backgroundVideo.mp4" type="video/mp4">
                </video>
                <div class="overlay"></div> 
                   <div class="hero-center">
                    <h1>Превръщаме всяко пътуване в кауза</h1>
                    <p>Ride & Help обединява мотористи, които даряват време, енергия и сърце за добри дела.</p>
                    <div class="hero-buttons">
                        <a href="#section9" class="hero-btn-filled">Стани доброволец</a>
                      <a href="#section2" class="hero-btn-outline">Научи повече</a>
                      
                    </div>
                  </div>
                  
            </div>
        </section>
    </main>
    <!-- СЕКЦИЯ 2: За нас -->
    <div id="section2" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Лявата част със снимката -->
                <div class="col-md-6 position-relative">
                    <img src="../Cause/Images/Sec2.png" alt="Мотористи с кауза" class="img-fluid rounded">
                </div>

                <!-- Дясната част с текста -->
                <div class="col-md-6 text-white position-relative">
                    <h1>Кои сме ние?</h1>
                    <p>
                        Ride & Help е общност от мотористи с кауза. Ние използваме пътя не само за приключения, а за помощ – към хора, които имат нужда. Вярваме, че всяко каране може да бъде добро дело.
                    </p>
                    <p>
                        „Зад всяка каска стои сърце.“
                    </p>
                    <a href="#section3" class="btn btn-warning mt-3">Научете повече</a>

                    <!-- Оранжева линия от дясната страна на секцията -->
                    <div class="orange-line"></div>
                </div>
            </div>
        </div>
    </div>
 <!-- СЕКЦИЯ 3: Мисии -->
<div id="section3" class="py-5">
  <div class="container">
      <h1 class="text-center text-white mb-4">Нашите мисии</h1>
      <p class="text-center text-white mb-5">Превръщаме всяко каране във възможност за правене на добро.</p>
      <div class="row">
          <!-- Мисия 1: Доставки -->
          <div class="col-md-4 text-center">
              <div class="mission-card">
                  <div class="mission-icon bg-orange rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                      <i class="fas fa-motorcycle fa-2x text-white"></i>
                  </div>
                  <h4 class="text-white">Доставки</h4>
                  <p class="text-white">Доставяме храна, лекарства и всичко на хората, които не могат да стигнат до тях сами.</p>
              </div>
          </div>

          <!-- Мисия 2: Грижа -->
          <div class="col-md-4 text-center">
              <div class="mission-card">
                  <div class="mission-icon bg-orange rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                      <i class="fas fa-hands-helping fa-2x text-white"></i>
                  </div>
                  <h4 class="text-white">Грижа</h4>
                  <p class="text-white">До тези сме, които са сами. Предлагаме подкрепа и човешко отношение.</p>
              </div>
          </div>

          <!-- Мисия 3: Каузи -->
          <div class="col-md-4 text-center">
              <div class="mission-card">
                  <div class="mission-icon bg-orange rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                      <i class="fas fa-gift fa-2x text-white"></i>
                  </div>
                  <h4 class="text-white">Каузи</h4>
                  <p class="text-white">Участваме в благотворителни събития, носим подаръци, организираме кампании.</p>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- СЕКЦИЯ 4: Академия -->
<section id="section4" class="academy-section text-white">
  <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-start py-5">
    <!-- Лява част с бутон -->
    <div class="left-part mb-5 mb-lg-0" style="max-width: 50%">
      <h2 class="fw-bold mb-3">Академия Ride & Help</h2>
      <p class="mb-3">Независимо дали си новак или опитен моторист, тук е мястото, където страстта среща доброто.</p>
      <p class="mb-4">Започни пътя си с нас – от първите стъпки до уверен моторист с мисия. Нашата академия ще ти даде знания, подкрепа и вдъхновение.</p>
      <button class="btn bg-orange text-white px-4 py-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#academyModal">Запиши се</button>
    </div>

    <!-- Дясна част със стъпки -->
    <div class="right-part position-relative" style="max-width: 45%">
      <div class="timeline-line position-absolute top-0 start-0" style="width: 3px; height: 100%; background-color: #f97316; left: -20px;"></div>

      <div class="step mb-5 ps-4">
        <div class="circle-number bg-orange text-white fw-bold">1</div>
        <h5 class="fw-bold text-orange mt-2">Основи на безопасността</h5>
        <p class="text-light">Научи се да предпазваш себе си и другите чрез интензивни тренировки и онлайн уроци.</p>
      </div>

      <div class="step mb-5 ps-4">
        <div class="circle-number bg-orange text-white fw-bold">2</div>
        <h5 class="fw-bold text-orange mt-2">Свързване с общността</h5>
        <p class="text-light">Станеш част от мрежа от опитни и начинаещи мотористи. Учи се и вдъхновявай.</p>
      </div>

      <div class="step ps-4">
        <div class="circle-number bg-orange text-white fw-bold">3</div>
        <h5 class="fw-bold text-orange mt-2">Мисии с кауза</h5>
        <p class="text-light">Участвай в реални мисии и получи сертификат за завършена академия.</p>
      </div>
    </div>
  </div>

  <!-- Успешно записване Toast -->
  <div id="academySuccessToast" class="position-fixed top-50 start-50 translate-middle p-4 bg-orange text-white rounded-4 shadow-lg text-center fw-bold animate__animated animate__fadeInDown" style="display:none; z-index: 9999;">
    Успешно се записа в Академията! 🏍️
  </div>

  <!-- Модал с форма -->
  <div class="modal fade" id="academyModal" tabindex="-1" aria-labelledby="academyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-dark text-white">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="academyModalLabel">Записване за Академията</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="academyForm" method="post" action="AcademyFunction.php">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="name" class="form-label">Име <span class="text-orange">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Имейл <span class="text-orange">*</span></label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Телефон <span class="text-orange">*</span></label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
              </div>
              <div class="col-md-6">
                <label for="experience" class="form-label">Ниво на опит <span class="text-orange">*</span></label>
                <select class="form-select" id="experience" name="experience" required>
                  <option selected disabled value="">Избери...</option>
                  <option>Напълно начинаещ</option>
                  <option>Имам малко опит</option>
                  <option>Карал/а съм активно</option>
                  <option>Лицензиран моторист</option>
                </select>
              </div>
              <div class="mt-4 text-end">
                <button type="submit" class="btn bg-orange text-white px-4 py-2 fw-semibold">Изпрати</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.addEventListener("DOMContentLoaded", () => {
      const params = new URLSearchParams(window.location.search);
      const success = params.get("academy");
      const error = params.get("error");

      if (success === "1") {
        const toast = document.getElementById("academySuccessToast");
        toast.style.display = "block";
        setTimeout(() => {
          toast.style.display = "none";
          window.history.replaceState({}, document.title, window.location.pathname);
        }, 4000);
      }

      if (success === "0") {
        const decodedError = decodeURIComponent(error || "Грешка при записването. Моля, опитайте отново.");
        alert("Възникна грешка при записването: " + decodedError);
        window.history.replaceState({}, document.title, window.location.pathname);
      }
    });
  </script>
</section>
<!-- СЕКЦИЯ 5: Доброволци -->
<section id="section5" class="volunteer-section text-white py-5" style="background-color:#171717; font-family: 'Lora', serif;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold mb-3">Нямаш мотор?<br>Искаш да станеш част от <span class="text-orange">Ride&Help</span></h2>
      <p class="fst-italic">Всеки може да помогне – с ръце, сърце или просто с дарение. В <span class="text-orange">Ride&Help</span> вярваме, че доброто не изисква нито двигател, нито възраст. Само желание!</p>
    </div>

    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="p-4 h-100">
          <div class="bg-orange rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 90px; height: 90px;">
            <i class="fas fa-route fa-2x text-white"></i>
          </div>
          <h5 class="fw-bold text-white">Карай с мисия</h5>
          <p class="text-light">Помагай докато караш – доставяй храна, подкрепа и усмивки.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 h-100">
          <div class="bg-orange rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 90px; height: 90px;">
            <i class="fas fa-hands-helping fa-2x text-white"></i>
          </div>
          <h5 class="fw-bold text-white">Подай ръка</h5>
          <p class="text-light">Включи се в акции за възрастни и самотни хора.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 h-100">
          <div class="bg-orange rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 90px; height: 90px;">
            <i class="fas fa-people-carry fa-2x text-white"></i>
          </div>
          <h5 class="fw-bold text-white">Помагай на терен</h5>
          <p class="text-light">Носи торби, разтоварвай и подготвяй. Всяка ръка е от значение.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- СЕКЦИЯ 6: Магазин -->
<section id="section6" class="shop-section py-5 text-white">
  <div class="container text-center">
    <h2 class="fw-bold display-5 mb-2">Ride&Help Магазин</h2>
    <p class="fst-italic mb-5">100% от цената на стоките отиват за вашите каузи</p>

    <div class="row justify-content-center g-4">
      <!-- Продукт 1 -->
      <div class="col-md-4">
        <div class="product-card p-4 d-flex flex-column align-items-center text-center">
          <img src="../Cause/Images/Hat.jpg" alt="Ride&Help Шапка" class="img-fluid zoom-on-hover">
          <h5 class="fw-bold mt-4">Лимитирана шапка</h5>
          <p class="price text-orange fw-semibold fs-5">40 лв</p>
          <button class="btn btn-orange mt-auto w-100" onclick="addToCart('Лимитирана шапка', 40)">Добави в количка</button>
        </div>
      </div>

      <!-- Продукт 2 -->
      <div class="col-md-4">
        <div class="product-card p-4 d-flex flex-column align-items-center text-center">
          <img src="../Cause/Images/Tshirt.jpg" alt="Ride&Help Тениска" class="img-fluid zoom-on-hover">
          <h5 class="fw-bold mt-4">Лимитирана тениска</h5>
          <p class="price text-orange fw-semibold fs-5">70 лв</p>
          <button class="btn btn-orange mt-auto w-100" onclick="addToCart('Лимитирана тениска', 70)">Добави в количка</button>
        </div>
      </div>

      <!-- Продукт 3 -->
      <div class="col-md-4">
        <div class="product-card p-4 d-flex flex-column align-items-center text-center">
          <img src="../Cause/Images/Mug.jpg" alt="Ride&Help Чаша" class="img-fluid zoom-on-hover">
          <h5 class="fw-bold mt-4">Лимитирана чаша</h5>
          <p class="price text-orange fw-semibold fs-5">30 лв</p>
          <button class="btn btn-orange mt-auto w-100" onclick="addToCart('Лимитирана чаша', 30)">Добави в количка</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Pop-up -->
    <div id="popup" class="position-fixed top-50 start-50 translate-middle bg-dark text-white p-4 rounded shadow-lg animate__animated animate__fadeIn" style="display:none; z-index:1050; width:320px;">
      <p id="popup-message" class="mb-3 fw-bold"></p>
      <div class="d-flex justify-content-between">
        <button class="btn btn-outline-light px-3" onclick="closePopup()">Разгледай още</button>
        <button class="btn btn-orange px-3" onclick="showCart()">Плати</button>
      </div>
    </div>
  
    <!-- Checkout Modal -->
<div id="checkout-modal" class="position-fixed top-50 start-50 translate-middle bg-dark text-white p-4 rounded shadow-lg" style="display:none; z-index:1051; width:400px; max-height:90vh; overflow-y:auto;">
  <h5 class="fw-bold mb-3">Вашата количка</h5>
  <ul id="cart-list" class="list-unstyled"></ul>
  <p id="total-price" class="text-orange fw-bold mb-3" style="font-size: 1.2rem;">Общо: 0 лв</p>
  <hr class="text-secondary">
  <p class="mb-2">Метод за плащане:</p>
  <select id="payment-method" class="form-select mb-3">
    <option selected>Revolut</option>
    <option>Наложен платеж</option>
  </select>
  <input type="text" id="address-input" class="form-control mb-3" placeholder="Адрес за доставка">
  <div class="d-flex justify-content-end">
    <button class="btn btn-outline-light me-2" onclick="closeCart()">Назад</button>
    <button class="btn btn-orange" onclick="submitOrder()">Потвърди</button>
  </div>
  <p id="confirmation-message" class="text-success fw-semibold mt-3" style="display:none;">Благодарим! Очаквайте да се свържем с вас скоро.</p>
  <p id="error-message" class="text-danger fw-semibold mt-3" style="display:none;"></p>
</div>
    <script>
        const cart = [];

        function addToCart(product, price) {
          cart.push({ name: product, price });
          document.getElementById('popup-message').innerText = `${product} беше добавен в количката.`;
          document.getElementById('popup').style.display = 'block';
        }
      
        function closePopup() {
          document.getElementById('popup').style.display = 'none';
        }
      
        function removeFromCart(index) {
          cart.splice(index, 1);
          showCart();
        }
      
        function showCart() {
          closePopup();
          const cartList = document.getElementById('cart-list');
          cartList.innerHTML = '';
        
          let total = 0;
        
          if (cart.length === 0) {
            cartList.innerHTML = '<p class="text-muted">Количката е празна.</p>';
          } else {
            cart.forEach((item, index) => {
              total += item.price;
              const li = document.createElement('li');
              li.classList.add('d-flex', 'justify-content-between', 'align-items-center', 'mb-2');
              li.innerHTML = `
                <span>${item.name} - ${item.price} лв</span>
                <button class="remove-btn" onclick="removeFromCart(${index})">&times;</button>
              `;
              cartList.appendChild(li);
            });
          }
        
          document.getElementById('total-price').innerText = `Общо: ${total} лв`;
          document.getElementById('confirmation-message').style.display = 'none';
          document.getElementById('error-message').style.display = 'none';
          document.getElementById('checkout-modal').style.display = 'block';
        }
        function closeCart() {
          document.getElementById('checkout-modal').style.display = 'none';
        }
      
        function submitOrder() {
          const address = document.getElementById('address-input').value.trim();
          const errorMsg = document.getElementById('error-message');
          const confirmationMsg = document.getElementById('confirmation-message');
      
          if (cart.length === 0) {
            errorMsg.innerText = 'Количката е празна. Добавете поне един продукт.';
            errorMsg.style.display = 'block';
            return;
          }
      
          if (!address) {
            errorMsg.innerText = 'Моля, въведете адрес за доставка.';
            errorMsg.style.display = 'block';
            return;
          }
      
          errorMsg.style.display = 'none';
          confirmationMsg.style.display = 'block';
          setTimeout(() => {
            cart.length = 0;
            closeCart();
          }, 4000);
        }
      </script>
  </section>
   <!-- СЕКЦИЯ 7: Партньори -->
  <section id="section7" class="partners-section py-5 text-white">
    <div class="container text-center">
      <h2 class="fw-bold mb-3">Зад нас стоят хора с кауза</h2>
      <p class="lead mb-5">
        <span class="text-orange">Ride&Help</span> не е сам. До нас застават брандове, които избират доброто. 
        Заедно правим пътя <em>по-светъл</em>!
      </p>
  
      <div class="row justify-content-center align-items-center g-4">
        <div class="col-6 col-md-3">
          <img src="../Cause/Images/BCHKLogo.png" alt="BCHK" class="img-fluid grayscale-hover">
        </div>
        <div class="col-6 col-md-3">
          <img src="../Cause/Images/MotoLogo.png" alt="Moto" class="img-fluid grayscale-hover">
        </div>
        <div class="col-6 col-md-3">
          <img src="../Cause/Images/UKTCLogo.png" alt="UKTC" class="img-fluid grayscale-hover">
        </div>
        <div class="col-6 col-md-3">
          <img src="../Cause/Images/NBULogo.png" alt="NBU" class="img-fluid grayscale-hover">
        </div>
      </div>
    </div>
  </section>
   <!-- СЕКЦИЯ 8: Често задавани въпроси -->
  <section id="section8" class="faq-section py-5 text-white" style="background-color: #171717;">
    <div class="container">
      <h2 class="fw-bold text-center mb-2 display-5 ">Често задавани въпроси</h2>
      <p class="text-center mb-5 text-light">Ако не откриеш отговора, който търсиш, можеш <a href="#section9" class="text-orange text-decoration-underline">да се свържеш с нас тук</a> и ще ти отговорим възможно най-бързо.</p>
  
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion">
  
            <div class="accordion-item bg-dark border-0 mb-4 rounded shadow">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed bg-dark text-white fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false">
                  Как да се включа като доброволец?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-light">
                  За да се включиш, отиди в секцията <a href="#section5" class="text-orange text-decoration-underline">Доброволци</a> и попълни формуляра.
                </div>
              </div>
            </div>
  
            <div class="accordion-item bg-dark border-0 mb-4 rounded shadow">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-dark text-white fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                  Трябва ли да имам собствен мотор?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-light">
                  Не е задължително. Имаме <a href="#section3" class="text-orange text-decoration-underline">мисии</a>, които не изискват притежание на мотор.
                </div>
              </div>
            </div>
  
            <div class="accordion-item bg-dark border-0 mb-4 rounded shadow">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-dark text-white fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                  Какво е Академията и за кого е?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-light">
                  Академията е за доброволци. Подробности в секцията <a href="#section4" class="text-orange text-decoration-underline">Академия</a>.
                </div>
              </div>
            </div>
  
            <div class="accordion-item bg-dark border-0 mb-4 rounded shadow">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed bg-dark text-white fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">
                  Какво получавам, ако завърша обучението?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-light">
                  Получаваш сертификат, мото жилетка и възможност за участие в специализирани мисии.
                </div>
              </div>
            </div>
  
            <div class="accordion-item bg-dark border-0 mb-4 rounded shadow">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed bg-dark text-white fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false">
                  Как мога да даря средства или оборудване?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-light">
                  Използвай <a href="#section9" class="text-orange text-decoration-underline">формата за контакт</a> или посети секцията "Подкрепи ни".
                </div>
              </div>
            </div>
  
            <div class="accordion-item bg-dark border-0 rounded shadow">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed bg-dark text-white fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false">
                  Какви са мисиите и как мога да участвам?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-light">
                  Разгледай секцията <a href="#section3" class="text-orange text-decoration-underline">Мисии</a>, където ще откриеш всички текущи инициативи.
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
</section>
<!-- СЕКЦИЯ 9: Контакти -->
<section id="section9" class="contact-section py-5 text-white" style="background-color: #171717;">
  <div class="container">
    <h2 class="fw-bold text-center mb-4 display-5 text-light">Свържи се с нас</h2>
    <p class="text-center text-orange mb-5">Ако имаш въпрос, идея или просто искаш да се включиш – пиши ни!</p>

    <form method="post" action="ContactFunction.php" class="p-4 rounded shadow mx-auto" style="background-color: #1f1f1f; max-width: 600px;">
      <div class="mb-4">
        <label for="name" class="form-label fw-semibold">Име</label>
        <input type="text" class="form-control bg-dark border-0 text-orange shadow-sm" id="name" name="name" required>
      </div>
    
      <div class="mb-4">
        <label for="email" class="form-label fw-semibold">Имейл</label>
        <input type="email" class="form-control bg-dark border-0 text-orange shadow-sm" id="email" name="email" required>
      </div>
    
      <div class="mb-4">
        <label for="phone" class="form-label fw-semibold">Телефон</label>
        <input type="tel" class="form-control bg-dark border-0 text-orange shadow-sm" id="phone" name="phone" required>
      </div>
    
      <div class="mb-4">
        <label for="message" class="form-label fw-semibold">Съобщение</label>
        <textarea class="form-control bg-dark border-0 text-orange shadow-sm" id="message" name="message" rows="5" style="resize: none;" required></textarea>
      </div>
    
      <div class="text-center">
        <button type="submit" class="btn btn-orange px-4 py-2" name="submit">
          <i class="fas fa-paper-plane me-2"></i> Изпрати
        </button>
      </div>
    </form>

    <!-- Успешно изпратено съобщение -->
    <div id="successToast" class="position-fixed top-50 start-50 translate-middle p-4 bg-orange text-white rounded-4 shadow-lg text-center fw-bold animate__animated animate__fadeInDown" style="display:none; z-index: 9999;">
      Съобщението беше изпратено успешно! 🙌
    </div>

    <script>
  window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const success = params.get("success");

    if (success === "1") {
      const toast = document.getElementById("successToast");
      toast.style.display = "block";
      setTimeout(() => {
        toast.style.display = "none";
        window.history.replaceState({}, document.title, window.location.pathname);
      }, 4000);
    }

    if (success === "0") {
      alert("Възникна грешка при изпращане. Моля, опитайте отново.");
      window.history.replaceState({}, document.title, window.location.pathname);
    }
  });
</script>

  </div>
</section>

 <!-- СЕКЦИЯ 10: Footer -->
<section id="section10" class="footer-section text-white py-5" style="background-color: #111; position: relative;">
  <div class="container">
    <div class="row text-center text-md-start mb-5">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="d-flex align-items-start">
          <i class="fas fa-map-marker-alt fa-2x text-orange me-3"></i>
          <div>
            <h6 class="fw-bold text-white">Адрес</h6>
            <p class="text-light small mb-0">гр. София, бул. България 100</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="d-flex align-items-start">
          <i class="fas fa-phone-alt fa-2x text-orange me-3"></i>
          <div>
            <h6 class="fw-bold text-white">Телефон</h6>
            <p class="text-light small mb-0">+359 888 000 000</p>
            <p class="text-light small mb-0">+359 888 111 111</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex align-items-start">
          <i class="fas fa-envelope fa-2x text-orange me-3"></i>
          <div>
            <h6 class="fw-bold text-white">Имейл</h6>
            <p class="text-light small mb-0">hello@rideandhelp.bg</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mb-4">
      <a href="#" class="text-orange fs-4 mx-3" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="text-orange fs-4 mx-3" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-orange fs-4 mx-3" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" class="text-orange fs-4 mx-3" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
    </div>

    <div class="text-center small fw-semibold" style="color: #f97316;">
      &copy; Ride & Help 2025. Всички права запазени.
    </div>

    <a href="#section1" class="position-fixed bottom-0 end-0 mb-4 me-4 bg-orange p-3 rounded-circle shadow d-flex justify-content-center align-items-center" style="width: 48px; height: 48px; z-index: 9999;" aria-label="Scroll to top">
      <i class="fas fa-arrow-up text-white"></i>
    </a>
  </div>

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-wP+aB3nG4UMKAVcH63eMBq+jsH4+tVrXgUSzM/kZ+l3HHxHqtdHwRQ8RkZIf4Q9hH4w23LC8VreDWojd6nIB2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</section>

<!-- МОДАЛИ ЗА ВХОД И РЕГИСТРАЦИЯ -->
    <!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark text-white border border-orange rounded-4 shadow">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-orange" id="loginModalLabel">
          <i class="fas fa-sign-in-alt me-2"></i>Вход
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Затвори"></button>
      </div>
      <div class="modal-body">
        <form id="loginForm">
          <div class="mb-3">
            <label for="username" class="form-label">Потребителско име</label>
            <input type="text" class="form-control bg-dark text-white border-secondary" id="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Парола</label>
            <input type="password" class="form-control bg-dark text-white border-secondary" id="password" required>
          </div>
          <div class="mb-3 text-center">
            <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal" class="text-orange text-decoration-underline">Все още нямаш регистрация?</a>
          </div>
          <div class="text-end">
            <button type="submit" class="btn bg-orange text-white px-4">Влез</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark text-white border border-orange rounded-4 shadow">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-orange" id="registerModalLabel">
          <i class="fas fa-user-plus me-2"></i>Регистрация
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Затвори"></button>
      </div>
      <div class="modal-body">
        <form id="registerForm">
          <div class="mb-3">
            <label for="reg-username" class="form-label">Потребителско име</label>
            <input type="text" class="form-control bg-dark text-white border-secondary" id="reg-username" required>
          </div>
          <div class="mb-3">
            <label for="reg-email" class="form-label">Имейл</label>
            <input type="email" class="form-control bg-dark text-white border-secondary" id="reg-email" required>
          </div>
          <div class="mb-3">
            <label for="reg-password" class="form-label">Парола</label>
            <input type="password" class="form-control bg-dark text-white border-secondary" id="reg-password" required>
          </div>
          <div class="text-end">
            <button type="submit" class="btn bg-orange text-white px-4">Регистрирай се</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Welcome Toast Centered -->
<div class="position-fixed top-50 start-50 translate-middle" style="z-index: 1100;">
  <div id="welcomeToast" class="toast text-center p-4 shadow-lg border-0 rounded-4 animate__animated animate__fadeInDown" role="alert" aria-live="assertive" aria-atomic="true" aria-hidden="true" style="min-width: 320px; background-color: #f97316;">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="toast-body text-white fw-bold fs-4">
        Добре дошъл!
      </div>
      <button type="button" class="btn btn-light mt-3 px-4 rounded-pill" data-bs-dismiss="toast" aria-label="Затвори">Затвори</button>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const loginLink = document.querySelector('a[href="#section10"]');
    if (loginLink) {
      loginLink.setAttribute("data-bs-toggle", "modal");
      loginLink.setAttribute("data-bs-target", "#loginModal");
      loginLink.setAttribute("href", "#");
    }

    function showWelcomeToast() {
      const toastElement = document.getElementById("welcomeToast");
      toastElement.setAttribute("aria-hidden", "false");
      const toast = new bootstrap.Toast(toastElement);
      toast.show();
    }

    document.getElementById("loginForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const form = e.target;
      if (form.checkValidity()) {
        const modal = bootstrap.Modal.getInstance(document.getElementById("loginModal"));
        modal.hide();
        setTimeout(showWelcomeToast, 500);
      }
    });

    document.getElementById("registerForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const form = e.target;
      if (form.checkValidity()) {
        const modal = bootstrap.Modal.getInstance(document.getElementById("registerModal"));
        modal.hide();
        const loginModal = new bootstrap.Modal(document.getElementById("loginModal"));
        setTimeout(() => loginModal.show(), 500);
      }
    });
  });
</script>
 <!-- СКРИПТОВЕ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Company Profile</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar img {
      height: 95px;
    }

    .nav-links {
      display: flex;
      gap: 30px;
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      color: black;
      font-weight: 600;
    }

    .book-btn {
      background-color: black;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 4px;
    }

    .header-image {
      width: 100%;
      height: 500px;
      background-image: url('img/header monsieur.png');
      background-size: cover;
      background-position: center;
    }

    .brand-name {
      background-color: #bfbf9b;
      color: rgb(255, 255, 255);
      font-family: 'Georgia', serif;
      font-weight: bold;
      font-size: 30px;
      text-align: center;
      padding: 15px 0;
      letter-spacing: 5px;
    }

    .spacer-white {
      background-color: white;
      height: 60px;
    }

    .menu-section {
      background-color: white;
      text-align: center;
      padding: 40px 20px;
    }

    .menu-content {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      transition: all 0.5s ease;
    }

    .menu-image {
      width: 30%;
      max-width: 300px;
      height: auto;
      aspect-ratio: 16/9;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.5s ease;
    }

    .menu-image.active {
      width: 50%;
      max-width: 500px;
    }

    .menu-tabs {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
    }

    .menu-tab {
      padding: 12px 20px;
      margin: 5px;
      border: 1px solid black;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .menu-tab.active {
      background-color: black;
      color: white;
    }

    .form-section {
      padding: 40px;
      max-width: 600px;
      margin: auto;
    }

    .form-heading {
      text-align: center;
      font-size: 26px;
      font-weight: 600;
      margin-bottom: 10px;
      margin-top: 40px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    form label {
      font-weight: 600;
      display: block;
      margin-top: 20px;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      font-family: 'Poppins', sans-serif;
      border: none;
      border-bottom: 1px solid #ccc;
      margin-top: 5px;
    }

    select {
      appearance: none;
      background-color: white;
      border: 1px solid #ccc;
    }

    .submit-btn {
      margin-top: 20px;
      background-color: black;
      color: white;
      padding: 10px 20px;
      border: none;
      font-weight: 600;
      cursor: pointer;
    }

    .error-message {
      color: red;
      font-size: 12px;
      display: none;
      margin-top: 5px;
    }

    .success-message {
      color: green;
      font-weight: 600;
      margin-top: 20px;
      display: none;
    }
    .privacy-note {
      color: #666;
      font-size: 14px;
      text-align: center;
      margin-top: 20px;
      width: 100%;
    }

    .outlets-section {
  background: #fff;
  padding: 60px 0 30px 0;
  text-align: center;
}

.outlets-section h2 {
  font-size: 38px;
  font-weight: 600;
  margin-bottom: 30px;
  letter-spacing: 2px;
}

.outlets-track {
  display: flex;
  overflow-x: auto;
  gap: 30px;
  padding: 0 30px;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
}

.outlet-img {
  width: 320px;
  height: 240px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  cursor: grab;
  scroll-snap-align: start;
  transition: transform 0.2s;
}

.outlet-img:hover {
  transform: scale(1.04);
}

.footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #dcc39a;
  padding: 30px 50px;
}

    .footer-logo img {
      height: 100px;
      display: block;
    }
    .footer-logo {
      flex: 0 0 auto;
    }
    .footer-text {
      flex: 1;
      text-align: center;
    }


    .footer-text h3 {
      font-size: 10px;
      margin-bottom: 7px;
    }

    .footer-text p {
      font-size: 10px;
      color: #555;
      margin: 5px 0;
    }

    .footer-text a {
      color: #000;
      text-decoration: none;
      font-weight: 600;
    }
    .footer-info {
      display: flex;
      flex-direction: row;
      gap: 40px;
      align-items: center;
      color: #555;
      font-size: 14px;
    }

  </style>
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <img src="img/logo monsieur rect.png" alt="Logo" />
    <ul class="nav-links">
      <li><a href="http://www.monsieurspoon.com/menu/">MENU</a></li>
      <li><a href="https://www.instagram.com/monsieurspoon/">CONTACT</a></li>
      <li><a href="https://api.whatsapp.com/send/?phone=628112227766&text&type=phone_number&app_absent=0">ORDER ONLINE</a></li>
      <li><a href="https://api.whatsapp.com/send/?phone=6281120011873&text&type=phone_number&app_absent=0">RSVP</a></li>
    </ul>
    <a href="https://api.whatsapp.com/send/?phone=6281120011873&text=Hello%20Monsieur%20Spoon%2C%20I%20want%20to%20book%20a%20table!" class="book-btn">BOOK NOW</a>
  </div>

  <!-- HEADER IMAGE -->
  <div class="header-image"></div>

  <!-- BRAND NAME -->
  <div class="brand-name">MONSIEUR SPOON</div>

  <!-- MENU SECTION -->
  <div class="menu-section">
    <div class="menu-content">
      <img id="menu-image-left" class="menu-image" src="img/breakfast.png" alt="Menu Left" />
      <img id="menu-image-center" class="menu-image active" src="img/breakfast.png" alt="Menu Center" />
      <img id="menu-image-right" class="menu-image" src="img/weekend brunch.png" alt="Menu Right" />
    </div>
    <div class="menu-tabs">
      <div class="menu-tab active" onclick="showTab('breakfast', event)">BREAKFAST</div>
      <div class="menu-tab" onclick="showTab('brunch', event)">WEEKEND BRUNCH</div>
      <div class="menu-tab" onclick="showTab('happy', event)">HAPPY HOUR</div>
      <div class="menu-tab" onclick="showTab('dinner', event)">DINNER</div>
      <div class="menu-tab" onclick="showTab('late', event)">LATE NIGHT SPIRIT</div>
    </div>
  </div>

  <!-- OUR OUTLETS SECTION -->
  <div class="outlets-section">
    <h2>Our Outlets</h2>
    <div class="outlets-track">
      <img src="img/monsieur 1.png" alt="Outlet 1" class="outlet-img" />
      <img src="img/monsieur 2.png" alt="Outlet 2" class="outlet-img" />
      <img src="img/monsieur 3.png" alt="Outlet 3" class="outlet-img" />
      <img src="img/monsieur 4.png" alt="Outlet 4" class="outlet-img" />
    </div>
  </div>

  <!-- FORM SECTION -->
  <div class="form-section">
    <div class="form-heading">Reach Us</div>
    <form id="contactForm" onsubmit="return handleSubmit(event)">
      <label for="name">Full Name *</label>
      <input type="text" id="name" />
      <div class="error-message" id="error-name">This is a required field.</div>

      <label for="phone">Phone Number *</label>
      <input type="text" id="phone" pattern="\d*" inputmode="numeric" />
      <div class="error-message" id="error-phone">This is a required field.</div>
      <div class="error-message" id="error-phone-format">Phone number must be in numbers only.</div>

      <label for="email">Email Address *</label>
      <input type="email" id="email" />
      <div class="error-message" id="error-email">This is a required field.</div>

      <label for="subject">Subject *</label>
      <input type="text" id="subject" />
      <div class="error-message" id="error-subject">This is a required field.</div>

      <label for="enquiry">Enquiry *</label>
      <select id="enquiry">
        <option value="">-- Select --</option>
        <option>Order</option>
        <option>Customer Feedback</option>
        <option>Marketing & Partnership</option>
        <option>Recruitment</option>
      </select>
      <div class="error-message" id="error-enquiry">This is a required field.</div>

      <label for="message">Message</label>
      <textarea rows="4"></textarea>

      <button type="submit" class="submit-btn">Send Message</button>
      <div id="success-message" class="success-message">✅ Your message has been sent successfully.</div>
    </form>
  </div>

  <p class="privacy-note">
    We are fully committed to keep personal data collected from you while using our website confidential.
  </p>


  <!-- FOOTER -->
  <div class="footer">
  <div class="footer-logo">
    <img src="img/logo monsieur rect.png" alt="Logo" />
  </div>
  <div class="footer-info">
    <span>Bali • Jakarta • Surabaya • Ubud • Seminyak</span>
    <span>&copy; 2025 Monsieur Spoon. All Rights Reserved.</span>
  </div>
</div>



  <script>
    const images = {
      breakfast: ['img/late night spirit.png', 'img/breakfast.png', 'img/weekend brunch.png'],
      brunch: ['img/breakfast.png', 'img/weekend brunch.png', 'img/happy hour.png' ],
      happy: ['img/weekend brunch.png', 'img/happy hour.png', 'img/dinner.jpg'],
      dinner: ['img/happy hour.png', 'img/dinner.jpg', 'img/late night spirit.png'],
      late: ['img/dinner.jpg', 'img/late night spirit.png', 'img/breakfast.png']
    };

    function showTab(tab, event) {
      const [leftImage, centerImage, rightImage] = images[tab];

      const menuImageLeft = document.getElementById('menu-image-left');
      const menuImageCenter = document.getElementById('menu-image-center');
      const menuImageRight = document.getElementById('menu-image-right');

      menuImageLeft.style.transform = 'translateX(-100px)';
      menuImageCenter.style.transform = 'translateX(100px)';
      menuImageRight.style.transform = 'translateX(100px)';

      setTimeout(() => {
        menuImageLeft.src = leftImage;
        menuImageCenter.src = centerImage;
        menuImageRight.src = rightImage;

        menuImageLeft.style.transform = 'translateX(0)';
        menuImageCenter.style.transform = 'translateX(0)';
        menuImageRight.style.transform = 'translateX(0)';
      }, 200);

      document.querySelectorAll('.menu-tab').forEach(el => el.classList.remove('active'));
      event.target.classList.add('active');
    }

    function validateForm() {
      let isValid = true;
      const fields = ['name', 'phone', 'email', 'subject', 'enquiry'];

      fields.forEach(id => {
        const input = document.getElementById(id);
        const error = document.getElementById('error-' + id);

        if (!input.value.trim()) {
          error.style.display = 'block';
          isValid = false;
        } else {
          error.style.display = 'none';
        }
      });

      const phone = document.getElementById('phone').value.trim();
      const phoneFormatError = document.getElementById('error-phone-format');
      if (phone && !/^\d+$/.test(phone)) {
        phoneFormatError.style.display = 'block';
        isValid = false;
      } else {
        phoneFormatError.style.display = 'none';
      }

      return isValid;
    }


    function handleSubmit(event) {
      event.preventDefault();

      if (validateForm()) {
        document.getElementById('success-message').style.display = 'block';

        setTimeout(() => {
          document.getElementById('success-message').style.display = 'none';
        }, 5000);

        ['name', 'phone', 'email', 'subject', 'enquiry'].forEach(id => {
          document.getElementById(id).value = '';
        });

        document.querySelector('textarea').value = '';
      }
    }
  </script>
</body>
</html>

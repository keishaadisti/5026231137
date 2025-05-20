<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ITS TV Production Equipment</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f5f5f5;
      color: #000;
    }

    header {
      background-color: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 10px 16px;
    }

    .status-bar {
      display: flex;
      justify-content: space-between;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu,
        Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      font-weight: 600;
      font-size: 14px;
      color: #000;
      align-items: center;
    }

    .banner {
      background: url('img/header.png') no-repeat center/cover;
      height: 190px;
      border-radius: 10px;
      margin: 10px 16px;
      padding: 80px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: white;
      box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.3);
    }

    .banner h1 {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .banner p {
      font-size: 14px;
      margin-bottom: 10px;
    }

    .banner button {
      background-color: black;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 700;
      font-size: 12px;
      align-self: flex-start;
    }

    .top-bar {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin: 10px 16px;
    }

    .search-bar {
      background-color: #f0f0f0;
      padding: 10px;
      display: flex;
      border-radius: 8px;
      align-items: center;
    }

    .search-bar input {
      width: 200px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-right: 5px;
      font-size: 14px;
    }

    .search-bar span {
      background: black;
      color: white;
      padding: 8px 10px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    section {
      padding: 10px 16px;
      margin-bottom: 10px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    section h2 {
      text-align: center;
      margin-bottom: 15px;
      font-size: 22px;
      font-weight: 700;
      color: #222;
    }

    .grid,
    .camera-lens-grid {
      display: grid;
      grid-template-columns: repeat(4, minmax(120px, 1fr));
      gap: 12px;
      padding: 0 10px;
    }

    .item {
      background: #f9f9f9;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 1px 3px rgba(32, 31, 31, 0.881);
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .item img {
      width: 100%;
      max-width: 130px;
      height: auto;
      border-radius: 6px;
      margin-bottom: 8px;
      object-fit: contain;
    }

    .item p {
      font-weight: 600;
      font-size: 14px;
      margin-bottom: 3px;
      color: #333;
    }

    .item span {
      color: green;
      font-size: 12px;
    }

    .click-more-container {
      margin-top: 15px;
      text-align: right;
      padding-right: 10px;
    }

    .click-more-container button {
      background: black;
      color: white;
      padding: 8px 14px;
      font-size: 14px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-weight: 600;
    }

    .click-more-container button span {
      font-family: 'Material Symbols Outlined';
      font-weight: normal;
      font-style: normal;
      font-size: 20px;
      line-height: 1;
      letter-spacing: normal;
      text-transform: none;
      display: inline-block;
      white-space: nowrap;
      direction: ltr;
      -webkit-font-feature-settings: 'liga';
      -webkit-font-smoothing: antialiased;
    }

    .borrowed-section {
      background-color: white;
      padding: 15px 16px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .borrowed-section h2 {
      font-size: 18px;
      margin-bottom: 10px;
      text-align: left;
      padding-bottom: 5px;
      border-bottom: 2px solid #ccc;
    }

    .borrowed-item {
      display: flex;
      align-items: center;
      padding: 10px 0;
    }

    .borrowed-item div {
      flex: 1;
    }

    .borrowed-item img {
      width: 80px;
      height: auto;
      margin-right: 15px;
      border-radius: 5px;
    }

    .borrowed-item h3 {
      font-size: 16px;
      margin-bottom: 5px;
    }

    .borrowed-item p {
      font-size: 12px;
      color: #666;
      margin-bottom: 3px;
    }

    .borrowed-item .arrow-icon {
      font-size: 24px;
      color: #333;
    }

    footer {
      background-color: #eee;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
      font-size: 12px;
    }
  </style>
</head>

<body>
  <header>
    <div class="status-bar">
      <span>9:41 AM</span>
      <div>
        <span class="material-symbols-outlined">signal_cellular_alt</span>
        <span class="material-symbols-outlined">wifi</span>
        <span class="material-symbols-outlined">battery_full_alt</span>
      </div>
    </div>
  </header>

  <div class="banner">
    <h1>ITS TV PRODUCTION EQUIPMENT</h1>
    <p>Solusi praktis peminjaman alat kebutuhan produksi</p>
    <button>Book Now!</button>
  </div>

  <div class="top-bar">
    <div class="search-bar">
      <input type="text" placeholder="Search..." />
      <span class="material-symbols-outlined">search</span>
    </div>
  </div>

  <section>
    <h2>FEATURED EQUIPMENT</h2>
    <div class="grid">
      <div class="item">
        <img src="img/lighting set.png" alt="Lighting Set Sony" />
        <p>Lighting Set Sony</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/canon lens.png" alt="Canon Lens EFS 18-135mm" />
        <p>Canon Lens EFS 18-135mm</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/sony pxw.png" alt="Sony PXW-Z90T" />
        <p>Sony PXW-Z90T</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/Canon EOS 4000D.png" alt="Canon EOS 4000D" />
        <p>Canon EOS 4000D</p>
        <span>Available</span>
      </div>
    </div>
  </section>

  <section>
    <h2>CAMERA & LENS</h2>
    <div class="camera-lens-grid">
      <div class="item">
        <img src="img/Nikon D7500.png" alt="Nikon D7500" />
        <p>Nikon D7500</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/canon lens.png" alt="Canon Lens EFS 18-135mm" />
        <p>Canon Lens EFS 18-135mm</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/sony pxw.png" alt="Sony PXW-Z90T" />
        <p>Sony PXW-Z90T</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/Canon EOS 4000D.png" alt="Canon EOS 4000D" />
        <p>Canon EOS 4000D</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/instax mini.png" alt="Instax mini 11" />
        <p>Instax mini 11</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/instax slim-go.png" alt="Instax slim-go" />
        <p>Instax slim-go</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/Canon EOS 80D.png" alt="Canon EOS 80D" />
        <p>Canon EOS 80D</p>
        <span>Available</span>
      </div>
      <div class="item">
        <img src="img/sony zeis.png" alt="Sony Zeiss" />
        <p>Sony Zeiss</p>
        <span>Available</span>
      </div>
    </div>

    <div class="click-more-container">
      <button>Click More <span class="material-symbols-outlined">arrow_right_alt</span></button>
    </div>
  </section>

  <section class="borrowed-section">
    <h2>BARANG SEDANG DIPINJAM</h2>
    <div class="borrowed-item">
      <img src="img/Canon EOS 4000D.png" alt="Canon EOS 4000D" />
      <div>
        <h3>Liputan Pengukuhan Proffesor</h3>
        <p>Disewakan pada tanggal 20/11/24 - 21/11/2024</p>
        <p>07:00 - 19:00</p>
        <p>ETZ. YANUAR - CREW ITS TV</p>
        <p>List Barang: Canon EOS 4000D, Tripod...</p>
      </div>
      <span class="material-symbols-outlined arrow-icon">arrow_forward</span>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 ITS TV Production. All rights reserved.</p>
  </footer>
</body>

</html>

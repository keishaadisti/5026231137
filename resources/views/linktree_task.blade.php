<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tulus Skin</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #c0af96a7;
            display: flex;
            justify-content: center;
            padding: 32px 16px;
            color: #ffffff;
        }

        .container {
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 28px;
        }

        .profile-container {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 12px;
            background-color: #f5f3f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .profile-name {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #ffffff;
            text-align: center;
        }

        .tagline {
            font-size: 14px;
            color: #ffffff;
            text-align: center;
            margin-bottom: 16px;
        }

        .sosmed {
            display: flex;
            gap: 14px;
            margin-bottom: 24px;
        }

        .sosmed-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 24px;
            height: 24px;
            color: #ffffff; /* Warna ikon */
            font-size: 20px; /* Ukuran ikon */
            transition: transform 0.2s ease-in-out, opacity 0.2s ease-in-out;
        }

        .sosmed-icon:hover {
            transform: scale(1.1);
            opacity: 0.8;
        }

        .links {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .link-item {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            background-color: #eceae6a7;
            color: #5a4f47d1;
            text-decoration: none;
            padding: 14px 16px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.2s ease-in-out, transform 0.1s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.258);
        }

        .link-item:hover {
            background-color: #e9e4dd;
            transform: scale(1.02);
        }

        .link-item img,
        .link-item i {
            grid-column: 1;
            margin-right: 16px;
            width: 48px;
            height: 48px;
            object-fit: cover;
            border-radius: 8px;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .link-item span {
            grid-column: 2;
            text-align: left;
            display: flex;
            align-items: center;
            height: 100%;
        }

        .link-item .dots {
            grid-column: 3;
            text-align: right;
            color: #999;
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            height: 100%;
        }

        footer {
            font-size: 14px;
            color: #ffffffcd;
            margin-top: 30px;
        }

        @media (max-width: 480px) {
            .profile-container {
                width: 100px;
                height: 100px;
            }

            .link-item {
                font-size: 13px;
                padding: 12px 14px;
            }

            .link-item img {
                width: 40px;
                height: 40px;
            }

            .profile-name {
                font-size: 20px;
                font-weight: 600;
                margin-bottom: 8px;
                color: #ffffff;
                text-align: center;
                text-decoration: none;
            }

            .tagline {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            <div class="profile-container">
                <img src="img/tulus profile.png" alt="Tulus Logo" class="profile-img" />
            </div>
            <h1 class="profile-name">tulus skin official</h1>
            <p class="tagline">good skin starts with a good cleanse #SiPalingTulus</p>

            <div class="sosmed">
                <a href="https://www.tiktok.com/@tulusskin" class="sosmed-icon" target="_blank">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://www.instagram.com/tulus.skin" class="sosmed-icon" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>img/
                <a href="https://api.whatsapp.com/send/?phone=6287878918000" class="sosmed-icon" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>

        <div class="links">
            <a href="https://shopee.co.id/product/371411884/24240723934" class="link-item" target="_blank">
                <img src="img/cica hydrabalm tinted.png" alt="Cica Hydrabalm Tinted Lip Treatment">
                <span>NEW! Cica Hydrabalm Tinted Lip Treatment</span>
                <span class="dots">...</span>
            </a>
            <a href="https://shopee.co.id/product/371411884/26924225081" class="link-item" target="_blank">
                <img src="img/cica hydrabalm.png" alt="Cica Hydrabalm Lip Treatment">
                <span>NEW! Cica Hydrabalm Lip Treatment</span>
                <span class="dots">...</span>
            </a>
            <a href="https://shopee.co.id/tulusskin" class="link-item" target="_blank">
                <i class="fas fa-shopping-cart"></i>
                <span>shopee</span>
                <span class="dots">...</span>
            </a>
            <a href="https://www.tokopedia.com/tulusskin" class="link-item" target="_blank">
                <i class="fas fa-shopping-cart"></i>
                <span>tokopedia</span>
                <span class="dots">...</span>
            </a>
            <a href="https://www.tiktok.com/@tulusskin" class="link-item" target="_blank">
                <i class="fab fa-tiktok"></i>
                <span>tiktok</span>
                <span class="dots">...</span>
            </a>
            <a href="https://www.tulusskin.com/" class="link-item" target="_blank">
                <i class="fas fa-globe"></i>
                <span>website</span>
                <span class="dots">...</span>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=6287878918000" class="link-item" target="_blank">
                <i class="fab fa-whatsapp"></i>
                <span>whatsapp</span>
                <span class="dots">...</span>
            </a>
        </div>

        <footer>
            <p>© Tulus Skin</p>
        </footer>

    </div>
</body>

</html>

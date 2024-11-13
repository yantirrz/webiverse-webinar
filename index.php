<!DOCTYPE html>
<!-- ini kode untuk bagian landing page sebelum login -->
 <!-- codingan damayanti dan cinta n.p.m -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WebiVerse - Platform Webinar</title>
    <link rel="stylesheet" href="assets/css/style2.css" />
    <link rel="icon" type="image/x-icon" href="assets\images\logo (2).png" />
</head>

<body>
    <!-- codingan Cinta -->
    <!-- Header atau Navbar -->
    <header class="navbar">
        <div class="nav-wrapper">
            <div class="logo">
                <img src="assets\images\logo (2).png" alt="Logo WebiVerse" />
                <span>WebiVerse</span>
            </div>
            <!-- Daftar menu navigasi -->
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#webinar">Webinar</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
            <!-- Tombol untuk Log In dan Sign Up -->
            <div class="auth-buttons">
                <button class="login-btn"><a href="login.php">Login</a></button>
                <button class="signup-btn"><a href="register.php">Sign Up</a></button>
            </div>
        </div>
    </header>

    <!-- Bagian konten utama halaman -->
    <main>
        <section class="main-content">
            <div class="text">
                <h1>Temukan Webinar Sesuai Minat Anda!</h1>
                <p>WebiVerse Webinar: Platform webinar gratis yang memberi Anda akses ke ilmu bermanfaat dan peluang
                    belajar dari mana saja. Temukan manfaatnya dan tingkatkan pengetahuan Anda bersama kami!</p>
                <a href="login.php" class="cta-button">Daftar Sekarang!</a>
            </div>
            <div class="image">
                <img src="assets/images/women-laptop.png" alt="webinar" />
            </div>
        </section>

        <!-- Bagian Tentang Kami -->
        <div id="tentang">
            <section class="about-section">
                <div class="about-wrapper">
                    <img src="assets/images/online-laptop.png" alt="tentang" />
                    <div class="text">
                        <h2>Tentang Kami</h2>
                        <p>
                            WebiVerse adalah sebuah platform digital yang dirancang khusus untuk menyediakan webinar
                            berkualitas tinggi secara gratis. Dibangun untuk menjadi sumber daya pembelajaran bagi
                            siapa saja, WebiVerse menghadirkan sesi-sesi
                            webinar yang mencakup berbagai topik, mulai dari pengembangan diri, keterampilan teknis,
                            hingga tren industri terbaru. WebiVerse diciptakan untuk membantu siapa pun yang ingin
                            meningkatkan pengetahuan dan keterampilan mereka
                            dengan mudah tanpa biaya.
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <!-- codingan Damayanti -->
        <div id="webinar">
            <div class="container">
                <h2>Webinar Terkini</h2>
                <div class="card-grid">
                    <!-- Card 1 -->
                    <div class="card">
                        <img src="assets/images/webinar1.png" alt="Webinar Image" />
                        <div class="card-content">
                            <div class="card-info">
                                <h3>Kolaborasi Siswa dan Guru untuk Meningkatkan Prestasi Akademis"</h3>
                                <p>Kolaborasi antara siswa dan guru dalam meningkatkan prestasi akademik melibatkan
                                    interaksi yang aktif, komunikasi terbuka, serta dukungan berkelanjutan.</p>
                            </div>
                            <div class="date-time">
                                <div class="date">
                                    <!-- icon kalender -->
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                                        <defs>
                                            <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_280" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>2024-09-28</p>
                                </div>
                                <div class="time">
                                    <!-- icon jam -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                                        <defs>
                                            <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_259" width="90" height="90"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                    <p>19:30 WIB</p>
                                </div>
                                <div class="zoom">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                                        <defs>
                                            <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_260"
                                                    transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                                            </pattern>
                                            <image id="image0_50_260" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                    <p>ZOOM</p>
                                </div>
                            </div>
                            <button><a href="login.php">Daftar sekarang!</a></button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card">
                        <img src="assets/images/webinar2.png" alt="Webinar Image" />
                        <div class="card-content">
                            <div class="card-info">
                                <h3>Tips Menjaga Kesehatan Mental Selama Masa Kuliah</h3>
                                <p>Menjaga kesehatan mental saat menjalani kuliah sangat penting untuk menjaga
                                    keseimbangan hidup, produktivitas, dan kebahagiaan.</p>
                            </div>
                            <div class="date-time">
                                <div class="date">
                                    <!-- icon kalender -->
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                                        <defs>
                                            <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_280" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>2024-09-27</p>
                                </div>
                                <div class="time">
                                    <!-- icon jam -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                                        <defs>
                                            <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_259" width="90" height="90"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                    <p>19:00 WIB</p>
                                </div>
                                <div class="zoom">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                                        <defs>
                                            <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_260"
                                                    transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                                            </pattern>
                                            <image id="image0_50_260" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                    <p>ZOOM</p>
                                </div>
                            </div>

                            <button><a href="login.php">Daftar sekarang!</a></button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="card">
                        <img src="assets/images/webinar3 (2).png" alt="Webinar Image" />
                        <div class="card-content">
                            <div class="card-info">
                                <h3>Temukan Potensi Diri dan Raih Kesuksesan Hidup Mulia</h3>
                                <p>Webinar ini mengupas secara mendalam cara menggali potensi diri dengan efektif,
                                    meraih sukses sejati yang diimpikan, dan membangun motivasi.</p>
                            </div>
                            <div class="date-time">
                                <div class="date">
                                    <!-- icon kalender -->
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                                        <defs>
                                            <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_280" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>2024-09-28</p>

                                </div>
                                <div class="time">
                                    <!-- icon jam -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                                        <defs>
                                            <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_259" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAIGklEQVR4nO1daYgcRRQub6NCVBDFG0ER0XhEvA8UQYgn3hqPeBAJGoOKiL96q2ZDdudVJ1kNavyRIP6RQETxNiaIYFQ8goL6I0Sjuc1hNOfMe7Hk9YzLJnbV9Eyqjxn7g/6zu+lX/arqq1fvihAlSpQoUaJEiRIlSpQoUSIZ5s0z+2lVHwt99DAoHNSK3gRJ34PCZVriJq2wBgr/AImzwtCMSvjaEoyw3xwHkp4ASW9piZu1IpPkAYkvCwtA0tugaJGWtAAUzQOFr2uFs3mCtMQBrVCComd1hSZrRROriu4JJd0+EJgTRS8hCMzBuo/Ga0kfgkRKqtzdH9wWBGbfuPdrha+0+z5QuHRGYA4XvYBZgTkMFD0NEld3ptzEir6+3XeFqna26HYEgdkfFD2pJW7YewUPK+clmzzmb1Ze4tXcR/eJboeu1C/Tir7zpmCJm0Di860OQz5IE3L9i6KbEQTmQK1wCCT+3SZXbmHu1goroaJ7w/76RVAxJ02bZo6YPdsckFQ+Wy4JFT2rnfcWCtMDcwpI+qoNGlihJU6vyvrFTDM+xjBzqjlaK9yVcAyLdcWcILoJocSr2NZNtnrp41DhONuhtrcASZ+3sZPWVyt4jegGgMJbQOLO1jxLCweD2nnpj4eea/OArWmFN4siA/rowdY2Mf6qFd6Y2ZiC2pkxY3DSCUisg6I7RIFXslPJIPHVgQEzOoexLRtBD0sHlTkVJL3fYqzEt0VRNE7WCnc4Br0T+uiBvMYHEmc2V/K2alAbwz8zxuwDip7RCtFFI1VZv1QUxrpwHHx8wOhK/bI8xwgVvJrHwqZi/A3SdbHBNQOBOV7kbSe7TThcxxwp/Mps2zphGxkUTrX9nheCc7FI+pJ9MyIv8GXEQRe/Q2DO8CUrDM2opudtc8PDhy/4dJOG/fULtMStjkUzQ+SBaBVYbnzMyb65DYZ5dqSJiNN9ymBryHagN35eHyuyBN/cXL6LNA4+kLg2jj99y9GKpjiska85MCGyQuSFc5hwacjUFnm+5bA1ohW941D2FJEFAMyhzL8WHlvBjp9uVjRjaKo5Kn4HRXS1gXUg0gY77R0HRmo3Pp2hohl8WXFYIY+LNDE0ZA7SClfF28u0KE3ZOmNFRxcai+kKEn9L1a0axfgsH5y2g0hnrOiRF524J9XrecMZH8dbtCA1oTkquin3U8sO/iDFlACL00jitaJHFV21cDV7+MLAHCmysi+Zr9Jy2hdB0XwuRf6aePkTvAuMklviV7MWGUDnpGgGB4It1sfbXgXxbcjmdOHAqehxRYcKx8XzNG7xupun99fPt6zmv3wFUous6CAwh1j97YE5zZsgreihTE/egik6ki9pYewY+uhOb0KaWZ1xB6ES/xNFQ5z3sLGrB7wJsWX8xEUselXRYYUeTf1AtLlEQdYv9Cak6IqW9SstY1jsTQgo/MVCHWtBIbCtKXpU0bObYTBb9itI/NGbsFYZoKAwFCkCAnNGXormc8j17V6DD43sHaei14uUECq63xXLEylDS1zu/HaJOzNTNEe7RToBhrlOuRI3+JablDbTUXRr6gD/VIE/uCfXf3C2E+rwupvts4pr2I7k/A5fsrSiCe6w/7DsOT7ltjoMo2+Nn+yfu8q8gyRU0fiwral4zVqAfTqWMS3xJsRaotBH4728PzCncy1hKyWDwp9CVTtL5ACucYmfeJqf+hWca/WyogqQODeT6LMFILHfMvnTCu1UCqIkHJxTVKrYExyus4zR39g4Fcoym392mrkD1l2y2475wWf+3t6V7uGW+DHWzs3E8c/FPZ28UytcV2SqiCnfi1toG72H8awHYoehLLBnAhWCKpK5SD0ehP+iWZwep5jlncwqKJxWVKr4b7cFXBH77RWa5F3gYGCOdaS0XtfJB0CkbFzV9AIOFoUqRqIq8SbL+YFcx5iKULYyfFsfRYc1hKXoncxTwjghPatoeJbgKgBrebXPWGFsMonElZZV/YnoMQA3VolfWKtTr2nRkp5ymGQ3iB4BKLwl12R0VyI6z3QvdHAZGDCjrTtX4lrO88hkIK46D75oiC4HSHzNupor9FjGtiUtcWytR0SXQldokuO7vsm0WIjBV297wxPcoSv1S0SXYVDWL7d3ZsBdbIXkMjAOJVkpROFG31WzaYJrxJ09RiRWRc4lyl86+Hp1Nyi7GtTGWENVjWykz3JvBTQjMCc3OixaV8KmItNIRBfulbyhME0Hma9dHQKgwXvZFEK2mTMCErc7xr2dJ0IUCdweJ0FjlLl5NEbZE2zrO0244drv7DrltAX2IydQ9kr2iOU1xlDira27SCLm2cilnQ4B1u2oRxwwWW7LyEFk8V3sSXOg8DbRDYBK/QrnAamGP+pvUPQR+0haBQ+iZoUSq5Elw4/CwVYJNHy54N3DLd9ajeXfgy/vbjltgzsvakVfJPpA1Sij4+Yj/KFxdTGs5BhbfXDPv+N/27x4zLRGRiw7rDDWRYfpVGEb3RRHtsxcwLkUXFXAGVHxdi6u4d9xckuUdxH1irZFq618vIsnMXc72Qc0dzh3XGxyfJZ0GsUvLOaxI6pCk+29PrJ8cB174TJ3EGWJoagVBU1shz99PY0gMD2bmT+5MArvo7u1ovc6bz2faPUiSHoXFN2VRa1NoVENzDG8lbWiN9jrt9crl98haT77llNLCeh2BIHZl/PZooayjSSbN/jQ4v6ijUmIuuHyfxGyMfqZpG9Zqc2/nVANaudk0W2hRIkSJUqUKFGiRIkSJUSv4B+YwgVAkxXWrwAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>08:30 WIB</p>

                                </div>
                                <div class="zoom">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                                        <defs>
                                            <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_260"
                                                    transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                                            </pattern>
                                            <image id="image0_50_260" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                    <p>ZOOM</p>
                                </div>
                            </div>
                            <button><a href="login.php">Daftar sekarang!</a></button>
                        </div>
                    </div>

                    <!-- card 4 -->
                    <div class="card">
                        <img src="assets/images/webinar4.png" alt="Webinar Image" />
                        <div class="card-content">
                            <div class="card-info">
                                <h3>Cara Membuat Personal Branding yang Meningkatkan Resonansi</h3>
                                <p>"Bagaimana Cara Membuat Personal Branding yang Beresonansi" untuk membangun citra
                                    diri yang kuat. Pelajari strateginya. <br /></p>
                            </div>
                            <div class="date-time">
                                <div class="date">
                                    <!-- icon kalender -->
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                                        <defs>
                                            <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_280" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>2024-10-30</p>

                                </div>
                                <div class="time">
                                    <!-- icon jam -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                                        <defs>
                                            <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_259" width="90" height="90"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                    <p>19:30 WIB</p>

                                </div>
                                <div class="zoom">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                                        <defs>
                                            <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_260"
                                                    transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                                            </pattern>
                                            <image id="image0_50_260" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                    <p>ZOOM</p>
                                </div>
                            </div>
                            <button><a href="login.php">Daftar sekarang!</a></button>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="card">
                        <img src="assets/images/webinar5.png" alt="Webinar Image" />
                        <div class="card-content">
                            <div class="card-info">
                                <h3>Optimasi Cashflow UMKM: solusi praktis untuk masalah keuangan UMKM</h3>
                                <p>Dapatkan solusi praktis untuk masalah keuangan UMKM, seperti arus kas tidak
                                    stabil dan kesulitan mengatur cashflow. Buruan daftar sekarang! </p>
                            </div>
                            <div class="date-time">
                                <div class="date">
                                    <!-- icon kalender -->
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                                        <defs>
                                            <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_280" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>2024-09-27</p>

                                </div>
                                <div class="time">
                                    <!-- icon jam -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                                        <defs>
                                            <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_259" width="90" height="90"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                    <p>15:00 WIB</p>

                                </div>
                                <div class="zoom">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                                        <defs>
                                            <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_260"
                                                    transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                                            </pattern>
                                            <image id="image0_50_260" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                    <p>ZOOM</p>
                                </div>
                            </div>

                            <button><a href="login.php">Daftar sekarang!</a></button>
                        </div>
                    </div>

                    <!-- card 6 -->
                    <div class="card">
                        <img src="assets/images/webinar7.png" alt="Webinar Image" />
                        <div class="card-content">
                            <div class="card-info">
                                <h3>Mengenal Diri untuk Pertumbuhan Karir dan Bisnis. </h3>
                                <p>Self-Identity merupakan hal yang sangat penting dalam pengembangan karir dan
                                    kesuksesan bisnis yang ingin diraih.</p>
                            </div>
                            <div class="date-time">
                                <div class="date">
                                    <!-- icon kalender -->
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                                        <defs>
                                            <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_280" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>2024-10-30</p>

                                </div>
                                <div class="time">
                                    <!-- icon jam -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                                        <defs>
                                            <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_259" width="90" height="90"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                    <p>19:30 WIB</p>

                                </div>
                                <div class="zoom">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                                        <defs>
                                            <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_260"
                                                    transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                                            </pattern>
                                            <image id="image0_50_260" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                    <p>ZOOM</p>
                                </div>
                            </div>
                            <button><a href="login.php">Daftar sekarang!</a></button>
                        </div>
                    </div>

                    <!-- card 7 -->
                    <div class="card">
                        <img src="assets/images/webinar7(2).jpg" alt="Webinar Image" />
                        <div class="card-content">
                            <div class="card-info">
                                <h3>Admin olshop menjadi assist HR manager? emang bisa? </h3>
                                <p>Bingung admin olshop bisa jadi HR Manager? Simak webinar ini! Temukan cara
                                    transformasi skill dan peluang karir di era digital. Daftar sekarang!</p>
                            </div>
                            <div class="date-time">
                                <div class="date">
                                    <!-- icon kalender -->
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                                        <defs>
                                            <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_280" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>2024-09-19</p>

                                </div>
                                <div class="time">
                                    <!-- icon jam -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                                        <defs>
                                            <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_259" width="90" height="90"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                    <p>19:00 WIB</p>
                                </div>
                                <div class="zoom">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                                        <defs>
                                            <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_260"
                                                    transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                                            </pattern>
                                            <image id="image0_50_260" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                    <p>ZOOM</p>
                                </div>
                            </div>
                            <button><a href="login.php">Daftar sekarang!</a></button>
                        </div>
                    </div>

                    <!-- card 8 -->
                    <div class="card">
                        <img src="assets/images/webinar8(2).jpg" alt="Webinar Image" />
                        <div class="card-content">
                            <div class="card-info">
                                <h3>Internasionalisasi karya penelitian rahasia sukses publikasi rahasia dunia</h3>
                                <p>ingin karya penelitianmu diakui dunia? Simak rahasia sukses publikasi
                                    internasional! Temukan tips dan strategi jitu dalam webinar ini. Segera daftar!
                                </p>
                            </div>
                            <div class="date-time">
                                <div class="date">
                                    <!-- icon kalender -->
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                                        <defs>
                                            <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_280" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    <p>2024-10-24</p>

                                </div>
                                <div class="time">
                                    <!-- icon jam -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                                        <defs>
                                            <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                                            </pattern>
                                            <image id="image0_50_259" width="90" height="90"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                    <p>09:00 WIB</p>

                                </div>
                                <div class="zoom">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                                        <defs>
                                            <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_50_260"
                                                    transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                                            </pattern>
                                            <image id="image0_50_260" width="90" height="90"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII=" />
                                        </defs>
                                    </svg>
                                    <p>ZOOM</p>
                                </div>
                            </div>
                            <button><a href="login.php">Daftar sekarang!</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian kontak -->
        <div id="kontak">
            <div class="contact-container">
                <h3>Info selengkapnya hubungi:</h3>
                <div class="social-media">
                    <div class="sosmed">
                        <!-- icon -->
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_47_93)">
                                <path
                                    d="M34.4531 0H10.5469C4.722 0 0 4.722 0 10.5469V34.4531C0 40.278 4.722 45 10.5469 45H34.4531C40.278 45 45 40.278 45 34.4531V10.5469C45 4.722 40.278 0 34.4531 0Z"
                                    fill="url(#paint0_radial_47_93)" />
                                <path
                                    d="M34.4531 0H10.5469C4.722 0 0 4.722 0 10.5469V34.4531C0 40.278 4.722 45 10.5469 45H34.4531C40.278 45 45 40.278 45 34.4531V10.5469C45 4.722 40.278 0 34.4531 0Z"
                                    fill="url(#paint1_radial_47_93)" />
                                <path
                                    d="M22.5016 4.92188C17.7277 4.92188 17.1285 4.94279 15.2536 5.02805C13.3822 5.11383 12.1048 5.41002 10.9872 5.84473C9.83092 6.29367 8.85023 6.89432 7.87324 7.87166C6.89537 8.84883 6.29473 9.82951 5.84438 10.9853C5.40844 12.1032 5.11189 13.3812 5.0277 15.2517C4.94385 17.1267 4.92188 17.7261 4.92188 22.5002C4.92188 27.2742 4.94297 27.8715 5.02805 29.7464C5.11418 31.6178 5.41037 32.8952 5.84473 34.0128C6.29402 35.1691 6.89467 36.1498 7.87201 37.1268C8.84883 38.1046 9.82951 38.7067 10.9849 39.1556C12.1034 39.5903 13.381 39.8865 15.252 39.9723C17.1271 40.0576 17.7258 40.0785 22.4995 40.0785C27.2739 40.0785 27.8712 40.0576 29.7461 39.9723C31.6174 39.8865 32.8962 39.5903 34.0147 39.1556C35.1705 38.7067 36.1498 38.1046 37.1264 37.1268C38.1043 36.1498 38.7047 35.1691 39.1553 34.0133C39.5873 32.8952 39.8841 31.6174 39.972 29.7468C40.0562 27.8719 40.0781 27.2742 40.0781 22.5002C40.0781 17.7261 40.0562 17.1271 39.972 15.252C39.8841 13.3806 39.5873 12.1034 39.1553 10.9858C38.7047 9.82951 38.1043 8.84883 37.1264 7.87166C36.1487 6.89396 35.1708 6.29332 34.0137 5.8449C32.8931 5.41002 31.615 5.11365 29.7436 5.02805C27.8685 4.94279 27.2716 4.92188 22.4961 4.92188H22.5016ZM20.9246 8.08963C21.3928 8.08893 21.915 8.08963 22.5016 8.08963C27.1951 8.08963 27.7513 8.1065 29.6047 8.1907C31.3186 8.2691 32.2488 8.55545 32.8685 8.79609C33.6888 9.11461 34.2737 9.49553 34.8885 10.1109C35.5038 10.7262 35.8845 11.3121 36.2039 12.1324C36.4446 12.7512 36.7313 13.6814 36.8093 15.3953C36.8935 17.2484 36.9118 17.8049 36.9118 22.4961C36.9118 27.1874 36.8935 27.7441 36.8093 29.597C36.7309 31.3109 36.4446 32.2411 36.2039 32.86C35.8854 33.6804 35.5038 34.2645 34.8885 34.8794C34.2733 35.4946 33.6892 35.8754 32.8685 36.1941C32.2495 36.4358 31.3186 36.7214 29.6047 36.7998C27.7516 36.884 27.1951 36.9023 22.5016 36.9023C17.8079 36.9023 17.2515 36.884 15.3986 36.7998C13.6847 36.7207 12.7545 36.4344 12.1344 36.1937C11.3142 35.875 10.7281 35.4943 10.1129 34.879C9.49764 34.2638 9.11689 33.6793 8.7975 32.8586C8.55686 32.2397 8.27016 31.3095 8.19211 29.5956C8.10791 27.7425 8.09104 27.186 8.09104 22.4917C8.09104 17.7975 8.10791 17.244 8.19211 15.3909C8.27051 13.677 8.55686 12.7468 8.7975 12.1271C9.11619 11.3068 9.49764 10.7209 10.113 10.1057C10.7285 9.49043 11.3142 9.10951 12.1345 8.79029C12.7542 8.54859 13.6847 8.26295 15.3986 8.1842C17.0202 8.1109 17.6486 8.08893 20.9246 8.08523V8.08963ZM31.8848 11.0083C30.7202 11.0083 29.7754 11.9522 29.7754 13.117C29.7754 14.2815 30.7202 15.2263 31.8848 15.2263C33.0493 15.2263 33.9942 14.2815 33.9942 13.117C33.9942 11.9524 33.0493 11.0076 31.8848 11.0076V11.0083ZM22.5016 13.4729C17.5164 13.4729 13.4745 17.5148 13.4745 22.5002C13.4745 27.4855 17.5164 31.5255 22.5016 31.5255C27.4869 31.5255 31.5274 27.4855 31.5274 22.5002C31.5274 17.515 27.4866 13.4729 22.5012 13.4729H22.5016ZM22.5016 16.6407C25.7375 16.6407 28.3611 19.2639 28.3611 22.5002C28.3611 25.7361 25.7375 28.3597 22.5016 28.3597C19.2656 28.3597 16.6423 25.7361 16.6423 22.5002C16.6423 19.2639 19.2654 16.6407 22.5016 16.6407Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <radialGradient id="paint0_radial_47_93" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(11.9531 48.4659) rotate(-90) scale(44.5983 41.48)">
                                    <stop stop-color="#FFDD55" />
                                    <stop offset="0.1" stop-color="#FFDD55" />
                                    <stop offset="0.5" stop-color="#FF543E" />
                                    <stop offset="1" stop-color="#C837AB" />
                                </radialGradient>
                                <radialGradient id="paint1_radial_47_93" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(-7.53768 3.24158) rotate(78.681) scale(19.9357 82.1756)">
                                    <stop stop-color="#3771C8" />
                                    <stop offset="0.128" stop-color="#3771C8" />
                                    <stop offset="1" stop-color="#6600FF" stop-opacity="0" />
                                </radialGradient>
                                <clipPath id="clip0_47_93">
                                    <rect width="45" height="45" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p>webiverse_official</p>
                    </div>
                    <div class="sosmed">
                        <!-- icon -->
                        <svg width="45" height="34" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_47_87)">
                                <path
                                    d="M10.2273 33.7588V16.3723L4.83521 11.4393L0 8.7019V30.6906C0 32.3883 1.37549 33.7588 3.06826 33.7588H10.2273Z"
                                    fill="#4285F4" />
                                <path
                                    d="M34.7727 33.7588H41.9317C43.6296 33.7588 45 32.3831 45 30.6905V8.70203L39.5234 11.8374L34.7727 16.3722V33.7588Z"
                                    fill="#34A853" />
                                <path
                                    d="M10.2273 16.3723L9.49359 9.57888L10.2273 3.0769L22.5 12.2815L34.7727 3.0769L35.5934 9.22784L34.7727 16.3723L22.5 25.5769L10.2273 16.3723Z"
                                    fill="#EA4335" />
                                <path
                                    d="M34.7727 3.07688V16.3723L45 8.70188V4.61093C45 0.816687 40.6688 -1.3463 37.6365 0.929186L34.7727 3.07688Z"
                                    fill="#FBBC04" />
                                <path
                                    d="M0 8.7019L4.70373 12.2298L10.2273 16.3723V3.0769L7.36348 0.929206C4.32598 -1.34646 0 0.816706 0 4.61077V8.7019Z"
                                    fill="#C5221F" />
                            </g>
                            <defs>
                                <clipPath id="clip0_47_87">
                                    <rect width="45" height="33.9258" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p>webiverse123@gmail.com</p>
                    </div>
                    <div class="sosmed">
                        <!-- icon -->
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_47_83)">
                                <path
                                    d="M0.952844 22.2307C0.951798 26.0115 1.9397 29.7033 3.81819 32.9572L0.773193 44.075L12.1509 41.0918C15.2978 42.8049 18.8237 43.7026 22.4067 43.7028H22.4161C34.2443 43.7028 43.8727 34.0779 43.8778 22.2476C43.88 16.515 41.6496 11.1244 37.5971 7.06882C33.5454 3.01358 28.1567 0.779106 22.4152 0.776489C10.5856 0.776489 0.957903 10.4009 0.953019 22.2307"
                                    fill="url(#paint0_linear_47_83)" />
                                <path
                                    d="M0.186628 22.2237C0.185407 26.1406 1.20872 29.9644 3.15419 33.3349L0 44.8512L11.7856 41.761C15.033 43.5316 18.6891 44.4651 22.4095 44.4665H22.4191C34.6716 44.4665 44.6459 34.4953 44.6512 22.2415C44.6533 16.3029 42.3426 10.7185 38.1453 6.51767C33.9476 2.31733 28.3662 0.00244186 22.4191 0C10.1644 0 0.191512 9.96977 0.186628 22.2237ZM7.20541 32.7544L6.76535 32.0559C4.91546 29.1145 3.93907 25.7154 3.94046 22.2251C3.9443 12.0399 12.2334 3.75349 22.426 3.75349C27.3621 3.75558 32.0009 5.67977 35.49 9.17093C38.9789 12.6624 40.8987 17.3037 40.8975 22.2401C40.893 32.4253 32.6037 40.7128 22.4191 40.7128H22.4117C19.0955 40.711 15.8431 39.8205 13.0067 38.1375L12.3317 37.7372L5.33791 39.5709L7.20541 32.7544Z"
                                    fill="url(#paint1_linear_47_83)" />
                                <path
                                    d="M16.8624 12.9328C16.4463 12.0078 16.0083 11.9892 15.6125 11.9729C15.2885 11.959 14.918 11.96 14.5479 11.96C14.1774 11.96 13.5755 12.0994 13.0667 12.6549C12.5574 13.211 11.1223 14.5547 11.1223 17.2877C11.1223 20.0206 13.113 22.662 13.3905 23.033C13.6683 23.4033 17.2334 29.1912 22.8797 31.4178C27.5723 33.2682 28.5272 32.9002 29.5456 32.8074C30.5642 32.715 32.8324 31.4641 33.2951 30.1669C33.7582 28.8699 33.7582 27.7582 33.6193 27.5259C33.4805 27.2944 33.11 27.1554 32.5545 26.8777C31.999 26.6 29.2678 25.256 28.7586 25.0706C28.2493 24.8853 27.8791 24.7929 27.5086 25.3491C27.1381 25.9045 26.0743 27.1554 25.7501 27.5259C25.4262 27.8972 25.102 27.9434 24.5466 27.6656C23.9907 27.3868 22.2017 26.801 20.0792 24.9087C18.4278 23.4363 17.313 21.6179 16.9889 21.0617C16.6648 20.5064 16.9542 20.2053 17.2327 19.9285C17.4823 19.6796 17.7884 19.2799 18.0664 18.9556C18.3434 18.6312 18.4359 18.3997 18.6211 18.0293C18.8065 17.6585 18.7137 17.3341 18.575 17.0562C18.4359 16.7784 17.3564 14.0311 16.8624 12.9328Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_47_83" x1="2156" y1="4330.63" x2="2156" y2="0.776489"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1FAF38" />
                                    <stop offset="1" stop-color="#60D669" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_47_83" x1="2232.56" y1="4485.12" x2="2232.56" y2="0"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F9F9F9" />
                                    <stop offset="1" stop-color="white" />
                                </linearGradient>
                                <clipPath id="clip0_47_83">
                                    <rect width="44.6512" height="45" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p>087717476555</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <p>&copy; 2024 Webiverse. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>

</body>

</html>
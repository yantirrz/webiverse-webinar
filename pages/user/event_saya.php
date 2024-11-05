<!DOCTYPE html>
<!-- ini kode untuk bagian user mengetahui sudah mendaftar webinar apa saja -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WebiVerse - Platform Webinar</title>
    <link rel="stylesheet" href="../../assets/css/style2.css" />
    <link rel="icon" type="image/x-icon" href="../../assets/images/logo (2).png" />
  </head>
  <body>
    <!-- Bagian Damayanti -->
    <div id="webinar">
      <div class="container">
        <h2>Webinar Saya</h2>
        <div class="card-grid">
          <!-- Card 1 -->
          <div class="card">
            <img src="../../assets/images/webinar1.png" alt="Webinar Image" />
            <div class="card-content">
              <div class="card-info">
                <h3>Kolaborasi Siswa dan Guru untuk Meningkatkan Prestasi Akademis"</h3>
                <p>Kolaborasi antara siswa dan guru dalam meningkatkan prestasi akademik melibatkan interaksi yang aktif, komunikasi terbuka, serta dukungan berkelanjutan.</p>
              </div>
              <div class="date-time">
                <div class="date">
                  <!-- icon kalender -->
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                    <defs>
                      <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_280"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>25 September 2024</p>
                </div>
                <div class="time">
                  <!-- icon jam -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                    <defs>
                      <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_259"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,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"
                      />
                    </defs>
                  </svg>
                  <p>12:00</p>
                </div>
                <div class="zoom">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                    <defs>
                      <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_260" transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                      </pattern>
                      <image
                        id="image0_50_260"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII="
                      />
                    </defs>
                  </svg>
                  <p>ZOOM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="card">
            <img src="../../assets/images/webinar2.png" alt="Webinar Image" />
            <div class="card-content">
              <div class="card-info">
                <h3>Tips Menjaga Kesehatan Mental Selama Masa Kuliah</h3>
                <p>Menjaga kesehatan mental saat menjalani kuliah sangat penting untuk menjaga keseimbangan hidup, produktivitas, dan kebahagiaan.</p>
              </div>
              <div class="date-time">
                <div class="date">
                  <!-- icon kalender -->
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                    <defs>
                      <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_280"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>25 September 2024</p>
                </div>
                <div class="time">
                  <!-- icon jam -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                    <defs>
                      <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_259"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,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"
                      />
                    </defs>
                  </svg>
                  <p>12:00</p>
                </div>
                <div class="zoom">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                    <defs>
                      <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_260" transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                      </pattern>
                      <image
                        id="image0_50_260"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII="
                      />
                    </defs>
                  </svg>
                  <p>ZOOM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card">
            <img src="../../assets/images/webinar3 (2).png" alt="Webinar Image" />
            <div class="card-content">
              <div class="card-info">
                <h3>Temukan Potensi Diri dan Raih Kesuksesan Hidup Mulia</h3>
                <p>Webinar ini mengupas secara mendalam cara menggali potensi diri dengan efektif, meraih sukses sejati yang diimpikan, dan membangun motivasi.</p>
              </div>
              <div class="date-time">
                <div class="date">
                  <!-- icon kalender -->
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                    <defs>
                      <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_280"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>25 September 2024</p>
                </div>
                <div class="time">
                  <!-- icon jam -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                    <defs>
                      <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_259"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,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"
                      />
                    </defs>
                  </svg>
                  <p>12:00</p>
                </div>
                <div class="zoom">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                    <defs>
                      <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_260" transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                      </pattern>
                      <image
                        id="image0_50_260"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII="
                      />
                    </defs>
                  </svg>
                  <p>ZOOM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- card 4 -->
          <div class="card">
            <img src="../../assets/images/webinar4.png" alt="Webinar Image" />
            <div class="card-content">
              <div class="card-info">
                <h3>Cara Membuat Personal Branding yang Meningkatkan Resonansi</h3>
                <p>"Bagaimana Cara Membuat Personal Branding yang Beresonansi" untuk membangun citra diri yang kuat. Pelajari strateginya. <br /></p>
              </div>
              <div class="date-time">
                <div class="date">
                  <!-- icon kalender -->
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                    <defs>
                      <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_280"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>25 September 2024</p>
                </div>
                <div class="time">
                  <!-- icon jam -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                    <defs>
                      <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_259"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,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"
                      />
                    </defs>
                  </svg>
                  <p>12:00</p>
                </div>
                <div class="zoom">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                    <defs>
                      <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_260" transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                      </pattern>
                      <image
                        id="image0_50_260"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII="
                      />
                    </defs>
                  </svg>
                  <p>ZOOM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="card">
            <img src="../../assets/images/webinar5.png" alt="Webinar Image" />
            <div class="card-content">
              <div class="card-info">
                <h3>Optimasi Cashflow UMKM: solusi praktis untuk masalah keuangan UMKM</h3>
                <p>Dapatkan solusi praktis untuk masalah keuangan UMKM, seperti arus kas tidak stabil dan kesulitan mengatur cashflow. </p>
              </div>
              <div class="date-time">
                <div class="date">
                  <!-- icon kalender -->
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                    <defs>
                      <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_280"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>25 September 2024</p>
                </div>
                <div class="time">
                  <!-- icon jam -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                    <defs>
                      <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_259"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,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"
                      />
                    </defs>
                  </svg>
                  <p>12:00</p>
                </div>
                <div class="zoom">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                    <defs>
                      <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_260" transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                      </pattern>
                      <image
                        id="image0_50_260"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII="
                      />
                    </defs>
                  </svg>
                  <p>ZOOM</p>
                </div>
              </div>
              <br />
            </div>
          </div>

          <!-- card 6 -->
          <div class="card">
            <img src="../../assets/images/webinar7.png" alt="Webinar Image" />
            <div class="card-content">
              <div class="card-info">
                <h3>Mengenal Diri untuk Pertumbuhan Karir dan Bisnis. </h3>
                <p>Self-Identity merupakan hal yang sangat penting dalam pengembangan karir dan kesuksesan bisnis yang ingin diraih.</p>
              </div>
              <div class="date-time">
                <div class="date">
                  <!-- icon kalender -->
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                    <defs>
                      <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_280"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>25 September 2024</p>
                </div>
                <div class="time">
                  <!-- icon jam -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                    <defs>
                      <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_259"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAIGklEQVR4nO1daYgcRRQub6NCVBDFG0ER0XhEvA8UQYgn3hqPeBAJGoOKiL96q2ZDdudVJ1kNavyRIP6RQETxNiaIYFQ8goL6I0Sjuc1hNOfMe7Hk9YzLJnbV9Eyqjxn7g/6zu+lX/arqq1fvihAlSpQoUaJEiRIlSpQoUSIZ5s0z+2lVHwt99DAoHNSK3gRJ34PCZVriJq2wBgr/AImzwtCMSvjaEoyw3xwHkp4ASW9piZu1IpPkAYkvCwtA0tugaJGWtAAUzQOFr2uFs3mCtMQBrVCComd1hSZrRROriu4JJd0+EJgTRS8hCMzBuo/Ga0kfgkRKqtzdH9wWBGbfuPdrha+0+z5QuHRGYA4XvYBZgTkMFD0NEld3ptzEir6+3XeFqna26HYEgdkfFD2pJW7YewUPK+clmzzmb1Ze4tXcR/eJboeu1C/Tir7zpmCJm0Di860OQz5IE3L9i6KbEQTmQK1wCCT+3SZXbmHu1goroaJ7w/76RVAxJ02bZo6YPdsckFQ+Wy4JFT2rnfcWCtMDcwpI+qoNGlihJU6vyvrFTDM+xjBzqjlaK9yVcAyLdcWcILoJocSr2NZNtnrp41DhONuhtrcASZ+3sZPWVyt4jegGgMJbQOLO1jxLCweD2nnpj4eea/OArWmFN4siA/rowdY2Mf6qFd6Y2ZiC2pkxY3DSCUisg6I7RIFXslPJIPHVgQEzOoexLRtBD0sHlTkVJL3fYqzEt0VRNE7WCnc4Br0T+uiBvMYHEmc2V/K2alAbwz8zxuwDip7RCtFFI1VZv1QUxrpwHHx8wOhK/bI8xwgVvJrHwqZi/A3SdbHBNQOBOV7kbSe7TThcxxwp/Mps2zphGxkUTrX9nheCc7FI+pJ9MyIv8GXEQRe/Q2DO8CUrDM2opudtc8PDhy/4dJOG/fULtMStjkUzQ+SBaBVYbnzMyb65DYZ5dqSJiNN9ymBryHagN35eHyuyBN/cXL6LNA4+kLg2jj99y9GKpjiska85MCGyQuSFc5hwacjUFnm+5bA1ohW941D2FJEFAMyhzL8WHlvBjp9uVjRjaKo5Kn4HRXS1gXUg0gY77R0HRmo3Pp2hohl8WXFYIY+LNDE0ZA7SClfF28u0KE3ZOmNFRxcai+kKEn9L1a0axfgsH5y2g0hnrOiRF524J9XrecMZH8dbtCA1oTkquin3U8sO/iDFlACL00jitaJHFV21cDV7+MLAHCmysi+Zr9Jy2hdB0XwuRf6aePkTvAuMklviV7MWGUDnpGgGB4It1sfbXgXxbcjmdOHAqehxRYcKx8XzNG7xupun99fPt6zmv3wFUous6CAwh1j97YE5zZsgreihTE/egik6ki9pYewY+uhOb0KaWZ1xB6ES/xNFQ5z3sLGrB7wJsWX8xEUselXRYYUeTf1AtLlEQdYv9Cak6IqW9SstY1jsTQgo/MVCHWtBIbCtKXpU0bObYTBb9itI/NGbsFYZoKAwFCkCAnNGXormc8j17V6DD43sHaei14uUECq63xXLEylDS1zu/HaJOzNTNEe7RToBhrlOuRI3+JablDbTUXRr6gD/VIE/uCfXf3C2E+rwupvts4pr2I7k/A5fsrSiCe6w/7DsOT7ltjoMo2+Nn+yfu8q8gyRU0fiwral4zVqAfTqWMS3xJsRaotBH4728PzCncy1hKyWDwp9CVTtL5ACucYmfeJqf+hWca/WyogqQODeT6LMFILHfMvnTCu1UCqIkHJxTVKrYExyus4zR39g4Fcoym392mrkD1l2y2475wWf+3t6V7uGW+DHWzs3E8c/FPZ28UytcV2SqiCnfi1toG72H8awHYoehLLBnAhWCKpK5SD0ehP+iWZwep5jlncwqKJxWVKr4b7cFXBH77RWa5F3gYGCOdaS0XtfJB0CkbFzV9AIOFoUqRqIq8SbL+YFcx5iKULYyfFsfRYc1hKXoncxTwjghPatoeJbgKgBrebXPWGFsMonElZZV/YnoMQA3VolfWKtTr2nRkp5ymGQ3iB4BKLwl12R0VyI6z3QvdHAZGDCjrTtX4lrO88hkIK46D75oiC4HSHzNupor9FjGtiUtcWytR0SXQldokuO7vsm0WIjBV297wxPcoSv1S0SXYVDWL7d3ZsBdbIXkMjAOJVkpROFG31WzaYJrxJ09RiRWRc4lyl86+Hp1Nyi7GtTGWENVjWykz3JvBTQjMCc3OixaV8KmItNIRBfulbyhME0Hma9dHQKgwXvZFEK2mTMCErc7xr2dJ0IUCdweJ0FjlLl5NEbZE2zrO0244drv7DrltAX2IydQ9kr2iOU1xlDira27SCLm2cilnQ4B1u2oRxwwWW7LyEFk8V3sSXOg8DbRDYBK/QrnAamGP+pvUPQR+0haBQ+iZoUSq5Elw4/CwVYJNHy54N3DLd9ajeXfgy/vbjltgzsvakVfJPpA1Sij4+Yj/KFxdTGs5BhbfXDPv+N/27x4zLRGRiw7rDDWRYfpVGEb3RRHtsxcwLkUXFXAGVHxdi6u4d9xckuUdxH1irZFq618vIsnMXc72Qc0dzh3XGxyfJZ0GsUvLOaxI6pCk+29PrJ8cB174TJ3EGWJoagVBU1shz99PY0gMD2bmT+5MArvo7u1ovc6bz2faPUiSHoXFN2VRa1NoVENzDG8lbWiN9jrt9crl98haT77llNLCeh2BIHZl/PZooayjSSbN/jQ4v6ijUmIuuHyfxGyMfqZpG9Zqc2/nVANaudk0W2hRIkSJUqUKFGiRIkSJUSv4B+YwgVAkxXWrwAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>12:00</p>
                </div>
                <div class="zoom">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                    <defs>
                      <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_260" transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                      </pattern>
                      <image
                        id="image0_50_260"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII="
                      />
                    </defs>
                  </svg>
                  <p>ZOOM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- card 7 -->
          <div class="card">
            <img src="../../assets/images/webinar7(2).jpg" alt="Webinar Image" />
            <div class="card-content">
              <div class="card-info">
                <h3>Admin olshop menjadi assist HR manager? emang bisa? </h3>
                <p>Bingung admin olshop bisa jadi HR Manager? Simak webinar ini! Temukan cara transformasi skill dan peluang karir di era digital. Daftar sekarang!</p>
              </div>
              <div class="date-time">
                <div class="date">
                  <!-- icon kalender -->
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                    <defs>
                      <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_280"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>25 September 2024</p>
                </div>
                <div class="time">
                  <!-- icon jam -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                    <defs>
                      <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_259"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,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"
                      />
                    </defs>
                  </svg>
                  <p>12:00</p>
                </div>
                <div class="zoom">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                    <defs>
                      <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_260" transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                      </pattern>
                      <image
                        id="image0_50_260"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII="
                      />
                    </defs>
                  </svg>
                  <p>ZOOM</p>
                </div>
              </div>
            </div>
          </div>

          <!-- card 8 -->
          <div class="card">
            <img src="../../assets/images/webinar8(2).jpg" alt="Webinar Image" />
            <div class="card-content">
              <div class="card-info">
                <h3>Internasionalisasi karya penelitian rahasia sukses publikasi rahasia dunia</h3>
                <p>ingin karya penelitianmu diakui dunia? Simak rahasia sukses publikasi internasional! Temukan tips dan strategi jitu dalam webinar ini. Segera daftar!</p>
              </div>
              <div class="date-time">
                <div class="date">
                  <!-- icon kalender -->
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="25" height="25" fill="url(#pattern0_50_280)" />
                    <defs>
                      <pattern id="pattern0_50_280" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_280" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_280"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZUlEQVR4nO2cvU4sMQxGU3F5BLjwiMDtgG6UQMEQg8RL8VMBj4KgQWMpKEuD4II2bGwnO9+R0iBr1j54PeAizgEAAAAAAAAAAAAANwxpkwL/i57vyE8vFDit5fGL2m6j54Orq/RH9Vd/NqRdCvxoLiHonuj5Ideu2cmzk0wfZKt0dh4X1sWS9TnhfXHRi5lsXWgw7+obedFherYulKxFh+lZXPR3H+7WFLKqF6IZoiVARysB0UpAtBIQrQREKwHRSkC0EhCtBETPVfTcjoNohmhqoBPR0cFeHkZHsBeLGR0g2rzrCB3N5qIwOoK9xDWb0dMreT4ch/Q3nxj4aPGzJeJLcy59/jLxrhfRMfDR52e/F7d8fCmlz/8p3vUi+vI0bX9+9vmQtkriSyl9/k/xrhfR439GwMVp2pEurLV8TEYHeT62Em2VT3Gi5Wd6zcVpv3xay+cXicoeV5iPdP5igmsnShAN0YSO/gpGB0bHamBGs/XL8Pe7i7GRP++62HXU2F1Ehd1Ca/kUJ1pjd3GusFtoLR/xXcFYIb6Umvk4aWrtCmKF+OLcK+azai5quwJaIb40Z4l8nDTfJzqv4yCaIZoa6ER0dLCXh9ER7MViRofZiZbddZB4fCeipXcdUTi+G9HSu45L4fhuRFvsOi4qxncj2mLXQRXjuxGtuesYReK7ET2v4yCaIZoa6MRuOhrXsXG+ju1JXjQuGEw6Fwx6PrD+2pLxiZ73xEXnC1DzRajWxZLduR+GtOE0yFf7zlT2ff7v0mmSOzvfOpvn1Tq/ION7bdd5XKh1MgAAAAAAAAAAAIBrmze582qIAg3rUQAAAABJRU5ErkJggg=="
                      />
                    </defs>
                  </svg>
                  <p>25 September 2024</p>
                </div>
                <div class="time">
                  <!-- icon jam -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="20" height="20" fill="url(#pattern0_50_259)" />
                    <defs>
                      <pattern id="pattern0_50_259" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_259" transform="scale(0.0111111)" />
                      </pattern>
                      <image
                        id="image0_50_259"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,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"
                      />
                    </defs>
                  </svg>
                  <p>12:00</p>
                </div>
                <div class="zoom">
                  <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="17" height="20" fill="url(#pattern0_50_260)" />
                    <defs>
                      <pattern id="pattern0_50_260" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_50_260" transform="matrix(0.0111111 0 0 0.00944444 0 0.075)" />
                      </pattern>
                      <image
                        id="image0_50_260"
                        width="90"
                        height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2cS27UQBBAzQZYwha4AVyAHVwBrkHIEayuQZpJugaUS8A1gAWf1cARQPwWSICChEI1MuqJRgpESeZju+yZ96Rel+q5XO7xVLsoAAAAAAAAAAAAAAAAYEnKsrqokrZjSK812E+VVK3NCtN8XsWQ7u/tVRcKL0ZldU0lvXUXIs2vGNKbnK9XJW+EZD0iu/XKzu3CO3H1WIO01aroaU/2Tlpcqvplu6LF9jdStNh+q6K9E1bH1dQzL4rtxGCfVOyjBhuVZXUe0TUyHFaXVdLzYxc12AjRNbFTVldO3r3ZZ0TXQCwPbsRg709tU959Unveo8fBbmuw72fG8k5Weyx6HOyuiv2aK5Z3stpT0Yc/9OzP3LG8k9Weia6q6lzevi0cyztZ7ZHo/H5Egz1ZKpZ3stoT0Y/K6lKU9HTpWN7Jag9E5z1yfuO3UizvZLXjoh/KwfWz9siIltVEx4HdimLfarmo3lWlHa3oKHZn3j0yomU50YvukREtS4uu/+7xvn21g60D0YJo9+pUKtpfKK1DEO1ebUpF+wtSWoe/PKVHp84t9tGCaPcqVCp6rVrHNi+VpHnRvCaVdip6xm74fVODfa0llvftqx1sHf//laVi7xAtzYo+MsA4oaKlWdEZxg2k+YqekQfKo9hjerQ0K3o2EpYHyxeO5f1A0o4/DE+CIUdpR3SGsV1pR/QiQza0jhqYZ2wM0TVx2iBkDPYB0XUffwvp2THRYkNEN/ERg2C7MdiXfw50bvAR5R9Fm3DoviXyV1k2sqJDule0ST4As+qxgR6uybRvtk3+9M0GyZ6MH1RXCy+mR7sGaSt/MGTdHpDxMJ8XuV24VDIAAAAAAAAAAAAAAAAUi/MXM4nNE1ijlicAAAAASUVORK5CYII="
                      />
                    </defs>
                  </svg>
                  <p>ZOOM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

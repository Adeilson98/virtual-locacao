document.addEventListener('DOMContentLoaded', function () {
    var currentBanner = 0;
    var banners = document.querySelectorAll('.banner');
    var totalBanners = banners.length;

    function showBanner(index) {
        for (var i = 0; i < totalBanners; i++) {
            banners[i].style.display = 'none';
        }
        banners[index].style.display = 'block';
    }

    function nextBanner() {
        currentBanner = (currentBanner + 1) % totalBanners;
        showBanner(currentBanner);
    }

    // Iniciar o banner rotativo
    showBanner(currentBanner);

    // Configurar intervalo para trocar os banners automaticamente (a cada 5 segundos neste exemplo)
    setInterval(function () {
        nextBanner();
    }, 5000);
});
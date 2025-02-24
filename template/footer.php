<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="assets/js/datatables-simple-demo.js"></script>

<script>
    const audio = document.getElementById('audio');
    const button = document.getElementById('playPauseButton');

    button.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            button.textContent = 'Putar Jinggle YETC';
        } else {
            audio.pause();
            button.textContent = 'Putar Jinggle YETC';
        }
    });

    window.onload = function() {
        jam();
        getLocation();
    }

    function jam() {
        var e = document.getElementById('jam'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = '<i class="fas fa-solid fa-clock"></i> ' +
            h + ':' + m + ':' + s;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            document.getElementById("location").innerHTML = "Geolocation tidak didukung oleh browser ini.";
        }
    }

    function showPosition(position) {
        let lat = position.coords.latitude;
        let lon = position.coords.longitude;

        // Menggunakan API Reverse Geocoding dari OpenStreetMap
        let url = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lon}&format=json`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                let daerah = data.address.city || data.address.town || data.address.village || "Tidak diketahui";
                document.getElementById("location").innerHTML =
                    "<i class='fas fa-solid fa-location-dot'></i> Anda berada di: " + daerah;
            })
            .catch(error => {
                document.getElementById("location").innerHTML = "Gagal mendapatkan lokasi.";
            });
    }

    function showError(error) {
        document.getElementById("location").innerHTML = "Gagal mendapatkan lokasi.";
    }
</script>

</body>

</html>
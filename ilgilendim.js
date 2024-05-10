function getEvents() {
    const birthMonth = document.getElementById("birth-month").value;
    const birthDay = document.getElementById("birth-day").value;

    // Tarihte Bugün API'sinden veri almak için kullanılacak URL
    const url = `https://api.tarihtebugun.xyz/${birthMonth}/${birthDay}/events.json`;

    // API'ye GET isteği gönderme
    fetch(url)
        .then(response => response.json())
        .then(data => {
            // Verileri işleme
            if (data && data.length > 0) {
                // İlk olayı al
                const event = data[0];
                const text = event.date + ": " + event.text;

                // HTML içeriğine ekleme
                const resultElement = document.getElementById("result");
                resultElement.textContent = text;
            } else {
                // Eğer herhangi bir olay bulunamazsa
                const resultElement = document.getElementById("result");
                resultElement.textContent = "Bu tarihe ait bilgi bulunamadı.";
            }
        })
        .catch(error => {
            console.error('API request failed:', error);
        });
}

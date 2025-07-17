<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Curhat - Ruang Pulih</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            background-color: #feede0;
            padding: 25px 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 60px;
        }

        .logo {
            width: 114px;
            height: 67px;
            background-color: #fc823d;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 12px;
            text-align: center;
            line-height: 1.2;
            flex-shrink: 0;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 50px;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: #291800;
            font-weight: 500;
            font-size: 24px;
            transition: color 0.3s;
            padding: 10px 0;
            display: block;
        }

        .nav-links a.active {
            color: #fc823d;
            position: relative;
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #fc823d;
        }

        .nav-links a:hover {
            color: #fc823d;
        }

        .cta-button {
            background-color: #fc823d;
            color: white;
            padding: 15px 40px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            font-size: 24px;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .cta-button:hover {
            background-color: #e5722f;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
            gap: 50px;
        }

        .hero-content {
            flex: 1;
        }

        .hero-content h1 {
            font-size: 48px;
            color: #291800;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 20px;
            color: #666;
            margin-bottom: 30px;
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Choice Section */
        .choice-section {
            text-align: center;
            margin: 80px 0;
        }

        .choice-buttons {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-bottom: 30px;
        }

        .choice-btn {
            background-color: #ffebdf;
            color: #fc823d;
            padding: 20px 40px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            transition: all 0.3s;
            border: 2px solid transparent;
        }

        .choice-btn:hover {
            background-color: #fc823d;
            color: white;
            transform: translateY(-2px);
        }

        .or-text {
            font-size: 72px;
            color: #fc823d;
            font-weight: bold;
            margin: 20px 0;
        }

        /* Form Section */
        .form-section {
            background-color: #ffebdf;
            padding: 50px;
            border-radius: 20px;
            margin: 50px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .form-section h2 {
            color: #291800;
            font-size: 32px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #291800;
            font-size: 18px;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: border-color 0.3s;
            background-color: white;
        }

        .form-input:focus {
            outline: none;
            border-color: #fc823d;
        }

        .form-textarea {
            min-height: 120px;
            resize: vertical;
            font-family: inherit;
        }

        .submit-btn {
            background-color: #ff6a16;
            color: white;
            border: none;
            padding: 15px 50px;
            border-radius: 15px;
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s;
            float: right;
        }

        .submit-btn:hover {
            background-color: #e55a0f;
            transform: translateY(-2px);
        }

        .submit-btn:disabled {
            background-color: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        /* Messages Section */
        .messages-section {
            margin: 80px 0;
        }

        .messages-title {
            text-align: center;
            color: #291800;
            font-size: 32px;
            margin-bottom: 50px;
        }

        .messages-container {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            padding: 20px 0;
        }

        .message-card {
            background-color: #ffebdf;
            padding: 30px;
            border-radius: 20px;
            min-width: 350px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .message-card:hover {
            transform: translateY(-5px);
        }

        .message-text {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 15px;
        }

        .message-author {
            font-size: 12px;
            color: #666;
            text-align: right;
        }

        /* Inspirational Messages */
        .inspirational-messages {
            margin: 80px 0;
        }

        .inspirational-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .inspirational-card {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            border-left: 4px solid #fc823d;
            transition: transform 0.3s;
        }

        .inspirational-card:hover {
            transform: translateY(-3px);
        }

        .inspirational-text {
            font-style: italic;
            color: #333;
            line-height: 1.6;
        }

        /* Quote Section */
        .quote-section {
            background-color: #ffebdf;
            padding: 60px;
            border-radius: 30px;
            margin: 80px 0;
            text-align: center;
        }

        .quote-text {
            font-size: 28px;
            color: #291800;
            line-height: 1.4;
            font-style: italic;
            margin-bottom: 20px;
        }

        .quote-author {
            font-size: 18px;
            color: #666;
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 20px;
                flex-direction: column;
                gap: 20px;
            }
            
            .nav-links {
                display: none;
            }
            
            .logo {
                width: 100px;
                height: 60px;
            }
            
            .cta-button {
                font-size: 20px;
                padding: 12px 30px;
            }

            .hero {
                flex-direction: column;
                text-align: center;
                margin: 40px auto;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .choice-buttons {
                flex-direction: column;
                gap: 20px;
            }

            .or-text {
                font-size: 48px;
            }

            .form-section {
                padding: 30px 20px;
            }

            .submit-btn {
                float: none;
                width: 100%;
            }

            .messages-container {
                flex-direction: column;
            }

            .message-card {
                min-width: auto;
            }

            .quote-text {
                font-size: 20px;
            }
        }

        @media (max-width: 1024px) {
            .nav-links {
                gap: 30px;
            }
            
            .nav-links a {
                font-size: 20px;
            }
            
            .cta-button {
                font-size: 20px;
                padding: 12px 30px;
            }
        }

        /* Success/Error Messages */
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
        }

        /* Scrollbar Styling */
        .messages-container::-webkit-scrollbar {
            height: 8px;
        }

        .messages-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .messages-container::-webkit-scrollbar-thumb {
            background: #fc823d;
            border-radius: 10px;
        }

        .messages-container::-webkit-scrollbar-thumb:hover {
            background: #e5722f;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">RUANG<br>PULIH</div>
            <ul class="nav-links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Ruang Meditasi</a></li>
                <li><a href="#">Dokter</a></li>
            </ul>
    
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Ruang Aman untuk Berbagi Cerita</h1>
            <p>Tempat di mana kamu bisa bercerita tanpa takut dihakimi. Setiap kata yang kamu tulis akan didengarkan dengan penuh empati.</p>
        </div>
        <div class="hero-image">
            <img src="https://via.placeholder.com/500x300/4A90E2/FFFFFF?text=Counseling+Image" alt="Counseling">
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Choice Section -->
        <section class="choice-section">
            <div class="choice-buttons">
                <a href="#read-messages" class="choice-btn">READ A MESSAGE</a>
                <a href="#form" class="choice-btn">FEELING DOWN?</a>
            </div>
            <div class="or-text">OR</div>
        </section>

        <!-- Form Section -->
        <section class="form-section" id="form">
            <h2>DEAR :</h2>
            <form id="curhatForm">
                <div class="form-group">
                    <label for="name" class="form-label">Nama (Opsional)</label>
                    <input type="text" id="name" name="name" class="form-input" placeholder="Masukkan nama atau biarkan kosong untuk anonim">
                </div>
                
                <div class="form-group">
                    <label for="message" class="form-label">Ceritakan apa yang kamu rasakan</label>
                    <textarea id="message" name="message" class="form-input form-textarea" placeholder="Tulis curhatanmu di sini..." required></textarea>
                </div>
                
                <button type="submit" class="submit-btn" id="submitBtn">Kirim</button>
                <div style="clear: both;"></div>
            </form>
        </section>

        <!-- Messages Section -->
        <section class="messages-section" id="read-messages">
            <h2 class="messages-title">Lihat curhatan sobat pulih lainnya</h2>
            <div class="messages-container">
                <div class="message-card">
                    <p class="message-text">Hidup memang cukup gak mudah kadang, kadang kita begitu suportif, cuma belum tentu orang lain.</p>
                    <div class="message-author">Anonim - 15 Jul 2024</div>
                </div>
                <div class="message-card">
                    <p class="message-text">Jalan masih panjang, masih banyak harapan yang segera harus ku perjuangkan, semangat terus untuk kita semua.</p>
                    <div class="message-author">Maya - 14 Jul 2024</div>
                </div>
                <div class="message-card">
                    <p class="message-text">Terima kasih sudah menyediakan ruang yang aman untuk bercerita. Semoga kita semua bisa melewati masa sulit ini.</p>
                    <div class="message-author">Budi - 13 Jul 2024</div>
                </div>
            </div>
        </section>

        <!-- Inspirational Messages -->
        <section class="inspirational-messages">
            <h2 class="messages-title">Pesan Inspirasi</h2>
            <div class="inspirational-grid">
                <div class="inspirational-card">
                    <p class="inspirational-text">"Hari ini mungkin berat, tapi kamu sudah sampai sejauh ini. Itu bukti betapa kuatnya dirimu."</p>
                </div>
                <div class="inspirational-card">
                    <p class="inspirational-text">"Tidak apa-apa untuk berhenti sejenak. Istirahat bukan berarti menyerah, itu bagian dari perjalananmu."</p>
                </div>
                <div class="inspirational-card">
                    <p class="inspirational-text">"Kamu tidak harus selalu kuat. Menangis pun adalah tanda keberanianmu menghadapi dunia."</p>
                </div>
                <div class="inspirational-card">
                    <p class="inspirational-text">"Kamu pantas untuk bahagia. Pantas untuk dicintai. Pantas untuk sembuh."</p>
                </div>
                <div class="inspirational-card">
                    <p class="inspirational-text">"Jika hari ini gelap, ingatlah matahari selalu kembali esok pagi. Begitu juga kebahagiaanmu."</p>
                </div>
                <div class="inspirational-card">
                    <p class="inspirational-text">"Pelan-pelan saja… penyembuhan tidak harus cepat. Tidak ada kata terlambat untuk menjadi utuh kembali."</p>
                </div>
            </div>
        </section>

        <!-- Quote Section -->
        <section class="quote-section">
            <p class="quote-text">"Apa yang kita pikirkan menentukan apa yang akan terjadi pada kita. Jadi jika kita ingin mengubah hidup, kita perlu sedikit mengubah pikiran kita."</p>
            <p class="quote-author">- Inspirasi Harian</p>
        </section>
    </main>

    <script>
        // Form submission handling
        document.getElementById('curhatForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const messageField = document.getElementById('message');
            const nameField = document.getElementById('name');
            
            if (messageField.value.trim() === '') {
                alert('Pesan tidak boleh kosong!');
                return;
            }
            
            // Simulate form submission
            submitBtn.disabled = true;
            submitBtn.textContent = 'Mengirim...';
            
            // Simulate API call
            setTimeout(() => {
                // Add new message to the container
                const messagesContainer = document.querySelector('.messages-container');
                const newMessage = document.createElement('div');
                newMessage.className = 'message-card';
                newMessage.innerHTML = `
                    <p class="message-text">${messageField.value}</p>
                    <div class="message-author">${nameField.value || 'Anonim'} - ${new Date().toLocaleDateString('id-ID')}</div>
                `;
                messagesContainer.insertBefore(newMessage, messagesContainer.firstChild);
                
                // Reset form
                messageField.value = '';
                nameField.value = '';
                submitBtn.disabled = false;
                submitBtn.textContent = 'Kirim';
                
                // Show success message
                const successDiv = document.createElement('div');
                successDiv.className = 'success-message';
                successDiv.textContent = 'Pesan berhasil dikirim! Terima kasih telah berbagi.';
                
                const form = document.getElementById('curhatForm');
                form.parentNode.insertBefore(successDiv, form);
                
                // Remove success message after 5 seconds
                setTimeout(() => {
                    successDiv.remove();
                }, 5000);
                
                // Scroll to messages section
                document.getElementById('read-messages').scrollIntoView({ behavior: 'smooth' });
            }, 1500);
        });
        
        // Auto-resize textarea
        const textarea = document.getElementById('message');
        textarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
        
        // Smooth scrolling for choice buttons
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
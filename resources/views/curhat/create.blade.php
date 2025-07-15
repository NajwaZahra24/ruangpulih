<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curhat Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #ff6b4a 0%, #ff8f73 50%, #ffa894 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 80px; 
        box-shadow: 0 25px 50px rgba(255, 107, 74, 0.2);
        max-width: 800px; 
        width: 100%;
        animation: slideUp 0.6s ease-out;
        border: 1px solid rgba(255, 171, 148, 0.3);
        font-size : 18px;
        }


        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            color: #2d3748;
            font-size: 38px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #ff6b4a, #ff8f73);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .textarea-container {
            position: relative;
        }

        textarea {
            width: 100%;
            padding: 20px;
            border: 2px solid #ffd4cc;
            border-radius: 15px;
            font-size: 18px;
            font-family: inherit;
            resize: vertical;
            min-height: 120px;
            transition: all 0.3s ease;
            background: #fff8f7;
            outline: none;
            line-height: 1.6;
        }

        textarea:focus {
            border-color: #ff6b4a;
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 107, 74, 0.15);
        }

        textarea::placeholder {
            color: #a0aec0;
            font-style: italic;
        }

        .char-counter {
            position: absolute;
            bottom: 10px;
            right: 15px;
            font-size: 12px;
            color: #718096;
            background: rgba(255, 255, 255, 0.9);
            padding: 2px 6px;
            border-radius: 10px;
        }

        .submit-btn {
            width: 100%;
            padding: 15px 30px;
            background: linear-gradient(135deg, #ff6b4a, #ff8f73);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(255, 107, 74, 0.4);
            background: linear-gradient(135deg, #ff5a3a, #ff7f63);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .form-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #a0aec0;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        textarea:focus + .form-icon {
            color: #ff6b4a;
        }

        .privacy-note {
            font-size: 12px;
            color: #718096;
            text-align: center;
            margin-top: 15px;
            opacity: 0.8;
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            textarea {
                padding: 15px;
                font-size: 14px;
            }
            
            .submit-btn {
                padding: 15px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>💭 Tulis Curhatanmu</h2>
        
        <form action="{{ route('curhat.store') }}" method="POST" id="curhatForm">
            @csrf
            <div class="form-group">
                <div class="textarea-container">
                    <textarea 
                        name="pesan" 
                        id="pesan"
                        placeholder="Tulis curhatanmu di sini... Ceritakan apa yang sedang kamu rasakan 💝"
                        required
                        maxlength="1000"
                    ></textarea>
                    <div class="form-icon">✍️</div>
                    <div class="char-counter">
                        <span id="charCount">0</span>/1000
                    </div>
                </div>
            </div>
            
            <button type="submit" class="submit-btn">
                <span>🚀 Kirim Curhatan</span>
            </button>
            
            <div class="privacy-note">
                Curhatanmu akan disimpan dengan aman dan penuh privasi
            </div>
        </form>
    </div>

    <script>
        // Character counter
        const textarea = document.getElementById('pesan');
        const charCount = document.getElementById('charCount');
        
        textarea.addEventListener('input', function() {
            const currentLength = this.value.length;
            charCount.textContent = currentLength;
            
            if (currentLength > 800) {
                charCount.style.color = '#e53e3e';
            } else if (currentLength > 600) {
                charCount.style.color = '#ff6b4a';
            } else {
                charCount.style.color = '#718096';
            }
        });

        // Form submission enhancement
        document.getElementById('curhatForm').addEventListener('submit', function(e) {
            const button = this.querySelector('.submit-btn');
            const originalText = button.innerHTML;
            
            button.innerHTML = '<span>📤 Mengirim...</span>';
            button.disabled = true;
            
            // In a real application, you would let the form submit naturally
            // This is just for demonstration
            setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
            }, 2000);
        });

        // Auto-resize textarea
        textarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = Math.min(this.scrollHeight, 200) + 'px';
        });
    </script>
</body>
</html>
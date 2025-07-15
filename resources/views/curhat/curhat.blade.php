<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curhat Messages</title>
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
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .curhat-container {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }

        .curhat-box {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 15px 35px rgba(255, 107, 74, 0.2);
            border: 1px solid rgba(255, 171, 148, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.6s ease-out;
        }

        .curhat-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #ff6b4a, #ff8f73, #ffa894);
        }

        .curhat-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(255, 107, 74, 0.3);
        }

        .curhat-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            gap: 10px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff6b4a, #ff8f73);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 4px 12px rgba(255, 107, 74, 0.3);
        }

        .user-info {
            flex: 1;
        }

        .username {
            font-weight: 600;
            color: #2d3748;
            font-size: 16px;
            margin-bottom: 2px;
        }

        .timestamp {
            font-size: 12px;
            color: #718096;
            opacity: 0.8;
        }

        .curhat-message {
            color: #4a5568;
            line-height: 1.6;
            font-size: 15px;
            position: relative;
        }

        .curhat-message::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: -15px;
            font-size: 40px;
            color: #ff6b4a;
            opacity: 0.3;
            font-family: serif;
        }

        .curhat-footer {
            display: none;
        }

        .reaction-buttons {
            display: none;
        }

        .reaction-btn {
            display: none;
        }

        .support-tag {
            display: none;
        }

        .empty-state {
            text-align: center;
            color: white;
            padding: 60px 20px;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .empty-state p {
            opacity: 0.7;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .curhat-container {
                grid-template-columns: 1fr;
            }
            
            .curhat-box {
                padding: 20px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }

        /* Loading animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 107, 74, 0.3);
            border-radius: 50%;
            border-top-color: #ff6b4a;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>💭 Ruang Curhat</h1>
            <p>Tempat berbagi cerita dan perasaan dengan aman</p>
        </div>

        <div class="curhat-container">
            @foreach ($curhats as $index => $curhat)
                <div class="curhat-box">
                    <div class="curhat-header">
                        <div class="avatar">{{ chr(65 + ($index % 26)) }}</div>
                        <div class="user-info">
                            <div class="username">Anonim</div>
                            <div class="timestamp">{{ $curhat->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                    <div class="curhat-message">
                        {{ $curhat->pesan }}
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Empty state if no curhats --}}
        @if($curhats->isEmpty())
            <div class="empty-state">
                <h3>Belum ada curhat yang dibagikan</h3>
                <p>Jadilah yang pertama berbagi cerita di sini</p>
            </div>
        @endif
    </div>

    <script>
        // Animate cards on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = Math.random() * 0.3 + 's';
                    entry.target.classList.add('animate');
                }
            });
        });

        document.querySelectorAll('.curhat-box').forEach(box => {
            observer.observe(box);
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Real-time Chat Application</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body,
    html {
      height: 100%;
      font-family: Arial, sans-serif;
      -webkit-font-smoothing: antialiased; /* For Safari/Chrome */
      -moz-osx-font-smoothing: grayscale;  /* For Firefox */
    }

    .welcome-text {
      text-align: right;

    }

    .welcome-text p span {
      color: white;
      font-size: 1.2rem;
      font-weight: bold;
    }

    .logo {
      color: #212529;
      font-size: 1.2rem;
      font-weight: bold;
    }


    .welcome-container {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      justify-content: center;
      height: 80vh;
    }

    .startBtn {
      background-color: #212529;
      color: white;
      font-weight: bold;
      transition: all 0.3s ease-in-out;
    }

    .startBtn:hover {
      background-color: #ffc13b;
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      .welcome-container {
        align-items: center;
        text-align: center;
      }

      .welcome-text {
        font-size: 1rem;
        position: relative;
        left: 20%;
        max-width: 20ch;
      }
      .welcome-text h1{
       font-size: 1.3rem;
      }
    }
    .video-container {
      position: relative;
      width: 100%;
      height: 100vh;
      /* Full viewport height */
      overflow: hidden;
    }
    .background-video {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      height: 100%;
      object-fit: fill;
      /* Maintain aspect ratio and cover container */
      z-index: -1;
      /* Place video behind other elements */
    }

    .typing-animation {
      display: inline-block;
      overflow: hidden;
      white-space: nowrap;
      border-right: 3px solid #fff;
      animation: typing 3s steps(30, end), blink-caret 0.5s step-end infinite;
    }

    @keyframes typing {
      from {
        width: 0;
      }
      to {
        width: 100%;
      }
    }
    @keyframes blink-caret {
      from,
      to {
        border-color: transparent;
      }
      50% {
        border-color: #fff;
      }
    }
    .logBtn{
      background-color: #212529;
      color:white;
    }
    .sigBtn{
      background-color: white;
      color:#212529;
    }
    .sigBtn:hover{
      background-color: transparent;
      border:2px solid #212529;
    }
    .logBtn:hover{
      background-color: transparent;
      border:2px solid #212529;
    }
  </style>
</head>
<body>
  <section class="video-container">
    <header class="d-flex justify-content-between align-items-center p-3">
      <!-- Logo -->
      <div class="logo">
        Talkie <i class="bi bi-chat-text"></i>
      </div>

      <!-- Buttons -->
      <div>
        @if (Route::has('login'))
        <a href="{{ route('login') }}" class="btn logBtn me-2">Login</a>
        <a href="{{ route('register') }}" class="btn sigBtn">Sign Up</a>
        @endif
      </div>
    </header>
    <video autoplay muted loop playsinline class="background-video">
      <source src="/assets/Phone.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <!-- Welcome Section -->
    <main class="container welcome-container">
      <div class="welcome-text m-0">
        <h1 class="responsive-text typing-animation fw-bold mb-4">
          Welcome to <span class="text-white">Talkie</span>
        </h1>
        <p class="responsive-text">
          Experience seamless communication with your friends and loved ones in real-time.
        </p>
        <p class="responsive-text">
          <span>Talkie</span> brings you closer, no matter where you are.
  </p>
        <a href="{{ route('chatify') }}" class="btn startBtn mt-3">
  Get started
</a>
      </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
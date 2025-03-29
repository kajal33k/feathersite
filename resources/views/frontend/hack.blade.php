<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Breach Detected</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes glitch {
            0% { transform: skew(0deg); }
            20% { transform: skew(-5deg); }
            40% { transform: skew(5deg); }
            60% { transform: skew(-5deg); }
            80% { transform: skew(5deg); }
            100% { transform: skew(0deg); }
        }
        .glitch { animation: glitch 0.2s infinite; color: red; }
        .blink { animation: blink 1s infinite alternate; }
        @keyframes blink { from { opacity: 1; } to { opacity: 0; } }
        .terminal { font-family: monospace; }
        
        /* Matrix-style falling text */
        @keyframes matrixRain {
            from { transform: translateY(-100%); }
            to { transform: translateY(100%); }
        }
        .matrix-text {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            color: rgba(0, 255, 0, 0.5);
            font-family: monospace;
        }
        .matrix-text span {
            position: absolute;
            top: 0;
            left: 50%;
            animation: matrixRain 3s linear infinite;
        }
    </style>
</head>
<body class="bg-black text-green-400 h-screen flex flex-col justify-center items-center relative">
    
    <div class="matrix-text" id="matrix"></div>
    
    <h1 class="text-4xl glitch font-bold">⚠ SYSTEM BREACH DETECTED ⚠</h1>
    
    <div class="mt-5 p-4 bg-gray-900 w-2/3 h-64 overflow-hidden border border-green-500 rounded shadow-lg">
        <div class="terminal h-full overflow-auto text-sm" id="terminal">
            <p>> Connecting to remote server...</p>
            <p>> Bypassing firewall...</p>
            <p>> Injecting payload...</p>
            <p>> Extracting sensitive data...</p>
        </div>
    </div>
    
    <div class="mt-4 w-1/2 bg-red-700 text-white text-center py-2 rounded blink">ACCESS DENIED</div>
    
    <p class="mt-4 text-red-500 text-lg blink">YOUR DATA IS BEING EXPOSED...</p>
    
    <div class="mt-4 w-2/3 bg-gray-800 rounded shadow-lg p-4">
        <div class="h-4 bg-red-600 rounded-full" id="progress-bar" style="width: 0%;"></div>
        <p class="text-white text-xs mt-2">Decrypting Files... <span id="progress-text">0%</span></p>
    </div>
    
    <button class="mt-6 px-6 py-2 bg-red-600 text-white rounded shadow-lg hover:bg-red-800">Stop Hacking</button>
    
    <audio id="beep" src="https://www.soundjay.com/button/beep-07.wav" preload="auto"></audio>
    
    <script>
        function addLog(message) {
            let terminal = document.getElementById("terminal");
            let newLog = document.createElement("p");
            newLog.textContent = "> " + message;
            terminal.appendChild(newLog);
            terminal.scrollTop = terminal.scrollHeight;
        }

        const logs = [
            "Accessing encrypted files...",
            "Decrypting user passwords...",
            "Uploading stolen data...",
            "Disabling security protocols...",
            "Leaving no traces..."
        ];

        setInterval(() => {
            addLog(logs[Math.floor(Math.random() * logs.length)]);
        }, 2000);

        let progress = 0;
        function updateProgress() {
            if (progress < 100) {
                progress += Math.floor(Math.random() * 10);
                if (progress > 100) progress = 100;
                document.getElementById("progress-bar").style.width = progress + "%";
                document.getElementById("progress-text").innerText = progress + "%";
                setTimeout(updateProgress, 1500);
            }
        }
        updateProgress();

        function generateMatrixText() {
            const matrixContainer = document.getElementById("matrix");
            for (let i = 0; i < 100; i++) {
                let span = document.createElement("span");
                span.style.left = Math.random() * 100 + "%";
                span.style.animationDuration = Math.random() * 2 + 3 + "s";
                span.textContent = Math.random() > 0.5 ? "1" : "0";
                matrixContainer.appendChild(span);
            }
        }
        generateMatrixText();

        setInterval(() => {
            document.getElementById("beep").play();
        }, 3000);
    </script>
</body>
</html>
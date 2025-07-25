<style>
    body {
        background-color: #121826;
        color: #e2e8f0;
        font-family: "Arial", sans-serif;
        margin: 0;
        padding: 0;
    }

    .project-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
    }

    .nav-link {
        position: relative;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #ffc107;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-link:hover {
        color: #ffc107;
    }

    .section-alt-1 {
        background-color: #1a202c;
    }

    .section-alt-2 {
        background-color: #192231;
    }

    .section-alt-3 {
        background-color: #131b2b;
    }

    .typewriter h1 {
        overflow: hidden;
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: 0.15em;
        animation: typing 3.5s steps(40, end),
            blink-caret 0.75s step-end infinite;
    }

    @keyframes typing {
        from {
            width: 0;
            border-right: 0.15em solid #ffc107;
        }

        99% {
            width: 100%;
            border-right: 0.15em solid #ffc107;
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
            border-color: #ffc107;
        }
    }

    .experience-item {
        transition: all 0.3s ease;
        border-left: 0px solid #3182ce;
    }

    .experience-item:hover {
        border-left: 4px solid #ffc107;
        padding-left: 12px;
    }

    .tab-button.active {
        color: #ffc107;
        border-bottom-color: #ffc107;
    }

    /* Floating code snippets animation */
    .code-snippet {
        position: absolute;
        font-family: "Courier New", monospace;
        font-size: 14px;
        color: #4ade80;
        opacity: 0.7;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        33% {
            transform: translateY(-20px) rotate(2deg);
        }

        66% {
            transform: translateY(10px) rotate(-1deg);
        }
    }

    /* Geometric shapes animation */
    .geometric-shape {
        position: absolute;
        opacity: 0.1;
        /* animation: rotate 10s linear infinite; */
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* Pulsing tech icons */
    .tech-orbit {
        position: absolute;
        animation: orbit 8s linear infinite;
    }

    @keyframes orbit {
        from {
            transform: rotate(0deg) translateX(120px) rotate(0deg);
        }

        to {
            transform: rotate(360deg) translateX(120px) rotate(-360deg);
        }
    }

    /* Skills section specific styles */
    .skill-card {
        transition: all 0.3s ease;
        background: #1e293b;
        border-radius: 8px;
        padding: 16px;
        margin: 8px;
        text-align: center;
        min-height: 160px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        border: 1px solid #334155;
    }

    .skill-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        border-color: #ffc107;
    }

    .skills-section {
        padding: 80px 20px;
        position: relative;
        overflow: hidden;
        background-color: #121826;
    }

    .skills-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .skills-title {
        text-align: center;
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .skills-subtitle {
        text-align: center;
        font-size: 1.2rem;
        color: #94a3b8;
        margin-bottom: 60px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
        gap: 12px;
        margin-bottom: 10px;
    }

    .skill-card h3 {
        font-size: 1rem;
        margin: 8px 0 0 0;
        color: #ffffff;
        font-weight: 600;
    }

    .skill-card p {
        display: none;
    }

    .skill-icon {
        font-size: 1.8rem;
        margin-bottom: 4px;
        display: block;
    }

    /* About section animations */

    .counter {
        font-size: 2rem;
        font-weight: bold;
        color: #ffc107;
    }

    /* Animated background for about section */
    .about-bg {
        /* background: linear-gradient(-45deg, #1a202c, #2d3748, #1a202c, #4a5568); */
        background-color: #131b2b;
        background-size: 400% 400%;
        /* animation: gradientShift 15s ease infinite; */
    }

    /* @keyframes gradientShift {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      } */

    /* Matrix-like effect */
    .matrix-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }

    .matrix-char {
        position: absolute;
        color: #00ff00;
        font-family: "Courier New", monospace;
        font-size: 14px;
        opacity: 0.3;
        animation: matrixFall 3s linear infinite;
    }

    @keyframes matrixFall {
        0% {
            transform: translateY(-100vh);
            opacity: 1;
        }

        100% {
            transform: translateY(100vh);
            opacity: 0;
        }
    }

    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }

    .code-snippet:nth-child(1) {
        top: 10%;
        left: 5%;
        animation-delay: 0s;
    }

    .code-snippet:nth-child(2) {
        top: 30%;
        right: 10%;
        animation-delay: 2s;
    }

    .code-snippet:nth-child(3) {
        bottom: 20%;
        left: 8%;
        animation-delay: 4s;
    }

    .geometric-shape:nth-child(4) {
        top: 15%;
        right: 15%;
        width: 60px;
        height: 60px;
        border: 2px solid #3b82f6;
        animation-delay: 1s;
    }

    .geometric-shape:nth-child(5) {
        bottom: 25%;
        right: 20%;
        width: 40px;
        height: 40px;
        background-color: #ef4444;
        border-radius: 50%;
        animation-delay: 3s;
    }

    @media (max-width: 768px) {
        .skills-title {
            font-size: 2.5rem;
        }
    }
</style>

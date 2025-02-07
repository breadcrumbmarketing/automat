
/* Button Hover */
.elementor-button {
    position: relative !important;
    overflow: hidden !important;
    transition: color 0.3s ease !important;
    z-index: 1 !important;
}

.elementor-button:before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: -170% !important;
    width: 150% !important;
    height: 100% !important;
    background: #000 !important;
    transform: skewX(-45deg) !important;
    transition: all 0.5s ease !important;
    z-index: -1 !important;
}

.elementor-button:hover {
    color: #fff !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 12px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1) !important;
}

.elementor-button:hover:before {
    left: -25% !important;
}
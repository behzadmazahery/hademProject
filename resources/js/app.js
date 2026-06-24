import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start()(function () {
    const barsContainer = document.getElementById("waveformBars");
    const playButton = document.getElementById("playButton");
    const playIcon = document.getElementById("playIcon");
    const pulseRing = document.getElementById("pulseRing");
    const timerDisplay = document.getElementById("timerDisplay");

    // تعداد نوارها و ارتفاع پایه
    const BAR_COUNT = 30;
    let isPlaying = false;
    let animationFrame = null;

    // --- 1. ساخت نوارهای ویجت (مشابه ظاهر AI) ---
    function buildBars() {
        barsContainer.innerHTML = "";
        for (let i = 0; i < BAR_COUNT; i++) {
            const bar = document.createElement("div");
            bar.className = "waveform-bar";
            // ارتفاع اولیه تصادفی برای ظاهر "نویز"
            bar.style.height = Math.floor(Math.random() * 20 + 8) + "px";
            bar.style.width = "3px";
            bar.style.background = "linear-gradient(to top, #60a5fa, #3b82f6)";
            bar.style.borderRadius = "4px";
            bar.style.transition = "height 0.15s ease-out";
            barsContainer.appendChild(bar);
        }
    }
    buildBars();

    // --- 2. انیمیشن حرکت موج‌ها (مشابه حالت ضبط) ---
    function animateWaveform() {
        const bars = document.querySelectorAll(".waveform-bar");
        bars.forEach((bar) => {
            // شبیه‌سازی داده‌های صوتی با اعداد تصادفی برای ظاهر "نویز"
            const randomHeight = Math.floor(Math.random() * 25 + 5);
            bar.style.height = randomHeight + "px";
        });
    }

    // --- 3. کنترل پلی/استاپ و تایمر ---
    function startVisualizer() {
        if (animationFrame) return;
        isPlaying = true;
        pulseRing.classList.add("pulse-active");
        // آیکون را به توقف تغییر بده
        playIcon.innerHTML = '<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>';

        // شروع انیمیشن (با نرخ ۲۰ فریم بر ثانیه برای عملکرد بهتر)
        let lastUpdate = 0;
        function update(timestamp) {
            if (!isPlaying) return;
            if (timestamp - lastUpdate > 50) {
                // 20 FPS
                animateWaveform();
                // افزایش تایمر (شبیه‌سازی)
                let currentSeconds = parseInt(
                    timerDisplay.textContent.split(":")[1] || "0",
                );
                let currentMinutes = parseInt(
                    timerDisplay.textContent.split(":")[0] || "0",
                );
                currentSeconds++;
                if (currentSeconds >= 60) {
                    currentSeconds = 0;
                    currentMinutes++;
                }
                timerDisplay.textContent = `${currentMinutes}:${currentSeconds.toString().padStart(2, "0")}`;
                lastUpdate = timestamp;
            }
            animationFrame = requestAnimationFrame(update);
        }
        animationFrame = requestAnimationFrame(update);
    }

    function stopVisualizer() {
        isPlaying = false;
        if (animationFrame) {
            cancelAnimationFrame(animationFrame);
            animationFrame = null;
        }
        pulseRing.classList.remove("pulse-active");
        // آیکون را به پلی برگردان
        playIcon.innerHTML = '<path d="M8 5v14l11-7z"/>';
        // ریست تایمر (اختیاری)
        // timerDisplay.textContent = '0:00';
        // برای برگشت به حالت عادی، ارتفاع نوارها را رندوم کن
        document.querySelectorAll(".waveform-bar").forEach((bar) => {
            bar.style.height = Math.floor(Math.random() * 20 + 8) + "px";
        });
    }

    // --- 4. اتصال به دکمه ---
    playButton.addEventListener("click", function (e) {
        e.stopPropagation();
        if (isPlaying) {
            stopVisualizer();
        } else {
            startVisualizer();
        }
    });

    // (اختیاری) اگر خواستید با کلیک روی ویجت هم کار کند
    // document.querySelector('.bg-white\\/5')?.addEventListener('click', function(e) {
    //     if (e.target === this || e.target.closest('.bg-white\\/5')) {
    //         playButton.click();
    //     }
    // });
})();

function toggleMenu() {
    let menu = document.getElementById("ai__menu__box");

    if (menu.style.display === "none" || menu.style.display === "") {
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
}

// تقویم فارسی

// flatpickr("#birthdate", {
//     plugins: [
//         new jalaliPlugin({
//             // تنظیمات پلاگین فارسی (اختیاری)
//         }),
//     ],
//     locale: {
//         firstDayOfWeek: 6, // شنبه اولین روز هفته در تقویم فارسی
//         weekdays: {
//             shorthand: ["ی", "د", "س", "چ", "پ", "ج", "ش"],
//             longhand: [
//                 "یکشنبه",
//                 "دوشنبه",
//                 "سه‌شنبه",
//                 "چهارشنبه",
//                 "پنجشنبه",
//                 "جمعه",
//                 "شنبه",
//             ],
//         },
//         months: {
//             shorthand: [
//                 "فر",
//                 "ار",
//                 "خرد",
//                 "تیر",
//                 "مرد",
//                 "شه",
//                 "مهر",
//                 "آب",
//                 "آذر",
//                 "دی",
//                 "بهم",
//                 "اسف",
//             ],
//             longhand: [
//                 "فروردین",
//                 "اردیبهشت",
//                 "خرداد",
//                 "تیر",
//                 "مرداد",
//                 "شهریور",
//                 "مهر",
//                 "آبان",
//                 "آذر",
//                 "دی",
//                 "بهمن",
//                 "اسفند",
//             ],
//         },
//     },
//     dateFormat: "Y/m/d", // فرمت نمایش: ۱۴۰۲/۰۵/۱۵
//     altInput: true,
//     altFormat: "Y/m/d", // فرمت جایگزین
//     allowInput: true,
//     disableMobile: true, // برای جلوگیری از تقویم موبایل مرورگر
//     onChange: function (selectedDates, dateStr, instance) {
//         // تاریخ انتخاب شده در dateStr به صورت شمسی است
//         console.log("تاریخ انتخاب شده: ", dateStr);
//     },
// });

//  SELECTED 2 برای DROPdOWN

// $(document).ready(function () {
//     $(".custom-select2").select2({
//         placeholder: "انتخاب کنید",
//         allowClear: false,
//         width: "resolve", // تنظیم خودکار عرض
//         dropdownAutoWidth: true, // تنظیم عرض منو با محتوا
//         theme: "classic", // یا 'default'
//     });

//     // تغییر عرض به اندازه والد هنگام باز شدن
//     $(".custom-select2").on("select2:open", function () {
//         const parentWidth = $(this).closest(".global__input").width();
//         $(this)
//             .next(".select2-container")
//             .css("width", parentWidth + "px");
//     });

//     // برگشت به عرض اولیه هنگام بسته شدن
//     $(".custom-select2").on("select2:close", function () {
//         $(this).next(".select2-container").css("width", "120px");
//     });
// });

import "./bootstrap";

function ChangeColor() {
    const peers = document.querySelectorAll(".peer");
    const texts = document.querySelectorAll(".textpeer");

    peers.forEach((peer, index) => {
        peer.addEventListener("change", function () {
            texts.forEach((text) => {
                text.classList.remove("text-white");
                text.classList.add("text-text");
            });
            if (peer.checked) {
                texts[index].classList.remove("text-text");
                texts[index].classList.add("text-white");
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", function () {
    ChangeColor();
});

// ! Swiper
let swiperCards = new Swiper(".swiper", {
    loop: true,
    spaceBetween: 12,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },

    breakpoints: {
        640: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
        1400: {
            slidesPerView: 4,
        },
    },
});

// * Modal close
document
    .getElementById("addstudentclose")
    .addEventListener("click", function () {
        document.getElementById("addstudentform").reset();
    });

document
    .getElementById("editstudentclose")
    .addEventListener("click", function () {
        document.getElementById("editstudentform").reset();
    });

document
    .getElementById("addclassroomclose")
    .addEventListener("click", function () {
        document.getElementById("addclassroomform").reset();
    });

document
    .getElementById("editclassroomclose")
    .addEventListener("click", function () {
        document.getElementById("editclassroomform").reset();
    });


// ! Chart JS
document.addEventListener("DOMContentLoaded", () => {
    const ctx = document.getElementById("attendanceChart").getContext("2d");
    const monthData = {
        labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
        data: [300, 400, 350, 500],
    };
    const weekData = {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        data: [70, 90, 113, 95, 132, 103, 97],
    };

    const attendanceChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: monthData.labels,
            datasets: [
                {
                    label: "Attendance",
                    data: monthData.data,
                    borderColor: "rgba(42, 94, 220, 1)",
                    backgroundColor: "rgba(42, 94, 220, 0.2)",
                    borderWidth: 2,
                    tension: 0.2,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(42, 94, 220, 1)",
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                },
            },
            scales: {
                x: {
                    grid: {
                        display: false,
                    },
                },
                y: {
                    ticks: {
                        maxTicksLimit: 5,
                    },
                    grid: {
                        display: true,
                        drawBorder: false,
                    },
                    beginAtZero: true,
                },
            },
        },
    });

    function updateChartData(timeframe) {
        if (timeframe === "month") {
            attendanceChart.data.labels = monthData.labels;
            attendanceChart.data.datasets[0].data = monthData.data;
        } else {
            attendanceChart.data.labels = weekData.labels;
            attendanceChart.data.datasets[0].data = weekData.data;
        }
        attendanceChart.update();
    }

    document
        .getElementById("timeframeSelect")
        .addEventListener("change", (event) => {
            updateChartData(event.target.value);
        });
});

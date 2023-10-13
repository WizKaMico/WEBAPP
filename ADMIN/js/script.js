// chart js setting
var char1El = document.getElementById('chart1');
new Chart(char1El, {
    type: 'bar',
    data: {
        labels: ["today", "yesterday", "week", "last week", "month", "last month", "year", "total"],
        datasets: [{
            label: "",
            backgroundColor: ["#42a5f5", "#2196f3", "#1e88e5", "#ff6384", "#1976d2", "#ff6384", "#1565c0", "#0d47a1"],
            data: [200, 170, 1400, 1200, 150000, 120000, 300000, 400000]
        }]
    },
    options: {
        maintainAspectRatio: false,
        responsiveAnimationDuration: 500,
        plugins: {
            legend: {
                display: false
            },
            animation: {
                duration: 2000
            },
            title: {
                display: true,
                text: '2022-08-08'
            }
        }
    }
});
var char2El = document.getElementById('chart2');
new Chart(char2El, {
    type: 'doughnut',
    data: {
        labels: ["posts", "portfolio", "comments", "messages"],
        datasets: [{
            label: "",
            backgroundColor: ["#ff6384", "#0d47a1", "#1976d2", "#2196f3"],
            data: [50, 30, 120, 70]
        }]
    },
    options: {
        maintainAspectRatio: false,
        responsiveAnimationDuration: 500,
        animation: {
            duration: 2000
        },
        title: {
            display: false,
            text: ''
        }
    }
});
var char3El = document.getElementById('chart3');
new Chart(char3El, {
    type: 'radar',
    data: {
        labels: ["visitor", "visitor", "visitor"],
        datasets: [{
            label: "last month",
            fill: true,
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(255,99,132,1)",
            data: [120000, 120000, 120000]
        }, {
            label: "month",
            fill: true,
            backgroundColor: "rgba(51,153,255,0.6)",
            borderColor: "rgba(51,153,255,0.2)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(179,181,198,1)",
            data: [150000, 150000, 150000]
        }]
    },
    options: {
        maintainAspectRatio: false,
        responsiveAnimationDuration: 500,
        animation: {
            duration: 2000
        },
        title: {
            display: false,
            text: ''
        }
    }
});

// counter
function countUp(t, e, a, n, r) {
    let i, o = a - e,
        s = Math.abs(Math.floor(n / o)),
        l = (new Date).getTime() + n;

    function d() {
        let e = (new Date).getTime(),
            s = Math.max((l - e) / n, 0),
            d = Math.round(a - s * o);
        t.innerHTML = void 0 === r ? d : d.toLocaleString(r, {
            useGrouping: !0
        }), d == a && clearInterval(i)
    }
    i = setInterval(d, s), d()
}

function startAnimation() {
    let t = document.querySelectorAll(".counter-container");
    for (let e = 0; e < t.length; e++) {
        let a = t[e];
        if (!a.getAttribute("data-animated") && UIkit.util.isInView(a)) {
            let t = 2 * Math.PI * a.dataset.radius,
                e = a.querySelector(".counter-value"),
                n = a.querySelector(".el-number"),
                r = a.querySelector(".el-circle");
            r && r.setAttribute("id", a.dataset.uniqid), e && (e.style.strokeDashoffset = t * (1 - a.dataset.percentage / 100), e.style.strokeDasharray = t), n && countUp(n, 0, a.dataset.number, parseInt(a.dataset.duration), a.dataset.separatorLocale), a.setAttribute("data-animated", !0)
        }
    }
}
UIkit.util.ready(function() {
    startAnimation(), window.addEventListener("load", startAnimation, !1), window.addEventListener("scroll", startAnimation, !1), window.addEventListener("resize", startAnimation, !1)
});
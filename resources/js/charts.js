import ApexCharts from "apexcharts"; // Import directly from the package

const getClinicChartOptions = () => {
    let clinicChartColors = {};

    if (document.documentElement.classList.contains("dark")) {
        clinicChartColors = {
            borderColor: "#374151",
            labelColor: "#9CA3AF",
            opacityFrom: 0,
            opacityTo: 0.15,
        };
    } else {
        clinicChartColors = {
            borderColor: "#F3F4F6",
            labelColor: "#6B7280",
            opacityFrom: 0.45,
            opacityTo: 0,
        };
    }

    return {
        series: [
            {
                name: "Income",
                color: "#31C48D",
                data: ["1420", "1620", "1820", "1420", "1650", "2120"],
            },
            {
                name: "Expense",
                data: ["788", "810", "866", "788", "1100", "1200"],
                color: "#F05252",
            },
        ],
        chart: {
            sparkline: {
                enabled: false,
            },
            type: "bar",
            width: "100%",
            height: 400,
            toolbar: {
                show: false,
            },
        },
        fill: {
            opacity: 1,
        },
        plotOptions: {
            bar: {
                horizontal: true,
                columnWidth: "100%",
                borderRadiusApplication: "end",
                borderRadius: 6,
                dataLabels: {
                    position: "top",
                },
            },
        },
        legend: {
            show: true,
            position: "bottom",
        },
        dataLabels: {
            enabled: false,
        },
        tooltip: {
            shared: true,
            intersect: false,
            formatter: function (value) {
                return "$" + value;
            },
        },
        xaxis: {
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass:
                        "text-xs font-normal fill-gray-500 dark:fill-gray-400",
                },
                formatter: function (value) {
                    return "$" + value;
                },
            },
            categories: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
        yaxis: {
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass:
                        "text-xs font-normal fill-gray-500 dark:fill-gray-400",
                },
            },
        },
        grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -20,
            },
        },
        fill: {
            opacity: 1,
        },
    };
};

if (document.getElementById("clinic-chart")) {
    const chart = new ApexCharts(
        document.getElementById("clinic-chart"),
        getClinicChartOptions()
    );
    chart.render();

    // init again when toggling dark mode
    document.addEventListener("dark-mode", function () {
        chart.updateOptions(getClinicChartOptions());
    });
}

if (document.getElementById("smoking-chart")) {
    const options = {
        series: [52.8, 26.8, 20.4],
        colors: ["#1C64F2", "#16BDCA", "#9061F9"],
        chart: {
            height: 420,
            width: "100%",
            type: "pie",
        },
        stroke: {
            colors: ["white"],
            lineCap: "",
        },
        plotOptions: {
            pie: {
                labels: {
                    show: true,
                },
                size: "100%",
                dataLabels: {
                    offset: -25,
                },
            },
        },
        labels: ["Direct", "Organic search", "Referrals"],
        dataLabels: {
            enabled: true,
            style: {
                fontFamily: "Inter, sans-serif",
            },
        },
        legend: {
            position: "bottom",
            fontFamily: "Inter, sans-serif",
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%";
                },
            },
        },
        xaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%";
                },
            },
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
    };

    if (
        document.getElementById("pie-chart") &&
        typeof ApexCharts !== "undefined"
    ) {
        const chart = new ApexCharts(
            document.getElementById("pie-chart"),
            getChartOptions()
        );
        chart.render();
    }

    const chart = new ApexCharts(
        document.getElementById("smoking-chart"),
        options
    );
    chart.render();
}

if (document.getElementById("sales-by-category")) {
    const options = {
        series: [52.8, 26.8, 20.4],
        colors: ["#1C64F2", "#16BDCA", "#9061F9"],
        chart: {
            height: 420,
            width: "100%",
            type: "pie",
        },
        stroke: {
            colors: ["white"],
            lineCap: "",
        },
        plotOptions: {
            pie: {
                labels: {
                    show: true,
                },
                size: "100%",
                dataLabels: {
                    offset: -25,
                },
            },
        },
        labels: ["Direct", "Organic search", "Referrals"],
        dataLabels: {
            enabled: true,
            style: {
                fontFamily: "Inter, sans-serif",
            },
        },
        legend: {
            position: "bottom",
            fontFamily: "Inter, sans-serif",
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%";
                },
            },
        },
        xaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%";
                },
            },
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
    };

    const chart = new ApexCharts(
        document.getElementById("sales-by-category"),
        options
    );
    chart.render();
}

const getSignupsChartOptions = () => {
    let signupsChartColors = {};

    if (document.documentElement.classList.contains("dark")) {
        signupsChartColors = {
            backgroundBarColors: [
                "#374151",
                "#374151",
                "#374151",
                "#374151",
                "#374151",
                "#374151",
                "#374151",
            ],
        };
    } else {
        signupsChartColors = {
            backgroundBarColors: [
                "#E5E7EB",
                "#E5E7EB",
                "#E5E7EB",
                "#E5E7EB",
                "#E5E7EB",
                "#E5E7EB",
                "#E5E7EB",
            ],
        };
    }

    return {
        chart: {
            height: "100%",
            maxWidth: "100%",
            type: "line",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -26,
            },
        },
        series: [
            {
                name: "Clicks",
                data: [6500, 6418, 6456, 6526, 6356, 6456],
                color: "#1A56DB",
            },
            {
                name: "CPC",
                data: [6456, 6356, 6526, 6332, 6418, 6500],
                color: "#7E3AF2",
            },
        ],
        legend: {
            show: false,
        },
        stroke: {
            curve: "smooth",
        },
        xaxis: {
            categories: [
                "01 Feb",
                "02 Feb",
                "03 Feb",
                "04 Feb",
                "05 Feb",
                "06 Feb",
                "07 Feb",
            ],
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass:
                        "text-xs font-normal fill-gray-500 dark:fill-gray-400",
                },
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: false,
        },
    };

    if (
        document.getElementById("line-chart") &&
        typeof ApexCharts !== "undefined"
    ) {
        const chart = new ApexCharts(
            document.getElementById("line-chart"),
            options
        );
        chart.render();
    }
};

if (document.getElementById("week-signups-chart")) {
    const chart = new ApexCharts(
        document.getElementById("week-signups-chart"),
        getSignupsChartOptions()
    );
    chart.render();

    // init again when toggling dark mode
    document.addEventListener("dark-mode", function () {
        chart.updateOptions(getSignupsChartOptions());
    });
}

const getTrafficChannelsChartOptions = () => {
    let trafficChannelsChartColors = {};

    if (document.documentElement.classList.contains("dark")) {
        trafficChannelsChartColors = {
            strokeColor: "#1f2937",
        };
    } else {
        trafficChannelsChartColors = {
            strokeColor: "#ffffff",
        };
    }

    return {
        series: [70, 5, 25],
        labels: ["Desktop", "Tablet", "Phone"],
        colors: ["#16BDCA", "#FDBA8C", "#1A56DB"],
        chart: {
            type: "donut",
            height: 400,
            fontFamily: "Inter, sans-serif",
            toolbar: {
                show: false,
            },
        },
        responsive: [
            {
                breakpoint: 430,
                options: {
                    chart: {
                        height: 300,
                    },
                },
            },
        ],
        stroke: {
            colors: [trafficChannelsChartColors.strokeColor],
        },
        states: {
            hover: {
                filter: {
                    type: "darken",
                    value: 0.9,
                },
            },
        },
        tooltip: {
            shared: true,
            followCursor: false,
            fillSeriesColor: false,
            inverseOrder: true,
            style: {
                fontSize: "14px",
                fontFamily: "Inter, sans-serif",
            },
            x: {
                show: true,
                formatter: function (_, { seriesIndex, w }) {
                    const label = w.config.labels[seriesIndex];
                    return label;
                },
            },
            y: {
                formatter: function (value) {
                    return value + "%";
                },
            },
        },
        grid: {
            show: false,
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
    };
};

if (document.getElementById("traffic-by-device")) {
    const chart = new ApexCharts(
        document.getElementById("traffic-by-device"),
        getTrafficChannelsChartOptions()
    );
    chart.render();

    // init again when toggling dark mode
    document.addEventListener("dark-mode", function () {
        chart.updateOptions(getTrafficChannelsChartOptions());
    });
}

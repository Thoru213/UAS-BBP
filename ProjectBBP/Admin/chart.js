const dataRisiko = [
  // Risiko rendah
  { x: 1, y: 1, r: 5, color: "green" },
  { x: 2, y: 1, r: 6, color: "green" },
  { x: 3, y: 1, r: 7, color: "green" },
  { x: 1, y: 2, r: 8, color: "green" },
  { x: 2, y: 2, r: 9, color: "green" },

  // Risiko sedang
  { x: 3, y: 2, r: 10, color: "yellow" },
  { x: 4, y: 2, r: 11, color: "yellow" },
  { x: 5, y: 2, r: 12, color: "yellow" },
  { x: 2, y: 3, r: 13, color: "yellow" },
  { x: 3, y: 3, r: 14, color: "yellow" },

  // Risiko tinggi
  { x: 4, y: 3, r: 16, color: "red" },
  { x: 5, y: 3, r: 17, color: "red" },
  { x: 5, y: 2, r: 18, color: "red" },
  { x: 3, y: 3, r: 19, color: "red" },
  { x: 5, y: 1, r: 20, color: "red" },
];

// Konversi data untuk Chart.js
const chartData = dataRisiko.map((item) => ({
  x: item.x, // Likelihood
  y: item.y, // Impact
  r: item.r, // Tingkat risiko (size bubble)
  backgroundColor: item.color, // Warna berdasarkan tingkat risiko
}));

const config = {
  type: "bubble",
  data: {
    datasets: [
      {
        label: "Risk Analysis",
        data: chartData,
        backgroundColor: chartData.map((item) => item.backgroundColor),
        borderColor: "rgba(0, 0, 0, 0.1)",
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false, // Pastikan false untuk menyesuaikan tinggi/lebar
    plugins: {
      legend: {
        display: true,
        position: "top",
      },
    },
    scales: {
      x: {
        title: {
          display: true,
          text: "Likelihood (Kemungkinan)",
        },
        min: 0,
        max: 5,
        ticks: {
          stepSize: 1,
        },
      },
      y: {
        title: {
          display: true,
          text: "Impact (Dampak)",
        },
        min: 0,
        max: 3,
        ticks: {
          stepSize: 1,
        },
      },
    },
  },
};

const riskBubbleChart = document
  .getElementById("riskBubbleChart")
  .getContext("2d");
new Chart(riskBubbleChart, config);

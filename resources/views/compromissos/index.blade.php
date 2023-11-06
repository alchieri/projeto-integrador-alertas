@extends('dashboard')
@section('content')
<!-- dayLink.href = `http://localhost:8000/compromissos/create?year=${year}&month=${month + 1}&day=${dayCount}`; -->

<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }
    .calendar {
      margin: 20px auto;
      width: 1000px;
      border: 1px solid #ccc;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .calendar-header {
      background-color: #3498db;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }
    .calendar-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 1000px;
      
    }
    .calendar-table {
      width: 100%;
      border-collapse: collapse;
      height: 600px;
    }
    .calendar-table th, .calendar-table td {
      padding: 10px;
      text-align: center;
      border: 1px solid #ccc;
      width: 14.2857%; /* 100% dividido por 7 colunas */
    }
    .current-month-day {
      background-color: #f2f2f2;
    }
    .navigation-buttons {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 14.2857%;
      margin: 10px;
    }
    .weekday-header {
      width: calc(100% / 7);
    }
  </style>
</head>
<body>
  <div class="calendar">
    <div class="calendar-header">
      <div class="navigation-buttons">
        <button onclick="previousYear()">&#9665;&#9665;</button>
        <button onclick="previousMonth()">&#9665;</button>
      </div>
      <span id="month-year">Mês e Ano</span>
      <div class="navigation-buttons">
        <button onclick="nextMonth()">&#9655;</button>
        <button onclick="nextYear()">&#9655;&#9655;</button>
      </div>
    </div>
    <div class="calendar-container">
      <table class="calendar-table">
        <thead>
          <tr>
            <th class="weekday-header">Domingo</th>
            <th class="weekday-header">Segunda</th>
            <th class="weekday-header">Terça</th>
            <th class "weekday-header">Quarta</th>
            <th class="weekday-header">Quinta</th>
            <th class="weekday-header">Sexta</th>
            <th class="weekday-header">Sábado</th>
          </tr>
        </thead>
        <tbody id="calendar-body">
          <!-- O calendário será gerado aqui -->
        </tbody>
      </table>
    </div>
  </div>

  <script>
    let currentDate = new Date();

    function generateCalendar(year, month) {
      const calendarBody = document.getElementById("calendar-body");
      calendarBody.innerHTML = "";

      const firstDayOfMonth = new Date(year, month, 1).getDay();
      const daysInMonth = new Date(year, month + 1, 0).getDate();

      document.getElementById("month-year").textContent = `${getMonthName(month)} ${year}`;

      let dayCount = 1;
      let dayOfWeek = firstDayOfMonth;

      for (let week = 0; week < 6; week++) {
        const row = document.createElement("tr");

        for (let day = 0; day < 7; day++) {
          const cell = document.createElement("td");
          if (week === 0 && day < firstDayOfMonth) {
            // Dias do mês anterior
            const lastMonthDay = new Date(year, month, 0).getDate();
            const dayValue = lastMonthDay - firstDayOfMonth + day + 1;
            cell.textContent = dayValue;
            cell.className = "prev-month-day";
          } else if (dayCount > daysInMonth) {
            // Dias do próximo mês
            cell.textContent = dayCount - daysInMonth;
            cell.className = "next-month-day";
            dayCount++;
          } else {
            // Dias do mês atual
            const dayLink = document.createElement("a");
            dayLink.href = `http://localhost:8000/compromissos/create?year=${year}&month=${month + 1}&day=${dayCount}`;
            dayLink.textContent = dayCount;
            cell.appendChild(dayLink);
            cell.className = "current-month-day";
            dayCount++;
          }
          row.appendChild(cell);
        }

        calendarBody.appendChild(row);
      }
    }

    function previousMonth() {
      currentDate.setMonth(currentDate.getMonth() - 1);
      generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    }

    function nextMonth() {
      currentDate.setMonth(currentDate.getMonth() + 1);
      generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    }

    function previousYear() {
      currentDate.setFullYear(currentDate.getFullYear() - 1);
      generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    }

    function nextYear() {
      currentDate.setFullYear(currentDate.getFullYear() + 1);
      generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    }

    function getMonthName(month) {
      const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
      return monthNames[month];
    }

    generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
  </script>
</body>
</html>

@endsection

const calendarElement = document.getElementById('calendar');
const monthYearElement = document.getElementById('monthYear');
const prevMonthButton = document.getElementById('prevMonth');
const nextMonthButton = document.getElementById('nextMonth');
const timeSlotsElement = document.getElementById('timeSlots');

let currentDate = new Date();
const today = new Date();
const maxDate = new Date(today.getFullYear(), today.getMonth() + 2, 0);

const bookedDates = ["2024-08-15", "2024-09-05"];
const notReleasedDates = ["2024-09-25", "2024-10-01"];

let selectedDateElement = null;

function updateCalendar() {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    // Update month and year display
    monthYearElement.textContent = currentDate.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });

    calendarElement.innerHTML = ''; // Clear the previous content

    // Add blank days for the first week
    for (let i = 0; i < firstDayOfMonth; i++) {
        const blankDay = document.createElement('div');
        blankDay.classList.add('calendar-day', 'blank-day');
        calendarElement.appendChild(blankDay);
    }

    // Add days for the current month
    for (let day = 1; day <= daysInMonth; day++) {
        const dayElement = document.createElement('div');
        const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        dayElement.textContent = day;
        dayElement.classList.add('calendar-day');

        if (bookedDates.includes(dateStr)) {
            dayElement.classList.add('booked');
            dayElement.addEventListener('click', () => {
                alert("This date is already booked.");
            });
        } else if (notReleasedDates.includes(dateStr)) {
            dayElement.classList.add('not-released');
            dayElement.addEventListener('click', () => {
                alert("Darshan for this date has not been released.");
            });
        } else {
            dayElement.classList.add('available');
            dayElement.addEventListener('click', () => {
                selectDate(dayElement, dateStr);
            });
        }

        calendarElement.appendChild(dayElement);
    }
}

function selectDate(dayElement, dateStr) {
    if (selectedDateElement) {
        selectedDateElement.classList.remove('selected-date');
    }

    selectedDateElement = dayElement;
    selectedDateElement.classList.add('selected-date');

    document.getElementById('selectedDate').value = dateStr;

    displayTimeSlots(dateStr);
}

function displayTimeSlots(dateStr) {
    timeSlotsElement.style.display = 'block';
    const timeSlotElements = timeSlotsElement.querySelectorAll('.time-slot');
    timeSlotElements.forEach(slot => {
        slot.classList.remove('selected');
        slot.addEventListener('click', () => {
            selectTimeSlot(slot);
        });
    });

    alert(`You selected ${dateStr}. Choose a time slot.`);
}

function selectTimeSlot(slot) {
    const timeSlotElements = timeSlotsElement.querySelectorAll('.time-slot');
    timeSlotElements.forEach(slot => {
        slot.classList.remove('selected');
    });

    slot.classList.add('selected');
    document.getElementById('selectedTimeSlot').value = slot.textContent;
}

prevMonthButton.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    if (currentDate < today) {
        currentDate = new Date(today);
    }
    updateCalendar();
});

nextMonthButton.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    if (currentDate > maxDate) {
        currentDate = new Date(maxDate);
    }
    updateCalendar();
});

document.getElementById('bookingForm').addEventListener('submit', function(event) {
    const selectedDate = document.getElementById('selectedDate').value;
    const selectedTimeSlot = document.getElementById('selectedTimeSlot').value;

    if (!selectedDate || !selectedTimeSlot) {
        event.preventDefault();
        alert("Please select a valid date and time slot before booking.");
    }
});

// Initialize the calendar when the page loads
updateCalendar();

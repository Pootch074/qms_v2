function updateClock() {
	// Create Date object first
	const now = new Date();

	// Format Philippine Date
	const options = {
		timeZone: "Asia/Manila",
		year: "numeric",
		month: "long",
		day: "numeric",
		weekday: "long",
	};

	const formattedDate = now.toLocaleDateString("en-PH", options);
	// document.querySelector(".philippine-date").textContent = formattedDate + " |";
	document.querySelector(".philippine-date").textContent = formattedDate + "";

	let hours = now.getHours();
	let minutes = now.getMinutes();
	let seconds = now.getSeconds();

	// Determine AM or PM
	const amPm = hours >= 12 ? "PM" : "AM";

	// Convert to 12-hour format
	hours = hours % 12;
	hours = hours ? hours : 12;

	// Add leading zeros if necessary
	const hourFirstDigit = Math.floor(hours / 10);
	const hourSecondDigit = hours % 10;
	const minuteFirstDigit = Math.floor(minutes / 10);
	const minuteSecondDigit = minutes % 10;
	const secondFirstDigit = Math.floor(seconds / 10);
	const secondSecondDigit = seconds % 10;

	// Update Hours
	document.querySelector(".hours .first .number").textContent = hourFirstDigit;
	document.querySelector(".hours .second .number").textContent =
		hourSecondDigit;

	// Update Minutes
	document.querySelector(".minutes .first .number").textContent =
		minuteFirstDigit;
	document.querySelector(".minutes .second .number").textContent =
		minuteSecondDigit;

	// Update Seconds
	document.querySelector(".seconds .first .number").textContent =
		secondFirstDigit;
	document.querySelector(".seconds .second .number").textContent =
		secondSecondDigit;

	// Update AM/PM Indicator
	document.querySelector(".am-pm").textContent = amPm;
}

// Initialize Clock
updateClock();
setInterval(updateClock, 1000);

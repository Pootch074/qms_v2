const el10 = document.getElementById("mnbghjk");
if (el10) el10.classList.add("hidden");

$(document).ready(function () {
	let prevData = {};
	let queue = [];
	let isSpeaking = false;

	function processQueue() {
		if (queue.length > 0 && !isSpeaking) {
			isSpeaking = true;
			let { message, callback } = queue.shift();
			playAudioAndSpeak(message, callback);
		}
	}

	function playAudioAndSpeak(message, callback) {
		const audioPlayer = document.getElementById("audioPlayer");

		audioPlayer.addEventListener("ended", function onEnded() {
			audioPlayer.removeEventListener("ended", onEnded);

			if (!("speechSynthesis" in window)) {
				console.warn("Speech Synthesis not supported");
				isSpeaking = false;
				callback();
				return;
			}

			const utterance = new SpeechSynthesisUtterance(message);
			utterance.lang = "en-US";
			utterance.pitch = 1;
			utterance.rate = 1;
			utterance.volume = 1;

			const setVoiceAndSpeak = () => {
				const voices = speechSynthesis.getVoices();
				if (voices.length > 2) utterance.voice = voices[2];
				speechSynthesis.speak(utterance);
			};

			if (speechSynthesis.getVoices().length === 0) {
				speechSynthesis.onvoiceschanged = setVoiceAndSpeak;
			} else {
				setVoiceAndSpeak();
			}

			utterance.onend = () => {
				console.log("Speech synthesis ended.");
				isSpeaking = false;
				callback();
			};

			utterance.onerror = (e) => {
				console.error("Speech synthesis error:", e);
				isSpeaking = false;
				callback();
			};
		});

		audioPlayer.play();
	}

	function handleQueueData(url, elementID, step, windowNum = null) {
		$.get(url, function (data) {
			$(elementID).html(data);

			const h1 = $(elementID + " h1");
			if (!h1.length) return;

			const rawText = h1.text().trim();
			if (!rawText) return;

			// Extract queue number like "P 000", "A 005", etc.
			const queueNum = rawText;

			// Normalize queue number by removing all non-digits (e.g. "P 000" → "000")
			const normalizedQueueNum = queueNum.replace(/[^\d]/g, "");

			if (parseInt(normalizedQueueNum, 10) === 0) {
				console.log(`Skipped audio/speech for queue number ${queueNum}`);
				return;
			}

			if (!prevData[url])
				prevData[url] = {
					queueNum: null,
				};

			const changed = queueNum !== prevData[url].queueNum;
			if (!changed) {
				$(elementID).removeClass("elementID");
				return;
			}

			prevData[url] = {
				queueNum,
			};
			$(elementID).addClass("elementID");

			const baseMsg = `Client number, ${queueNum}. Please proceed to step ${step}`;
			const fullMessage = windowNum
				? `${baseMsg} window ${windowNum}. ${queueNum}, to step ${step} window ${windowNum}.`
				: `${baseMsg}. ${queueNum}, to step ${step}.`;

			console.log(`New message: ${fullMessage}`);
			// queue.push({
			// 	message: fullMessage,
			// 	callback: processQueue,
			// });
			// processQueue();
		}).fail(function (xhr, status, error) {
			console.error("Error fetching queue data:", error);
		});
	}

	function qsdLoadStepFlow() {
		handleQueueData(
			BASE_URL + "hiddenQsdS2W1PrioRou",
			"#hiddenQsdS2W1Prio",
			2,
			1
		);
		handleQueueData(
			BASE_URL + "hiddenQsdS2W2PrioRou",
			"#hiddenQsdS2W2Prio",
			2,
			2
		);

		handleQueueData(
			BASE_URL + "hiddenQsdS3W1PrioRou",
			"#hiddenQsdS3W1Prio",
			3,
			1
		);
		handleQueueData(
			BASE_URL + "hiddenQsdS3W2PrioRou",
			"#hiddenQsdS3W2Prio",
			3,
			2
		);
		handleQueueData(
			BASE_URL + "hiddenQsdS3W3PrioRou",
			"#hiddenQsdS3W3Prio",
			3,
			3
		);
		handleQueueData(
			BASE_URL + "hiddenQsdS3W4PrioRou",
			"#hiddenQsdS3W4Prio",
			3,
			4
		);

		handleQueueData(
			BASE_URL + "hiddenQsdS4W1PrioRou",
			"#hiddenQsdS4W1Prio",
			4,
			1
		);
		handleQueueData(
			BASE_URL + "hiddenQsdS4W2PrioRou",
			"#hiddenQsdS4W2Prio",
			4,
			2
		);
		handleQueueData(
			BASE_URL + "hiddenQsdS4W3PrioRou",
			"#hiddenQsdS4W3Prio",
			4,
			3
		);
	}
	let previousValue = $("#hiddenQsdS2W1Prio").text();
	let previousCallCount = $("#abcdcallCount h2").text();

	setInterval(function () {
		let currentCallCount = $("#abcdcallCount h2").text();
		if (currentCallCount !== previousCallCount) {
			previousCallCount = currentCallCount;

			const queueText =
				$("#hiddenQsdS2W1Prio h1").text().trim() ||
				$("#hiddenQsdS2W1Prio").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 2 window 1. ${queueText}, to step 2 window 1.`;
			queue.push({ message, callback: processQueue });
			processQueue();
		}
	}, 1000);

	function qsdLoadStepFlowLoop() {
		qsdLoadStepFlow();
	}
	setInterval(qsdLoadStepFlowLoop, 1000);
});

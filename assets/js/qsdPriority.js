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

		handleQueueData(BASE_URL + "hiddenQsdS3W1Rou", "#hiddenQsdS3W1", 3, 1);
		handleQueueData(BASE_URL + "hiddenQsdS3W2Rou", "#hiddenQsdS3W2", 3, 2);
		handleQueueData(BASE_URL + "hiddenQsdS3W3Rou", "#hiddenQsdS3W3", 3, 3);
		handleQueueData(BASE_URL + "hiddenQsdS3W4Rou", "#hiddenQsdS3W4", 3, 4);

		handleQueueData(BASE_URL + "hiddenQsdS4W1Rou", "#hiddenQsdS4W1", 4, 1);
		handleQueueData(BASE_URL + "hiddenQsdS4W2Rou", "#hiddenQsdS4W2", 4, 2);
		handleQueueData(BASE_URL + "hiddenQsdS4W3Rou", "#hiddenQsdS4W3", 4, 3);
	}
	let previousCalls2w1 = $("#calls2w1 h2").text();
	let previousCalls2w2 = $("#calls2w2 h2").text();
	let previousCalls3w1 = $("#calls3w1 h2").text();
	let previousCalls3w2 = $("#calls3w2 h2").text();
	let previousCalls3w3 = $("#calls3w3 h2").text();
	let previousCalls3w4 = $("#calls3w4 h2").text();
	let previousCalls4w1 = $("#calls4w1 h2").text();
	let previousCalls4w2 = $("#calls4w2 h2").text();
	let previousCalls4w3 = $("#calls4w3 h2").text();

	setInterval(function () {
		let currentCalls2w1 = $("#calls2w1 h2").text();
		let currentCalls2w2 = $("#calls2w2 h2").text();
		let currentCalls3w1 = $("#calls3w1 h2").text();
		let currentCalls3w2 = $("#calls3w2 h2").text();
		let currentCalls3w3 = $("#calls3w3 h2").text();
		let currentCalls3w4 = $("#calls3w4 h2").text();
		let currentCalls4w1 = $("#calls4w1 h2").text();
		let currentCalls4w2 = $("#calls4w2 h2").text();
		let currentCalls4w3 = $("#calls4w3 h2").text();

		if (currentCalls2w1 !== previousCalls2w1) {
			previousCalls2w1 = currentCalls2w1;

			const queueText =
				$("#hiddenQsdS2W1Prio h1").text().trim() ||
				$("#hiddenQsdS2W1Prio").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 2 window 1. ${queueText}, to step 2 window 1.`;
			queue.push({ message, callback: processQueue });
			processQueue();
		} else if (currentCalls2w2 !== previousCalls2w2) {
			previousCalls2w2 = currentCalls2w2;

			const queueText =
				$("#hiddenQsdS2W2Prio h1").text().trim() ||
				$("#hiddenQsdS2W2Prio").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 2 window 2. ${queueText}, to step 2 window 2.`;
			queue.push({
				message,
				callback: processQueue,
			});
			processQueue();
		} else if (currentCalls3w1 !== previousCalls3w1) {
			previousCalls3w1 = currentCalls3w1;

			const queueText =
				$("#hiddenQsdS3W1 h1").text().trim() ||
				$("#hiddenQsdS3W1").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 3 window 1. ${queueText}, to step 3 window 1.`;
			queue.push({
				message,
				callback: processQueue,
			});
			processQueue();
		} else if (currentCalls3w2 !== previousCalls3w2) {
			previousCalls3w2 = currentCalls3w2;

			const queueText =
				$("#hiddenQsdS3W2 h1").text().trim() ||
				$("#hiddenQsdS3W2").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 3 window 2. ${queueText}, to step 3 window 2.`;
			queue.push({
				message,
				callback: processQueue,
			});
			processQueue();
		} else if (currentCalls3w3 !== previousCalls3w3) {
			previousCalls3w3 = currentCalls3w3;

			const queueText =
				$("#hiddenQsdS3W3 h1").text().trim() ||
				$("#hiddenQsdS3W3").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 3 window 3. ${queueText}, to step 3 window 3.`;
			queue.push({
				message,
				callback: processQueue,
			});
			processQueue();
		} else if (currentCalls3w4 !== previousCalls3w4) {
			previousCalls3w4 = currentCalls3w4;

			const queueText =
				$("#hiddenQsdS3W4 h1").text().trim() ||
				$("#hiddenQsdS3W4").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 3 window 4. ${queueText}, to step 3 window 4.`;
			queue.push({
				message,
				callback: processQueue,
			});
			processQueue();
		} else if (currentCalls4w1 !== previousCalls4w1) {
			previousCalls4w1 = currentCalls4w1;

			const queueText =
				$("#hiddenQsdS4W1 h1").text().trim() ||
				$("#hiddenQsdS4W1").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 4 window 1. ${queueText}, to step 4 window 1.`;
			queue.push({
				message,
				callback: processQueue,
			});
			processQueue();
		} else if (currentCalls4w2 !== previousCalls4w2) {
			previousCalls4w2 = currentCalls4w2;

			const queueText =
				$("#hiddenQsdS4W2 h1").text().trim() ||
				$("#hiddenQsdS4W2").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 4 window 2. ${queueText}, to step 4 window 2.`;
			queue.push({
				message,
				callback: processQueue,
			});
			processQueue();
		} else if (currentCalls4w3 !== previousCalls4w3) {
			previousCalls4w3 = currentCalls4w3;

			const queueText =
				$("#hiddenQsdS4W3 h1").text().trim() ||
				$("#hiddenQsdS4W3").text().trim();
			if (!queueText) return;

			const message = `Client number, ${queueText}. Please proceed to step 4 window 3. ${queueText}, to step 4 window 3.`;
			queue.push({
				message,
				callback: processQueue,
			});
			processQueue();
		}
	}, 500);

	function qsdLoadStepFlowLoop() {
		qsdLoadStepFlow();
	}
	setInterval(qsdLoadStepFlowLoop, 500);
});

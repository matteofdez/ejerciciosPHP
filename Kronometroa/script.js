let elapsedTime = 0, timerInterval = null, timerActive = false;

function formatElapsedTime(time) {
    const hrs = String(Math.floor(time / 3600)).padStart(2, '0');
    const mins = String(Math.floor((time % 3600) / 60)).padStart(2, '0');
    const secs = String(time % 60).padStart(2, '0');
    return `${hrs}:${mins}:${secs}`;
}

function toggleTimer() {
    if (timerActive) {
        clearInterval(timerInterval);
    } else {
        timerInterval = setInterval(() => {
            elapsedTime++;
            document.getElementById('kronoDisplay').textContent = formatElapsedTime(elapsedTime);
        }, 1000);
    }
    timerActive = !timerActive;
}

function clearTimer() {
    clearInterval(timerInterval);
    elapsedTime = 0;
    document.getElementById('kronoDisplay').textContent = "00:00:00";
    timerActive = false;
}

function recordTime() {
    const logDiv = document.getElementById('recordLog');
    const timeEntry = document.createElement('p');
    timeEntry.textContent = formatElapsedTime(elapsedTime);
    logDiv.appendChild(timeEntry);
}

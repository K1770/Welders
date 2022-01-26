var synth = window.speechSynthesis;
var inputForm = document.querySelector('form');


var voices = [];

function populateVoiceList() {
    voices = synth.getVoices().sort(function (a, b) {
        const aname = a.name.toUpperCase(), bname = b.name.toUpperCase();
        if (aname < bname) return -1;
        else if (aname == bname) return 0;
        else return +1;
    });
}

if (speechSynthesis.onvoiceschanged !== undefined) {
    speechSynthesis.onvoiceschanged = populateVoiceList;
}

function speak(btn) {

    if (synth.speaking) {
        console.error('speechSynthesis.speaking');
        return;
    }
    console.log(btn.previousSibling.innerHTML)

    var utterThis = new SpeechSynthesisUtterance(btn.previousSibling.innerHTML);
    utterThis.onend = function (event) {
        console.log('SpeechSynthesisUtterance.onend');
    }
    utterThis.onerror = function (event) {
        console.error('SpeechSynthesisUtterance.onerror');
    }
    console.error(voices);
    console.error(voices[3]);

    utterThis.voice = voices[11]; //gb female en

    utterThis.pitch = 1;
    utterThis.rate = 0.8;
    synth.speak(utterThis);
}

inputForm.onsubmit = function (event) {
    event.preventDefault();
    speak();
}




function handleDriverSelect() {
    var fileInput = document.getElementById('driver');
    var files = fileInput.files;
    var fileNamesInput = document.getElementById('driverName');
    
    var fileNamesTtittle = document.getElementById('driver-name');

    var fileNames = '';
    for (var i = 0; i < files.length; i++) {
        fileNames += files[i].name;
        if (i < files.length - 1) {
            fileNames += ' ';
        }
    }

    fileNamesInput.value = fileNames;

    fileNamesTtittle.textContent = fileNames;
}
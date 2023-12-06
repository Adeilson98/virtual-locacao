function handleFileSelect() {
    var fileInput = document.getElementById('imgDestaque');
    var files = fileInput.files;
    var fileNamesInput = document.getElementById('fileNames');

    var fileNames = '';
    for (var i = 0; i < files.length; i++) {
        fileNames += files[i].name;
        if (i < files.length - 1) {
            fileNames += ' ';
        }
    }

    fileNamesInput.value = fileNames;
}
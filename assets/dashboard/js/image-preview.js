var a = document.getElementById("img");
function readUrl(input){
if(input.files){
    var reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload=(e)=>{
        a.src = e.target.result;
    }
}
}

var inputFile = document.getElementById("imgDestaque");
removeImg=()=>{

    if(a != "http://localhost/virtual-locacao/assets/dashboard/images/image_default.png") {
        a.src="http://localhost/virtual-locacao/assets/dashboard/images/image_default.png"; 
        inputFile.value=""; 
    }
}

// selectImg=()=> {
//     document.querySelector('.img').addEventListener('click', function() {
//         document.querySelector('#imgDestaque').click()
//     })
// }
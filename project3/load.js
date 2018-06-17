function toDataUrl(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        var reader = new FileReader();
        reader.onloadend = function () {
            callback(reader.result);
        };
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.responseType = 'blob';
    xhr.send();
}

window.onload = function () {
    if (localStorage) {

        var img = document.getElementById('myImage');
        if (img) {
            var data = localStorage.getItem('myImage');

            if (data) {
                img.src = data;
            } else {
                toDataUrl("./imgs/LlamaSuit.png", function (base64) {
                        localStorage.setItem("myImage", base64);
                        img.src = base64;
                    }
                )
            }
        }
    }
};
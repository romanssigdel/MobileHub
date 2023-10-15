function loadContent(url) { 
    var target = document.getElementById('content'); 
    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function () { if (xhr.readyState === 4 && xhr.status === 200) { 
    target.innerHTML = xhr.responseText;
    }
    }; 
    xhr.open('GET', url, true); 
    xhr.send(); 
}    
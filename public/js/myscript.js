function addToCart() {
    var id = document.getElementById('productId').value;
    var count = document.getElementById('orderCount').value;
    var token = document.getElementById('csrfToken').value;

    var http = new XMLHttpRequest();
    var url = 'http://127.0.0.1:8000/buy/' + id;
    var params = 'count=' + count + '&_token=' + token;

    console.log(params);

    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {//Call a function when the state changes.
        if (http.readyState == 4 && http.status == 200) {
            alert(http.responseText);
        }
    }
    console.log(params);
    http.send(params);
}

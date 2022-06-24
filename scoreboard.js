function httpGet(theUrl) {
    let xmlHttpReq = new XMLHttpRequest();
    xmlHttpReq.open("GET", theUrl, false);
    xmlHttpReq.send(null);
    return xmlHttpReq.responseText;
}

url = 'https://0257bdb5-433b-4985-8cc1-63693a3df42e.mock.pstmn.io'
var text = httpGet(url)
text = text.slice(1, -1).trim();
var array = text.split(",");

for (var i = 0; i < array.length; i++) {
    array[i] = array[i].replace(/(['"])/g, '');
}

var result = []
var dict = {}
for (var i = 0; i < array.length; i += 3) {
    dict = {
        uid: array[i],
        date: array[i + 1],
        score: array[i + 2]
    }
    result.push(dict);
}

buildTable(result)

function buildTable(data) {
    var table = document.getElementById('myTable')

    var temporary;

    for (var i = 0; i < data.length - 1; i++) {
        for (var j = i + 1; j < data.length; j++) {
            if (data[i].score < data[j].score) {
                temporary = data[i]
                data[i] = data[j]
                data[j] = temporary
            }
        }
    }

    for (var i = 0; i < 3; i++) {
        var row = `<tr>
                        <th class="highlight" scope="row">${i + 1}</th>
                        <td class="highlight">${data[i].uid}</td>
                        <td class="highlight">${data[i].date}</td>
                        <td class="highlight">${data[i].score}</td>
                  </tr>`
        table.innerHTML += row
    }

    for (var i = 3; i < data.length; i++) {
        var row = `<tr>
                        <th scope="row">${i + 1}</th>
                        <td>${data[i].uid}</td>
                        <td>${data[i].date}</td>
                        <td>${data[i].score}</td>
                  </tr>`
        table.innerHTML += row
    }
}

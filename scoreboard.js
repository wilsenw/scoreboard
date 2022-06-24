function httpGet(theUrl) {
    let xmlHttpReq = new XMLHttpRequest();
    xmlHttpReq.open("GET", theUrl, false);
    xmlHttpReq.send(null);
    return xmlHttpReq.responseText;
}

var myArray = httpGet('https://3981233a-b1f4-484b-88f9-518163fd75e9.mock.pstmn.io');

// var myArray = [
//     { 'uid': '1', 'date': '11/10/2021', 'score': '90' },
//     { 'uid': '2', 'date': '03/06/2022', 'score': '75' },
//     { 'uid': '3', 'date': '29/05/2022', 'score': '46' },
//     { 'uid': '4', 'date': '18/05/2022', 'score': '59' },
// ]

buildTable(myArray)

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

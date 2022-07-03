<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="leaderboard.css" />
</head>

<body>
    <div class="home" style="background-image: url(../images/leaderboard-bg.jpg);">
        <div class="position-absolute top-0 start-0 my-5 mx-md-5 mx-3">
            <a href="https://wilsenw.github.io/scoreboard/">Back</a>
        </div>
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.2); height: 100vh; width: 100vw;">
            <div class="container pt-5 text-center ms-md-0 ms-3" style="width: 100vw;">
                <h1>Leaderboard</h1>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <table class="table table-dark table-hover mx-3 mx-lg-5 my-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Score</th>
                        </tr>
                    </thead>

                    <tbody id="myTable">
                        <?php include("score.php");?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</table>
</body>
</html>